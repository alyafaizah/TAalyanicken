@extends('layouts.template-backend-sidebar-petugas')


@section('main-content-petugas')
<!--begin::Content-->
<div class="content d-flex flex-column flex-column-fluid" id="kt_content">
    <!--begin::Subheader-->
    <div class="subheader py-5 py-lg-10 gutter-b subheader-transparent">
        <div class="container d-flex flex-column">
            <!--begin::Entry-->
            <div class="d-flex flex-column-fluid">
                <!--begin::Container-->
                <div class="container">
                    <!--begin::Card-->

                    @if(Session::has('pesan'))

                    <div class="alert alert-danger">
                        <b>Pemberitahuan</b><br>
                        {{ Session('pesan') }}
                    </div>

                    @endif

                    <form action="{{ url('petugas/payment') }}" method="GET">
                        <div class="row ">
                            <div class="col-md-7">
                                <div class="card card-custom">
                                    <div class="card-body">

                                        <div class="row">
                                            <div class="col-md-6">
                                                <small>Tanggal Hari Ini</small>
                                                <h2>{{ date('d F Y H.i A') }}</h2>
                                            </div>
                                            <div class="col-md-6">
                                                <small>Petugas Tiket</small>
                                                <h2>
                                                    @php 
                                                        $username = session('email');
                                                        $split = explode('@', $username);
    
                                                        echo $split[0];
                                                    @endphp
                                                </h2>
                                            </div>
                                        </div>
                                       

                                        <hr>


                                        @php

                                        $nama_tiket = "Weekend";
                                        $harga = 15000;

                                        @endphp


                                        <div class="row">


                                            {{-- Left menu --}}
                                            <div class="col-md-6">

                                                {{-- Kode order --}}
                                                <div class="form-group">

                                                    @php

                                                    // data kode order
                                                    $kode_order = strtoupper(uniqid());

                                                    @endphp

                                                    <label for="">Kode Order</label>
                                                    <input type="text" name="kode_order" class="form-control" value="{{ $kode_order }}" readonly>
                                                    <small>Koder order pemesanan</small>
                                                </div>

                                            </div>

                                            <div class="col-md-6">
                                                {{-- Tanggal Kunjungan --}}
                                                <div class="form-group">
                                                    <label for="">Tanggal Kunjungan</label>
                                                    <input type="text" class="form-control" value="{{ date('d F Y H.i A') }}" readonly>
                                                    <small>Waktu pemesanan terkini</small>
                                                </div>
                                            </div>

                                        </div>




                                        {{-- Inormasi Tiket --}}

                                        <hr>

                                        <h4>Informasi Pembelian Tiket</h4>
                                        <small>Form jenis tiket yang akan dibeli pengunjung</small>

                                        <hr>




                                        <div class="row">
                                            <div class="col-md-12">

                                                {{-- Jenis Tiket --}}
                                                <div class="form-group">
                                                    <label for="">Jenis Tiket</label>

                                                    @php

                                                    $jenisTiket = "";
                                                    $now = strtotime("now");
                                                    $dayOfIndex = date('w', $now);

                                                    if ( $dayOfIndex == 6 OR $dayOfIndex == 0 ) {

                                                    $jenisTiket = "weekend";

                                                    } else {

                                                    $jenisTiket = "weekday";
                                                    }

                                                    @endphp

                                                    <input name="jenis" class="form-control" value="{{ $jenisTiket }}" readonly />
                                                </div>


                                            </div>
                                        </div>




                                    </div>
                                </div>
                            </div>

                            <!--pemesanan-->

                            <div class="col-md-5">
                                <div class="card card-custom card-stretch" style="background-color: #9fa9a3; color: white;">
                                    <div class="card-header">
                                        <div class="card-title">
                                            <h3 class="card-label">Form Pemesanan Tiket</h3>
                                        </div>
                                    </div>
                                    <div class="card-body">

                                        <div class="form-group">
                                            <label for="">Nama Pengunjung / Pemesan</label>
                                            <input type="text" name="nama_pengunjung" class="form-control" placeholder="Masukkan nama pengunjung" required="">
                                            <medium>Masukkan nama Anda</medium>
                                        </div>

                                        <div class="form-group">
                                            <label for="">Jumlah Pemesanan</label>
                                            <input type="number" name="jumlah" class="form-control" placeholder="Masukkan jumlah tiket yang dipesan" required="">
                                            <medium>Masukkan jumlah pemesanan tiket</medium>
                                        </div>
                                        {{-- Button Submit --}}
                                        <div class="form-group text-right">
                                            <button class="btn btn-success" style="background-color: #484f4f;">Lanjut Pembayaran</button>
                                        </div>

                                    </div>
                                </div>
                            </div>

                        </div>
                    </form>
                    <!--end::Card-->
                </div>
                <!--end::Container-->
            </div>
            <!--end::Entry-->
        </div>
    </div>
</div>
<!--end::Content-->

@endsection