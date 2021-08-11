<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Pro-shop.uz</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="robots" content="all,follow">
    
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
    
    <link rel="stylesheet" href="{{asset ('css/style.css') }}">
    <!-- Bootstrap CSS-->
    <link rel="stylesheet" href="{{asset ('vendor/bootstrap/css/bootstrap.min.css') }}">
    <!-- Font Awesome CSS-->
    <link rel="stylesheet" href="{{asset ('vendor/font-awesome/css/font-awesome.min.css') }}">
    <!-- Custom Font Icons CSS-->
    <link rel="stylesheet" href="{{asset ('css/font.css') }}">
    <!-- Google fonts - Muli-->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Muli:300,400,700">
    <!-- theme stylesheet-->
    <link rel="stylesheet" href="{{asset ('css/style.default.css') }}" id="theme-stylesheet">
    <!-- Custom stylesheet - for your changes-->
    <link rel="stylesheet" href="{{asset ('css/custom.css') }}">
    <!-- Favicon-->
    <link rel="shortcut icon" href="">
    <!-- Tweaks for older IEs--><!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
        <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script><![endif]-->


<script type="text/javascript" src="https://rawgit.com/schmich/instascan-builds/master/instascan.min.js"></script>


<script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>

  </head>
  <body>
    <header class="header">
      <nav class="navbar navbar-expand-lg">
        <div class="container-fluid d-flex align-items-center justify-content-between">
          <div class="navbar-header">
            <!-- Navbar Header--><a href="{{ route('main') }}" class="navbar-brand">
              <div class="brand-text brand-big visible text-uppercase"><strong class="text-primary">Pro</strong><strong>-shop</strong></div>
              <div class="brand-text brand-sm"><strong class="text-primary">P</strong><strong>S</strong></div></a>
            <!-- Sidebar Toggle Btn-->
            <button class="sidebar-toggle"><i class="fa fa-long-arrow-left"></i></button>
          </div>

          <div class="right-menu list-inline no-margin-bottom">

            <!-- Tasks-->
            <div class="list-inline-item dropdown"><a id="navbarDropdownMenuLink2" href="#" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" class="nav-link tasks-toggle"><i class="icon-new-file"></i> Краткий отчет</a>
              <div aria-labelledby="navbarDropdownMenuLink2" class="dropdown-menu tasks-list">

                <a href="#" class="dropdown-item">
                  <div class="text d-flex justify-content-between"><strong>Заказы</strong><span>10</span></div>
                  <div class="progress">
                    <div role="progressbar" style="width: 100%" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100" class="progress-bar dashbg-3"></div>
                  </div></a>

                <a href="#" class="dropdown-item">
                  <div class="text d-flex justify-content-between"><strong>Остаток</strong><span>3 256 шт.</span></div>
                  <div class="progress">
                    <div role="progressbar" style="width: 100%" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100" class="progress-bar dashbg-3"></div>
                  </div></a>

                  <a href="#" class="dropdown-item">
                  <div class="text d-flex justify-content-between"><strong>Продажа</strong><span>5 600 000 сум</span></div>
                  <div class="progress">
                    <div role="progressbar" style="width: 100%" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100" class="progress-bar dashbg-3"></div>
                  </div></a>

                  <a href="#" class="dropdown-item">
                  <div class="text d-flex justify-content-between"><strong>Аналитика (прыбиль)</strong><span><i class="fa fa-long-arrow-up" aria-hidden="true"></i> 13%</span></div>
                  <div class="progress">
                    <div role="progressbar" style="width: 100%" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100" class="progress-bar dashbg-3"></div>
                  </div></a>

              </div>
            </div>
            <!-- Tasks end-->
            <!-- Log out               -->
            <div class="list-inline-item logout">            <ul class="navbar-nav ml-auto">
                        <!-- Authentication Links -->
                        @guest
                            @if (Route::has('login'))
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                                </li>
                            @endif

                            @if (Route::has('register'))
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                                </li>
                            @endif
                        @else
                            <li class="nav-item dropdown">
                                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    {{ Auth::user()->name }}
                                </a>

                                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        Выйти <i class="icon-logout"></i>
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                        @csrf
                                    </form>
                                </div>
                            </li>
                        @endguest
                    </ul></div>
          </div>
        </div>
      </nav>
    </header>
    <div class="d-flex align-items-stretch">
      <!-- Sidebar Navigation-->
      <nav id="sidebar">
        <!-- Sidebar Header-->
        <div class="sidebar-header d-flex align-items-center">
          <div class="title">
            <h1 class="h5"><i class="fa fa-user-o" aria-hidden="true"></i> Erkin</h1>
            <p>Владелец</p>
          </div>
        </div>
        <!-- Sidebar Navidation Menus-->
        <ul class="list-unstyled">
          <li><a href="{{ route('main') }}"> <i class="fa fa-tasks"></i>Задачи</a></li>
          <li><a href="{{ route('sale') }}"> <i class="fa fa-shopping-cart"></i>Продажи </a></li>
          <li><a href="#exampledropdownDropdown" aria-expanded="false" data-toggle="collapse"> <i class="fa fa-usd"></i>Финансы </a>
            <ul id="exampledropdownDropdown" class="collapse list-unstyled ">
              <li><a href="payments.html">Расход</a></li>
              <li><a href="settlements.html">Приход</a></li>
            </ul>
          </li>
          <li><a href="#exampledropdownDropdown1" aria-expanded="false" data-toggle="collapse"> <i class="fa fa-sitemap"></i>Склад</a>
            <ul id="exampledropdownDropdown1" class="collapse list-unstyled ">
              <li><a href="{{ route('remainder') }}">Остатки</a></li>
              <li><a href="{{ route('coming') }}">Приход</a></li>
            </ul>
          </li>
          <li><a href="{{ route('client') }}"> <i class="fa fa-users"></i>Клиенты </a></li>
          <li><a href="#exampledropdownDropdown2" aria-expanded="false" data-toggle="collapse"> <i class="fa fa-line-chart"></i>Аналитика</a>
            <ul id="exampledropdownDropdown2" class="collapse list-unstyled ">
              <li><a href="{{ route('analitika') }}">Показатели</a></li>
              <li><a href="{{ route('analitikaOtchet') }}">Аналитический отчет</a></li>
            </ul>
          </li>
          <li><a href="#exampledropdownDropdown3" aria-expanded="false" data-toggle="collapse"> <i class="fa fa-calculator"></i>Отчеты</a>
            <ul id="exampledropdownDropdown3" class="collapse list-unstyled ">
              <li><a href="reports.html">Финансы</a></li>
              <li><a href="report-orders.html">Заказы</a></li>
              <li><a href="report-sale.html">Продажа</a></li>
              <li><a href="report-warehouse.html">Склад</a></li>
            </ul>
          </li>
          <li><a href="/qrcode-barcode"> <i class="fa fa-qrcode"></i>Qrcode</a></li>
        </ul>
      </nav>
<!-- Sidebar Navidation Menus  END-->



@yield('content')



        <footer class="footer">
          <div class="footer__block block no-margin-bottom">
            <div class="container-fluid text-center">
              <!-- Please do not remove the backlink to us unless you support us at https://bootstrapious.com/donate. It is part of the license conditions. Thank you for understanding :)-->
              <p class="no-margin-bottom">Made by Djuraev Bakhodir & Rakhimov Farrukh</p>
            </div>
          </div>
        </footer>
      </div>
    </div>
    <!-- JavaScript files-->
    <script src="{{asset ('vendor/popper.js/umd/popper.min.js') }}"> </script>
    <script src="{{asset ('vendor/bootstrap/js/bootstrap.min.js') }}"></script>
    <script src="{{asset ('vendor/jquery.cookie/jquery.cookie.js') }}"> </script>
    <script src="{{asset ('vendor/chart.js/Chart.min.js') }}"></script>
    <script src="{{asset ('vendor/jquery-validation/jquery.validate.min.js') }}"></script>
    <script src="{{asset ('js/charts-home.js') }}"></script>
    <script src="{{asset ('js/front.js') }}"></script>
    <script src="{{asset ('js/main.js') }}"></script>
    <script src="{{asset ('js/main1.js') }}"></script>
    <script src="{{asset ('js/instascan.min.js') }}"></script>
    <script src="{{asset ('js/JsBarcode.all.min.js') }}"></script>
    
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.min.js" integrity="sha384-Atwg2Pkwv9vp0ygtn1JAojH0nYbwNJLPhwyoVbhoPwBhjQPR5VtM2+xf0Uwh9KtT" crossorigin="anonymous"></script>

  </body>
</html>