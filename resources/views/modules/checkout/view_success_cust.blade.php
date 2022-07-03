@extends('layouts.template-backend-navbar-cust')

@section('main-content-cust')
<!--begin::Content-->
<div class="content d-flex flex-column flex-column-fluid" id="kt_content">
    <!--begin::Entry-->
    <div class="d-flex flex-column-fluid">
        <!--begin::Container-->
        <div class="container">
            <!--begin::Teachers-->
            <div class="d-flex flex-row">
                <!--begin::Content-->
                <div class="flex-row-fluid">
                    <!--begin::Card-->


                    <div class="row justify-content-center">
                        <div class="col-md-8 text-center">


                            <div id="animation" style="margin-top: -100px; position: absolute"></div>

                            <h1 style="position: relative; margin-top: 250px; margin-bottom: 30px">Pemesanan Tiket Berhasil Dibuat</h1>
                            <p>Silahkan ke menu pembayaran untuk menyelesaikan pemesanan</p>

                            <a href="{{url ('/checkout')}}'" class="btn btn-success">Transaksi Baru</a>

                        </div>
                    </div>
                    <!--end::Card-->
                </div>
                <!--end::Container-->
            </div>
            <!--end::Entry-->
        </div>
    </div>
</div>

<!--end::Content-->


<script src="https://cdnjs.cloudflare.com/ajax/libs/bodymovin/5.7.4/lottie.min.js"></script>


<script>
    $(function() {


        var source = "";
        $.ajax({

            async: false,
            url: "https://assets5.lottiefiles.com/packages/lf20_jbrw3hcz.json",
            success: function(e) {

                source = e;
            }
        })


        var animation = bodymovin.loadAnimation({
            animationData: source,
            container: document.getElementById('animation'), // required
            renderer: 'svg', // required
            loop: false, // optional
            autoplay: true, // optional
            name: "Demo Animation", // optional
        });

    })
</script>


@endsection