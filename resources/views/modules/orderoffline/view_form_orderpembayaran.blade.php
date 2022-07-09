@extends('layouts.template-backend-sidebar-petugas')


@section('main-content-petugas')
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
                                    <b>
                                    @php 
                                                        $username = session('email');
                                                        $split = explode('@', $username);
    
                                                        echo $split[0];
                                                    @endphp
                                    </b>
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
                                                <td class="text-right">Rp <?php echo number_format($harga, 0, ',','.') ?></td>
                                            </tr>
                                            <tr>
                                                <td colspan="3" class="text-right"><b>TOTAL</b></td>

                                                @php 
                                                    $total = $harga * $input['jumlah'];
                                                @endphp
                                                <td class="text-right"><b>Rp <?php echo number_format($total, 0, ',','.') ?></b></td>
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
                                        <input type="hidden" name="harga" value="{{ $harga }}">
                                        <input type="hidden" name="total" value="{{ $total }}">

                                        <input type="number" name="bayar" data-tagihan="{{ $total }}" class="form-control" placeholder="Jumlah Pembayaran" id="">
                                    </div>

                                    <div class="form-group">
                                        <label for="">Kembalian</label>
                                        <h3 id="kembalian">Rp 0</h3>
                                    </div>

                                </div>


                                <div class="col-md-12">
                                    <div class="form-group text-right">
                                    <a href="{{route('view-order')}}" class="btn btn-danger">Batalkan</a>
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

                $('#kembalian').text(formatMoney(sisa));
            } else {

                $('#kembalian').text("Rp 0");
            }
            function formatMoney(a){
                return new Intl.NumberFormat("id-ID",{
                    style: "currency",
                    currency: "IDR",
                }).format(a);
            }
        });
    })
</script>



@endsection
