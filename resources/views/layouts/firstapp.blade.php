<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Pro-shop.uz</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="robots" content="all,follow">
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

        <style>
          body {
            background-color: #22252a;
          }
        </style>
  </head>
  <body>


@yield('content')



    <!-- JavaScript files-->
    <script src="{{asset ('vendor/jquery/jquery.min.js') }}"></script>
    <script src="{{asset ('vendor/popper.js/umd/popper.min.js') }}"> </script>
    <script src="{{asset ('vendor/bootstrap/js/bootstrap.min.js') }}"></script>
    <script src="{{asset ('vendor/jquery.cookie/jquery.cookie.js') }}"> </script>
    <script src="{{asset ('vendor/chart.js/Chart.min.js') }}"></script>
    <script src="{{asset ('vendor/jquery-validation/jquery.validate.min.js') }}"></script>
    <script src="{{asset ('js/charts-home.js') }}"></script>
    <script src="{{asset ('js/front.js') }}"></script>
  </body>
</html>