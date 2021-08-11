@extends('layouts.erkinapp')

@section('content')

<div class="page-content">
    
            <div class="page-header">
          <div class="container-fluid">
            <h2 class="h5 no-margin-bottom">Аналитический отчет</h2>
          </div>
        </div>

        <div class="container mb-2"><h3>Топ клиенты</h3></div>

        <section class="no-padding-bottom">
          <div class="container-fluid">
            <div class="public-user-block block">
              <div class="row d-flex align-items-center">
                <div class="col-lg-4 d-flex align-items-center">
                  <div class="order">1th</div>
                  <div class="avatar"> <img src="public/img/3.jpg" alt="..." class="img-fluid"></div><a href="#" class="name"><strong class="d-block">Ойбек ака</strong><span class="d-block">+99899 833 99 27</span></a>
                </div>
                <div class="col-lg-4 text-center">
                  <div class="contributions">410 заказов</div>
                </div>
                <div class="col-lg-4">
                  <div class="details d-flex">
                    <div class="item"><i class="icon-info"></i><strong>110 (балл) накопительная</strong></div>
                    <div class="item"><i class="fa fa-gg"></i><strong>12 месяцев вместе</strong></div>
                    <div class="item"><i class="icon-flow-branch"></i><strong>50 Остатка товара</strong></div>
                  </div>
                </div>
              </div>
            </div>
            <div class="public-user-block block">
              <div class="row d-flex align-items-center">
                <div class="col-lg-4 d-flex align-items-center">
                  <div class="order">2th</div>
                  <div class="avatar"> <img src="public/img/2.jpg" alt="..." class="img-fluid"></div><a href="#" class="name"><strong class="d-block">Фаррух ака</strong><span class="d-block">+99897 464 32 39</span></a>
                </div>
                <div class="col-lg-4 text-center">
                  <div class="contributions">320 заказов</div>
                </div>
                <div class="col-lg-4">
                  <div class="details d-flex">
                    <div class="item"><i class="icon-info"></i><strong>95 (балл) накопительная</strong></div>
                    <div class="item"><i class="fa fa-gg"></i><strong>15 месяцев вместе</strong></div>
                    <div class="item"><i class="icon-flow-branch"></i><strong>65 Остатка товара</strong></div>
                  </div>
                </div>
              </div>
            </div>
            <div class="public-user-block block">
              <div class="row d-flex align-items-center">
                <div class="col-lg-4 d-flex align-items-center">
                  <div class="order">3th</div>
                  <div class="avatar"> <img src="public/img/1.jpg" alt="..." class="img-fluid"></div><a href="#" class="name"><strong class="d-block">Эркин ака</strong><span class="d-block">+99899 833 99 27</span></a>
                </div>
                <div class="col-lg-4 text-center">
                  <div class="contributions">170 заказов</div>
                </div>
                <div class="col-lg-4">
                  <div class="details d-flex">
                    <div class="item"><i class="icon-info"></i><strong>60 (балл) накопительная</strong></div>
                    <div class="item"><i class="fa fa-gg"></i><strong>9 месяцев вместе</strong></div>
                    <div class="item"><i class="icon-flow-branch"></i><strong>40 остатка товара</strong></div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </section>


        <section>
          <div class="container-fluid">
            <div class="row">
              <div class="col-lg-4">
                <div class="stats-with-chart-2 block">
                  <div class="title"><strong class="d-block">Мы должны</strong><span class="d-block">клиентам</span></div>
                  <div class="piechart chart">
                    <canvas id="pieChartHome1"></canvas>
                    <div class="text"><strong class="d-block">3.255.000(сум)</strong><span class="d-block"></span></div>
                  </div>
                </div>
              </div>
              <div class="col-lg-4">
                <div class="stats-with-chart-2 block">
                  <div class="title"><strong class="d-block">Нам должны</strong><span class="d-block">клиенты</span></div>
                  <div class="piechart chart">
                    <canvas id="pieChartHome2"></canvas>
                    <div class="text"><strong class="d-block">7.955.000(сум)</strong><span class="d-block">Sales</span></div>
                  </div>
                </div>
              </div>
              <div class="col-lg-4">
                <div class="stats-with-chart-2 block">
                  <div class="title"><strong class="d-block">Оборот в месяц</strong><span class="d-block"></span></div>
                  <div class="piechart chart">
                    <canvas id="pieChartHome3"></canvas>
                    <div class="text"><strong class="d-block">$4.000</strong><span class="d-block"></span></div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </section>


    
    
</div>

@endsection