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
                    <div class="card card-custom">
                        <!--begin::Header-->
                        <div class="card-header flex-wrap border-0 pt-20 pb-0">
                            <h3 class="card-title align-items-start flex-column">
                                <span class="card-label font-weight-bolder font-size-h3 text-dark">Riwayat
                                    Transaksi</span>
                            </h3>
                            <div class="card-toolbar">
                                <!--begin::Button-->
                                <a href="/checkout" class="btn btn-primary font-weight-bolder">
                                    <span class="svg-icon svg-icon-md">
                                        <!--begin::Svg Icon | path:assets/media/svg/icons/Design/Flatten.svg-->
                                        <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
                                            <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                                <rect x="0" y="0" width="24" height="24" />
                                                <circle fill="#000000" cx="9" cy="15" r="6" />
                                                <path d="M8.8012943,7.00241953 C9.83837775,5.20768121 11.7781543,4 14,4 C17.3137085,4 20,6.6862915 20,10 C20,12.2218457 18.7923188,14.1616223 16.9975805,15.1987057 C16.9991904,15.1326658 17,15.0664274 17,15 C17,10.581722 13.418278,7 9,7 C8.93357256,7 8.86733422,7.00080962 8.8012943,7.00241953 Z" fill="#000000" opacity="0.3" />
                                            </g>
                                        </svg>
                                        <!--end::Svg Icon-->
                                    </span>Transaksi Baru</a>
                                <!--end::Button-->
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
                                            <div class="col-md-4 my-2 my-md-0">
                                                <select class="form-control form-control-solid" id="kt_datatable_search_status">
                                                    <option value="">Status</option>
                                                    <option value="1">Diproses</option>
                                                    <option value="2">Dibatalkan</option>
                                                    <option value="3">Berhasil</option>
                                                </select>
                                            </div>
                                            <div class="col-md-4 my-2 my-md-0">
                                                <a href="#" class="btn btn-light-primary px-6 font-weight-bold">Search</a>
                                            </div>
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
                                            <th><span></span></th>
                                            <th>Kode Order</th>
                                            <th>Status</th>
                                            <th>Tanggal Kunjungan</th>
                                            <th>Jumlah Tiket</th>
                                            <th>Total</th>
                                        </tr>
                                    </thead>
                                    @foreach ( $pemesanan AS $e => $p )
                                    <tbody>
                                        <tr>
                                            <td>
                                                <a class="datatable-toggle-detail" href="/detailriwayat/{{ $p->kd_order }}"><i class="fa fa-caret-right"></i></a>
                                            </td>
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
                <!--end::Content-->
            </div>
            <!--end::Teachers-->
        </div>
        <!--end::Container-->
    </div>
    <!--end::Entry-->
</div>
<!--end::Content-->
@endsection