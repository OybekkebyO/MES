@extends('layouts.erkinapp')

@section('content')

<div class="page-content">
    
    

        <div class="page-header">
          <div class="container-fluid">
            <h2 class="h5 no-margin-bottom">Показатели</h2>
          </div>
        </div>

        <section class="no-padding-bottom">
          <div class="container-fluid">
            <div class="row">
              <div class="col-lg-4">
                <div class="bar-chart block no-margin-bottom">
                  <canvas id="barChartExample1"></canvas>
                </div>
                <div class="bar-chart block">
                  <canvas id="barChartExample2"></canvas>
                </div>
              </div>
              <div class="col-lg-8">
                <div class="line-cahrt block">
                  <canvas id="lineCahrt"></canvas>
                </div>
              </div>
            </div>
          </div>
        </section>
        <section class="no-padding-bottom">
          <div class="container-fluid">
            <div class="row">
              <div class="col-lg-6">
                <div class="stats-2-block block d-flex">
                  <div class="stats-2 d-flex">
                    <div class="stats-2-arrow low"><i class="fa fa-caret-down"></i></div>
                    <div class="stats-2-content"><strong class="d-block">35 000 000 (сум)</strong><span class="d-block">Расход</span>
                      <div class="progress progress-template progress-small">
                        <div role="progressbar" style="width: 100%;" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100" class="progress-bar progress-bar-template progress-bar-small dashbg-2"></div>
                      </div>
                    </div>
                  </div>
                  <div class="stats-2 d-flex">
                    <div class="stats-2-arrow height"><i class="fa fa-caret-up"></i></div>
                    <div class="stats-2-content"><strong class="d-block">72 000 000 (сум)</strong><span class="d-block">Приход</span>
                      <div class="progress progress-template progress-small">
                        <div role="progressbar" style="width: 100%;" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100" class="progress-bar progress-bar-template progress-bar-small dashbg-3"></div>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="stats-3-block block d-flex">
                  <div class="stats-3"><strong class="d-block">745</strong><span class="d-block">Заказы</span>
                    <div class="progress progress-template progress-small">
                      <div role="progressbar" style="width: 100%;" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100" class="progress-bar progress-bar-template progress-bar-small dashbg-1"></div>
                    </div>
                  </div>
                  <div class="stats-3 d-flex justify-content-between text-center">
                    <div class="item"><strong class="d-block strong-sm">525</strong><span class="d-block span-sm">Выполнено</span>
                      <div class="line"></div>
                    </div>
                    <div class="item"><strong class="d-block strong-sm">62</strong><span class="d-block span-sm">Не выполнено</span>
                      <div class="line"></div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="col-lg-6">
                <div class="drills-chart block">
                  <canvas id="lineChart1"></canvas>
                </div>
              </div>
            </div>
          </div>
        </section>





    
    
</div>

@endsection