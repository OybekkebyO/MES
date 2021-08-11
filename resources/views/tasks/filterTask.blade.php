@extends('layouts.erkinapp')

@section('content')


      <!-- Sidebar Navigation end-->
      <div class="page-content">

        <div class="page-header">
          <div class="container-fluid">
            <h2 class="h5 no-margin-bottom">Задачи</h2>
          </div>
        </div>




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
                    @foreach($tasks as $filterTask)
                        <tr>
                          <td style="color: yellow;">{!! $filterTask->author !!}</td>
                          <td>{!! $filterTask->task !!}</td>
                          <td>{!! $filterTask->description !!}</td>
                          <td style="color: white;">{!! $filterTask->executor !!}</td>
                          <td>до: {!! $filterTask->date !!}</td>
                          <td style="color: white;">{!! $filterTask->status !!}</td>
                          <td>
                            <a href="/task/{{$filterTask->id}}" class="btn btn-info">Просмотр</a>
                            <a href="/edit-task/{{$filterTask->id}}" class="btn btn-success">Изменить</a>
                            <a href="/delete-task/{{$filterTask->id}}" class="btn btn-danger">Удалить</a>
                          </td>
                        </tr>
                    @endforeach

                      </tbody>
                    </table>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </section>



@endsection