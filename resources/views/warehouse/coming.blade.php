@extends('layouts.erkinapp')

@section('content')

<script>
function printContent(el){
    var restorepage = document.body.innerHTML;
    var printcontent = document.getElementById(el).innerHTML;
    document.body.innerHTML = printcontent;
    window.print();
    document.body.innerHTML = restorepage;
}
</script>

     <!-- Sidebar Navigation end-->
      <div class="page-content">
        @if(Session::has('coming_created'))
          <div class="alert alert-success" role="alert">
            {{ Session::get('coming_created') }}
          </div>
        @endif
        @if(Session::has('update_created'))
          <div class="alert alert-success" role="alert">
            {{ Session::get('update_created') }}
          </div>
        @endif

            <p class="m-2">Приход</p>

        <section class="no-padding-top">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-12">
                            <form class="form" id="scanForm">
                                  @csrf
                                <div class="row">
                                  <div class="col-md-6">
                                    <input type="text" id="qrcode" placeholder="SCAN" class="form-control" autofocus>
                                  </div>
                                   <div class="col-md-6">
                                     <button type="submit" class="btn btn-primary"><i class="fa fa-check" aria-hidden="true"></i></button>
                                     <a class="btn btn-primary" data-bs-toggle="collapse" href="#collapseExample" role="button" aria-expanded="false" aria-controls="collapseExample">
                                        Камера <i class="fa fa-angle-double-down" aria-hidden="true"></i>
                                    </a>
                                  <div class="collapse" id="collapseExample">
                                    <div class="card card-body">
                                       <video id="preview" width="100%"></video>
                                    </div>
                                  </div>
                                    </div>
                                </div>
                            </form>
                    </div>
                </div>
                <br>
            </div>
        </section>


        <section class="no-padding-top">
          <div class="container-fluid">
            <div class="row">

              <!-- Form Elements -->
              <div class="col-lg-12">
                <div class="block">
                
                <div id="search">
                    <form id="qrcodeTable" method="POST" class="form" action="{{ route('editComing') }}">
                            @csrf

                    </form>
                </div>
                        
                <div class="" id="search1">
                  <div class="">


                <form method="POST" class="form" action="{{ route('createComing') }}" enctype="multipart/form-data">
                              @csrf

        <div class="container-fluid">
            <div class="row">
              <div class="col-md-6">
                    <label>SCAN BAR-code and QR-code</label>
                    <div class="">
                        <div class="row">
                            <div class="col-md-6">
                                <input type="text" name="qrcode" id="text" readonyy="" placeholder="scan" class="form-control">
                            </div>
                            <div class="col-md-6">
                        <img style="height: 40px; width: 40px;" src="https://chart.googleapis.com/chart?cht=qr&chl=Hello+World&chs=160x160&chld=L|0"
                         class="qr-code img-thumbnail img-responsive">
                         <img style="height: 40px; width: 40px;" src="{{ asset('img/barc.jpg') }}"
                         class="">
                        <button type="button" class="btn btn-info" onclick="printContent('div2')"><i class="fa fa-print" aria-hidden="true"></i></button>



                    <script>
                    function htmlEncode (value){
                      return $('<div/>').text(value).html();
                    }

                    $(function() {
                      $(document).on('keyup', '#qrcode', function() {
                        $(".qr-code").attr("src", "https://chart.googleapis.com/chart?cht=qr&chl=" + htmlEncode($("#qrcode").val()) + "&chs=160x160&chld=L|0");
                      });
                    });
                </script>
                            </div>
                        </div>
                    </div>


                    <div class="form-group">
                                <label>Наименование товара</label>
                                <input type="text" name="name" placeholder="" class="form-control">
                              </div>
                <div class="form-group">
                                <label>Категория товара</label>
                                <select name="category" class="form-control mb-3 mb-3">
                                  @foreach($dataCategory as $coming)
                                  <option>{!! $coming->name !!}</option>
                                  @endforeach
                                </select>
                              </div>
                              <div class="form-group">
                                <label>Количество</label>
                                <input type="number" name="quantity" placeholder="" class="form-control">
                              </div>
                              <div class="form-group">
                                <label>Картинка</label>
                                <input type="file" name="img" accept="image/*" class="form-control" capture="camera" onchange="previewFile(this)">
                                <img id="previewImg" style="max-width:130px; margin-top:20px;">
                              </div>
                              <div class="form-group">
                                <label>Цена</label>
                                <input type="number" name="price" placeholder="" class="form-control">
                              </div>
                              <div class="form-group">
                                <label>Цена 1</label>
                                <input type="number" name="price1" placeholder="" class="form-control">
                              </div>
                              <div class="form-group">
                                <label>Дата</label>
                                <input type="date" name="date" placeholder="" class="form-control" value="<?= date('Y-m-d', time()); ?>">
                              </div>
                              <div class="form-group">
                                <label>Дополниьельная информация</label>
                                <textarea class="form-control" name="information" placeholder="" id="floatingTextarea"></textarea>
                              </div>
                              <div class="form-group">
                                <label>Исполнитель</label>
                                <select name="executer" class="form-control mb-3 mb-3">
                                  @foreach($dataWorkers as $coming)
                                  <option>{!! $coming->name !!}</option>
                                  @endforeach
                                </select>
                              </div>
                              <div class="">
                              <button type="submit" class="btn btn-primary">Сохранить</button>
                            </div>



                    <br>

                    <div class="container-fluid">
                        <div class="row">
                            <div class="col-md-6">

                        <div class="" id="div2" hidden>

                            <div class="container-fluid">
                                <div class="row">
                                    <div class="col-md-3">
                                        <img id="barcode" width="1500" height="200" style="transform: rotate(90deg); margin-left: -600px; margin-top: 650px;"></img>
                                    </div>
                                    <div class="col-md-9">
                                        <img style="height: 750px; width: 750px; margin-top: 35px;" src="https://chart.googleapis.com/chart?cht=qr&chl=Hello+World&chs=160x160&chld=L|0"
                         class="qr-code img-thumbnail img-responsive">
                         <div style="transform: rotate(90deg); margin-top: 400px; margin-left: -300px; width: 1000px;">
                            <h1 style="font-size: 120px;"><strong></strong></h1>
                        </div>
                                    </div>
                                </div>
                            </div>

                            <!--<h1 style="text-align: center; font-size: 120px; margin-top: 0px;"><strong>Цена:</strong></h1>
                            <h1 style="text-align: center; font-size: 120px;">2 500 000 сум</h1>-->
                        </div>

                        <script>
                        $(document).on('keyup', '#qrcode', function(){
                            var text = document.getElementById("qrcode").value;
                            JsBarcode("#barcode", text, {displayValue: false, width:3, height: 120});
                        });
                    </script>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-6">

                                    <a class="btn btn-primary" data-bs-toggle="collapse" href="#collapseExample1" role="button" aria-expanded="false" aria-controls="collapseExample">
            Размеры <i class="fa fa-angle-double-down" aria-hidden="true"></i>
          </a>
        <div class="collapse" id="collapseExample1">
          <div class="">
            <div class="">
                
                <a class="btn btn-primary mt-2" role="button" href="" onclick="push(event)">
            Добавить размеры 
          </a>
                <div class="row">
            <div class="form-group col-md-6">
                <label>Размер s</label>
                <input name="name_s" id="inputId2" type="text" value="s" class="form-control">
             </div>
             <div class="form-group col-md-6">
                <label>Количество s</label>
                    <input name="quantity_s" id="" type="number" value="0" class="form-control">
                    <button type="button" class="btn btn-primary" id="generate1" hidden><i class="fa fa-retweet" aria-hidden="true"></i></button>
                        <img style="height: 40px; width: 40px;" src="https://chart.googleapis.com/chart?cht=qr&chl=Hello+World&chs=160x160&chld=L|0"
                         class="qr-code1 img-thumbnail img-responsive">

                    <script>
                    function htmlEncode (value){
                      return $('<div/>').text(value).html();
                    }

                    $(function() {
                      $("#generate1").click(function(){
                        $(".qr-code1").attr("src", "https://chart.googleapis.com/chart?cht=qr&chl=" + htmlEncode($("#inputId2").val()) + "&chs=160x160&chld=L|0");
                      });
                    });
                </script>
                
                <script>
                    setInterval(function(){
                    $('#generate1').click();
                }, 1000);
                </script>

                <button type="button" class="btn btn-primary" id="btn_generate1" hidden><i class="fa fa-retweet" aria-hidden="true"></i></button>
                        <img style="height: 40px; width: 40px;" src="{{ asset('public/img/barc.jpg') }}"
                         class="">

                         <script>
                        document.getElementById("btn_generate1").addEventListener('click', function(){
                            var text = document.getElementById("inputId2").value;
                            JsBarcode("#barcode1", text, {displayValue: false, width:3, height: 120});
                        });
                    </script>
                    
                    <script>
                    setInterval(function(){
                    $('#btn_generate1').click();
                }, 1000);
                </script>

             </div>



             <div class="form-group col-md-6">
                <label>Размер m</label>
                <input name="name_m" id="inputId3" type="text" value="m" class="form-control">
             </div>
             <div class="form-group col-md-6">
                <label>Количество m</label>
                <input name="quantity_m" id="" type="number" value="0" class="form-control">



                        <button type="button" class="btn btn-primary" id="generate2" hidden><i class="fa fa-retweet" aria-hidden="true"></i></button>
                        <img style="height: 40px; width: 40px;" src="https://chart.googleapis.com/chart?cht=qr&chl=Hello+World&chs=160x160&chld=L|0"
                         class="qr-code2 img-thumbnail img-responsive">

                    <script>
                    function htmlEncode (value){
                      return $('<div/>').text(value).html();
                    }

                    $(function() {
                      $("#generate2").click(function() {
                        $(".qr-code2").attr("src", "https://chart.googleapis.com/chart?cht=qr&chl=" + htmlEncode($("#inputId3").val()) + "&chs=160x160&chld=L|0");
                      });
                    });
                </script>
                
                <script>
                    setInterval(function(){
                    $('#generate2').click();
                }, 1000);
                </script>

                <button type="button" class="btn btn-primary" id="btn_generate2" hidden><i class="fa fa-retweet" aria-hidden="true"></i></button>
                        <img style="height: 40px; width: 40px;" src="{{ asset('public/img/barc.jpg') }}"
                         class="">

                         <script>
                        document.getElementById("btn_generate2").addEventListener('click', function(){
                            var text = document.getElementById("inputId3").value;
                            JsBarcode("#barcode2", text, {displayValue: false, width:3, height: 120});
                        });
                    </script>
                    
                    <script>
                    setInterval(function(){
                    $('#btn_generate2').click();
                }, 1000);
                </script>
                    
             </div>



             <div class="form-group col-md-6">
                <label>Размер l</label>
                <input name="name_l" id="inputId4" type="text" value="l" class="form-control">
             </div>
             <div class="form-group col-md-6">
                <label>Количество l</label>
                <input name="quantity_l" id="" type="number" value="0" class="form-control">

                <button type="button" class="btn btn-primary" id="generate3" hidden><i class="fa fa-retweet" aria-hidden="true"></i></button>
                        <img style="height: 40px; width: 40px;" src="https://chart.googleapis.com/chart?cht=qr&chl=Hello+World&chs=160x160&chld=L|0"
                         class="qr-code3 img-thumbnail img-responsive">

                    <script>
                    function htmlEncode (value){
                      return $('<div/>').text(value).html();
                    }

                    $(function() {
                      $("#generate3").click(function() {
                        $(".qr-code3").attr("src", "https://chart.googleapis.com/chart?cht=qr&chl=" + htmlEncode($("#inputId4").val()) + "&chs=160x160&chld=L|0");
                      });
                    });
                </script>
                
                <script>
                    setInterval(function(){
                    $('#generate3').click();
                }, 1000);
                </script>

                <button type="button" class="btn btn-primary" id="btn_generate3" hidden><i class="fa fa-retweet" aria-hidden="true"></i></button>
                        <img style="height: 40px; width: 40px;" src="{{ asset('public/img/barc.jpg') }}"
                         class="">

                         <script>
                        document.getElementById("btn_generate3").addEventListener('click', function(){
                            var text = document.getElementById("inputId4").value;
                            JsBarcode("#barcode3", text, {displayValue: false, width:3, height: 120});
                        });
                    </script>
                    
                    <script>
                        setInterval(function(){
                        $('#btn_generate3').click();
                    }, 1000);
                    </script>
             </div>




             <div class="form-group col-md-6">
                <label>Размер xl</label>
                <input name="name_xl" id="inputId5" type="text" value="xl" class="form-control">
             </div>
             <div class="form-group col-md-6">
                <label>Количество xl</label>
                <input name="quantity_xl" id="" type="number" value="0" class="form-control">

                <button type="button" class="btn btn-primary" id="generate4" hidden><i class="fa fa-retweet" aria-hidden="true"></i></button>
                        <img style="height: 40px; width: 40px;" src="https://chart.googleapis.com/chart?cht=qr&chl=Hello+World&chs=160x160&chld=L|0"
                         class="qr-code4 img-thumbnail img-responsive">

                    <script>
                    function htmlEncode (value){
                      return $('<div/>').text(value).html();
                    }

                    $(function() {
                      $("#generate4").click(function() {
                        $(".qr-code4").attr("src", "https://chart.googleapis.com/chart?cht=qr&chl=" + htmlEncode($("#inputId5").val()) + "&chs=160x160&chld=L|0");
                      });
                    });
                </script>
                
                <script>
                        setInterval(function(){
                        $('#generate4').click();
                    }, 1000);
                    </script>

                <button type="button" class="btn btn-primary" id="btn_generate4" hidden><i class="fa fa-retweet" aria-hidden="true"></i></button>
                        <img style="height: 40px; width: 40px;" src="{{ asset('public/img/barc.jpg') }}"
                         class="">

                         <script>
                        document.getElementById("btn_generate4").addEventListener('click', function(){
                            var text = document.getElementById("inputId5").value;
                            JsBarcode("#barcode4", text, {displayValue: false, width:3, height: 120});
                        });
                    </script>
                    
                    <script>
                        setInterval(function(){
                        $('#btn_generate4').click();
                    }, 1000);
                    </script>

             </div>



             <div class="form-group col-md-6">
                <label>Размер xxl</label>
                <input name="name_xxl" id="inputId6" type="text" value="xxl" class="form-control">
             </div>
             <div class="form-group col-md-6">
                <label>Количество xxl</label>
                <input name="quantity_xxl" id="" type="number" value="0" class="form-control">

                <button type="button" class="btn btn-primary" id="generate5" hidden><i class="fa fa-retweet" aria-hidden="true"></i></button>
                        <img style="height: 40px; width: 40px;" src="https://chart.googleapis.com/chart?cht=qr&chl=Hello+World&chs=160x160&chld=L|0"
                         class="qr-code5 img-thumbnail img-responsive">

                    <script>
                    function htmlEncode (value){
                      return $('<div/>').text(value).html();
                    }

                    $(function() {
                      $("#generate5").click(function() {
                        $(".qr-code5").attr("src", "https://chart.googleapis.com/chart?cht=qr&chl=" + htmlEncode($("#inputId6").val()) + "&chs=160x160&chld=L|0");
                      });
                    });
                </script>
                
                <script>
                        setInterval(function(){
                        $('#generate5').click();
                    }, 1000);
                    </script>

                <button type="button" class="btn btn-primary" id="btn_generate5" hidden><i class="fa fa-retweet" aria-hidden="true"></i></button>
                        <img style="height: 40px; width: 40px;" src="{{ asset('public/img/barc.jpg') }}"
                         class="">

                         <script>
                        document.getElementById("btn_generate5").addEventListener('click', function(){
                            var text = document.getElementById("inputId6").value;
                            JsBarcode("#barcode5", text, {displayValue: false, width:3, height: 120});
                        });
                    </script>
                    
                    <script>
                        setInterval(function(){
                        $('#btn_generate5').click();
                    }, 1000);
                    </script>

             </div>



             <div class="form-group col-md-6">
                <label>Размер xxxl</label>
                <input name="name_xxxl" id="inputId7" type="text" value="xxxl" class="form-control">
             </div>
             <div class="form-group col-md-6">
                <label>Количество xxxl</label>
                <input name="quantity_xxxl" id="" type="number" value="0" class="form-control">

                <button type="button" class="btn btn-primary" id="generate6" hidden><i class="fa fa-retweet" aria-hidden="true"></i></button>
                        <img style="height: 40px; width: 40px;" src="https://chart.googleapis.com/chart?cht=qr&chl=Hello+World&chs=160x160&chld=L|0"
                         class="qr-code6 img-thumbnail img-responsive">

                    <script>
                    function htmlEncode (value){
                      return $('<div/>').text(value).html();
                    }

                    $(function() {
                      $("#generate6").click(function() {
                        $(".qr-code6").attr("src", "https://chart.googleapis.com/chart?cht=qr&chl=" + htmlEncode($("#inputId7").val()) + "&chs=160x160&chld=L|0");
                      });
                    });
                </script>
                
                <script>
                        setInterval(function(){
                        $('#generate6').click();
                    }, 1000);
                    </script>

                <button type="button" class="btn btn-primary" id="btn_generate6" hidden><i class="fa fa-retweet" aria-hidden="true"></i></button>
                        <img style="height: 40px; width: 40px;" src="{{ asset('public/img/barc.jpg') }}"
                         class="">

                         <script>
                        document.getElementById("btn_generate6").addEventListener('click', function(){
                            var text = document.getElementById("inputId7").value;
                            JsBarcode("#barcode6", text, {displayValue: false, width:3, height: 120});
                        });
                    </script>
                    
                    <script>
                        setInterval(function(){
                        $('#btn_generate6').click();
                    }, 1000);
                    </script>

             </div>



             <div class="form-group col-md-6">
                <label>Размер 4xl</label>
                <input name="name_4xl" id="inputId8" type="text" value="-4xl" class="form-control">
             </div>
             <div class="form-group col-md-6">
                <label>Количество 4xl</label>
                <input name="quantity_4xl" id="" type="number" value="0" class="form-control">

                <button type="button" class="btn btn-primary" id="generate7" hidden><i class="fa fa-retweet" aria-hidden="true"></i></button>
                        <img style="height: 40px; width: 40px;" src="https://chart.googleapis.com/chart?cht=qr&chl=Hello+World&chs=160x160&chld=L|0"
                         class="qr-code7 img-thumbnail img-responsive">

                    <script>
                    function htmlEncode (value){
                      return $('<div/>').text(value).html();
                    }

                    $(function() {
                      $("#generate7").click(function() {
                        $(".qr-code7").attr("src", "https://chart.googleapis.com/chart?cht=qr&chl=" + htmlEncode($("#inputId8").val()) + "&chs=160x160&chld=L|0");
                      });
                    });
                </script>
                
                <script>
                        setInterval(function(){
                        $('#generate7').click();
                    }, 1000);
                    </script>

                <button type="button" class="btn btn-primary" id="btn_generate7" hidden><i class="fa fa-retweet" aria-hidden="true"></i></button>
                        <img style="height: 40px; width: 40px;" src="{{ asset('public/img/barc.jpg') }}"
                         class="">

                         <script>
                        document.getElementById("btn_generate7").addEventListener('click', function(){
                            var text = document.getElementById("inputId8").value;
                            JsBarcode("#barcode7", text, {displayValue: false, width:3, height: 120});
                        });
                    </script>
                    
                    <script>
                        setInterval(function(){
                        $('#btn_generate7').click();
                    }, 1000);
                    </script>

             </div>


             <div class="form-group col-md-6">
                <label>Размер 5xl</label>
                <input name="name_5xl" id="inputId9" type="text" value="-5xl" class="form-control">
             </div>
             <div class="form-group col-md-6">
                <label>Количество 5xl</label>
                <input name="quantity_5xl" id="" type="number" value="0" class="form-control">

                <button type="button" class="btn btn-primary" id="generate8" hidden><i class="fa fa-retweet" aria-hidden="true"></i></button>
                        <img style="height: 40px; width: 40px;" src="https://chart.googleapis.com/chart?cht=qr&chl=Hello+World&chs=160x160&chld=L|0"
                         class="qr-code8 img-thumbnail img-responsive">

                    <script>
                    function htmlEncode (value){
                      return $('<div/>').text(value).html();
                    }

                    $(function() {
                      $("#generate8").click(function() {
                        $(".qr-code8").attr("src", "https://chart.googleapis.com/chart?cht=qr&chl=" + htmlEncode($("#inputId9").val()) + "&chs=160x160&chld=L|0");
                      });
                    });
                </script>
                
                <script>
                        setInterval(function(){
                        $('#generate8').click();
                    }, 1000);
                    </script>

                <button type="button" class="btn btn-primary" id="btn_generate8" hidden><i class="fa fa-retweet" aria-hidden="true"></i></button>
                        <img style="height: 40px; width: 40px;" src="{{ asset('public/img/barc.jpg') }}"
                         class="">

                         <script>
                        document.getElementById("btn_generate8").addEventListener('click', function(){
                            var text = document.getElementById("inputId9").value;
                            JsBarcode("#barcode8", text, {displayValue: false, width:3, height: 120});
                        });
                    </script>
                    
                    <script>
                        setInterval(function(){
                        $('#btn_generate8').click();
                    }, 1000);
                    </script>

             </div>


             <div class="form-group col-md-6">
                <label>Размер 6xl</label>
                <input name="name_6xl" id="inputId10" type="text" value="-6xl" class="form-control">
             </div>
             <div class="form-group col-md-6">
                <label>Количество 6xl</label>
                <input name="quantity_6xl" id="" type="number" value="0" class="form-control">

                <button type="button" class="btn btn-primary" id="generate9" hidden><i class="fa fa-retweet" aria-hidden="true"></i></button>
                        <img style="height: 40px; width: 40px;" src="https://chart.googleapis.com/chart?cht=qr&chl=Hello+World&chs=160x160&chld=L|0"
                         class="qr-code9 img-thumbnail img-responsive">

                    <script>
                    function htmlEncode (value){
                      return $('<div/>').text(value).html();
                    }

                    $(function() {
                      $("#generate9").click(function() {
                        $(".qr-code9").attr("src", "https://chart.googleapis.com/chart?cht=qr&chl=" + htmlEncode($("#inputId10").val()) + "&chs=160x160&chld=L|0");
                      });
                    });
                </script>
                
                <script>
                        setInterval(function(){
                        $('#generate9').click();
                    }, 1000);
                    </script>

                <button type="button" class="btn btn-primary" id="btn_generate9" hidden><i class="fa fa-retweet" aria-hidden="true"></i></button>
                        <img style="height: 40px; width: 40px;" src="{{ asset('public/img/barc.jpg') }}"
                         class="">

                         <script>
                        document.getElementById("btn_generate9").addEventListener('click', function(){
                            var text = document.getElementById("inputId10").value;
                            JsBarcode("#barcode9", text, {displayValue: false, width:3, height: 120});
                        });
                    </script>
                    
                    <script>
                        setInterval(function(){
                        $('#btn_generate9').click();
                    }, 1000);
                    </script>

             </div>

            <br><br>

            <button type="button" class="btn btn-info" onclick="printContent('div3')">Print <i class="fa fa-print" aria-hidden="true"></i></button>

             <div class="" id="div3" hidden>

                <div class="container-fluid">
                        <div class="row">
                            <div class="col-md-3">
                                <img id="barcode1" width="1500" height="200" style="transform: rotate(90deg); margin-left: -600px; margin-top: 650px;"></img>
                            </div>
                            <div class="col-md-9">
                                <img style="height: 750px; width: 750px; margin-top: 35px;" src="https://chart.googleapis.com/chart?cht=qr&chl=Hello+World&chs=160x160&chld=L|0"
                 class="qr-code1 img-thumbnail img-responsive">
                 <div style="transform: rotate(90deg); margin-top: 400px; margin-left: -300px; width: 1000px;">
                    <h1 style="font-size: 120px;"><strong>Size: s</strong></h1>
                </div>
                            </div>
                        </div>
                    </div>

                    <div class="container-fluid">
                        <div class="row">
                            <div class="col-md-3">
                                <img id="barcode2" width="1500" height="200" style="transform: rotate(90deg); margin-left: -600px; margin-top: 650px;"></img>
                            </div>
                            <div class="col-md-9">
                                <img style="height: 750px; width: 750px; margin-top: 35px;" src="https://chart.googleapis.com/chart?cht=qr&chl=Hello+World&chs=160x160&chld=L|0"
                 class="qr-code2 img-thumbnail img-responsive">
                 <div style="transform: rotate(90deg); margin-top: 400px; margin-left: -300px; width: 1000px;">
                    <h1 style="font-size: 120px;"><strong>Size: m</strong></h1>
                </div>
                            </div>
                        </div>
                    </div>

                    <div class="container-fluid">
                        <div class="row">
                            <div class="col-md-3">
                                <img id="barcode3" width="1500" height="200" style="transform: rotate(90deg); margin-left: -600px; margin-top: 650px;"></img>
                            </div>
                            <div class="col-md-9">
                                <img style="height: 750px; width: 750px; margin-top: 35px;" src="https://chart.googleapis.com/chart?cht=qr&chl=Hello+World&chs=160x160&chld=L|0"
                 class="qr-code3 img-thumbnail img-responsive">
                 <div style="transform: rotate(90deg); margin-top: 400px; margin-left: -300px; width: 1000px;">
                    <h1 style="font-size: 120px;"><strong>Size: l</strong></h1>
                </div>
                            </div>
                        </div>
                    </div>

                    <div class="container-fluid">
                        <div class="row">
                            <div class="col-md-3">
                                <img id="barcode4" width="1500" height="200" style="transform: rotate(90deg); margin-left: -600px; margin-top: 650px;"></img>
                            </div>
                            <div class="col-md-9">
                                <img style="height: 750px; width: 750px; margin-top: 35px;" src="https://chart.googleapis.com/chart?cht=qr&chl=Hello+World&chs=160x160&chld=L|0"
                 class="qr-code4 img-thumbnail img-responsive">
                 <div style="transform: rotate(90deg); margin-top: 400px; margin-left: -300px; width: 1000px;">
                    <h1 style="font-size: 120px;"><strong>Size: xl</strong></h1>
                </div>
                            </div>
                        </div>
                    </div>

                    <div class="container-fluid">
                        <div class="row">
                            <div class="col-md-3">
                                <img id="barcode5" width="1500" height="200" style="transform: rotate(90deg); margin-left: -600px; margin-top: 650px;"></img>
                            </div>
                            <div class="col-md-9">
                                <img style="height: 750px; width: 750px; margin-top: 35px;" src="https://chart.googleapis.com/chart?cht=qr&chl=Hello+World&chs=160x160&chld=L|0"
                 class="qr-code5 img-thumbnail img-responsive">
                 <div style="transform: rotate(90deg); margin-top: 400px; margin-left: -300px; width: 1000px;">
                    <h1 style="font-size: 120px;"><strong>Size: xxl</strong></h1>
                </div>
                            </div>
                        </div>
                    </div>

                    <div class="container-fluid">
                        <div class="row">
                            <div class="col-md-3">
                                <img id="barcode6" width="1500" height="200" style="transform: rotate(90deg); margin-left: -600px; margin-top: 650px;"></img>
                            </div>
                            <div class="col-md-9">
                                <img style="height: 750px; width: 750px; margin-top: 35px;" src="https://chart.googleapis.com/chart?cht=qr&chl=Hello+World&chs=160x160&chld=L|0"
                 class="qr-code6 img-thumbnail img-responsive">
                 <div style="transform: rotate(90deg); margin-top: 400px; margin-left: -300px; width: 1000px;">
                    <h1 style="font-size: 120px;"><strong>Size: xxxl</strong></h1>
                </div>
                            </div>
                        </div>
                    </div>

                    <div class="container-fluid">
                        <div class="row">
                            <div class="col-md-3">
                                <img id="barcode7" width="1500" height="200" style="transform: rotate(90deg); margin-left: -600px; margin-top: 650px;"></img>
                            </div>
                            <div class="col-md-9">
                                <img style="height: 750px; width: 750px; margin-top: 35px;" src="https://chart.googleapis.com/chart?cht=qr&chl=Hello+World&chs=160x160&chld=L|0"
                 class="qr-code7 img-thumbnail img-responsive">
                 <div style="transform: rotate(90deg); margin-top: 400px; margin-left: -300px; width: 1000px;">
                    <h1 style="font-size: 120px;"><strong>Size: -4xl</strong></h1>
                </div>
                            </div>
                        </div>
                    </div>

                    <div class="container-fluid">
                        <div class="row">
                            <div class="col-md-3">
                                <img id="barcode8" width="1500" height="200" style="transform: rotate(90deg); margin-left: -600px; margin-top: 650px;"></img>
                            </div>
                            <div class="col-md-9">
                                <img style="height: 750px; width: 750px; margin-top: 35px;" src="https://chart.googleapis.com/chart?cht=qr&chl=Hello+World&chs=160x160&chld=L|0"
                 class="qr-code8 img-thumbnail img-responsive">
                 <div style="transform: rotate(90deg); margin-top: 400px; margin-left: -300px; width: 1000px;">
                    <h1 style="font-size: 120px;"><strong>Size: -5xl</strong></h1>
                </div>
                            </div>
                        </div>
                    </div>

                    <div class="container-fluid">
                        <div class="row">
                            <div class="col-md-3">
                                <img id="barcode9" width="1500" height="200" style="transform: rotate(90deg); margin-left: -600px; margin-top: 650px;"></img>
                            </div>
                            <div class="col-md-9">
                                <img style="height: 750px; width: 750px; margin-top: 35px;" src="https://chart.googleapis.com/chart?cht=qr&chl=Hello+World&chs=160x160&chld=L|0"
                 class="qr-code9 img-thumbnail img-responsive">
                 <div style="transform: rotate(90deg); margin-top: 400px; margin-left: -300px; width: 1000px;">
                    <h1 style="font-size: 120px;"><strong>Size: -6xl</strong></h1>
                </div>
                            </div>
                        </div>
                    </div>

                </div>

                </div>
            </div>
          </div>
        </div>
            </div>

                </div>




                <!--hbkjhgvkjhfglwjhfglwjhfgwlojfgljwhrfg-->
            </div>
        </div>


        <script>
           let scanner = new Instascan.Scanner({ video: document.getElementById('preview')});
           Instascan.Camera.getCameras().then(function(cameras){
               if(cameras.length > 0 ){
                   scanner.start(cameras[0]);
                   scanner.start(cameras[1]);
                   scanner.start(cameras[2]);
                   scanner.start(cameras[3]);
               } else{
                   alert('No cameras found');
               }

           }).catch(function(e) {
               console.error(e);
           });

           scanner.addListener('scan',function(c){
               document.getElementById('qrcode').value=c;
           });

        </script>

          <script>

           $("input").on("paste",function(e){
        $("#test").focus();
            });
          </script>

          <br>
          <script>
          function push(e) {
   e.preventDefault();
   var val = document.getElementById("text").value;
   var val1 = document.getElementById("inputId2").value;
   var val2 = document.getElementById("inputId3").value;
   var val3 = document.getElementById("inputId4").value;
   var val4 = document.getElementById("inputId5").value;
   var val5 = document.getElementById("inputId6").value;
   var val6 = document.getElementById("inputId7").value;
   var val7 = document.getElementById("inputId8").value;
   var val8 = document.getElementById("inputId9").value;
   var val9 = document.getElementById("inputId10").value;

   document.getElementById("inputId2").value = val+val1;
   document.getElementById("inputId3").value = val+val2;
   document.getElementById("inputId4").value = val+val3;
   document.getElementById("inputId5").value = val+val4;
   document.getElementById("inputId6").value = val+val5;
   document.getElementById("inputId7").value = val+val6;
   document.getElementById("inputId8").value = val+val7;
   document.getElementById("inputId9").value = val+val8;
   document.getElementById("inputId10").value = val+val9;
   return false;
}
    </script>



                            </form>
                          </div>
                        </div>



<!--<script>
    $(":input").keypress(function(event){
    if (event.which == '10' || event.which == '13') {
        event.preventDefault();
    }
});
</script>-->

                </div>
              </div>
            </div>
          </div>
        </section>


<script>
    $("#scanForm").submit(function(e){
        e.preventDefault();

        let qrcode = $("#qrcode").val();
        let _token = $("input[name=_token]").val();

        $.ajax({
            url: "{{route('search')}}",
            type: "POST",
            data:{
                qrcode:qrcode,
                _token:_token
            },
            success:function(response)
            {

                if(response)
                {
                    $("#qrcodeTable").prepend('<div class="col-md-12"><div class=""><input type="text" name="id" class="form-control" value="'+ response.id +'" readonly hidden><label>QR-code and BAR-code</label><input type="text" class="form-control" value="'+ response.qrcode +'" readonly><p>Наименование</p><input type="text" class="form-control" value="'+ response.name +'" readonly><p>Дополнительная информация</p><input type="text" class="form-control" value="'+ response.information +'" readonly><p>Категория</p><input type="text" class="form-control" value="'+ response.category +'" readonly><p>Количество</p><input type="number" class="form-control" name="quantity"><p>Размер s</p><input type="number" name="quantity_s" class="form-control"/><p>Размер m</p><input type="number" class="form-control" name="quantity_m"><p>Размер l</p><input type="number" class="form-control" name="quantity_l"><p>Размер xl</p><input type="number" class="form-control" name="quantity_xl"><p>Размер xxl</p><input type="number" class="form-control" name="quantity_xxl"><p>Размер xxxl</p><input type="number" class="form-control" name="quantity_xxxl"><p>Размер 4xl</p><input type="number" class="form-control" name="quantity_4xl"><p>Размер 5xl</p><input type="number" class="form-control" name="quantity_5xl"><p>Размер 6xl</p><input type="number" class="form-control" name="quantity_6xl"><button type="submit" class="btn btn-primary mt-2">Сохранить</button></div></div>');
                    $("#search").show();
                    $("#search1").hide();
                }
            }
        });
    });
</script>





<script>
  $(document).on('keyup', '#qrcode', function(){
  var test111 = $(this).val();
  document.getElementById("text").value = test111;
 });
</script>

<script>
    function previewFile(input){
        var file=$("input[type=file]").get(0).files[0];
        if(file)
        {
            var reader = new FileReader();
            reader.onload = function(){
                $('#previewImg').attr("src",reader.result);
            }
            reder.readAsDataURL(file);
        }
    }
</script>

@endsection
