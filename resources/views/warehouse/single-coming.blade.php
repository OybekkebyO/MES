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

              <div class="col-md-4">
                <div class="mt-3 p-3 justify-content-center">
                    <p><strong class="text-primary">Картинка</strong></p>
                    <img src="{{asset('images')}}/{{$dataRemainder->img}}" style="height: 300px; width: 300px;" class="justify-content-center">
                  </div>
              </div>


              <div class="col-md-8">
                <div class="pl-2 pt-2">
                        <p class="text-primary">Qr-code</p>
                      <p>{!! $dataRemainder->qrcode !!}</p>
                      </div><hr>
                    <div class="pl-2 pt-2">
                        <p class="text-primary">Наименование товара</p>
                        <p>{!! $dataRemainder->name !!}</p>
                      </div><hr>

                      <div class="pl-2 pt-2">
                        <p class="text-primary">Дополнительная информация</p>
                      <p>{!! $dataRemainder->information !!}</p>
                      </div><hr>

                      <div class="pl-2 pt-2">
                        <p class="text-primary">Категория</p>
                      <p>{!! $dataRemainder->category !!}</p>
                      </div><hr>
              </div>

                    <div class="col-md-12 mb-3">

                      <div class="pl-2 pt-2">
                        <p class="text-primary">Дата</p>
                      <p>{!! $dataRemainder->date !!}</p>
                      </div><hr>

                      <div class="pl-2 pt-2">
                        <p class="text-primary">Количество</p>
                      <p>{!! $dataRemainder->quantity !!}</p>
                      </div><hr>
                      
                      <div class="pl-2 pt-2">
                        <p class="text-primary">Цена</p>
                      <p>{!! $dataRemainder->price !!}</p>
                      </div><hr>
                      
                      <div class="pl-2 pt-2">
                        <p class="text-primary">Цена1</p>
                      <p>{!! $dataRemainder->price1 !!}</p>
                      </div><hr>
                      
                      <div class="pl-2 pt-2">
                        <p class="text-primary">Исполнитель</p>
                      <p>{!! $dataRemainder->executer !!}</p>
                      </div><hr>
                      
                      <div class="pl-2 pt-2">
                        <p class="text-primary">Размеры</p>
                        <a class="btn btn-primary" data-bs-toggle="collapse" href="#collapseExample" role="button" aria-expanded="false" aria-controls="collapseExample">
                                Размеры
                              </a>
                        <div class="collapse mt-2" id="collapseExample">
                              <div class="">
                                <p>Размер S - {!! $dataRemainder->quantity_s !!} шт. </p>
                                <p>Размер M - {!! $dataRemainder->quantity_m !!} шт. </p>
                                <p>Размер L - {!! $dataRemainder->quantity_l !!} шт. </p>
                                <p>Размер XL - {!! $dataRemainder->quantity_xl !!} шт. </p>
                                <p>Размер XXL - {!! $dataRemainder->quantity_xxl !!} шт. </p>
                                <p>Размер XXXL - {!! $dataRemainder->quantity_xxxl !!} шт. </p>
                                <p>Размер 4XL - {!! $dataRemainder->quantity_4xl !!} шт. </p>
                                <p>Размер 5Xl - {!! $dataRemainder->quantity_5xl !!} шт. </p>
                                <p>Размер 6Xl - {!! $dataRemainder->quantity_6xl !!} шт. </p>
                              </div>
                            </div>
                      </div>
                    </div>

            </div>
          </div>
        </section>

@endsection