<!-- extends('layouts.template-backend') -->
@extends('layouts.template-backend-sidebar')

@section('main-content')

<!--begin::Content-->
<div class="content d-flex flex-column flex-column-fluid" id="kt_content">
    <!--begin::Subheader-->
    <div class="subheader py-5 py-lg-10 gutter-b subheader-transparent">
        <div class="container d-flex flex-column">
            <!--begin::Entry-->
            <div class="d-flex flex-column-fluid">
                <!--begin::Container-->
                <div class="container">
                    <!-- begin::Card-->
                    <div class="card card-custom overflow-hidden">
                        <div class="card-body p-0">
                            <!-- begin: Invoice-->
                            <!-- begin: Invoice header-->
                            <div class="row justify-content-center bgi-size-cover bgi-no-repeat py-8 px-8 px-md-0" style="background-image: url(assets/media/bg/bg-6.jpg);">
                                <div class="col-md-9">
                                    <div class="d-flex justify-content-between pb-10 pb-md-20 flex-column flex-md-row">
                                        <h2 class="display-4 text-white font-weight-boldest mb-10">LAPORAN PEMESANAN</h2>
                                        <div class="d-flex flex-column align-items-md-end px-0">
                                            <span class="text-white d-flex flex-column align-items-md-end opacity-70">
                                                <h3 class="display-4 text-white font-weight-boldest mb-10">Wisata Kandang Sapi</h3>
                                                <span>Jl. Anjasmoro Dsn Tukum, RT.06/RW.04, Notorejo, Wonosalam,</span>
                                                <span>Kec. Wonosalam, Kabupaten Jombang, Jawa Timur 61476</span>
                                            </span>
                                        </div>
                                    </div>
                                    <div class="border-bottom opacity-20"></div>
                                    
                                </div>
                            </div>
                            <!-- end: Invoice header-->
                            <!-- begin: Invoice body-->
                            <div class="row justify-content-center py-8 px-8 py-md-10 px-md-0">
                                <div class="col-md-9">
                                    <form class="form-inline"  method="get" action="/filterlaporanonline">
                                        <div class="form-group mb-2">
                                            <label class="mr-3" for="email">Tanggal Awal:</label>
                                            <input type="date" class="form-control" name="tanggal_akhir" placeholder="Tanggal Akhir">

                                        </div>
                                        <div class="form-group mx-sm-5 mb-2">
                                            <label class="mr-3" for="email">Tanggal Akhir:</label>
                                            <input type="date" class="form-control sm-3" name="tanggal_akhir" placeholder="Tanggal Akhir">
                                        </div>
                                        <button type="submit" class="btn btn-primary mb-2">filter</button>
                                    </form>
                                    @php
                                    $pemasukan=0
                                    @endphp
                                    <div class="table-responsive">
                                        <table class="table">
                                            <thead>
                                                <tr>
                                                    <th class="pl-0 font-weight-bold text-muted text-uppercase">Order Id</th>
                                                    <th class="text-right font-weight-bold text-muted text-uppercase">Jenis Tiket</th>
                                                    <th class="text-right font-weight-bold text-muted text-uppercase">Tanggal Kunjungan</th>
                                                    <th class="text-right font-weight-bold text-muted text-uppercase">Tanggal Pemesanan</th>
                                                    <th class="text-right pr-0 font-weight-bold text-muted text-uppercase">Jumlah</th>
                                                    <th class="text-right pr-0 font-weight-bold text-muted text-uppercase">Total</th>
                                                </tr>
                                            </thead>
                                            @foreach ( $pemesanan AS $e => $p )
                                            @php
                                            $pemasukan+=$p->total;
                                            @endphp
                                            <tbody>
                                                <tr class="font-weight-boldest font-size-lg">
                                                    <td class="pl-0 pt-7">{{$p->order_id}}</td>
                                                    <td class="text-right pt-7">{{$p->jenis_tiket}}</td>
                                                    <td class="text-right pt-7">{{date('d M Y', strtotime($p->tgl_kunjungan))}}</td>
                                                    <td class="text-right pt-7">{{date('d M Y', strtotime($p->created_at))}}</td>
                                                    <td class="text-danger pr-0 pt-7 text-right">{{$p->jumlah}}</td>
                                                    <td class="text-danger pr-0 pt-7 text-right">{{number_format($p->total)}}</td>
                                                </tr>

                                            </tbody>
                                            @endforeach
                                        </table>
                                    </div>
                                </div>
                            </div>
                            <!-- end: Invoice body-->
                            <!-- begin: Invoice footer-->

                            <div class="row justify-content-center bg-gray-100 py-8 px-8 py-md-10 px-md-0">
                                <div class="col-md-9">
                                    <div class="d-flex justify-content-between flex-column flex-md-row font-size-lg">
                                        <div class="d-flex flex-column mb-10 mb-md-0">
                                        </div>
                                        <div class="d-flex flex-column text-md-right">
                                            <span class="font-size-lg font-weight-bolder mb-1">TOTAL PEMASUKAN</span>
                                            <span class="font-size-h2 font-weight-boldest text-danger mb-1">{{number_format($pemasukan)}}</span>
                                        </div>
                                    </div>
                                </div>

                            </div>

                            <!-- end: Invoice footer-->
                            <!-- begin: Invoice action-->
                            <div class="row justify-content-center py-8 px-8 py-md-10 px-md-0">
                                <div class="col-md-9">
                                    <div class="d-flex justify-content-between">
                                        <a href="/cetakpdfoffline" class="btn btn-light-primary font-weight-bolder" aria-haspopup="true" aria-expanded="false">
                                            <span class="svg-icon svg-icon-md">
                                                <!--begin::Svg Icon | path:/metronic/theme/html/demo4/dist/assets/media/svg/icons/Design/PenAndRuller.svg-->
                                                <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
                                                    <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                                        <rect x="0" y="0" width="24" height="24" />
                                                        <path d="M3,16 L5,16 C5.55228475,16 6,15.5522847 6,15 C6,14.4477153 5.55228475,14 5,14 L3,14 L3,12 L5,12 C5.55228475,12 6,11.5522847 6,11 C6,10.4477153 5.55228475,10 5,10 L3,10 L3,8 L5,8 C5.55228475,8 6,7.55228475 6,7 C6,6.44771525 5.55228475,6 5,6 L3,6 L3,4 C3,3.44771525 3.44771525,3 4,3 L10,3 C10.5522847,3 11,3.44771525 11,4 L11,19 C11,19.5522847 10.5522847,20 10,20 L4,20 C3.44771525,20 3,19.5522847 3,19 L3,16 Z" fill="#000000" opacity="0.3" />
                                                        <path d="M16,3 L19,3 C20.1045695,3 21,3.8954305 21,5 L21,15.2485298 C21,15.7329761 20.8241635,16.200956 20.5051534,16.565539 L17.8762883,19.5699562 C17.6944473,19.7777745 17.378566,19.7988332 17.1707477,19.6169922 C17.1540423,19.602375 17.1383289,19.5866616 17.1237117,19.5699562 L14.4948466,16.565539 C14.1758365,16.200956 14,15.7329761 14,15.2485298 L14,5 C14,3.8954305 14.8954305,3 16,3 Z" fill="#000000" />
                                                    </g>
                                                </svg>
                                                <!--end::Svg Icon-->
                                            </span>Cetak PDF</a>
                                    </div>

                                </div>
                            </div>
                            <!-- end: Invoice action-->
                            <!-- end: Invoice-->
                        </div>
                    </div>
                    <!-- end::Card-->
                </div>
            </div>
        </div>
    </div>
</div>

@endsection