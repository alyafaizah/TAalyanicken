<!-- extends('layouts.template-backend') -->
@extends('layouts.template-backend-sidebar')

@section('main-content')

<!--begin::Content-->
<div class="content d-flex flex-column flex-column-fluid" id="kt_content">
    <!--begin::Subheader-->
    <div class="subheader py-5 py-lg-10 gutter-b subheader-transparent" id="kt_subheader"
        style="background-color: #663259; background-position: right bottom; background-size: auto 100%; background-repeat: no-repeat; background-image: url(assets/media/svg/patterns/taieri.svg)">
        <div class="container d-flex flex-column">

        </div>
    </div>
    <!--end::Subheader-->
    <!--begin::Modal-->
    <div class="modal fade" id="subheader7Modal" data-backdrop="static" tabindex="-1" role="dialog"
        aria-labelledby="staticBackdrop" aria-hidden="true">
        <div class="modal-dialog modal-xl" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Select Location</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <i aria-hidden="true" class="ki ki-close"></i>
                    </button>
                </div>
                <div class="modal-body">
                    <div id="kt_subheader_leaflet" style="height:450px; width: 100%;"></div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-light-primary font-weight-bold"
                        data-dismiss="modal">Cancel</button>
                    <button id="submit" type="button" class="btn btn-primary font-weight-bold"
                        data-dismiss="modal">Apply</button>
                </div>
            </div>
        </div>
    </div>
    <!--end::Modal-->
    <!--begin::Entry-->
    <div class="d-flex flex-column-fluid">
        <!--begin::Container-->
        <div class="container">
            <!--begin::Dashboard-->
            <!--begin::Row-->
            <div class="row">
                <div class="col-xl-6">
                    <!--begin::Advance Table Widget 10-->
                    <!--begin::Base Table Widget 2-->
                    <div class="card card-custom card-stretch gutter-b">
                        <!--begin::Header-->
                        <div class="card-header border-0 pt-5">
                            <h3 class="card-title align-items-start flex-column">
                                <span class="card-label font-weight-bolder text-dark">Transaksi {{ date('d F Y') }}</span>
                                <span class="text-muted mt-3 font-weight-bold font-size-sm">Transaksi yang
                                    terekam</span>
                            </h3>
                            <div class="card-toolbar">
                                <ul class="nav nav-pills nav-pills-sm nav-dark-75">
                                    <li class="nav-item">
                                        <a class="nav-link py-2 px-4 active" data-toggle="tab"
                                            href="#kt_tab_pane_2_3">Hari</a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <!--end::Header-->
                        <!--begin::Body-->
                        <div class="card-body pt-2 pb-0 mt-n3">
                            <div class="tab-content mt-5" id="myTabTables2">
                                <!--begin::Tap pane-->
                                <div class="tab-pane fade" id="kt_tab_pane_2_1" role="tabpanel"
                                    aria-labelledby="kt_tab_pane_2_1">
                                </div>
                                <!--end::Tap pane-->
                                <!--begin::Tap pane-->
                                <!--end::Tap pane-->
                                <!--begin::Tap pane-->
                                <div class="tab-pane fade show active" id="kt_tab_pane_2_3" role="tabpanel"
                                    aria-labelledby="kt_tab_pane_2_3">
                                    <!--begin::Table HARI-->
                                    <div class="table-responsive">
                                        <table class="table table-borderless table-vertical-center">
                                            <thead>
                                                <tr>
                                                    <th class="p-0 w-50px"></th>
                                                    <th class="p-0 min-w-150px"></th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr>
                                                    <!--begin::offline-->
                                                    <td class="pl-0 py-5">
                                                        <div class="symbol symbol-50 symbol-light mr-2">
                                                            <span class="symbol-label">
                                                            <img src="assets/media/svg/misc/008-infography.svg"
                                                                    class="h-50 align-self-center" alt="" />
                                                            </span>
                                                        </div>
                                                    </td>
                                                    <td class="pl-0">
                                                        <a href="#"
                                                            class="text-dark font-weight-bolder text-hover-primary mb-1 font-size-lg">Pembelian
                                                            Offline</a>
                                                        <span class="text-muted font-weight-bold d-block">Successful
                                                            Fellas</span>
                                                    </td>

                                                    <td class="text-right pr-0">
                                                        <span class="font-weight-bold">{{$transaksioffline->banyaktransaksioffline}}</span>
                                                    </td>
                                                </tr>
                                                <!--end::offline-->
                                                <!--begin::online-->
                                                <tr>
                                                    <td class="pl-0 py-5">
                                                        <div class="symbol symbol-50 symbol-light mr-2">
                                                            <span class="symbol-label">
                                                            <img src="assets/media/svg/misc/002-eolic-energy.svg"
                                                                    class="h-50 align-self-center" alt="" />
                                                            </span>
                                                        </div>
                                                    </td>
                                                    <td class="pl-0">
                                                        <a href="#"
                                                            class="text-dark font-weight-bolder text-hover-primary mb-1 font-size-lg">Pembelian
                                                            Online</a>
                                                        <span class="text-muted font-weight-bold d-block">Successful
                                                            Fellas</span>
                                                    </td>

                                                    <td class="text-right pr-0">
                                                        <span class="font-weight-bold">{{$transaksionline->banyaktransaksionline}}</span>
                                                    </td>
                                                </tr>
                                                <!--end::online-->
                                            </tbody>
                                        </table>
                                    </div>
                                    <!--end::Table-->
                                </div>
                                <!--end::Tap pane-->
                            </div>
                        </div>
                        <!--end::Body-->
                    </div>
                    <!--end::Base Table Widget 2-->
                    <!--end::Advance Table Widget 10-->
                </div>
                <div class="col-xl-6">
                    <!--begin::Advance Table Widget 10-->
                    <!--begin::Base Table Widget 2-->
                    <div class="card card-custom card-stretch gutter-b">
                        <!--begin::Header-->
                        <div class="card-header border-0 pt-5">
                            <h3 class="card-title align-items-start flex-column">
                                <span class="card-label font-weight-bolder text-dark">Pendapatan {{ date('d F Y') }}</span>
                                <span class="text-muted mt-3 font-weight-bold font-size-sm">Nomimal uang yang di
                                    dapat</span>
                                    
                            </h3>
                            <div class="card-toolbar">
                                <ul class="nav nav-pills nav-pills-sm nav-dark-75">
                                    <li class="nav-item">
                                        <a class="nav-link py-2 px-4 active" data-toggle="tab"
                                            href="#kt_tab_pane_3_3">Hari</a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <!--end::Header-->
                        <!--begin::Body-->
                        <div class="card-body pt-2 pb-0 mt-n3">
                            <div class="tab-content mt-5" id="myTabTables2">
                                
                                <!--begin::Tap pane-->
                                <div class="tab-pane fade show active" id="kt_tab_pane_3_3" role="tabpanel"
                                    aria-labelledby="kt_tab_pane_3_3">
                                    <!--begin::Table HARI-->
                                    <div class="table-responsive">
                                        <table class="table table-borderless table-vertical-center">
                                            <thead>
                                                <tr>
                                                    <th class="p-0 w-50px"></th>
                                                    <th class="p-0 min-w-150px"></th>
                                                </tr>
                                            </thead>
                                            <tbody>

                                                <tr>
                                                    <!--begin::offline-->
                                                    <td class="pl-0 py-5">
                                                        <div class="symbol symbol-50 symbol-light mr-2">
                                                            <span class="symbol-label">
                                                            <img src="assets/media/svg/misc/011-swarm.svg"
                                                                    class="h-50 align-self-center" alt="" />
                                                            </span>
                                                        </div>
                                                    </td>
                                                    <td class="pl-0">
                                                        <a href="#"
                                                            class="text-dark font-weight-bolder text-hover-primary mb-1 font-size-lg">Pendapatan
                                                            Offline</a>
                                                        <span class="text-muted font-weight-bold d-block">Successful
                                                            Fellas</span>
                                                    </td>

                                                    <td class="text-right pr-0">
                                                        <span class="font-weight-bold">Rp {{ number_format($transaksioffline->pendapatanoffline) }}</span>
                                                    </td>
                                                </tr>
                                                <!--end::offline-->
                                                <!--begin::online-->
                                                <tr>
                                                    <td class="pl-0 py-5">
                                                        <div class="symbol symbol-50 symbol-light mr-2">
                                                            <span class="symbol-label">
                                                            <img src="assets/media/svg/misc/013-rgb.svg"
                                                                    class="h-50 align-self-center" alt="" />
                                                            </span>
                                                        </div>
                                                    </td>
                                                    <td class="pl-0">
                                                        <a href="#"
                                                            class="text-dark font-weight-bolder text-hover-primary mb-1 font-size-lg">Pendapatan
                                                            Online</a>
                                                        <span class="text-muted font-weight-bold d-block">Successful
                                                            Fellas</span>
                                                    </td>

                                                    <td class="text-right pr-0">
                                                        <span class="font-weight-bold">Rp {{ number_format($transaksionline->pendapatanonline) }}</span>
                                                    </td>
                                                </tr>

                                                <!--end::online-->
                                            </tbody>
                                        </table>
                                    </div>
                                    <!--end::Table-->
                                </div>
                                <!--end::Tap pane-->
                            </div>
                        </div>
                        <!--end::Body-->
                    </div>
                    <!--end::Base Table Widget 2-->
                    <!--end::Advance Table Widget 10-->
                </div>
            </div>
            <!--end::Row-->

            <!--end::Dashboard-->
        </div>
        <!--end::Container-->
    </div>
    <!--end::Entry-->
</div>
<!--end::Content-->
@endsection