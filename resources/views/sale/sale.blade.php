@extends('layouts.erkinapp')

@section('content')

<div class="page-content">
    @if(Session::has('sales_created'))
          <div class="alert alert-success" role="alert">
            {{ Session::get('sales_created') }}
          </div>
        @endif
    <p class="m-2">Продажа</p>
    
    <section class="no-padding-top">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-12">
                        <form class="form" id="scanForm">
                              @csrf
                            <div class="row">
                              <div class="col-md-6 mt-2">
                                <input type="text" id="qrcode" placeholder="SCAN" class="form-control" autofocus>
                              </div>
                               <div class="col-md-6 mt-2">
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
                <div class="row mt-2">
                    <div class="col-md-4">
                        <label>Общая сумма</label>
                        <input type="text" class="form-control" value="250 000" readonly>
                    </div>
                    <div class="col-md-4">
                        <label>Общая количество</label>
                        <input type="text" class="form-control" value="90" readonly>
                    </div>
                    <div class="col-md-4 mt-4">
                        <button type="submit" class="btn btn-primary">Продать</button>
                    </div>
                </div>
                <hr>
            </div>
        </section>

        <div class="container" id="search">
            <div class="row">
                <form id="qrcodeTable" method="GET" class="form" action="">
                @csrf



                <button type="submit" class="btn btn-primary" hidden>Продать</button>
                </form>
            </div>
        </div>

        <br>
        
        
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
                    $("#qrcodeTable").prepend('<div class="col-md-12"><div class=""><input type="text" name="id" class="form-control" value="'+ response.id +'" readonly hidden><label>QR-code and BAR-code</label><input type="text" class="form-control" value="'+ response.qrcode +'" readonly><img src="'+ response.img +'" style="height: 75px; width: 75px;" hidden><p>Наименование</p><input type="text" class="form-control" value="'+ response.name +'" readonly><p>Количество</p><input type="number" class="form-control" max="'+ response.quantity +'" required="true" name="quantity"><p><a class="btn btn-primary mt-2" data-bs-toggle="collapse" href="#collapseExample'+ response.id +'" role="button" aria-expanded="false" aria-controls="collapseExample">Размеры</a><br></p><div class="collapse" id="collapseExample'+ response.id +'"><div class="mt-2"><p>Размер s</p><input type="number" name="quantity_s" class="form-control" max="'+ response.quantity_s +'" required="true"/><p>Размер m</p><input type="number" class="form-control" name="quantity_m" max="'+ response.quantity_m +'" required="true"><p>Размер l</p><input type="number" class="form-control" name="quantity_l" max="'+ response.quantity_l +'" required="true"><p>Размер xl</p><input type="number" class="form-control" name="quantity_xl" max="'+ response.quantity_xl +'" required="true"><p>Размер xxl</p><input type="number" class="form-control" name="quantity_xxl" max="'+ response.quantity_xxl +'" required="true"><p>Размер xxxl</p><input type="number" class="form-control" name="quantity_xxxl" max="'+ response.quantity_xxxl +'" required="true"><p>Размер 4xl</p><input type="number" class="form-control" name="quantity_4xl" max="'+ response.quantity_4xl +'" required="true"><p>Размер 5xl</p><input type="number" class="form-control" name="quantity_5xl" max="'+ response.quantity_5xl +'" required="true"><p>Размер 6xl</p><input type="number" class="form-control" name="quantity_6xl" max="'+ response.quantity_6xl +'" required="true"></div></div><br></div></div>');
                    $("#search").show();
                    $("#search1").hide();
                }
            }
        });
    });
</script>
        
</div>


@endsection
