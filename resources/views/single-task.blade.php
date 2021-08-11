@extends('layouts.erkinapp')

@section('content')


      <!-- Sidebar Navigation end-->
      <div class="page-content">

              <div class="col-lg-12 mt-3">
                <div class="block">
                  <div class="title"><strong>Задача</strong></div>
                  <div class="block-body">
                    <br>
                      <div class="border mt-3 p-3">
                        <p><strong class="text-primary">Автор</strong></p><hr>
                        <h5>{!! $dataTask->author !!}</h5>
                      </div>
                      <div class="border mt-3 p-3">
                        <p><strong class="text-primary">Задача</strong></p><hr>
                      <h5>{!! $dataTask->task !!}</h5>
                      </div>
                      <div class="border mt-3 p-3">
                        <p><strong class="text-primary">Описание</strong></p><hr>
                      <h5>{!! $dataTask->description !!}</h5>
                      </div>
                      <div class="border mt-3 p-3">
                        <p><strong class="text-primary">Исполнитель</strong></p><hr>
                      <h5>{!! $dataTask->executor !!}</h5>
                      </div>
                      <div class="border mt-3 p-3">
                        <p><strong class="text-primary">Время выполнения</strong></p><hr>
                      <h5>до: {!! $dataTask->date !!}</h5>
                      </div>
                      <div class="border mt-3 p-3">
                        <p><strong class="text-primary">Статус</strong></p><hr>
                      <h5 style="color: white;">{!! $dataTask->status !!}</h5>
                      </div>
                  </div>
                </div>
              </div>

@endsection