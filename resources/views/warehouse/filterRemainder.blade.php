@extends('layouts.erkinapp')

@section('content')


      <!-- Sidebar Navigation end-->
      <div class="page-content">
        <div class="m-2">
            <p>Остаток склада</p>
        </div>

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
					@foreach($coming as $comings)
                        <tr>
                            <td>{!! $comings->qrcode !!}</td>
                          <td>{!! $comings->name !!}</td>
                          <td>{!! $comings->information !!}</td>
                          <td>{!! $comings->category !!}</td>
                          <td><img src="{{asset('images')}}/{{$comings->img}}" style="height: 75px; width: 75px;"></td>
                          <td>{!! $comings->date !!}</td>
                          <td>{!! $comings->quantity !!}</td>
                          <td>{!! $comings->price !!}</td>
                          <td>{!! $comings->price1 !!}</td>
                          <td>{!! $comings->executer !!}</td>
                          <td>
                            <p>
                              <a class="btn btn-primary" data-bs-toggle="collapse" href="#collapseExample{{ $comings->id }}" role="button" aria-expanded="false" aria-controls="collapseExample">
                                Размеры
                              </a>
                              <br>
                            </p>
                            <div class="collapse" id="collapseExample{{ $comings->id }}">
                              <div class="mt-5">
                                <p>S - {!! $comings->quantity_s !!} шт. </p>
                                <p>M - {!! $comings->quantity_m !!} шт. </p>
                                <p>L - {!! $comings->quantity_l !!} шт. </p>
                                <p>XL - {!! $comings->quantity_xl !!} шт. </p>
                                <p>XXL - {!! $comings->quantity_xxl !!} шт. </p>
                                <p>XXXL - {!! $comings->quantity_xxxl !!} шт. </p>
                                <p>4XL - {!! $comings->quantity_4xl !!} шт. </p>
                                <p>5Xl - {!! $comings->quantity_5xl !!} шт. </p>
                                <p>6Xl - {!! $comings->quantity_6xl !!} шт. </p>
                              </div>
                            </div>
                          </td>
                          <td>
                          	<a href="/remainder/{{$comings->id}}" class="btn btn-info">Просмотр</a>
                          </td>
                        </tr>
                    @endforeach
                      </tbody>
                    </table>
                  </div>
         </div>
              </div>
              {!! $coming->appends(['sort' => 'department'])->links() !!}
            </div>
          </div>
        </section>

@endsection


