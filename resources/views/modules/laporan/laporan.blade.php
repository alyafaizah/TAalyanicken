<!-- extends('layouts.template-backend') -->
@extends('layouts.template-backend-sidebar')

@section('main-content')
<div class="content d-flex flex-column flex-column-fluid" id="kt_content">
    <!--begin::Subheader-->
    <div class="subheader py-5 py-lg-10 gutter-b subheader-transparent" id="kt_subheader">
        <div class="container d-flex flex-column">
            <!--begin::Base Table Widget 1-->
            <div class="card card-custom">
                <!--begin::Header-->
                <div class="card card-custom card-stretch gutter-b">
                    <!--begin::Header-->
                    <div class="card-header border-0 pt-5">
                        <h3 class="card-title align-items-start flex-column">
                            <span class="card-label font-weight-bolder text-dark">Laporan</span>
                            <span class="text-muted mt-3 font-weight-bold font-size-sm">Laporan Penjualan Tiket</span>
                        </h3>
                    </div>
                    <!--end::Header-->
                    <!--begin::Body-->
                    <div class="card-body pt-2 pb-0 mt-n3">
                        <div class="tab-content mt-5" id="myTabTables2">
                            <!--begin::Tap pane-->
                            <div class="tab-pane fade" id="kt_tab_pane_2_1" role="tabpanel" aria-labelledby="kt_tab_pane_2_1">
                            </div>
                            <!--end::Tap pane-->
                            <!--begin::Tap pane-->
                            <!--end::Tap pane-->
                            <!--begin::Tap pane-->
                            <div class="tab-pane fade show active" id="kt_tab_pane_2_3" role="tabpanel" aria-labelledby="kt_tab_pane_2_3">
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
                                                            <img src="assets/media/svg/misc/008-infography.svg" class="h-50 align-self-center" alt="" />
                                                        </span>
                                                    </div>
                                                </td>
                                                <td class="pl-0">
                                                    <a href="/laporanoffline" class="text-dark font-weight-bolder text-hover-primary mb-1 font-size-lg">Pemesanan Tiket
                                                        Offline</a>
                                                </td>
                                            </tr>
                                            <!--end::offline-->
                                            <!--begin::online-->
                                            <tr>
                                                <td class="pl-0 py-5">
                                                    <div class="symbol symbol-50 symbol-light mr-2">
                                                        <span class="symbol-label">
                                                            <img src="assets/media/svg/misc/002-eolic-energy.svg" class="h-50 align-self-center" alt="" />
                                                        </span>
                                                    </div>
                                                </td>
                                                <td class="pl-0">
                                                    <a href="/laporanonline" class="text-dark font-weight-bolder text-hover-primary mb-1 font-size-lg">Pemesanan Tiket
                                                        Online</a>
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
                <!--end::Header-->
            </div>
            <!--end::Base Table Widget 1-->
        </div>
    </div>
</div>
@endsection