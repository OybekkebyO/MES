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

        <div class="page-header">
          <div class="container-fluid">
            <h2 class="h5 no-margin-bottom">Qrcode and Barcode генератор</h2>
          </div>
        </div>


        <section class="no-padding-top mt-3">
          <div class="container-fluid">
            <div class="row">
              <div class="col-lg-12">

                
                <div class="container-fluid">
                  <div class="form-horizontal">
                    <div class="form-group">
                      <label class="control-label col-sm-2" for="content">Введите qrcode:</label>
                      <div class="col-sm-10">
                        <input type="text" class="form-control" id="content" placeholder="qrcode">
                      </div>
                    </div>
                    <div class="form-group"> 
                      <div class="col-sm-offset-2 col-sm-10">
                        <button type="button" class="btn btn-primary" id="generate">Генерировать qrcode</button>
                        <button type="button" class="btn btn-info" onclick="printContent('div1')">Print QrCode</button>
                      </div>
                    </div>
                  </div>
                  <div class="text-center" id="div1">
                    <img src="https://chart.googleapis.com/chart?cht=qr&chl=Hello+World&chs=160x160&chld=L|0"
                         class="qr-code img-thumbnail img-responsive">
                  </div>
                </div>
                <script>
                    function htmlEncode (value){
                      return $('<div/>').text(value).html();
                    }
                    
                    $(function() {
                      $("#generate").click(function() {
                        $(".qr-code").attr("src", "https://chart.googleapis.com/chart?cht=qr&chl=" + htmlEncode($("#content").val()) + "&chs=160x160&chld=L|0");
                      });
                    });
                </script>

<br><br>
        <div class="container-fluid">
            <div class="form-horizontal">
                    <div class="form-group">
                      <label class="control-label col-sm-2" for="content">Введите barcode:</label>
                      <div class="col-sm-10">
                        <input type="text" class="form-control" id="txt_input" name="txt_input" placeholder="barcode">
                      </div>
                    </div>
                    <div class="form-group"> 
                      <div class="col-sm-offset-2 col-sm-10">
                        <button type="button" class="btn btn-primary" id="btn_generate">Генерировать barcode</button>
                        <button type="button" class="btn btn-info" onclick="printContent('div2')">Print BarCode</button>
                      </div>
                    </div>
                    <br>
                    <div class="text-center" id="div2">
                    <svg id="barcode"></svg>
                    </div>
                    </div>
                    <script>
                        document.getElementById("btn_generate").addEventListener('click', function(){
                            var text = document.getElementById("txt_input").value;
                            JsBarcode("#barcode", text);
                        });
                    </script>

           
    
              </div>
            </div>
          </div>
        </section>


@endsection