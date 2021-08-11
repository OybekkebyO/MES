<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Coming;
use App\Sale;
use App\Worker;
use App\Categoory;

class ComingController extends Controller
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
     

    public function coming()
    {
        $comings = Coming::all();
    	$dataCategory = Categoory::all();
    	$dataWorkers = Worker::all();
        return view('warehouse.coming', compact('dataCategory', 'dataWorkers', 'comings'));
    }

    public function createComing(Request $request)
    {
        $img = $request->file('img');
        $imgName = time().'.'.$img->extension();
        $img->move(public_path('images'),$imgName);

        $coming = new Coming();
        $coming->qrcode = $request->qrcode;
        $coming->name = $request->name;
        $coming->category = $request->category;
        $coming->img = $imgName;
        $coming->date = $request->date;
        $coming->quantity = $request->quantity;
        $coming->price = $request->price;
        $coming->price1 = $request->price1;
        $coming->executer = $request->executer;
        $coming->information = $request->information;
        $coming->name_s = $request->name_s;
		$coming->name_m = $request->name_m;
		$coming->name_l = $request->name_l;
		$coming->name_xl = $request->name_xl;
		$coming->name_xxl = $request->name_xxl;
		$coming->name_xxxl = $request->name_xxxl;
		$coming->name_4xl = $request->name_4xl;
		$coming->name_5xl = $request->name_5xl;
		$coming->name_6xl = $request->name_6xl;
		$coming->quantity_s = $request->quantity_s;
		$coming->quantity_m = $request->quantity_m;
		$coming->quantity_l = $request->quantity_l;
		$coming->quantity_xl = $request->quantity_xl;
		$coming->quantity_xxl = $request->quantity_xxl;
		$coming->quantity_xxxl = $request->quantity_xxxl;
		$coming->quantity_4xl = $request->quantity_4xl;
		$coming->quantity_5xl = $request->quantity_5xl;
		$coming->quantity_6xl = $request->quantity_6xl;
        $coming->save();
        return back()->with('coming_created','Успешно добавлено');

    }

    public function editComing(Request $request)
    {
        $coming = Coming::find($request->id);
        $coming->quantity = $coming->quantity + $request->quantity;
        $coming->quantity_s = $coming->quantity_s + $request->quantity_s;
        $coming->quantity_m = $coming->quantity_m + $request->quantity_m;
        $coming->quantity_l = $coming->quantity_l + $request->quantity_l;
        $coming->quantity_xl = $coming->quantity_xl + $request->quantity_xl;
        $coming->quantity_xxl = $coming->quantity_xxl + $request->quantity_xxl;
        $coming->quantity_xxxl = $coming->quantity_xxxl + $request->quantity_xxxl;
        $coming->quantity_4xl = $coming->quantity_4xl + $request->quantity_4xl;
        $coming->quantity_5xl = $coming->quantity_5xl + $request->quantity_5xl;
        $coming->quantity_6xl = $coming->quantity_6xl + $request->quantity_6xl;
        $coming->save();

        return back()->with('update_created','Запись было успешно изменено');
    }


    
     public function scanComing(Request $request)
    {
        $comings = Coming::where('qrcode', '=', $request->input('firstQrcode'))->first();

        if ($comings === null) {
            
            $dataCategory = Categoory::all();
        $dataWorkers = Worker::all();
          return view('warehouse.oldScanQrcode',compact('dataCategory', 'dataWorkers'));
        } else {
        
        $comings = Coming::where('qrcode', '=', $request->input('firstQrcode'))->get();
        $dataCategory = Categoory::all();
        $dataWorkers = Worker::all();

        return view('warehouse.scanQrcode',compact('comings', 'dataCategory', 'dataWorkers'));
        }

    }
    
    
    public function search (Request $request)
        {
        $query = $request->qrcode;
        $comings = Coming::where('qrcode', 'like', '%'.$request->qrcode.'%')->first();
        $comongs = $comings->get();
        return response()->json($comings);
        }


    public function remainder()
    {
        $dataWorkers = Worker::all();
        $dataCategory = Categoory::all();
    	$dataRemainder = Coming::latest()->paginate(20);
        return view('warehouse.remainder', compact('dataRemainder', 'dataCategory', 'dataWorkers'));
    }

    public function filterRemainder(Request $request)
    {

        $coming = Coming::with('coming');

        if ($request->has('qrcode')){
            $coming->where('qrcode', 'like', "%$request->qrcode%");
        }

        if ($request->has('name')){
            $coming->where('name', 'like', "%$request->name%");
        }

        if ($request->has('category')){
            $coming->where('category', 'like', "%$request->category%");
        }

        if ($request->has('executer')){
            $coming->where('executer', 'like', "%$request->executer%");
        }

        if ($request->has('date')){
            $coming->where('date', 'like', "%$request->date%");
        }

        $coming = $coming->paginate(20);

        return view('warehouse.filterRemainder',compact('coming'));
    }
    
        public function getRemainderById($id)
    {
        $dataRemainder = Coming::where('id',$id)->first();
        return view('warehouse.single-coming', compact('dataRemainder'));
    }
    
        public function saleComing(Request $request)
    {
        $sale = new Sale();
        $sale->qrcode = $request->qrcode;
        $sale->name = $request->name;
        $sale->category = $request->category;
        $sale->img = $request->img;
        $sale->date = $request->date;
        $sale->quantity = $request->quantity;
        $sale->price = $request->price;
        $sale->price1 = $request->price1;
        $sale->executer = $request->executer;
        $sale->information = $request->information;
        $sale->name_s = $request->name_s;
		$sale->name_m = $request->name_m;
		$sale->name_l = $request->name_l;
		$sale->name_xl = $request->name_xl;
		$sale->name_xxl = $request->name_xxl;
		$sale->name_xxxl = $request->name_xxxl;
		$sale->name_4xl = $request->name_4xl;
		$sale->name_5xl = $request->name_5xl;
		$sale->name_6xl = $request->name_6xl;
		$sale->quantity_s = $request->quantity_s;
		$sale->quantity_m = $request->quantity_m;
		$sale->quantity_l = $request->quantity_l;
		$sale->quantity_xl = $request->quantity_xl;
		$sale->quantity_xxl = $request->quantity_xxl;
		$sale->quantity_xxxl = $request->quantity_xxxl;
		$sale->quantity_4xl = $request->quantity_4xl;
		$sale->quantity_5xl = $request->quantity_5xl;
		$sale->quantity_6xl = $request->quantity_6xl;
        $sale->save();
        return back()->with('sales_created','Продано');

    }

    
        public function qrcode()
    {
        return view('qrcode');
    }
    
    public function client()
    {
        return view('clients.clients');
    }
    
    public function analitika()
    {
        return view('analitika.analitika');
    }
    
    public function analitikaOtchet()
    {
        return view('analitika.analitikaotchet');
    }
}
