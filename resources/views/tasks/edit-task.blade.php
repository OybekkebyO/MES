@extends('layouts.erkinapp')

@section('content')


      <!-- Sidebar Navigation end-->
      <div class="page-content">
        @if(Session::has('update_created'))
          <div class="alert alert-success" role="alert">
            {{ Session::get('update_created') }}
          </div>
        @endif
              <div class="col-lg-12 mt-3">
                <div class="block">
                  <div class="title"><strong>Задача</strong></div>
                  <div class="block-body">
                    <br>
                    <form method="POST" action="{{ route('updateTask') }}">
                              @csrf
                              <input type="hidden" name="id" value="{{ $dataTask->id }}" >
                              <div class="form-group">
                                <label>Название задачи</label>
                                <input type="text" name="task" placeholder="" class="form-control" value="{!! $dataTask->task !!}">
                              </div>
                              <div class="form-group">
                                <label>Описание задачи</label>
                                <textarea class="form-control" name="description" placeholder="" id="floatingTextarea">{!! $dataTask->description !!}</textarea>
                              </div>
                              <div class="form-group">
                                <label>Исполнитель</label>
                                <select name="executor" class="form-control mb-3 mb-3">
                                  <option>{!! $dataTask->executor !!}</option>
                                  @foreach($dataWorkers as $editTask)
                                  <option>{!! $editTask->name !!}</option>
                                  @endforeach
                                </select>
                              </div>
                              <div class="form-group">
                                <label>Срок выполнения</label>
                                <input type="date" name="date" placeholder="" value="{!! $dataTask->date !!}" class="form-control">
                              </div>
                              <div class="form-group">
                                <label>Статус</label>
                                <select name="status" class="form-control mb-3 mb-3">
                                  <option>{!! $dataTask->status !!}</option>
                                  <option>Выполнено</option>
                                </select>
                              </div>
                              <div class="modal-footer">
                            <button type="submit" class="btn btn-primary">Изменить</button>
                          </div>
                    </form>
                  </div>
                </div>
              </div>

@endsection