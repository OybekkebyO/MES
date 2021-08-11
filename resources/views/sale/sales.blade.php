@extends('layouts.erkinapp')

@section('content')


      <!-- Sidebar Navigation end-->
      <div class="page-content">
        @if(Session::has('task_created'))
      		<div class="alert alert-success" role="alert">
      			{{ Session::get('remainder_created') }}
      		</div>
      	@endif
      	@if(Session::has('task_deleted'))
      		<div class="alert alert-danger" role="alert">
      			{{ Session::get('remainder_deleted') }}
      		</div>
      	@endif
        <div class="page-header">
          <div class="container-fluid">
            <h2 class="h5 no-margin-bottom">Остаток склада</h2>
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
                            <th>Qrcode</th>
                          <th>Наим-е товара</th>
                          <th>Доп. инфо</th>
                          <th>Категория</th>
                          <th hidden>Картинка</th>
                          <th>Дата</th>
                          <th>Количество</th>
                          <th>Цена 1</th>
                          <th>Цена 2</th>
                          <th>Исполнитель</th>
                          <th>Размеры</th>
                          <th>Действие</th>
                        </tr>
                      </thead>
                      <tbody>
					@foreach($dataRemainder as $remainder)
                        <tr>
                            <td>{!! $remainder->qrcode !!}</td>
                          <td>{!! $remainder->name !!}</td>
                          <td>{!! $remainder->information !!}</td>
                          <td>{!! $remainder->category !!}</td>
                          <td hidden><img src="{{asset('/storage/app/public')}}/{{$remainder->img}}" style="height: 100px; width: 100px;"></td>
                          <td>{!! $remainder->date !!}</td>
                          <td>{!! $remainder->quantity !!}</td>
                          <td>{!! $remainder->price !!}</td>
                          <td>{!! $remainder->price1 !!}</td>
                          <td>{!! $remainder->executer !!}</td>
                          <td><p>
                              <a class="btn btn-primary" data-bs-toggle="collapse" href="#collapseExample" role="button" aria-expanded="false" aria-controls="collapseExample">
                                Размеры
                              </a>
                              <br>
                            </p>
                            <div class="collapse" id="collapseExample">
                              <div class="mt-5">
                                <p>Размер S - {!! $remainder->quantity_s !!} шт. </p>
                                <p>Размер M - {!! $remainder->quantity_m !!} шт. </p>
                                <p>Размер L - {!! $remainder->quantity_l !!} шт. </p>
                                <p>Размер XL - {!! $remainder->quantity_xl !!} шт. </p>
                                <p>Размер XXL - {!! $remainder->quantity_xxl !!} шт. </p>
                                <p>Размер XXXL - {!! $remainder->quantity_xxxl !!} шт. </p>
                                <p>Размер 4XL - {!! $remainder->quantity_4xl !!} шт. </p>
                                <p>Размер 5Xl - {!! $remainder->quantity_5xl !!} шт. </p>
                                <p>Размер 6Xl - {!! $remainder->quantity_6xl !!} шт. </p>
                              </div>
                            </div></td>
                          <td>
                          	<a href="/remainder/{{$remainder->id}}" class="btn btn-info">Просмотр</a>
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