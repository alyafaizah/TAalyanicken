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
                                    <div class="d-flex justify-content-between text-white pt-6">
                                        <div class="d-flex flex-column flex-root">
                                            <span class="font-weight-bolde mb-2r">DATA</span>
                                            <span class="opacity-70">Januari 2022</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- end: Invoice header-->
                            <!-- begin: Invoice body-->
                            <div class="row justify-content-center py-8 px-8 py-md-10 px-md-0">
                                <div class="col-md-9">
                                    <div class="table-responsive">
                                        <table class="table">
                                            <thead>
                                                <tr>
                                                    <th class="pl-0 font-weight-bold text-muted text-uppercase">No</th>
                                                    <th class="text-right font-weight-bold text-muted text-uppercase">Tanggal</th>
                                                    <th class="text-right font-weight-bold text-muted text-uppercase">Banyak Transaksi</th>
                                                    <th class="text-right pr-0 font-weight-bold text-muted text-uppercase">Pemasukan</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                            @foreach($data as $e=>$d)
                                                <tr class="font-weight-boldest font-size-lg">
                                                    <td class="pl-0 pt-7">{{$e+1}}</td>
                                                    <td class="text-right pt-7">{{date('d M Y', strtotime($d->tanggal))}}</td>
                                                    <td class="text-right pt-7">{{$d->jumlah}}</td>
                                                    <td class="text-danger pr-0 pt-7 text-right">{{number_format($d->pemasukan)}}</td>
                                                </tr>
                                                <tr class="font-weight-boldest font-size-lg">
                                                    <td class="pl-0 pt-7">Creative Design</td>
                                                    <td class="text-right pt-7">80</td>
                                                    <td class="text-right pt-7">$40.00</td>
                                                    <td class="text-danger pr-0 pt-7 text-right">$3200.00</td>
                                                </tr>
                                                @endforeach
                                            </tbody>
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
                                            <span class="font-size-h2 font-weight-boldest text-danger mb-1">Rp 5000000</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- end: Invoice footer-->
                            <!-- begin: Invoice action-->
                            <div class="row justify-content-center py-8 px-8 py-md-10 px-md-0">
                                <div class="col-md-9">
                                    <div class="d-flex justify-content-between">
                                        <button type="button" class="btn btn-primary font-weight-bold" onclick="window.print();">Cetak PDF</button>
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