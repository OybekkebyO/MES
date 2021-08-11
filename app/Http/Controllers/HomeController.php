<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Task;
use App\Worker;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */

    public function main()
    {
        $dataTask = Task::paginate(20);
        $dataWorkers = Worker::all();
        return view('tasks.main', compact('dataTask', 'dataWorkers'));
    }

    public function createTask(Request $request)
    {
        $task = new Task();
        $task->task = $request->task;
        $task->description = $request->description;
        $task->executor = $request->executor;
        $task->date = $request->date;
        $task->save();

        return back()->with('task_created','Успешно добавлено');

    }

    public function getTaskById($id)
    {
        $dataTask = Task::where('id',$id)->first();
        return view('tasks.single-task', compact('dataTask'));
    }

    public function deleteTask($id)
    {
        $dataTask = Task::where('id',$id)->delete();
        return back()->with('task_deleted','Запись удалено');
    }

    public function editTask($id)
    {
        $dataTask = Task::find($id);
        $dataWorkers = Worker::all();
        return view('tasks.edit-task',compact('dataTask', 'dataWorkers'));
    }

    public function updateTask(Request $request)
    {
        $task = Task::find($request->id);
        $task->task = $request->task;
        $task->description = $request->description;
        $task->executor = $request->executor;
        $task->date = $request->date;
        $task->status = $request->status;
        $task->save();

        return back()->with('update_created','Запись было успешно изменено');
    }



        public function filterTask(Request $request)
    {

        $tasks = Task::with('task');

        if ($request->has('task')){
            $tasks->where('task', 'like', "%$request->task%");
        }

        if ($request->has('status')){
            $tasks->where('status', 'like', "%$request->status%");
        }

        if ($request->has('executor')){
            $tasks->where('executor', 'like', "%$request->executor%");
        }

        if ($request->has('date')){
            $tasks->where('date', 'like', "%$request->date%");
        }

        $tasks = $tasks->paginate(20);

        return view('tasks.filterTask',compact('tasks'));
    }


    public function index()
    {
        return view('home');
    }
}
