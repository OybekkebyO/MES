@extends('layouts.erkinapp')

@section('content')


      <!-- Sidebar Navigation end-->
      <div class="page-content">
        @if(Session::has('task_created'))
      		<div class="alert alert-success" role="alert">
      			{{ Session::get('task_created') }}
      		</div>
      	@endif
      	@if(Session::has('task_deleted'))
      		<div class="alert alert-danger" role="alert">
      			{{ Session::get('task_deleted') }}
      		</div>
      	@endif
        <div class="page-header">
          <div class="container-fluid">
            <h2 class="h5 no-margin-bottom">Задачи</h2>
          </div>
        </div>


              <!-- Modal Form-->
        <div class="container-fluid">
          <button type="button" data-toggle="modal" data-target="#myModal" class="btn btn-primary"><i class="fa fa-plus" aria-hidden="true"></i> Новая задача </button>
          <button type="button" data-toggle="modal" data-target="#myModal2" class="btn btn-primary ml-2"><i class="fa fa-filter" aria-hidden="true"></i> Фильтр </button>
        </div>
                    <!-- Modal-->
                    <div id="myModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true" class="modal fade text-left">
                      <div role="document" class="modal-dialog">
                        <div class="modal-content">
                          <div class="modal-header"><strong id="exampleModalLabel" class="modal-title">Задачи</strong>
                            <button type="button" data-dismiss="modal" aria-label="Close" class="close"><span aria-hidden="true">×</span></button>
                          </div>
                          <div class="modal-body">
                            <form method="POST" action="{{ route('createTask') }}">
                            	@csrf
                              <div class="form-group">
                                <label>Название задачи</label>
                                <input type="text" name="task" placeholder="" class="form-control">
                              </div>
                              <div class="form-group">
                                <label>Описание задачи</label>
                                <textarea class="form-control" name="description" placeholder="" id="floatingTextarea"></textarea>
                              </div>
                              <div class="form-group">
                                <label>Исполнитель</label>
                                <select name="executor"  class="form-control mb-3 mb-3">
                                  @foreach($dataWorkers as $main)
                                  <option>{!! $main->name !!}</option>
                                  @endforeach
                                </select>
                              </div>
                              <div class="form-group">
                                <label>Срок выполнения</label>
                                <input type="date" name="date" placeholder="" class="form-control">
                              </div>
                              <div class="modal-footer">
                            <button type="submit" class="btn btn-primary">Сохранить</button>
                          </div>
                            </form>

                          </div>
                        </div>
                      </div>
                    </div>
                    <!-- Modal-->

                    <!-- Modal2-->
                    <div id="myModal2" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true" class="modal fade text-left">
                      <div role="document" class="modal-dialog">
                        <div class="modal-content">
                          <div class="modal-header"><strong id="exampleModalLabel" class="modal-title">Фильтр</strong>
                            <button type="button" data-dismiss="modal" aria-label="Close" class="close"><span aria-hidden="true">×</span></button>
                          </div>
                          <div class="modal-body">
                            <form method="POST" action="{{ route('filterTask') }}">
                              @csrf

                              <div class="form-group">
                                <label>Название задачи</label>
                                <input type="text" name="task" placeholder="" class="form-control">
                              </div>
                               <div class="form-group">
                                <label>Статус</label>
                                <select name="status" class="form-control mb-3 mb-3">
                                  <option></option>
                                  <option>Готова</option>
                                  <option>Не выполнено</option>
                                </select>
                              </div>
                              <div class="form-group">
                                <label>Исполнитель</label>
                                <select name="executor" class="form-control mb-3 mb-3">
                                 <option></option>
                                 @foreach($dataWorkers as $main)
                                  <option>{!! $main->name !!}</option>
                                  @endforeach
                                </select>
                              </div>
                              <div class="form-group">
                                <label>По дате</label>
                                <input type="date" name="date" placeholder="" class="form-control">
                              </div>
                              <div class="modal-footer">
                            <button type="submit" class="btn btn-primary">Фильтр</button>
                          </div>
                            </form>
                          </div>
                        </div>
                      </div>
                    </div>
                    <!-- Modal2-->

        <section class="no-padding-top mt-3">
          <div class="container-fluid">
            <div class="row">
              <div class="col-lg-12">
                <div class="block margin-bottom-sm">
                  <div class="title"><strong>Таблица задач</strong></div>
                  <div class="table-responsive">
                    <table class="table">
                      <thead>
                        <tr>
                          <th>Автор</th>
                          <th>Задача</th>
                          <th>Описание</th>
                          <th>Исполнитель</th>
                          <th>Время выполнения</th>
                          <th>Статус</th>
                          <th>Действие</th>
                        </tr>
                      </thead>
                      <tbody>
					@foreach($dataTask as $main)
                        <tr>
                          <td style="color: yellow;">{!! $main->author !!}</td>
                          <td>{!! $main->task !!}</td>
                          <td>{!! $main->description !!}</td>
                          <td style="color: white;">{!! $main->executor !!}</td>
                          <td>до: {!! $main->date !!}</td>
                          <td style="color: white;">{!! $main->status !!}</td>
                          <td>
                          	<a href="/task/{{$main->id}}" class="btn btn-info">Просмотр</a>
                          	<a href="/edit-task/{{$main->id}}" class="btn btn-success">Изменить</a>
                          	<a href="/delete-task/{{$main->id}}" class="btn btn-danger">Удалить</a>
                          </td>
                        </tr>
                    @endforeach
                      </tbody>
                    </table>
                  </div>



                  {{ $dataTask->links('paginate') }}
                </div>
              </div>
            </div>
          </div>
        </section>


@endsection