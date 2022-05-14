@extends('layouts.template-backend-sidebar')


@section('main-content')
<!--begin::Content-->
<div class="content d-flex flex-column flex-column-fluid" id="kt_content">
    <!--begin::Entry-->
    <div class="d-flex flex-column-fluid">
        <!--begin::Container-->
        <div class="container" style="margin-top: 100px;">
            <!--begin::Card-->

            @if(Session::has('pesan'))

								
			    <div class="alert alert-danger">
				    <b>Pemberitahuan</b><br>
					{{ Session('pesan') }}
				</div>

			@endif

            <div class="row justify-content-center">
                <div class="col-md-8">
                    <div class="card card-custom">
                        <div class="card-header flex-wrap border-0 pt-6 pb-0">
                            <div class="card-title">
                                <h1 class="card-label">Form Pemesanan Tiket</h1>
                            </div>
                            <div class="card-toolbar">
                                <!--begin::Button-->
                                <a href="/createtiket" class="btn btn-primary font-weight-bolder">
                                    <span class="svg-icon svg-icon-md">
                                        <!--begin::Svg Icon | path:/metronic/theme/html/demo4/dist/assets/media/svg/icons/Design/Flatten.svg-->
                                        <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
                                            <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                                <rect x="0" y="0" width="24" height="24" />
                                                <circle fill="#000000" cx="9" cy="15" r="6" />
                                                <path d="M8.8012943,7.00241953 C9.83837775,5.20768121 11.7781543,4 14,4 C17.3137085,4 20,6.6862915 20,10 C20,12.2218457 18.7923188,14.1616223 16.9975805,15.1987057 C16.9991904,15.1326658 17,15.0664274 17,15 C17,10.581722 13.418278,7 9,7 C8.93357256,7 8.86733422,7.00080962 8.8012943,7.00241953 Z" fill="#000000" opacity="0.3" />
                                            </g>
                                        </svg>
                                        <!--end::Svg Icon-->
                                    </span>Ubah Jenis Tiket</a>
                                <!--end::Button-->
                            </div>
                        </div>
                        <div class="card-body">
                            
                            <div class="row">
                                <div class="col-md-6">
                                    <small>Tanggal Hari Ini</small>
                                    <h2>{{ date('d F Y H.i A') }}</h2>
                                </div>
                                <div class="col-md-6">
                                    <small>Petugas Tiket</small>
                                    <h2>Dwi Nur Cahyo</h2>
                                </div>
                            </div>
        
                            <hr>
                            

                            @php 

                                $nama_tiket = "Weekend";
                                $harga      = 15000;

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
                                        <input type="text" name="kode_order" class="form-control" value="{{ $kode_order }}" disabled>
                                        <small>Koder order pemesanan</small>
                                    </div>
                                                
                                </div>

                                <div class="col-md-6">
                                    {{-- Tanggal Kunjungan --}}
                                    <div class="form-group">
                                        <label for="">Tanggal Kunjungan</label>
                                        <input type="text" name="tanggal" class="form-control" value="{{ date('d F Y H.i A') }}" disabled>
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
                                        <input type="text" name="jenis_tiket" class="form-control" value="{{ $nama_tiket }}" disabled>
                                        <small>Klik tombol diatas untuk merubah jenis tiket</small>
                                    </div>



                                    <div class="row">
                                        <div class="col-md-6">
                                            {{-- Nama Pengunjung --}}
                                            <div class="form-group">
                                                <label for="">Nama Pengunjung / Pemesan</label>
                                                <input type="text" name="nama_pengunjung" class="form-control" placeholder="Masukkan nama pengunjung">
                                                <small>Masukkan jumlah pemesanan tiket</small>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            {{-- Jenis Tiket --}}
                                            <div class="form-group">
                                                <label for="">Jumlah Pemesanan</label>
                                                <input type="number" name="jumlah" class="form-control" placeholder="Masukkan jumlah tiket yang dipesan">
                                                <small>Masukkan jumlah pemesanan tiket</small>
                                            </div>
                                        </div>
                                    </div>




                                    {{-- Button Submit --}}
                                    <div class="form-group text-right">
                                        <a href="{{ url('petugas/payment') }}" class="btn btn-success">Lanjut Pembayaran</a>
                                    </div>  

                                </div>
                            </div>
        
        
                        </div>
                    </div>
                </div>
            </div>
            <!--end::Card-->
        </div>
        <!--end::Container-->
    </div>
    <!--end::Entry-->
</div>
<!--end::Content-->

@endsection