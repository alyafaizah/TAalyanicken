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
                                    </span>Kembali</a>
                                <!--end::Button-->
                            </div>
                        </div>
                        <div class="card-body">
                            
                            
                            <div class="row">
                                <div class="col-md-3">
                                    <img src="https://cdn-icons-png.flaticon.com/512/314/314420.png" alt="" width="120px">
                                </div>

                                <div class="col-md-9">

                                    <br>
                                    <h2>Rincian Pemesanan Tiket</h2>
                                    <p>Kode Order <b>#<?php echo strtoupper(uniqid()) ?></b></p>
                                </div>
                            </div>


                            <hr>

                            <div class="row">

                                <div class="col-md-9">
                                    <small>Nama Petugas Tiket</small><br>
                                    <b>Dwi Nur Cahyo</b>
                                </div>
                                <div class="col-md-3">
                                    <small>Tanggal Pemesanan</small><br>
                                    <b><?php echo date('d F Y H.i A', $input['tgl_kunjungan']) ?></b>
                                </div>

                            </div>


                            <hr>
                            <br>

                            {{-- Rincian Pemesanan --}}
                            <div class="row">
                                <div class="col-md-12">

                                    <h4 style="margin: 0px">Informasi Tiket</h4>
                                    <p>Tiket yang sedang dipesan</p>

                                    <hr>

                                    @php 
                                    
                                        $harga = 0;
                                        if ( $input['jenis_tiket'] == "weekend" ) {

                                            $harga = $tiket->weekend;

                                        } else {

                                            $harga = $tiket->weekday;
                                        }                                    
                                    @endphp

                                    <table class="table table-stripe table-hover">
                                        <thead>
                                            <tr>
                                                <th>Nama Pemesanan</th>
                                                <th>Jenis Tiket</th>
                                                <th>Jumlah</th>
                                                <th class="text-right">Harga</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td>{{ $input['nama_pengunjung'] }}</td>
                                                <td>{{ $input['jenis_tiket'] }}</td>
                                                <td>{{ $input['jumlah'] }} Item</td>
                                                <td class="text-right"><?php echo number_format($harga, 2) ?></td>
                                            </tr>
                                            <tr>
                                                <td colspan="3" class="text-right"><b>TOTAL</b></td>

                                                @php 
                                                    $total = $harga * $input['jumlah'];
                                                @endphp
                                                <td class="text-right"><b><?php echo number_format($total, 2) ?></b></td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>

                            <hr>


                            {{-- Pembayaran --}}
                            <form action="{{ url('proses-pemesanan') }}" method="POST">
                            <div class="row">
                                <div class="col-md-12">
                                    <h4 style="margin: 0px">Pembayaran</h4>
                                    <p>Nominal Pembayaran</p>

                                    <hr>


                                    <div class="form-group">
                                        <label for="">Nominal</label>

                                        @csrf

                                        <input type="hidden" name="kode_order" value="{{ $input['kode_order'] }}">
                                        <input type="hidden" name="jenis_tiket" value="{{ $input['jenis_tiket'] }}">
                                        <input type="hidden" name="nama_pengunjung" value="{{ $input['nama_pengunjung'] }}">
                                        <input type="hidden" name="jumlah" value="{{ $input['jumlah'] }}">

                                        <input type="number" name="bayar" data-tagihan="{{ $total }}" class="form-control" placeholder="Jumlah Pembayaran" id="">
                                    </div>

                                    <div class="form-group">
                                        <label for="">Kembalian</label>
                                        <h3 id="kembalian">Rp 0</h3>
                                    </div>

                                </div>


                                <div class="col-md-12">
                                    <div class="form-group text-right">
                                        <button class="btn btn-danger">Batalkan</button>
                                        <button class="btn btn-success">Proses Pembayaran</button>
                                        <br>
                                        <small>Dengan menekan proses pembayaran, tiket telah terbayar lunas, dan struk pembelian akan muncul secara otomatis</small>
                                    </div>
                                </div>
                            </div>
                            </form>

        
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


<script>

    $(function() {

        var total_tagihan = $('input[name="bayar"]').data('tagihan');

        $('input[name="bayar"]').on('keyup', function() {


            let bayar = $(this).val();

            let sisa = bayar - total_tagihan;

            if ( sisa > 0 ) {

                $('#kembalian').text("Rp " + sisa);
            } else {

                $('#kembalian').text("Rp 0");
            }
            
        });
    })
</script>



@endsection
