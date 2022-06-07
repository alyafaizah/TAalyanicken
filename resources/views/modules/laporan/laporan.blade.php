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
                <div class="card-header flex-wrap py-5">
                    <h2 class="card-title align-items-start flex-column">
                        <span class="card-label font-weight-bolder text-dark">Laporan Pemesanan Tiket</span>
                        <span class="text-muted mt-3 font-weight-bold font-size-sm">Wisata Kandang Sapi Wonosalam</span>
                    </h2>
                    <div class="card-toolbar">
                        <ul class="nav nav-pills nav-pills-sm nav-dark-75">
                            <li class="nav-item">
                                <a class="nav-link py-2 px-4" data-toggle="tab" href="#kt_tab_pane_1_1">Mingguan</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link py-2 px-4" data-toggle="tab" href="#kt_tab_pane_1_2">Bulanan</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link py-2 px-4" data-toggle="tab" href="#kt_tab_pane_1_3">Grafik</a>
                            </li>
                            <a href="/download" class="btn btn-success btn-sm">Cetak PDF</a>
                        </ul>
                    </div>
                </div>
                <!--end::Header-->
                <!--begin::Body-->
                <div class="card-body pt-2 pb-0 mt-n3">
                    <div class="tab-content mt-5" id="myTabTables1">
                        <!--begin::Tap pane-->
                        <div class="tab-pane fade" id="kt_tab_pane_1_1" role="tabpanel" aria-labelledby="kt_tab_pane_1_1">
                            <!--begin::Table Mingguan-->
                            <div class="table-responsive">
                                <table class="table table-borderless table-vertical-center">
                                    <thead>
                                        <tr>
                                            <th class="p-0 w-50px"></th>
                                            <th class="p-0 min-w-200px"></th>
                                            <th class="p-0 min-w-100px"></th>
                                            <th class="p-0 min-w-40px"></th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <th class="pl-0 py-5">
                                                <div class="symbol symbol-50 symbol-light mr-2">
                                                    <span class="symbol-label">
                                                        <i class="flaticon2-line-chart fa-2x"></i>
                                                    </span>
                                                </div>
                                            </th>
                                            <td class="py-6 pl-0">
                                                <a href="#" class="text-dark font-weight-bolder text-hover-primary mb-1 font-size-lg">Minggu 1</a>
                                                <span class="text-muted font-weight-bold d-block">1-7 Mei 2022</span>
                                            </td>
                                            <td>
                                                <div class="d-flex flex-column w-100 mr-2">
                                                    <div class="d-flex align-items-center justify-content-between mb-2">
                                                        <span class="text-muted mr-2 font-size-sm font-weight-bold">71%</span>
                                                        <span class="text-muted font-size-sm font-weight-bold">Progress</span>
                                                    </div>
                                                    <div class="progress progress-xs w-100">
                                                        <div class="progress-bar bg-danger" role="progressbar" style="width: 71%;" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100"></div>
                                                    </div>
                                                </div>
                                            </td>
                                            <td class="text-right pr-0">
                                                <a href="#" class="btn btn-icon btn-light btn-sm">
                                                    <span class="svg-icon svg-icon-md svg-icon-success">
                                                        <!--begin::Svg Icon | path:/metronic/theme/html/demo4/dist/assets/media/svg/icons/Navigation/Arrow-right.svg-->
                                                        <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
                                                            <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                                                <polygon points="0 0 24 0 24 24 0 24" />
                                                                <rect fill="#000000" opacity="0.3" transform="translate(12.000000, 12.000000) rotate(-90.000000) translate(-12.000000, -12.000000)" x="11" y="5" width="2" height="14" rx="1" />
                                                                <path d="M9.70710318,15.7071045 C9.31657888,16.0976288 8.68341391,16.0976288 8.29288961,15.7071045 C7.90236532,15.3165802 7.90236532,14.6834152 8.29288961,14.2928909 L14.2928896,8.29289093 C14.6714686,7.914312 15.281055,7.90106637 15.675721,8.26284357 L21.675721,13.7628436 C22.08284,14.136036 22.1103429,14.7686034 21.7371505,15.1757223 C21.3639581,15.5828413 20.7313908,15.6103443 20.3242718,15.2371519 L15.0300721,10.3841355 L9.70710318,15.7071045 Z" fill="#000000" fill-rule="nonzero" transform="translate(14.999999, 11.999997) scale(1, -1) rotate(90.000000) translate(-14.999999, -11.999997)" />
                                                            </g>
                                                        </svg>
                                                        <!--end::Svg Icon-->
                                                    </span>
                                                </a>
                                            </td>
                                        </tr>
                                        <tr>
                                            <th class="pl-0 py-5">
                                                <div class="symbol symbol-50 symbol-light mr-2">
                                                    <span class="symbol-label">
                                                        <i class="flaticon2-line-chart fa-2x"></i>
                                                    </span>
                                                </div>
                                            </th>
                                            <td class="pl-0">
                                                <a href="#" class="text-dark font-weight-bolder text-hover-primary mb-1 font-size-lg">Minggu 2</a>
                                                <span class="text-muted font-weight-bold d-block">8-14 Mei 2022</span>
                                            </td>
                                            <td>
                                                <div class="d-flex flex-column w-100 mr-2">
                                                    <div class="d-flex align-items-center justify-content-between mb-2">
                                                        <span class="text-muted mr-2 font-size-sm font-weight-bold">50%</span>
                                                        <span class="text-muted font-size-sm font-weight-bold">Progress</span>
                                                    </div>
                                                    <div class="progress progress-xs w-100">
                                                        <div class="progress-bar bg-info" role="progressbar" style="width: 50%;" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100"></div>
                                                    </div>
                                                </div>
                                            </td>
                                            <td class="text-right pr-0">
                                                <a href="#" class="btn btn-icon btn-light btn-sm">
                                                    <span class="svg-icon svg-icon-md svg-icon-success">
                                                        <!--begin::Svg Icon | path:/metronic/theme/html/demo4/dist/assets/media/svg/icons/Navigation/Arrow-right.svg-->
                                                        <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
                                                            <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                                                <polygon points="0 0 24 0 24 24 0 24" />
                                                                <rect fill="#000000" opacity="0.3" transform="translate(12.000000, 12.000000) rotate(-90.000000) translate(-12.000000, -12.000000)" x="11" y="5" width="2" height="14" rx="1" />
                                                                <path d="M9.70710318,15.7071045 C9.31657888,16.0976288 8.68341391,16.0976288 8.29288961,15.7071045 C7.90236532,15.3165802 7.90236532,14.6834152 8.29288961,14.2928909 L14.2928896,8.29289093 C14.6714686,7.914312 15.281055,7.90106637 15.675721,8.26284357 L21.675721,13.7628436 C22.08284,14.136036 22.1103429,14.7686034 21.7371505,15.1757223 C21.3639581,15.5828413 20.7313908,15.6103443 20.3242718,15.2371519 L15.0300721,10.3841355 L9.70710318,15.7071045 Z" fill="#000000" fill-rule="nonzero" transform="translate(14.999999, 11.999997) scale(1, -1) rotate(90.000000) translate(-14.999999, -11.999997)" />
                                                            </g>
                                                        </svg>
                                                        <!--end::Svg Icon-->
                                                    </span>
                                                </a>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td class="pl-0 py-5">
                                                <div class="symbol symbol-50 symbol-light mr-2">
                                                    <span class="symbol-label">
                                                        <i class="flaticon2-line-chart fa-2x"></i>
                                                    </span>
                                                </div>
                                            </td>
                                            <td class="pl-0">
                                                <a href="#" class="text-dark font-weight-bolder text-hover-primary mb-1 font-size-lg">Minggu 3</a>
                                                <span class="text-muted font-weight-bold d-block">9-21 Mei 2022</span>
                                            </td>
                                            <td>
                                                <div class="d-flex flex-column w-100 mr-2">
                                                    <div class="d-flex align-items-center justify-content-between mb-2">
                                                        <span class="text-muted mr-2 font-size-sm font-weight-bold">65%</span>
                                                        <span class="text-muted font-size-sm font-weight-bold">Progress</span>
                                                    </div>
                                                    <div class="progress progress-xs w-100">
                                                        <div class="progress-bar bg-danger" role="progressbar" style="width: 65%;" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100"></div>
                                                    </div>
                                                </div>
                                            </td>
                                            <td class="text-right pr-0">
                                                <a href="#" class="btn btn-icon btn-light btn-sm">
                                                    <span class="svg-icon svg-icon-md svg-icon-success">
                                                        <!--begin::Svg Icon | path:/metronic/theme/html/demo4/dist/assets/media/svg/icons/Navigation/Arrow-right.svg-->
                                                        <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
                                                            <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                                                <polygon points="0 0 24 0 24 24 0 24" />
                                                                <rect fill="#000000" opacity="0.3" transform="translate(12.000000, 12.000000) rotate(-90.000000) translate(-12.000000, -12.000000)" x="11" y="5" width="2" height="14" rx="1" />
                                                                <path d="M9.70710318,15.7071045 C9.31657888,16.0976288 8.68341391,16.0976288 8.29288961,15.7071045 C7.90236532,15.3165802 7.90236532,14.6834152 8.29288961,14.2928909 L14.2928896,8.29289093 C14.6714686,7.914312 15.281055,7.90106637 15.675721,8.26284357 L21.675721,13.7628436 C22.08284,14.136036 22.1103429,14.7686034 21.7371505,15.1757223 C21.3639581,15.5828413 20.7313908,15.6103443 20.3242718,15.2371519 L15.0300721,10.3841355 L9.70710318,15.7071045 Z" fill="#000000" fill-rule="nonzero" transform="translate(14.999999, 11.999997) scale(1, -1) rotate(90.000000) translate(-14.999999, -11.999997)" />
                                                            </g>
                                                        </svg>
                                                        <!--end::Svg Icon-->
                                                    </span>
                                                </a>
                                            </td>
                                        </tr>
                                        <tr>
                                            <th class="pl-0 py-5">
                                                <div class="symbol symbol-50 symbol-light mr-2">
                                                    <span class="symbol-label">
                                                        <i class="flaticon2-line-chart fa-2x"></i>
                                                    </span>
                                                </div>
                                            </th>
                                            <td class="pl-0">
                                                <a href="#" class="text-dark font-weight-bolder text-hover-primary mb-1 font-size-lg">Minggu 4</a>
                                                <span class="text-muted font-weight-bold d-block">22-28 Mei 2022</span>
                                            </td>
                                            <td>
                                                <div class="d-flex flex-column w-100 mr-2">
                                                    <div class="d-flex align-items-center justify-content-between mb-2">
                                                        <span class="text-muted mr-2 font-size-sm font-weight-bold">83%</span>
                                                        <span class="text-muted font-size-sm font-weight-bold">Progress</span>
                                                    </div>
                                                    <div class="progress progress-xs w-100">
                                                        <div class="progress-bar bg-success" role="progressbar" style="width: 83%;" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100"></div>
                                                    </div>
                                                </div>
                                            </td>
                                            <td class="text-right pr-0">
                                                <a href="#" class="btn btn-icon btn-light btn-sm">
                                                    <span class="svg-icon svg-icon-md svg-icon-success">
                                                        <!--begin::Svg Icon | path:/metronic/theme/html/demo4/dist/assets/media/svg/icons/Navigation/Arrow-right.svg-->
                                                        <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
                                                            <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                                                <polygon points="0 0 24 0 24 24 0 24" />
                                                                <rect fill="#000000" opacity="0.3" transform="translate(12.000000, 12.000000) rotate(-90.000000) translate(-12.000000, -12.000000)" x="11" y="5" width="2" height="14" rx="1" />
                                                                <path d="M9.70710318,15.7071045 C9.31657888,16.0976288 8.68341391,16.0976288 8.29288961,15.7071045 C7.90236532,15.3165802 7.90236532,14.6834152 8.29288961,14.2928909 L14.2928896,8.29289093 C14.6714686,7.914312 15.281055,7.90106637 15.675721,8.26284357 L21.675721,13.7628436 C22.08284,14.136036 22.1103429,14.7686034 21.7371505,15.1757223 C21.3639581,15.5828413 20.7313908,15.6103443 20.3242718,15.2371519 L15.0300721,10.3841355 L9.70710318,15.7071045 Z" fill="#000000" fill-rule="nonzero" transform="translate(14.999999, 11.999997) scale(1, -1) rotate(90.000000) translate(-14.999999, -11.999997)" />
                                                            </g>
                                                        </svg>
                                                        <!--end::Svg Icon-->
                                                    </span>
                                                </a>
                                            </td>
                                        </tr>
                                        <tr>
                                            <th class="pl-0 py-5">
                                                <div class="symbol symbol-50 symbol-light mr-2">
                                                    <span class="symbol-label">
                                                        <i class="flaticon2-line-chart fa-2x"></i>
                                                    </span>
                                                </div>
                                            </th>
                                            <td class="pl-0">
                                                <a href="#" class="text-dark font-weight-bolder text-hover-primary mb-1 font-size-lg">Minggu 5</a>
                                                <span class="text-muted font-weight-bold d-block">29-31 Mei 2022</span>
                                            </td>
                                            <td>
                                                <div class="d-flex flex-column w-100 mr-2">
                                                    <div class="d-flex align-items-center justify-content-between mb-2">
                                                        <span class="text-muted mr-2 font-size-sm font-weight-bold">47%</span>
                                                        <span class="text-muted font-size-sm font-weight-bold">Progress</span>
                                                    </div>
                                                    <div class="progress progress-xs w-100">
                                                        <div class="progress-bar bg-primary" role="progressbar" style="width: 47%;" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100"></div>
                                                    </div>
                                                </div>
                                            </td>
                                            <td class="text-right pr-0">
                                                <a href="#" class="btn btn-icon btn-light btn-sm">
                                                    <span class="svg-icon svg-icon-md svg-icon-success">
                                                        <!--begin::Svg Icon | path:/metronic/theme/html/demo4/dist/assets/media/svg/icons/Navigation/Arrow-right.svg-->
                                                        <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
                                                            <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                                                <polygon points="0 0 24 0 24 24 0 24" />
                                                                <rect fill="#000000" opacity="0.3" transform="translate(12.000000, 12.000000) rotate(-90.000000) translate(-12.000000, -12.000000)" x="11" y="5" width="2" height="14" rx="1" />
                                                                <path d="M9.70710318,15.7071045 C9.31657888,16.0976288 8.68341391,16.0976288 8.29288961,15.7071045 C7.90236532,15.3165802 7.90236532,14.6834152 8.29288961,14.2928909 L14.2928896,8.29289093 C14.6714686,7.914312 15.281055,7.90106637 15.675721,8.26284357 L21.675721,13.7628436 C22.08284,14.136036 22.1103429,14.7686034 21.7371505,15.1757223 C21.3639581,15.5828413 20.7313908,15.6103443 20.3242718,15.2371519 L15.0300721,10.3841355 L9.70710318,15.7071045 Z" fill="#000000" fill-rule="nonzero" transform="translate(14.999999, 11.999997) scale(1, -1) rotate(90.000000) translate(-14.999999, -11.999997)" />
                                                            </g>
                                                        </svg>
                                                        <!--end::Svg Icon-->
                                                    </span>
                                                </a>
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                            <!--end::Table-->
                        </div>
                        <!--end::Tap pane-->
                        <!--begin::Tap pane- bulanan -->
                        <div class="tab-pane fade" id="kt_tab_pane_1_2" role="tabpanel" aria-labelledby="kt_tab_pane_1_2">
                            <!--begin::Table Bulanan-->
                            <div class="table-responsive">
                                <table class="table table-borderless table-vertical-center">
                                    <thead>
                                        <tr>
                                            <th class="p-0 w-50px"></th>
                                            <th class="p-0 min-w-200px"></th>
                                            <th class="p-0 min-w-100px"></th>
                                            <th class="p-0 min-w-40px"></th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <th class="pl-0 py-5">
                                                <div class="symbol symbol-50 symbol-light mr-2">
                                                    <span class="symbol-label">
                                                        <img src="/metronic/theme/html/demo4/dist/assets/media/svg/misc/015-telegram.svg" class="h-50 align-self-center" alt="" />
                                                    </span>
                                                </div>
                                            </th>
                                            <td class="pl-0">
                                                <a href="#" class="text-dark font-weight-bolder text-hover-primary mb-1 font-size-lg">Popular Authors</a>
                                                <span class="text-muted font-weight-bold d-block">Most Successful</span>
                                            </td>
                                            <td>
                                                <div class="d-flex flex-column w-100 mr-2">
                                                    <div class="d-flex align-items-center justify-content-between mb-2">
                                                        <span class="text-muted mr-2 font-size-sm font-weight-bold">83%</span>
                                                        <span class="text-muted font-size-sm font-weight-bold">Progress</span>
                                                    </div>
                                                    <div class="progress progress-xs w-100">
                                                        <div class="progress-bar bg-success" role="progressbar" style="width: 83%;" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100"></div>
                                                    </div>
                                                </div>
                                            </td>
                                            <td class="text-right pr-0">
                                                <a href="#" class="btn btn-icon btn-light btn-sm">
                                                    <span class="svg-icon svg-icon-md svg-icon-success">
                                                        <!--begin::Svg Icon | path:/metronic/theme/html/demo4/dist/assets/media/svg/icons/Navigation/Arrow-right.svg-->
                                                        <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
                                                            <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                                                <polygon points="0 0 24 0 24 24 0 24" />
                                                                <rect fill="#000000" opacity="0.3" transform="translate(12.000000, 12.000000) rotate(-90.000000) translate(-12.000000, -12.000000)" x="11" y="5" width="2" height="14" rx="1" />
                                                                <path d="M9.70710318,15.7071045 C9.31657888,16.0976288 8.68341391,16.0976288 8.29288961,15.7071045 C7.90236532,15.3165802 7.90236532,14.6834152 8.29288961,14.2928909 L14.2928896,8.29289093 C14.6714686,7.914312 15.281055,7.90106637 15.675721,8.26284357 L21.675721,13.7628436 C22.08284,14.136036 22.1103429,14.7686034 21.7371505,15.1757223 C21.3639581,15.5828413 20.7313908,15.6103443 20.3242718,15.2371519 L15.0300721,10.3841355 L9.70710318,15.7071045 Z" fill="#000000" fill-rule="nonzero" transform="translate(14.999999, 11.999997) scale(1, -1) rotate(90.000000) translate(-14.999999, -11.999997)" />
                                                            </g>
                                                        </svg>
                                                        <!--end::Svg Icon-->
                                                    </span>
                                                </a>
                                            </td>
                                        </tr>
                                        <tr>
                                            <th class="pl-0 py-5">
                                                <div class="symbol symbol-50 symbol-light mr-2">
                                                    <span class="symbol-label">
                                                        <img src="/metronic/theme/html/demo4/dist/assets/media/svg/misc/003-puzzle.svg" class="h-50 align-self-center" alt="" />
                                                    </span>
                                                </div>
                                            </th>
                                            <td class="pl-0">
                                                <a href="#" class="text-dark font-weight-bolder text-hover-primary mb-1 font-size-lg">New Users</a>
                                                <span class="text-muted font-weight-bold d-block">Awesome Users</span>
                                            </td>
                                            <td>
                                                <div class="d-flex flex-column w-100 mr-2">
                                                    <div class="d-flex align-items-center justify-content-between mb-2">
                                                        <span class="text-muted mr-2 font-size-sm font-weight-bold">47%</span>
                                                        <span class="text-muted font-size-sm font-weight-bold">Progress</span>
                                                    </div>
                                                    <div class="progress progress-xs w-100">
                                                        <div class="progress-bar bg-primary" role="progressbar" style="width: 47%;" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100"></div>
                                                    </div>
                                                </div>
                                            </td>
                                            <td class="text-right pr-0">
                                                <a href="#" class="btn btn-icon btn-light btn-sm">
                                                    <span class="svg-icon svg-icon-md svg-icon-success">
                                                        <!--begin::Svg Icon | path:/metronic/theme/html/demo4/dist/assets/media/svg/icons/Navigation/Arrow-right.svg-->
                                                        <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
                                                            <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                                                <polygon points="0 0 24 0 24 24 0 24" />
                                                                <rect fill="#000000" opacity="0.3" transform="translate(12.000000, 12.000000) rotate(-90.000000) translate(-12.000000, -12.000000)" x="11" y="5" width="2" height="14" rx="1" />
                                                                <path d="M9.70710318,15.7071045 C9.31657888,16.0976288 8.68341391,16.0976288 8.29288961,15.7071045 C7.90236532,15.3165802 7.90236532,14.6834152 8.29288961,14.2928909 L14.2928896,8.29289093 C14.6714686,7.914312 15.281055,7.90106637 15.675721,8.26284357 L21.675721,13.7628436 C22.08284,14.136036 22.1103429,14.7686034 21.7371505,15.1757223 C21.3639581,15.5828413 20.7313908,15.6103443 20.3242718,15.2371519 L15.0300721,10.3841355 L9.70710318,15.7071045 Z" fill="#000000" fill-rule="nonzero" transform="translate(14.999999, 11.999997) scale(1, -1) rotate(90.000000) translate(-14.999999, -11.999997)" />
                                                            </g>
                                                        </svg>
                                                        <!--end::Svg Icon-->
                                                    </span>
                                                </a>
                                            </td>
                                        </tr>
                                        <tr>
                                            <th class="pl-0 py-5">
                                                <div class="symbol symbol-50 symbol-light mr-2">
                                                    <span class="symbol-label">
                                                        <img src="/metronic/theme/html/demo4/dist/assets/media/svg/misc/005-bebo.svg" class="h-50 align-self-center" alt="" />
                                                    </span>
                                                </div>
                                            </th>
                                            <td class="py-6 pl-0">
                                                <a href="#" class="text-dark font-weight-bolder text-hover-primary mb-1 font-size-lg">Active Customers</a>
                                                <span class="text-muted font-weight-bold d-block">Best Customers</span>
                                            </td>
                                            <td>
                                                <div class="d-flex flex-column w-100 mr-2">
                                                    <div class="d-flex align-items-center justify-content-between mb-2">
                                                        <span class="text-muted mr-2 font-size-sm font-weight-bold">71%</span>
                                                        <span class="text-muted font-size-sm font-weight-bold">Progress</span>
                                                    </div>
                                                    <div class="progress progress-xs w-100">
                                                        <div class="progress-bar bg-danger" role="progressbar" style="width: 71%;" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100"></div>
                                                    </div>
                                                </div>
                                            </td>
                                            <td class="text-right pr-0">
                                                <a href="#" class="btn btn-icon btn-light btn-sm">
                                                    <span class="svg-icon svg-icon-md svg-icon-success">
                                                        <!--begin::Svg Icon | path:/metronic/theme/html/demo4/dist/assets/media/svg/icons/Navigation/Arrow-right.svg-->
                                                        <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
                                                            <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                                                <polygon points="0 0 24 0 24 24 0 24" />
                                                                <rect fill="#000000" opacity="0.3" transform="translate(12.000000, 12.000000) rotate(-90.000000) translate(-12.000000, -12.000000)" x="11" y="5" width="2" height="14" rx="1" />
                                                                <path d="M9.70710318,15.7071045 C9.31657888,16.0976288 8.68341391,16.0976288 8.29288961,15.7071045 C7.90236532,15.3165802 7.90236532,14.6834152 8.29288961,14.2928909 L14.2928896,8.29289093 C14.6714686,7.914312 15.281055,7.90106637 15.675721,8.26284357 L21.675721,13.7628436 C22.08284,14.136036 22.1103429,14.7686034 21.7371505,15.1757223 C21.3639581,15.5828413 20.7313908,15.6103443 20.3242718,15.2371519 L15.0300721,10.3841355 L9.70710318,15.7071045 Z" fill="#000000" fill-rule="nonzero" transform="translate(14.999999, 11.999997) scale(1, -1) rotate(90.000000) translate(-14.999999, -11.999997)" />
                                                            </g>
                                                        </svg>
                                                        <!--end::Svg Icon-->
                                                    </span>
                                                </a>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td class="pl-0 py-5">
                                                <div class="symbol symbol-50 symbol-light mr-2">
                                                    <span class="symbol-label">
                                                        <img src="/metronic/theme/html/demo4/dist/assets/media/svg/misc/006-plurk.svg" class="h-50 align-self-center" alt="" />
                                                    </span>
                                                </div>
                                            </td>
                                            <td class="pl-0">
                                                <a href="#" class="text-dark font-weight-bolder text-hover-primary mb-1 font-size-lg">Top Authors</a>
                                                <span class="text-muted font-weight-bold d-block">Successful Fellas</span>
                                            </td>
                                            <td>
                                                <div class="d-flex flex-column w-100 mr-2">
                                                    <div class="d-flex align-items-center justify-content-between mb-2">
                                                        <span class="text-muted mr-2 font-size-sm font-weight-bold">65%</span>
                                                        <span class="text-muted font-size-sm font-weight-bold">Progress</span>
                                                    </div>
                                                    <div class="progress progress-xs w-100">
                                                        <div class="progress-bar bg-danger" role="progressbar" style="width: 65%;" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100"></div>
                                                    </div>
                                                </div>
                                            </td>
                                            <td class="text-right pr-0">
                                                <a href="#" class="btn btn-icon btn-light btn-sm">
                                                    <span class="svg-icon svg-icon-md svg-icon-success">
                                                        <!--begin::Svg Icon | path:/metronic/theme/html/demo4/dist/assets/media/svg/icons/Navigation/Arrow-right.svg-->
                                                        <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
                                                            <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                                                <polygon points="0 0 24 0 24 24 0 24" />
                                                                <rect fill="#000000" opacity="0.3" transform="translate(12.000000, 12.000000) rotate(-90.000000) translate(-12.000000, -12.000000)" x="11" y="5" width="2" height="14" rx="1" />
                                                                <path d="M9.70710318,15.7071045 C9.31657888,16.0976288 8.68341391,16.0976288 8.29288961,15.7071045 C7.90236532,15.3165802 7.90236532,14.6834152 8.29288961,14.2928909 L14.2928896,8.29289093 C14.6714686,7.914312 15.281055,7.90106637 15.675721,8.26284357 L21.675721,13.7628436 C22.08284,14.136036 22.1103429,14.7686034 21.7371505,15.1757223 C21.3639581,15.5828413 20.7313908,15.6103443 20.3242718,15.2371519 L15.0300721,10.3841355 L9.70710318,15.7071045 Z" fill="#000000" fill-rule="nonzero" transform="translate(14.999999, 11.999997) scale(1, -1) rotate(90.000000) translate(-14.999999, -11.999997)" />
                                                            </g>
                                                        </svg>
                                                        <!--end::Svg Icon-->
                                                    </span>
                                                </a>
                                            </td>
                                        </tr>
                                        <tr>
                                            <th class="pl-0 py-5">
                                                <div class="symbol symbol-50 symbol-light mr-2">
                                                    <span class="symbol-label">
                                                        <img src="/metronic/theme/html/demo4/dist/assets/media/svg/misc/014-kickstarter.svg" class="h-50 align-self-center" alt="" />
                                                    </span>
                                                </div>
                                            </th>
                                            <td class="pl-0">
                                                <a href="#" class="text-dark font-weight-bolder text-hover-primary mb-1 font-size-lg">Bestseller Theme</a>
                                                <span class="text-muted font-weight-bold d-block">Amazing Templates</span>
                                            </td>
                                            <td>
                                                <div class="d-flex flex-column w-100 mr-2">
                                                    <div class="d-flex align-items-center justify-content-between mb-2">
                                                        <span class="text-muted mr-2 font-size-sm font-weight-bold">50%</span>
                                                        <span class="text-muted font-size-sm font-weight-bold">Progress</span>
                                                    </div>
                                                    <div class="progress progress-xs w-100">
                                                        <div class="progress-bar bg-info" role="progressbar" style="width: 50%;" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100"></div>
                                                    </div>
                                                </div>
                                            </td>
                                            <td class="text-right pr-0">
                                                <a href="#" class="btn btn-icon btn-light btn-sm">
                                                    <span class="svg-icon svg-icon-md svg-icon-success">
                                                        <!--begin::Svg Icon | path:/metronic/theme/html/demo4/dist/assets/media/svg/icons/Navigation/Arrow-right.svg-->
                                                        <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
                                                            <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                                                <polygon points="0 0 24 0 24 24 0 24" />
                                                                <rect fill="#000000" opacity="0.3" transform="translate(12.000000, 12.000000) rotate(-90.000000) translate(-12.000000, -12.000000)" x="11" y="5" width="2" height="14" rx="1" />
                                                                <path d="M9.70710318,15.7071045 C9.31657888,16.0976288 8.68341391,16.0976288 8.29288961,15.7071045 C7.90236532,15.3165802 7.90236532,14.6834152 8.29288961,14.2928909 L14.2928896,8.29289093 C14.6714686,7.914312 15.281055,7.90106637 15.675721,8.26284357 L21.675721,13.7628436 C22.08284,14.136036 22.1103429,14.7686034 21.7371505,15.1757223 C21.3639581,15.5828413 20.7313908,15.6103443 20.3242718,15.2371519 L15.0300721,10.3841355 L9.70710318,15.7071045 Z" fill="#000000" fill-rule="nonzero" transform="translate(14.999999, 11.999997) scale(1, -1) rotate(90.000000) translate(-14.999999, -11.999997)" />
                                                            </g>
                                                        </svg>
                                                        <!--end::Svg Icon-->
                                                    </span>
                                                </a>
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                            <!--end::Table-->
                        </div>
                        <!--end::Tap pane-->
                        <!--begin::Tap pane grafik-->
                        <div class="tab-pane fade show active" id="kt_tab_pane_1_3" role="tabpanel" aria-labelledby="kt_tab_pane_1_3">
                            <!--begin::Table Awal grafik-->
                            <div id="chart_3" style="min-height: 365px;">
                                <div id="apexchartss948adiz" class="apexcharts-canvas apexchartss948adiz apexcharts-theme-light" style="width: 881px; height: 350px;"><svg id="SvgjsSvg4118" width="881" height="350" xmlns="http://www.w3.org/2000/svg" version="1.1" xmlns:xlink="http://www.w3.org/1999/xlink" xmlns:svgjs="http://svgjs.com/svgjs" class="apexcharts-svg" xmlns:data="ApexChartsNS" transform="translate(0, 0)" style="background: transparent;">
                                        <foreignObject x="0" y="0" width="881" height="350">
                                            <div class="apexcharts-legend apexcharts-align-center position-bottom" xmlns="http://www.w3.org/1999/xhtml" style="inset: auto 0px 1px; position: absolute; max-height: 175px;">
                                                
                                                <div class="apexcharts-legend-series" rel="2" seriesname="Revenue" data:collapsed="false" style="margin: 2px 5px;">
                                                    <span class="apexcharts-legend-marker" rel="2" data:collapsed="false" style="background: rgb(27, 197, 189) !important; color: rgb(27, 197, 189); height: 12px; width: 12px; left: 0px; top: 0px; border-width: 0px; border-color: rgb(255, 255, 255); border-radius: 2px;"></span><span class="apexcharts-legend-text" rel="2" i="1" data:default-text="Revenue" data:collapsed="false" style="color: rgb(55, 61, 63); font-size: 12px; font-weight: 400; font-family: Helvetica, Arial, sans-serif;">Pemesanan Tiket Online</span></div>
                                                <div class="apexcharts-legend-series" rel="3" seriesname="FreexCashxFlow" data:collapsed="false" style="margin: 2px 5px;">
                                                    <span class="apexcharts-legend-marker" rel="3" data:collapsed="false" style="background: rgb(255, 168, 0) !important; color: rgb(255, 168, 0); height: 12px; width: 12px; left: 0px; top: 0px; border-width: 0px; border-color: rgb(255, 255, 255); border-radius: 2px;"></span><span class="apexcharts-legend-text" rel="3" i="2" data:default-text="Free%20Cash%20Flow" data:collapsed="false" style="color: rgb(55, 61, 63); font-size: 12px; font-weight: 400; font-family: Helvetica, Arial, sans-serif;">Pemesanan Tiket Offline</span></div>
                                            </div>
                                            <style type="text/css">
                                                .apexcharts-legend {
                                                    display: flex;
                                                    overflow: auto;
                                                    padding: 0 10px;
                                                }

                                                .apexcharts-legend.position-bottom,
                                                .apexcharts-legend.position-top {
                                                    flex-wrap: wrap
                                                }

                                                .apexcharts-legend.position-right,
                                                .apexcharts-legend.position-left {
                                                    flex-direction: column;
                                                    bottom: 0;
                                                }

                                                .apexcharts-legend.position-bottom.apexcharts-align-left,
                                                .apexcharts-legend.position-top.apexcharts-align-left,
                                                .apexcharts-legend.position-right,
                                                .apexcharts-legend.position-left {
                                                    justify-content: flex-start;
                                                }

                                                .apexcharts-legend.position-bottom.apexcharts-align-center,
                                                .apexcharts-legend.position-top.apexcharts-align-center {
                                                    justify-content: center;
                                                }

                                                .apexcharts-legend.position-bottom.apexcharts-align-right,
                                                .apexcharts-legend.position-top.apexcharts-align-right {
                                                    justify-content: flex-end;
                                                }

                                                .apexcharts-legend-series {
                                                    cursor: pointer;
                                                    line-height: normal;
                                                }

                                                .apexcharts-legend.position-bottom .apexcharts-legend-series,
                                                .apexcharts-legend.position-top .apexcharts-legend-series {
                                                    display: flex;
                                                    align-items: center;
                                                }

                                                .apexcharts-legend-text {
                                                    position: relative;
                                                    font-size: 14px;
                                                }

                                                .apexcharts-legend-text *,
                                                .apexcharts-legend-marker * {
                                                    pointer-events: none;
                                                }

                                                .apexcharts-legend-marker {
                                                    position: relative;
                                                    display: inline-block;
                                                    cursor: pointer;
                                                    margin-right: 3px;
                                                    border-style: solid;
                                                }

                                                .apexcharts-legend.apexcharts-align-right .apexcharts-legend-series,
                                                .apexcharts-legend.apexcharts-align-left .apexcharts-legend-series {
                                                    display: inline-block;
                                                }

                                                .apexcharts-legend-series.apexcharts-no-click {
                                                    cursor: auto;
                                                }

                                                .apexcharts-legend .apexcharts-hidden-zero-series,
                                                .apexcharts-legend .apexcharts-hidden-null-series {
                                                    display: none !important;
                                                }

                                                .apexcharts-inactive-legend {
                                                    opacity: 0.45;
                                                }
                                            </style>
                                        </foreignObject>
                                        <g id="SvgjsG4120" class="apexcharts-inner apexcharts-graphical" transform="translate(54.244996070861816, 30)">
                                            <defs id="SvgjsDefs4119">
                                                <linearGradient id="SvgjsLinearGradient4125" x1="0" y1="0" x2="0" y2="1">
                                                    <stop id="SvgjsStop4126" stop-opacity="0.4" stop-color="rgba(216,227,240,0.4)" offset="0"></stop>
                                                    <stop id="SvgjsStop4127" stop-opacity="0.5" stop-color="rgba(190,209,230,0.5)" offset="1"></stop>
                                                    <stop id="SvgjsStop4128" stop-opacity="0.5" stop-color="rgba(190,209,230,0.5)" offset="1"></stop>
                                                </linearGradient>
                                                <clipPath id="gridRectMasks948adiz">
                                                    <rect id="SvgjsRect4130" width="822.7550039291382" height="257.81759814834595" x="-3" y="-1" rx="0" ry="0" opacity="1" stroke-width="0" stroke="none" stroke-dasharray="0" fill="#fff"></rect>
                                                </clipPath>
                                                <clipPath id="gridRectMarkerMasks948adiz">
                                                    <rect id="SvgjsRect4131" width="820.7550039291382" height="259.81759814834595" x="-2" y="-2" rx="0" ry="0" opacity="1" stroke-width="0" stroke="none" stroke-dasharray="0" fill="#fff"></rect>
                                                </clipPath>
                                            </defs>
                                            <rect id="SvgjsRect4129" width="16.63760193188985" height="255.81759814834595" x="670.2494420607885" y="0" rx="0" ry="0" opacity="1" stroke-width="0" stroke-dasharray="3" fill="url(#SvgjsLinearGradient4125)" class="apexcharts-xcrosshairs" y2="255.81759814834595" filter="none" fill-opacity="0.9" x1="670.2494420607885" x2="670.2494420607885"></rect>
                                            <g id="SvgjsG4166" class="apexcharts-xaxis" transform="translate(0, 0)">
                                                <g id="SvgjsG4167" class="apexcharts-xaxis-texts-g" transform="translate(0, -4)"><text id="SvgjsText4169" font-family="Helvetica, Arial, sans-serif" x="45.37527799606323" y="284.81759814834595" text-anchor="middle" dominant-baseline="auto" font-size="12px" font-weight="400" fill="#373d3f" class="apexcharts-text apexcharts-xaxis-label " style="font-family: Helvetica, Arial, sans-serif;">
                                                        <tspan id="SvgjsTspan4170">Jan</tspan>
                                                        <title>Jan</title>
                                                    </text><text id="SvgjsText4172" font-family="Helvetica, Arial, sans-serif" x="136.1258339881897" y="284.81759814834595" text-anchor="middle" dominant-baseline="auto" font-size="12px" font-weight="400" fill="#373d3f" class="apexcharts-text apexcharts-xaxis-label " style="font-family: Helvetica, Arial, sans-serif;">
                                                        <tspan id="SvgjsTspan4173">Feb</tspan>
                                                        <title>Feb</title>
                                                    </text>
                                                    <text id="SvgjsText4175" font-family="Helvetica, Arial, sans-serif" x="136.1258339881897" y="284.81759814834595" text-anchor="middle" dominant-baseline="auto" font-size="12px" font-weight="400" fill="#373d3f" class="apexcharts-text apexcharts-xaxis-label " style="font-family: Helvetica, Arial, sans-serif;">
                                                        <tspan id="SvgjsTspan4176">Mar</tspan>
                                                        <title>Mar</title>
                                                    </text><text id="SvgjsText4178" font-family="Helvetica, Arial, sans-serif" x="226.87638998031616" y="284.81759814834595" text-anchor="middle" dominant-baseline="auto" font-size="12px" font-weight="400" fill="#373d3f" class="apexcharts-text apexcharts-xaxis-label " style="font-family: Helvetica, Arial, sans-serif;">
                                                        <tspan id="SvgjsTspan4179">Apr</tspan>
                                                        <title>Apr</title>
                                                    </text><text id="SvgjsText4181" font-family="Helvetica, Arial, sans-serif" x="317.6269459724426" y="284.81759814834595" text-anchor="middle" dominant-baseline="auto" font-size="12px" font-weight="400" fill="#373d3f" class="apexcharts-text apexcharts-xaxis-label " style="font-family: Helvetica, Arial, sans-serif;">
                                                        <tspan id="SvgjsTspan4182">May</tspan>
                                                        <title>May</title>
                                                    </text><text id="SvgjsText4184" font-family="Helvetica, Arial, sans-serif" x="408.3775019645691" y="284.81759814834595" text-anchor="middle" dominant-baseline="auto" font-size="12px" font-weight="400" fill="#373d3f" class="apexcharts-text apexcharts-xaxis-label " style="font-family: Helvetica, Arial, sans-serif;">
                                                        <tspan id="SvgjsTspan4185">Jun</tspan>
                                                        <title>Jun</title>
                                                    </text><text id="SvgjsText4187" font-family="Helvetica, Arial, sans-serif" x="499.12805795669556" y="284.81759814834595" text-anchor="middle" dominant-baseline="auto" font-size="12px" font-weight="400" fill="#373d3f" class="apexcharts-text apexcharts-xaxis-label " style="font-family: Helvetica, Arial, sans-serif;">
                                                        <tspan id="SvgjsTspan4188">Jul</tspan>
                                                        <title>Jul</title>
                                                    </text><text id="SvgjsText4190" font-family="Helvetica, Arial, sans-serif" x="589.878613948822" y="284.81759814834595" text-anchor="middle" dominant-baseline="auto" font-size="12px" font-weight="400" fill="#373d3f" class="apexcharts-text apexcharts-xaxis-label " style="font-family: Helvetica, Arial, sans-serif;">
                                                        <tspan id="SvgjsTspan4191">Aug</tspan>
                                                        <title>Aug</title>
                                                    </text>
                                                    <text id="SvgjsText4193" font-family="Helvetica, Arial, sans-serif" x="680.6291699409485" y="284.81759814834595" text-anchor="middle" dominant-baseline="auto" font-size="12px" font-weight="400" fill="#373d3f" class="apexcharts-text apexcharts-xaxis-label " style="font-family: Helvetica, Arial, sans-serif;">
                                                        <tspan id="SvgjsTspan4194">Sep</tspan>
                                                        <title>Sep</title>
                                                    </text>
                                                    <text id="SvgjsText4196" font-family="Helvetica, Arial, sans-serif" x="771.379725933075" y="284.81759814834595" text-anchor="middle" dominant-baseline="auto" font-size="12px" font-weight="400" fill="#373d3f" class="apexcharts-text apexcharts-xaxis-label " style="font-family: Helvetica, Arial, sans-serif;">
                                                        <tspan id="SvgjsTspan4197">Okt</tspan>
                                                        <title>Okt</title>
                                                    </text>
                                                    <text id="SvgjsText4199" font-family="Helvetica, Arial, sans-serif" x="771.379725933075" y="284.81759814834595" text-anchor="middle" dominant-baseline="auto" font-size="12px" font-weight="400" fill="#373d3f" class="apexcharts-text apexcharts-xaxis-label " style="font-family: Helvetica, Arial, sans-serif;">
                                                        <tspan id="SvgjsTspan4200">Nov</tspan>
                                                        <title>Nov</title>
                                                    </text>
                                                    <text id="SvgjsText4193" font-family="Helvetica, Arial, sans-serif" x="771.379725933075" y="284.81759814834595" text-anchor="middle" dominant-baseline="auto" font-size="12px" font-weight="400" fill="#373d3f" class="apexcharts-text apexcharts-xaxis-label " style="font-family: Helvetica, Arial, sans-serif;">
                                                        <tspan id="SvgjsTspan4194">Des</tspan>
                                                        <title>Des</title>
                                                    </text>
                                                </g>

                                                
                                            </g>
                                            <g id="SvgjsG4132" class="apexcharts-bar-series apexcharts-plot-series">
                                                <g id="SvgjsG4133" class="apexcharts-series" rel="2" seriesName="Revenue" data:realIndex="1">
                                                    <path id="SvgjsPath4146" d="M 37.0564770301183 255.81759814834595L 37.0564770301183 96.95918647069932Q 44.375277996063225 90.64038550475439 51.69407896200815 96.95918647069932L 51.69407896200815 96.95918647069932L 51.69407896200815 255.81759814834595L 51.69407896200815 255.81759814834595z" fill="rgba(27,197,189,1)" fill-opacity="1" stroke="transparent" stroke-opacity="1" stroke-linecap="square" stroke-width="2" stroke-dasharray="0" class="apexcharts-bar-area" index="1" clip-path="url(#gridRectMasks948adiz)" pathTo="M 37.0564770301183 255.81759814834595L 37.0564770301183 96.95918647069932Q 44.375277996063225 90.64038550475439 51.69407896200815 96.95918647069932L 51.69407896200815 96.95918647069932L 51.69407896200815 255.81759814834595L 51.69407896200815 255.81759814834595z" pathFrom="M 37.0564770301183 255.81759814834595L 37.0564770301183 255.81759814834595L 51.69407896200815 255.81759814834595L 51.69407896200815 255.81759814834595L 51.69407896200815 255.81759814834595L 37.0564770301183 255.81759814834595" cy="93.79978598772686" cx="126.80703302224477" j="0" val="76" barHeight="162.0178121606191" barWidth="16.63760193188985"></path>
                                                    <path id="SvgjsPath4147" d="M 127.80703302224477 255.81759814834595L 127.80703302224477 77.77286660957337Q 135.1258339881897 71.45406564362844 142.4446349541346 77.77286660957337L 142.4446349541346 77.77286660957337L 142.4446349541346 255.81759814834595L 142.4446349541346 255.81759814834595z" fill="rgba(27,197,189,1)" fill-opacity="1" stroke="transparent" stroke-opacity="1" stroke-linecap="square" stroke-width="2" stroke-dasharray="0" class="apexcharts-bar-area" index="1" clip-path="url(#gridRectMasks948adiz)" pathTo="M 127.80703302224477 255.81759814834595L 127.80703302224477 77.77286660957337Q 135.1258339881897 71.45406564362844 142.4446349541346 77.77286660957337L 142.4446349541346 77.77286660957337L 142.4446349541346 255.81759814834595L 142.4446349541346 255.81759814834595z" pathFrom="M 127.80703302224477 255.81759814834595L 127.80703302224477 255.81759814834595L 142.4446349541346 255.81759814834595L 142.4446349541346 255.81759814834595L 142.4446349541346 255.81759814834595L 127.80703302224477 255.81759814834595" cy="74.61346612660091" cx="217.55758901437125" j="1" val="85" barHeight="181.20413202174504" barWidth="16.63760193188985"></path>
                                                    <path id="SvgjsPath4148" d="M 218.55758901437125 255.81759814834595L 218.55758901437125 43.66385352312724Q 225.87638998031616 37.34505255718231 233.1951909462611 43.66385352312724L 233.1951909462611 43.66385352312724L 233.1951909462611 255.81759814834595L 233.1951909462611 255.81759814834595z" fill="rgba(27,197,189,1)" fill-opacity="1" stroke="transparent" stroke-opacity="1" stroke-linecap="square" stroke-width="2" stroke-dasharray="0" class="apexcharts-bar-area" index="1" clip-path="url(#gridRectMasks948adiz)" pathTo="M 218.55758901437125 255.81759814834595L 218.55758901437125 43.66385352312724Q 225.87638998031616 37.34505255718231 233.1951909462611 43.66385352312724L 233.1951909462611 43.66385352312724L 233.1951909462611 255.81759814834595L 233.1951909462611 255.81759814834595z" pathFrom="M 218.55758901437125 255.81759814834595L 218.55758901437125 255.81759814834595L 233.1951909462611 255.81759814834595L 233.1951909462611 255.81759814834595L 233.1951909462611 255.81759814834595L 218.55758901437125 255.81759814834595" cy="40.50445304015477" cx="308.3081450064977" j="2" val="101" barHeight="215.31314510819118" barWidth="16.63760193188985"></path>
                                                    <path id="SvgjsPath4149" d="M 309.3081450064977 255.81759814834595L 309.3081450064977 50.0592934768359Q 316.6269459724426 43.740492510890974 323.9457469383875 50.0592934768359L 323.9457469383875 50.0592934768359L 323.9457469383875 255.81759814834595L 323.9457469383875 255.81759814834595z" fill="rgba(27,197,189,1)" fill-opacity="1" stroke="transparent" stroke-opacity="1" stroke-linecap="square" stroke-width="2" stroke-dasharray="0" class="apexcharts-bar-area" index="1" clip-path="url(#gridRectMasks948adiz)" pathTo="M 309.3081450064977 255.81759814834595L 309.3081450064977 50.0592934768359Q 316.6269459724426 43.740492510890974 323.9457469383875 50.0592934768359L 323.9457469383875 50.0592934768359L 323.9457469383875 255.81759814834595L 323.9457469383875 255.81759814834595z" pathFrom="M 309.3081450064977 255.81759814834595L 309.3081450064977 255.81759814834595L 323.9457469383875 255.81759814834595L 323.9457469383875 255.81759814834595L 323.9457469383875 255.81759814834595L 309.3081450064977 255.81759814834595" cy="46.89989299386343" cx="399.05870099862415" j="3" val="98" barHeight="208.91770515448252" barWidth="16.63760193188985"></path>
                                                    <path id="SvgjsPath4150" d="M 400.05870099862415 255.81759814834595L 400.05870099862415 73.5092399737676Q 407.3775019645691 67.19043900782268 414.696302930514 73.5092399737676L 414.696302930514 73.5092399737676L 414.696302930514 255.81759814834595L 414.696302930514 255.81759814834595z" fill="rgba(27,197,189,1)" fill-opacity="1" stroke="transparent" stroke-opacity="1" stroke-linecap="square" stroke-width="2" stroke-dasharray="0" class="apexcharts-bar-area" index="1" clip-path="url(#gridRectMasks948adiz)" pathTo="M 400.05870099862415 255.81759814834595L 400.05870099862415 73.5092399737676Q 407.3775019645691 67.19043900782268 414.696302930514 73.5092399737676L 414.696302930514 73.5092399737676L 414.696302930514 255.81759814834595L 414.696302930514 255.81759814834595z" pathFrom="M 400.05870099862415 255.81759814834595L 400.05870099862415 255.81759814834595L 414.696302930514 255.81759814834595L 414.696302930514 255.81759814834595L 414.696302930514 255.81759814834595L 400.05870099862415 255.81759814834595" cy="70.34983949079515" cx="489.8092569907506" j="4" val="87" barHeight="185.4677586575508" barWidth="16.63760193188985"></path>
                                                    <path id="SvgjsPath4151" d="M 490.8092569907506 255.81759814834595L 490.8092569907506 35.13660025151571Q 498.12805795669556 28.817799285570786 505.44685892264044 35.13660025151571L 505.44685892264044 35.13660025151571L 505.44685892264044 255.81759814834595L 505.44685892264044 255.81759814834595z" fill="rgba(27,197,189,1)" fill-opacity="1" stroke="transparent" stroke-opacity="1" stroke-linecap="square" stroke-width="2" stroke-dasharray="0" class="apexcharts-bar-area" index="1" clip-path="url(#gridRectMasks948adiz)" pathTo="M 490.8092569907506 255.81759814834595L 490.8092569907506 35.13660025151571Q 498.12805795669556 28.817799285570786 505.44685892264044 35.13660025151571L 505.44685892264044 35.13660025151571L 505.44685892264044 255.81759814834595L 505.44685892264044 255.81759814834595z" pathFrom="M 490.8092569907506 255.81759814834595L 490.8092569907506 255.81759814834595L 505.44685892264044 255.81759814834595L 505.44685892264044 255.81759814834595L 505.44685892264044 255.81759814834595L 490.8092569907506 255.81759814834595" cy="31.977199768543244" cx="580.5598129828771" j="5" val="105" barHeight="223.8403983798027" barWidth="16.63760193188985"></path>
                                                    <path id="SvgjsPath4152" d="M 581.5598129828771 255.81759814834595L 581.5598129828771 64.98198670215608Q 588.878613948822 58.663185736211155 596.197414914767 64.98198670215608L 596.197414914767 64.98198670215608L 596.197414914767 255.81759814834595L 596.197414914767 255.81759814834595z" fill="rgba(27,197,189,1)" fill-opacity="1" stroke="transparent" stroke-opacity="1" stroke-linecap="square" stroke-width="2" stroke-dasharray="0" class="apexcharts-bar-area" index="1" clip-path="url(#gridRectMasks948adiz)" pathTo="M 581.5598129828771 255.81759814834595L 581.5598129828771 64.98198670215608Q 588.878613948822 58.663185736211155 596.197414914767 64.98198670215608L 596.197414914767 64.98198670215608L 596.197414914767 255.81759814834595L 596.197414914767 255.81759814834595z" pathFrom="M 581.5598129828771 255.81759814834595L 581.5598129828771 255.81759814834595L 596.197414914767 255.81759814834595L 596.197414914767 255.81759814834595L 596.197414914767 255.81759814834595L 581.5598129828771 255.81759814834595" cy="61.82258621918362" cx="671.3103689750036" j="6" val="91" barHeight="193.99501192916233" barWidth="16.63760193188985"></path>
                                                    <path id="SvgjsPath4153" d="M 672.3103689750036 255.81759814834595L 672.3103689750036 15.950280390389754Q 679.6291699409485 9.631479424444828 686.9479709068935 15.950280390389754L 686.9479709068935 15.950280390389754L 686.9479709068935 255.81759814834595L 686.9479709068935 255.81759814834595z" fill="rgba(27,197,189,1)" fill-opacity="1" stroke="transparent" stroke-opacity="1" stroke-linecap="square" stroke-width="2" stroke-dasharray="0" class="apexcharts-bar-area" index="1" clip-path="url(#gridRectMasks948adiz)" pathTo="M 672.3103689750036 255.81759814834595L 672.3103689750036 15.950280390389754Q 679.6291699409485 9.631479424444828 686.9479709068935 15.950280390389754L 686.9479709068935 15.950280390389754L 686.9479709068935 255.81759814834595L 686.9479709068935 255.81759814834595z" pathFrom="M 672.3103689750036 255.81759814834595L 672.3103689750036 255.81759814834595L 686.9479709068935 255.81759814834595L 686.9479709068935 255.81759814834595L 686.9479709068935 255.81759814834595L 672.3103689750036 255.81759814834595" cy="12.790879907417292" cx="762.0609249671301" j="7" val="114" barHeight="243.02671824092866" barWidth="16.63760193188985"></path>
                                                    <path id="SvgjsPath4154" d="M 763.0609249671301 255.81759814834595L 763.0609249671301 58.586546748447425Q 770.379725933075 52.2677457825025 777.69852689902 58.586546748447425L 777.69852689902 58.586546748447425L 777.69852689902 255.81759814834595L 777.69852689902 255.81759814834595z" fill="rgba(27,197,189,1)" fill-opacity="1" stroke="transparent" stroke-opacity="1" stroke-linecap="square" stroke-width="2" stroke-dasharray="0" class="apexcharts-bar-area" index="1" clip-path="url(#gridRectMasks948adiz)" pathTo="M 763.0609249671301 255.81759814834595L 763.0609249671301 58.586546748447425Q 770.379725933075 52.2677457825025 777.69852689902 58.586546748447425L 777.69852689902 58.586546748447425L 777.69852689902 255.81759814834595L 777.69852689902 255.81759814834595z" pathFrom="M 763.0609249671301 255.81759814834595L 763.0609249671301 255.81759814834595L 777.69852689902 255.81759814834595L 777.69852689902 255.81759814834595L 777.69852689902 255.81759814834595L 763.0609249671301 255.81759814834595" cy="55.42714626547496" cx="852.8114809592565" j="8" val="94" barHeight="200.390451882871" barWidth="16.63760193188985"></path>
                                                    <path id="SvgjsPath4155" d="M 763.0609249671301 255.81759814834595L 763.0609249671301 58.586546748447425Q 770.379725933075 52.2677457825025 777.69852689902 58.586546748447425L 777.69852689902 58.586546748447425L 777.69852689902 255.81759814834595L 777.69852689902 255.81759814834595z" fill="rgba(27,197,189,1)" fill-opacity="1" stroke="transparent" stroke-opacity="1" stroke-linecap="square" stroke-width="2" stroke-dasharray="0" class="apexcharts-bar-area" index="1" clip-path="url(#gridRectMasks948adiz)" pathTo="M 763.0609249671301 255.81759814834595L 763.0609249671301 58.586546748447425Q 770.379725933075 52.2677457825025 777.69852689902 58.586546748447425L 777.69852689902 58.586546748447425L 777.69852689902 255.81759814834595L 777.69852689902 255.81759814834595z" pathFrom="M 763.0609249671301 255.81759814834595L 763.0609249671301 255.81759814834595L 777.69852689902 255.81759814834595L 777.69852689902 255.81759814834595L 777.69852689902 255.81759814834595L 763.0609249671301 255.81759814834595" cy="55.42714626547496" cx="852.8114809592565" j="8" val="94" barHeight="200.390451882871" barWidth="16.63760193188985"></path>
                                                    <path id="SvgjsPath4156" d="M 763.0609249671301 255.81759814834595L 763.0609249671301 58.586546748447425Q 770.379725933075 52.2677457825025 777.69852689902 58.586546748447425L 777.69852689902 58.586546748447425L 777.69852689902 255.81759814834595L 777.69852689902 255.81759814834595z" fill="rgba(27,197,189,1)" fill-opacity="1" stroke="transparent" stroke-opacity="1" stroke-linecap="square" stroke-width="2" stroke-dasharray="0" class="apexcharts-bar-area" index="1" clip-path="url(#gridRectMasks948adiz)" pathTo="M 763.0609249671301 255.81759814834595L 763.0609249671301 58.586546748447425Q 770.379725933075 52.2677457825025 777.69852689902 58.586546748447425L 777.69852689902 58.586546748447425L 777.69852689902 255.81759814834595L 777.69852689902 255.81759814834595z" pathFrom="M 763.0609249671301 255.81759814834595L 763.0609249671301 255.81759814834595L 777.69852689902 255.81759814834595L 777.69852689902 255.81759814834595L 777.69852689902 255.81759814834595L 763.0609249671301 255.81759814834595" cy="55.42714626547496" cx="852.8114809592565" j="8" val="94" barHeight="200.390451882871" barWidth="16.63760193188985"></path>
                                                    <path id="SvgjsPath4157" d="M 763.0609249671301 255.81759814834595L 763.0609249671301 58.586546748447425Q 770.379725933075 52.2677457825025 777.69852689902 58.586546748447425L 777.69852689902 58.586546748447425L 777.69852689902 255.81759814834595L 777.69852689902 255.81759814834595z" fill="rgba(27,197,189,1)" fill-opacity="1" stroke="transparent" stroke-opacity="1" stroke-linecap="square" stroke-width="2" stroke-dasharray="0" class="apexcharts-bar-area" index="1" clip-path="url(#gridRectMasks948adiz)" pathTo="M 763.0609249671301 255.81759814834595L 763.0609249671301 58.586546748447425Q 770.379725933075 52.2677457825025 777.69852689902 58.586546748447425L 777.69852689902 58.586546748447425L 777.69852689902 255.81759814834595L 777.69852689902 255.81759814834595z" pathFrom="M 763.0609249671301 255.81759814834595L 763.0609249671301 255.81759814834595L 777.69852689902 255.81759814834595L 777.69852689902 255.81759814834595L 777.69852689902 255.81759814834595L 763.0609249671301 255.81759814834595" cy="55.42714626547496" cx="852.8114809592565" j="8" val="94" barHeight="200.390451882871" barWidth="16.63760193188985"></path>
                                                </g>
                                                <g id="SvgjsG4155" class="apexcharts-series" rel="3" seriesName="FreexCashxFlow" data:realIndex="2">
                                                    <path id="SvgjsPath4157" d="M 53.694078962008156 255.81759814834595L 53.694078962008156 184.36353250471754Q 61.01287992795308 178.04473153877262 68.33168089389801 184.36353250471754L 68.33168089389801 184.36353250471754L 68.33168089389801 255.81759814834595L 68.33168089389801 255.81759814834595z" fill="rgba(255,168,0,1)" fill-opacity="1" stroke="transparent" stroke-opacity="1" stroke-linecap="square" stroke-width="2" stroke-dasharray="0" class="apexcharts-bar-area" index="2" clip-path="url(#gridRectMasks948adiz)" pathTo="M 53.694078962008156 255.81759814834595L 53.694078962008156 184.36353250471754Q 61.01287992795308 178.04473153877262 68.33168089389801 184.36353250471754L 68.33168089389801 184.36353250471754L 68.33168089389801 255.81759814834595L 68.33168089389801 255.81759814834595z" pathFrom="M 53.694078962008156 255.81759814834595L 53.694078962008156 255.81759814834595L 68.33168089389801 255.81759814834595L 68.33168089389801 255.81759814834595L 68.33168089389801 255.81759814834595L 53.694078962008156 255.81759814834595" cy="181.20413202174507" cx="143.4446349541346" j="0" val="35" barHeight="74.6134661266009" barWidth="16.63760193188985"></path>
                                                    <path id="SvgjsPath4158" d="M 144.4446349541346 255.81759814834595L 144.4446349541346 171.57265259730022Q 151.76343592007953 165.2538516313553 159.08223688602448 171.57265259730022L 159.08223688602448 171.57265259730022L 159.08223688602448 255.81759814834595L 159.08223688602448 255.81759814834595z" fill="rgba(255,168,0,1)" fill-opacity="1" stroke="transparent" stroke-opacity="1" stroke-linecap="square" stroke-width="2" stroke-dasharray="0" class="apexcharts-bar-area" index="2" clip-path="url(#gridRectMasks948adiz)" pathTo="M 144.4446349541346 255.81759814834595L 144.4446349541346 171.57265259730022Q 151.76343592007953 165.2538516313553 159.08223688602448 171.57265259730022L 159.08223688602448 171.57265259730022L 159.08223688602448 255.81759814834595L 159.08223688602448 255.81759814834595z" pathFrom="M 144.4446349541346 255.81759814834595L 144.4446349541346 255.81759814834595L 159.08223688602448 255.81759814834595L 159.08223688602448 255.81759814834595L 159.08223688602448 255.81759814834595L 144.4446349541346 255.81759814834595" cy="168.41325211432775" cx="234.19519094626108" j="1" val="41" barHeight="87.4043460340182" barWidth="16.63760193188985"></path>
                                                    <path id="SvgjsPath4159" d="M 235.19519094626108 255.81759814834595L 235.19519094626108 182.23171918681464Q 242.513991912206 175.91291822086973 249.83279287815094 182.23171918681464L 249.83279287815094 182.23171918681464L 249.83279287815094 255.81759814834595L 249.83279287815094 255.81759814834595z" fill="rgba(255,168,0,1)" fill-opacity="1" stroke="transparent" stroke-opacity="1" stroke-linecap="square" stroke-width="2" stroke-dasharray="0" class="apexcharts-bar-area" index="2" clip-path="url(#gridRectMasks948adiz)" pathTo="M 235.19519094626108 255.81759814834595L 235.19519094626108 182.23171918681464Q 242.513991912206 175.91291822086973 249.83279287815094 182.23171918681464L 249.83279287815094 182.23171918681464L 249.83279287815094 255.81759814834595L 249.83279287815094 255.81759814834595z" pathFrom="M 235.19519094626108 255.81759814834595L 235.19519094626108 255.81759814834595L 249.83279287815094 255.81759814834595L 249.83279287815094 255.81759814834595L 249.83279287815094 255.81759814834595L 235.19519094626108 255.81759814834595" cy="179.07231870384217" cx="324.9457469383876" j="2" val="36" barHeight="76.74527944450378" barWidth="16.63760193188985"></path>
                                                    <path id="SvgjsPath4160" d="M 325.9457469383876 255.81759814834595L 325.9457469383876 203.54985236584346Q 333.2645479043325 197.23105139989855 340.5833488702774 203.54985236584346L 340.5833488702774 203.54985236584346L 340.5833488702774 255.81759814834595L 340.5833488702774 255.81759814834595z" fill="rgba(255,168,0,1)" fill-opacity="1" stroke="transparent" stroke-opacity="1" stroke-linecap="square" stroke-width="2" stroke-dasharray="0" class="apexcharts-bar-area" index="2" clip-path="url(#gridRectMasks948adiz)" pathTo="M 325.9457469383876 255.81759814834595L 325.9457469383876 203.54985236584346Q 333.2645479043325 197.23105139989855 340.5833488702774 203.54985236584346L 340.5833488702774 203.54985236584346L 340.5833488702774 255.81759814834595L 340.5833488702774 255.81759814834595z" pathFrom="M 325.9457469383876 255.81759814834595L 325.9457469383876 255.81759814834595L 340.5833488702774 255.81759814834595L 340.5833488702774 255.81759814834595L 340.5833488702774 255.81759814834595L 325.9457469383876 255.81759814834595" cy="200.390451882871" cx="415.69630293051404" j="3" val="26" barHeight="55.42714626547495" barWidth="16.63760193188985"></path>
                                                    <path id="SvgjsPath4161" d="M 416.69630293051404 255.81759814834595L 416.69630293051404 163.0453993256887Q 424.015103896459 156.72659835974378 431.33390486240387 163.0453993256887L 431.33390486240387 163.0453993256887L 431.33390486240387 255.81759814834595L 431.33390486240387 255.81759814834595z" fill="rgba(255,168,0,1)" fill-opacity="1" stroke="transparent" stroke-opacity="1" stroke-linecap="square" stroke-width="2" stroke-dasharray="0" class="apexcharts-bar-area" index="2" clip-path="url(#gridRectMasks948adiz)" pathTo="M 416.69630293051404 255.81759814834595L 416.69630293051404 163.0453993256887Q 424.015103896459 156.72659835974378 431.33390486240387 163.0453993256887L 431.33390486240387 163.0453993256887L 431.33390486240387 255.81759814834595L 431.33390486240387 255.81759814834595z" pathFrom="M 416.69630293051404 255.81759814834595L 416.69630293051404 255.81759814834595L 431.33390486240387 255.81759814834595L 431.33390486240387 255.81759814834595L 431.33390486240387 255.81759814834595L 416.69630293051404 255.81759814834595" cy="159.88599884271622" cx="506.4468589226405" j="4" val="45" barHeight="95.93159930562973" barWidth="16.63760193188985"></path>
                                                    <path id="SvgjsPath4162" d="M 507.4468589226405 255.81759814834595L 507.4468589226405 156.64995937198003Q 514.7656598885854 150.33115840603512 522.0844608545303 156.64995937198003L 522.0844608545303 156.64995937198003L 522.0844608545303 255.81759814834595L 522.0844608545303 255.81759814834595z" fill="rgba(255,168,0,1)" fill-opacity="1" stroke="transparent" stroke-opacity="1" stroke-linecap="square" stroke-width="2" stroke-dasharray="0" class="apexcharts-bar-area" index="2" clip-path="url(#gridRectMasks948adiz)" pathTo="M 507.4468589226405 255.81759814834595L 507.4468589226405 156.64995937198003Q 514.7656598885854 150.33115840603512 522.0844608545303 156.64995937198003L 522.0844608545303 156.64995937198003L 522.0844608545303 255.81759814834595L 522.0844608545303 255.81759814834595z" pathFrom="M 507.4468589226405 255.81759814834595L 507.4468589226405 255.81759814834595L 522.0844608545303 255.81759814834595L 522.0844608545303 255.81759814834595L 522.0844608545303 255.81759814834595L 507.4468589226405 255.81759814834595" cy="153.49055888900756" cx="597.1974149147669" j="5" val="48" barHeight="102.32703925933838" barWidth="16.63760193188985"></path>
                                                    <path id="SvgjsPath4163" d="M 598.1974149147669 255.81759814834595L 598.1974149147669 148.1227061003685Q 605.5162158807118 141.8039051344236 612.8350168466568 148.1227061003685L 612.8350168466568 148.1227061003685L 612.8350168466568 255.81759814834595L 612.8350168466568 255.81759814834595z" fill="rgba(255,168,0,1)" fill-opacity="1" stroke="transparent" stroke-opacity="1" stroke-linecap="square" stroke-width="2" stroke-dasharray="0" class="apexcharts-bar-area" index="2" clip-path="url(#gridRectMasks948adiz)" pathTo="M 598.1974149147669 255.81759814834595L 598.1974149147669 148.1227061003685Q 605.5162158807118 141.8039051344236 612.8350168466568 148.1227061003685L 612.8350168466568 148.1227061003685L 612.8350168466568 255.81759814834595L 612.8350168466568 255.81759814834595z" pathFrom="M 598.1974149147669 255.81759814834595L 598.1974149147669 255.81759814834595L 612.8350168466568 255.81759814834595L 612.8350168466568 255.81759814834595L 612.8350168466568 255.81759814834595L 598.1974149147669 255.81759814834595" cy="144.96330561739603" cx="687.9479709068934" j="6" val="52" barHeight="110.8542925309499" barWidth="16.63760193188985"></path>
                                                    <path id="SvgjsPath4164" d="M 688.9479709068934 255.81759814834595L 688.9479709068934 145.99089278246564Q 696.2667718728383 139.67209181652072 703.5855728387833 145.99089278246564L 703.5855728387833 145.99089278246564L 703.5855728387833 255.81759814834595L 703.5855728387833 255.81759814834595z" fill="rgba(255,168,0,1)" fill-opacity="1" stroke="transparent" stroke-opacity="1" stroke-linecap="square" stroke-width="2" stroke-dasharray="0" class="apexcharts-bar-area" index="2" clip-path="url(#gridRectMasks948adiz)" pathTo="M 688.9479709068934 255.81759814834595L 688.9479709068934 145.99089278246564Q 696.2667718728383 139.67209181652072 703.5855728387833 145.99089278246564L 703.5855728387833 145.99089278246564L 703.5855728387833 255.81759814834595L 703.5855728387833 255.81759814834595z" pathFrom="M 688.9479709068934 255.81759814834595L 688.9479709068934 255.81759814834595L 703.5855728387833 255.81759814834595L 703.5855728387833 255.81759814834595L 703.5855728387833 255.81759814834595L 688.9479709068934 255.81759814834595" cy="142.83149229949316" cx="778.6985268990198" j="7" val="53" barHeight="112.98610584885279" barWidth="16.63760193188985"></path>
                                                    <path id="SvgjsPath4165" d="M 779.6985268990198 255.81759814834595L 779.6985268990198 171.57265259730022Q 787.0173278649647 165.2538516313553 794.3361288309097 171.57265259730022L 794.3361288309097 171.57265259730022L 794.3361288309097 255.81759814834595L 794.3361288309097 255.81759814834595z" fill="rgba(255,168,0,1)" fill-opacity="1" stroke="transparent" stroke-opacity="1" stroke-linecap="square" stroke-width="2" stroke-dasharray="0" class="apexcharts-bar-area" index="2" clip-path="url(#gridRectMasks948adiz)" pathTo="M 779.6985268990198 255.81759814834595L 779.6985268990198 171.57265259730022Q 787.0173278649647 165.2538516313553 794.3361288309097 171.57265259730022L 794.3361288309097 171.57265259730022L 794.3361288309097 255.81759814834595L 794.3361288309097 255.81759814834595z" pathFrom="M 779.6985268990198 255.81759814834595L 779.6985268990198 255.81759814834595L 794.3361288309097 255.81759814834595L 794.3361288309097 255.81759814834595L 794.3361288309097 255.81759814834595L 779.6985268990198 255.81759814834595" cy="168.41325211432775" cx="869.4490828911463" j="8" val="41" barHeight="87.4043460340182" barWidth="16.63760193188985"></path>
                                                    <path id="SvgjsPath4166" d="M 779.6985268990198 255.81759814834595L 779.6985268990198 171.57265259730022Q 787.0173278649647 165.2538516313553 794.3361288309097 171.57265259730022L 794.3361288309097 171.57265259730022L 794.3361288309097 255.81759814834595L 794.3361288309097 255.81759814834595z" fill="rgba(255,168,0,1)" fill-opacity="1" stroke="transparent" stroke-opacity="1" stroke-linecap="square" stroke-width="2" stroke-dasharray="0" class="apexcharts-bar-area" index="2" clip-path="url(#gridRectMasks948adiz)" pathTo="M 779.6985268990198 255.81759814834595L 779.6985268990198 171.57265259730022Q 787.0173278649647 165.2538516313553 794.3361288309097 171.57265259730022L 794.3361288309097 171.57265259730022L 794.3361288309097 255.81759814834595L 794.3361288309097 255.81759814834595z" pathFrom="M 779.6985268990198 255.81759814834595L 779.6985268990198 255.81759814834595L 794.3361288309097 255.81759814834595L 794.3361288309097 255.81759814834595L 794.3361288309097 255.81759814834595L 779.6985268990198 255.81759814834595" cy="168.41325211432775" cx="869.4490828911463" j="8" val="41" barHeight="87.4043460340182" barWidth="16.63760193188985"></path>
                                                    <path id="SvgjsPath4167" d="M 779.6985268990198 255.81759814834595L 779.6985268990198 171.57265259730022Q 787.0173278649647 165.2538516313553 794.3361288309097 171.57265259730022L 794.3361288309097 171.57265259730022L 794.3361288309097 255.81759814834595L 794.3361288309097 255.81759814834595z" fill="rgba(255,168,0,1)" fill-opacity="1" stroke="transparent" stroke-opacity="1" stroke-linecap="square" stroke-width="2" stroke-dasharray="0" class="apexcharts-bar-area" index="2" clip-path="url(#gridRectMasks948adiz)" pathTo="M 779.6985268990198 255.81759814834595L 779.6985268990198 171.57265259730022Q 787.0173278649647 165.2538516313553 794.3361288309097 171.57265259730022L 794.3361288309097 171.57265259730022L 794.3361288309097 255.81759814834595L 794.3361288309097 255.81759814834595z" pathFrom="M 779.6985268990198 255.81759814834595L 779.6985268990198 255.81759814834595L 794.3361288309097 255.81759814834595L 794.3361288309097 255.81759814834595L 794.3361288309097 255.81759814834595L 779.6985268990198 255.81759814834595" cy="168.41325211432775" cx="869.4490828911463" j="8" val="41" barHeight="87.4043460340182" barWidth="16.63760193188985"></path>
                                                    <path id="SvgjsPath4168" d="M 779.6985268990198 255.81759814834595L 779.6985268990198 171.57265259730022Q 787.0173278649647 165.2538516313553 794.3361288309097 171.57265259730022L 794.3361288309097 171.57265259730022L 794.3361288309097 255.81759814834595L 794.3361288309097 255.81759814834595z" fill="rgba(255,168,0,1)" fill-opacity="1" stroke="transparent" stroke-opacity="1" stroke-linecap="square" stroke-width="2" stroke-dasharray="0" class="apexcharts-bar-area" index="2" clip-path="url(#gridRectMasks948adiz)" pathTo="M 779.6985268990198 255.81759814834595L 779.6985268990198 171.57265259730022Q 787.0173278649647 165.2538516313553 794.3361288309097 171.57265259730022L 794.3361288309097 171.57265259730022L 794.3361288309097 255.81759814834595L 794.3361288309097 255.81759814834595z" pathFrom="M 779.6985268990198 255.81759814834595L 779.6985268990198 255.81759814834595L 794.3361288309097 255.81759814834595L 794.3361288309097 255.81759814834595L 794.3361288309097 255.81759814834595L 779.6985268990198 255.81759814834595" cy="168.41325211432775" cx="869.4490828911463" j="8" val="41" barHeight="87.4043460340182" barWidth="16.63760193188985"></path>
                                                </g>
                                                <g id="SvgjsG4134" class="apexcharts-datalabels" data:realIndex="0"></g>
                                                <g id="SvgjsG4145" class="apexcharts-datalabels" data:realIndex="1"></g>
                                                <g id="SvgjsG4156" class="apexcharts-datalabels" data:realIndex="2"></g>
                                            </g>
                                            <line id="SvgjsLine4230" x1="0" y1="0" x2="816.7550039291382" y2="0" stroke="#b6b6b6" stroke-dasharray="0" stroke-width="1" class="apexcharts-ycrosshairs"></line>
                                            <line id="SvgjsLine4231" x1="0" y1="0" x2="816.7550039291382" y2="0" stroke-dasharray="0" stroke-width="0" class="apexcharts-ycrosshairs-hidden"></line>
                                            <g id="SvgjsG4232" class="apexcharts-yaxis-annotations"></g>
                                            <g id="SvgjsG4233" class="apexcharts-xaxis-annotations"></g>
                                            <g id="SvgjsG4234" class="apexcharts-point-annotations"></g>
                                        </g>
                                        <g id="SvgjsG4196" class="apexcharts-yaxis" rel="0" transform="translate(24.244996070861816, 0)">
                                            <g id="SvgjsG4197" class="apexcharts-yaxis-texts-g"><text id="SvgjsText4198" font-family="Helvetica, Arial, sans-serif" x="20" y="31.4" text-anchor="end" dominant-baseline="auto" font-size="11px" font-weight="400" fill="#373d3f" class="apexcharts-text apexcharts-yaxis-label " style="font-family: Helvetica, Arial, sans-serif;">
                                                    <tspan id="SvgjsTspan4199">120</tspan>
                                                </text><text id="SvgjsText4200" font-family="Helvetica, Arial, sans-serif" x="20" y="95.3543995370865" text-anchor="end" dominant-baseline="auto" font-size="11px" font-weight="400" fill="#373d3f" class="apexcharts-text apexcharts-yaxis-label " style="font-family: Helvetica, Arial, sans-serif;">
                                                    <tspan id="SvgjsTspan4201">90</tspan>
                                                </text><text id="SvgjsText4202" font-family="Helvetica, Arial, sans-serif" x="20" y="159.30879907417298" text-anchor="end" dominant-baseline="auto" font-size="11px" font-weight="400" fill="#373d3f" class="apexcharts-text apexcharts-yaxis-label " style="font-family: Helvetica, Arial, sans-serif;">
                                                    <tspan id="SvgjsTspan4203">60</tspan>
                                                </text><text id="SvgjsText4204" font-family="Helvetica, Arial, sans-serif" x="20" y="223.26319861125947" text-anchor="end" dominant-baseline="auto" font-size="11px" font-weight="400" fill="#373d3f" class="apexcharts-text apexcharts-yaxis-label " style="font-family: Helvetica, Arial, sans-serif;">
                                                    <tspan id="SvgjsTspan4205">30</tspan>
                                                </text><text id="SvgjsText4206" font-family="Helvetica, Arial, sans-serif" x="20" y="287.2175981483459" text-anchor="end" dominant-baseline="auto" font-size="11px" font-weight="400" fill="#373d3f" class="apexcharts-text apexcharts-yaxis-label " style="font-family: Helvetica, Arial, sans-serif;">
                                                    <tspan id="SvgjsTspan4207">0</tspan>
                                                </text>
                                                <text id="SvgjsText4206" font-family="Helvetica, Arial, sans-serif" x="20" y="287.2175981483459" text-anchor="end" dominant-baseline="auto" font-size="11px" font-weight="400" fill="#373d3f" class="apexcharts-text apexcharts-yaxis-label " style="font-family: Helvetica, Arial, sans-serif;">
                                                    <tspan id="SvgjsTspan4207">0</tspan>
                                                </text>
                                            </g>
                                            <g id="SvgjsG4208" class="apexcharts-yaxis-title"><text id="SvgjsText4209" font-family="Helvetica, Arial, sans-serif" x="28.446001052856445" y="157.90879907417298" text-anchor="end" dominant-baseline="auto" font-size="11px" font-weight="900" fill="#373d3f" class="apexcharts-text apexcharts-yaxis-title-text " style="font-family: Helvetica, Arial, sans-serif;" transform="rotate(-90 -12.053993225097656 154.30880117416382)">Rupiah</text></g>
                                        </g>
                                        <g id="SvgjsG4121" class="apexcharts-annotations"></g>
                                    </svg>
                                    
                                    <div class="apexcharts-yaxistooltip apexcharts-yaxistooltip-0 apexcharts-yaxistooltip-left apexcharts-theme-light">
                                        <div class="apexcharts-yaxistooltip-text"></div>
                                    </div>
                                   
                                </div>
                            </div>
                            <!--end::Table-->
                        </div>
                        <!--end::Tap pane-->
                    </div>
                </div>
            </div>
            <!--end::Base Table Widget 1-->
        </div>
    </div>
</div>
@endsection