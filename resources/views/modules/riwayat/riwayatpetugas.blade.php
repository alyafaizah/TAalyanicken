@extends('layouts.template-backend-sidebar-petugas')
<!--begin::Content-->

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
                    <div class="card card-custom">
                        <!--begin::Header-->
                        <div class="card-header flex-wrap border-0 pt-20 pb-0">
                            <h3 class="card-title align-items-start flex-column">
                                <span class="card-label font-weight-bolder font-size-h3 text-dark">Riwayat
                                    Transaksi</span>
                            </h3>
                            <div class="card-toolbar">

                            </div>
                        </div>
                        <!--end::Header-->
                        <!--begin::Body-->
                        <div class="card-body">
                            <!--begin: Search Form-->
                            <!--begin::Search Form-->
                            <div class="mb-10">
                                <div class="row align-items-center">
                                    <div class="col-lg-9 col-xl-8">
                                        <div class="row align-items-center">
                                            <div class="col-md-5 my-2 my-md-0">
                                                <form action="/riwayatpetugas" method="GET">
                                                    <div class="input-icon">
                                                        <input type="text" name="search" class="form-control" placeholder="Cari berdasarkan kode order" id="" />
                                                        <span>
                                                            <i class="flaticon2-search-1 text-muted"></i>
                                                        </span>
                                                    </div>


                                            </div>
                                            <button class="btn btn-light-primary px-6 font-weight-bold" type="submit">
                                                Cari
                                            </button>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!--end::Search Form-->
                            <!--end: Search Form-->
                            <!--begin: Datatable-->
                            <div class="datatable datatable-bordered datatable-head-custom datatable-default datatable-primary datatable-loaded" id="kt_datatable">
                                <table class="table table-bordered table-hover table-checkable" id="kt_datatable" style="margin-top: 13px !important">
                                    <thead>
                                        <tr>

                                            <th>Kode Order</th>
                                            <th>Status</th>
                                            <th>Tanggal Kunjungan</th>
                                            <th>Jenis Pemesanan</th>
                                            <th>Jumlah Tiket</th>
                                            <th>Total</th>
                                        </tr>
                                    </thead>
                                    @foreach ( $pemesanan AS $e => $p )
                                    <tbody>
                                        <tr>
                                            <td>{{ $p->kd_order }}</td>
                                            <td>@php

                                                $color="";
                                                $text="";

                                                if ( $p->status == "diproses" ) {

                                                $color = "warning";
                                                $text="diproses";
                                                } else if ( $p->status == "diterima" ) {

                                                $color = "success";
                                                $text="diterima";

                                                } else if ( $p->status == "dibatalkan" ) {

                                                $color = "danger";
                                                $text="dibatalkan";

                                                } else if ( $p->status == "berhasil" ) {

                                                $color = "primary";
                                                $text="berhasil";
                                                }

                                                @endphp
                                                <span class="label label-light-{{ $color }} label-pill label-inline mr-2">{{ $text }}</span>
                                            </td>
                                            <td>{{date('d M Y', strtotime($p->tgl_kunjungan))}}</td>
                                            <td>
                                                @php

                                                if ( $p->jenis_pemesanan == "online" ) {

                                                $dot = "danger";
                                                $color = "danger";
                                                $text = "online";
                                                }
                                                else{
                                                $dot = "primary";
                                                $color = "primary";
                                                $text = "offline";
                                                }

                                                @endphp
                                                <span class="label label-{{ $dot }} label-dot mr-2"></span>
                                                <span class="font-weight-bold text-{{ $color }}">{{ $text }}</span>
                                            </td>
                                            <td>{{ $p->jumlah }}</td>
                                            <td style="color:red;">Rp {{ number_format ($p->total, 0, ',','.') }}</td>
                                        </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                            </div>
                            <!--end: Datatable-->
                        </div>
                        <!--end::Body-->
                    </div>
                    <!--end::Card-->
                </div>
                <!--end::SearchContent-->
            </div>
            <!--end::Teachers-->
        </div>
        <!--end::Container-->
    </div>
    <!--end::Entry-->
</div>


<script type="text/javascript">
    $(".filter").on('change', function() {
        jenis_pemesanan = $("#filter-jenis-pemesanan").val()
    })
</script>
<!--end::Content-->
@endsection