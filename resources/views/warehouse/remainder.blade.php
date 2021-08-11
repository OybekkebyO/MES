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
        <div class="m-2">
            <p>Остаток склада</p>
        </div>
        <div class="container-fluid">
          <button type="button" data-toggle="modal" data-target="#myModal2" class="btn btn-primary ml-2"><i class="fa fa-filter" aria-hidden="true"></i> Фильтр </button>
        </div>

                      <!-- Modal2-->
                    <div id="myModal2" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true" class="modal fade text-left">
                      <div role="document" class="modal-dialog">
                        <div class="modal-content">
                          <div class="modal-header"><strong id="exampleModalLabel" class="modal-title">Фильтр</strong>
                            <button type="button" data-dismiss="modal" aria-label="Close" class="close"><span aria-hidden="true">×</span></button>
                          </div>
                          <div class="modal-body">
                            <form method="POST" action="{{ route('filterRemainder') }}">
                              @csrf

                              <div class="form-group">
                                <label>по QrCode and BarCode</label>
                                <input type="text" name="qrcode" placeholder="" class="form-control">
                              </div>
                              <div class="form-group">
                                <label>Название</label>
                                <input type="text" name="name" placeholder="" class="form-control">
                              </div>
                              <div class="form-group">
                                <label>Категория товара</label>
                                <select name="category" class="form-control">
                                  <option></option>
                                  @foreach($dataCategory as $coming)
                                  <option>{!! $coming->name !!}</option>
                                  @endforeach
                                </select>
                              </div>
                              <div class="form-group">
                                <label>Исполнитель</label>
                                <select name="executer" class="form-control">
                                  <option></option>
                                  @foreach($dataWorkers as $coming)
                                  <option>{!! $coming->name !!}</option>
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
                  <div class="title">Таблица остатка</div>
                  <div class="table-responsive">
                    <table class="table">
                      <thead>
                        <tr>
                            <th>Qrcode</th>
                          <th>Наим-е товара</th>
                          <th>Доп. инфо</th>
                          <th>Категория</th>
                          <th>Картинка</th>
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
                          <td><img src="{{asset('images')}}/{{$remainder->img}}" style="height: 75px; width: 75px;"></td>
                          <td>{!! $remainder->date !!}</td>
                          <td>{!! $remainder->quantity !!}</td>
                          <td>{!! $remainder->price !!}</td>
                          <td>{!! $remainder->price1 !!}</td>
                          <td>{!! $remainder->executer !!}</td>
                          <td>
                            <p>
                              <a class="btn btn-primary" data-bs-toggle="collapse" href="#collapseExample{{ $remainder->id }}" role="button" aria-expanded="false" aria-controls="collapseExample">
                                Размеры
                              </a>
                              <br>
                            </p>
                            <div class="collapse" id="collapseExample{{ $remainder->id }}">
                              <div class="mt-5">
                                <p>S - {!! $remainder->quantity_s !!} шт. </p>
                                <p>M - {!! $remainder->quantity_m !!} шт. </p>
                                <p>L - {!! $remainder->quantity_l !!} шт. </p>
                                <p>XL - {!! $remainder->quantity_xl !!} шт. </p>
                                <p>XXL - {!! $remainder->quantity_xxl !!} шт. </p>
                                <p>XXXL - {!! $remainder->quantity_xxxl !!} шт. </p>
                                <p>4XL - {!! $remainder->quantity_4xl !!} шт. </p>
                                <p>5Xl - {!! $remainder->quantity_5xl !!} шт. </p>
                                <p>6Xl - {!! $remainder->quantity_6xl !!} шт. </p>
                              </div>
                            </div>
                          </td>
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
              {!! $dataRemainder->appends(['sort' => 'department'])->links() !!}
            </div>
          </div>
        </section>

@endsection


