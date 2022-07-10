@extends('layouts.template-backend-sidebar-petugas')


@section('main-content-petugas')
<!--begin::Content-->
<div class="content d-flex flex-column flex-column-fluid" id="kt_content">
    <!--begin::Entry-->
    <div class="d-flex flex-column-fluid">
        <!--begin::Container-->
        <div class="container" style="margin-top: 100px;">
            <!--begin::Card-->


            <div class="row justify-content-center">
                <div class="col-md-8 text-center">


                    <div id="animation" style="margin-top: -100px; position: absolute"></div>

                    <h1 style="position: relative; margin-top: 250px; margin-bottom: 30px">Transaksi Berhasil</h1>
                    <p>Silahkan Kembali untuk mengecek hasil transaksi</p>

                    <br>
                    <br>
                    <br>
                    <a href="{{route('view-order')}}" class="btn btn-success">Transaksi Baru</a>
                </div>
            </div>
            <!--end::Card-->
        </div>
        <!--end::Container-->
    </div>
    <!--end::Entry-->
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