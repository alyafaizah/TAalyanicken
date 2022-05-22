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
                                <span class="card-label font-weight-bolder font-size-h3 text-dark">Riwayat Transaksi</span>
                            </h3>
                            <div class="card-toolbar">
                                <!--begin::Dropdown-->
                                <div class="dropdown dropdown-inline mr-2">
                                    <button type="button"
                                        class="btn btn-light-primary font-weight-bolder dropdown-toggle"
                                        data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                        <span class="svg-icon svg-icon-md">
                                            <!--begin::Svg Icon | path:assets/media/svg/icons/Design/PenAndRuller.svg-->
                                            <svg xmlns="http://www.w3.org/2000/svg"
                                                xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px"
                                                viewBox="0 0 24 24" version="1.1">
                                                <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                                    <rect x="0" y="0" width="24" height="24" />
                                                    <path
                                                        d="M3,16 L5,16 C5.55228475,16 6,15.5522847 6,15 C6,14.4477153 5.55228475,14 5,14 L3,14 L3,12 L5,12 C5.55228475,12 6,11.5522847 6,11 C6,10.4477153 5.55228475,10 5,10 L3,10 L3,8 L5,8 C5.55228475,8 6,7.55228475 6,7 C6,6.44771525 5.55228475,6 5,6 L3,6 L3,4 C3,3.44771525 3.44771525,3 4,3 L10,3 C10.5522847,3 11,3.44771525 11,4 L11,19 C11,19.5522847 10.5522847,20 10,20 L4,20 C3.44771525,20 3,19.5522847 3,19 L3,16 Z"
                                                        fill="#000000" opacity="0.3" />
                                                    <path
                                                        d="M16,3 L19,3 C20.1045695,3 21,3.8954305 21,5 L21,15.2485298 C21,15.7329761 20.8241635,16.200956 20.5051534,16.565539 L17.8762883,19.5699562 C17.6944473,19.7777745 17.378566,19.7988332 17.1707477,19.6169922 C17.1540423,19.602375 17.1383289,19.5866616 17.1237117,19.5699562 L14.4948466,16.565539 C14.1758365,16.200956 14,15.7329761 14,15.2485298 L14,5 C14,3.8954305 14.8954305,3 16,3 Z"
                                                        fill="#000000" />
                                                </g>
                                            </svg>
                                            <!--end::Svg Icon-->
                                        </span>Export</button>
                                    <!--begin::Dropdown Menu-->
                                    <div class="dropdown-menu dropdown-menu-sm dropdown-menu-right">
                                        <!--begin::Navigation-->
                                        <ul class="navi flex-column navi-hover py-2">
                                            <li
                                                class="navi-header font-weight-bolder text-uppercase font-size-sm text-primary pb-2">
                                                Choose an option:</li>
                                            <li class="navi-item">
                                                <a href="#" class="navi-link">
                                                    <span class="navi-icon">
                                                        <i class="la la-print"></i>
                                                    </span>
                                                    <span class="navi-text">Print</span>
                                                </a>
                                            </li>
                                            <li class="navi-item">
                                                <a href="#" class="navi-link">
                                                    <span class="navi-icon">
                                                        <i class="la la-copy"></i>
                                                    </span>
                                                    <span class="navi-text">Copy</span>
                                                </a>
                                            </li>
                                            <li class="navi-item">
                                                <a href="#" class="navi-link">
                                                    <span class="navi-icon">
                                                        <i class="la la-file-excel-o"></i>
                                                    </span>
                                                    <span class="navi-text">Excel</span>
                                                </a>
                                            </li>
                                            <li class="navi-item">
                                                <a href="#" class="navi-link">
                                                    <span class="navi-icon">
                                                        <i class="la la-file-text-o"></i>
                                                    </span>
                                                    <span class="navi-text">CSV</span>
                                                </a>
                                            </li>
                                            <li class="navi-item">
                                                <a href="#" class="navi-link">
                                                    <span class="navi-icon">
                                                        <i class="la la-file-pdf-o"></i>
                                                    </span>
                                                    <span class="navi-text">PDF</span>
                                                </a>
                                            </li>
                                        </ul>
                                        <!--end::Navigation-->
                                    </div>
                                    <!--end::Dropdown Menu-->
                                </div>
                                <!--end::Dropdown-->
                                <!--begin::Button-->
                                <a href="#" class="btn btn-primary font-weight-bolder">
                                    <span class="svg-icon svg-icon-md">
                                        <!--begin::Svg Icon | path:assets/media/svg/icons/Design/Flatten.svg-->
                                        <svg xmlns="http://www.w3.org/2000/svg"
                                            xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px"
                                            viewBox="0 0 24 24" version="1.1">
                                            <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                                <rect x="0" y="0" width="24" height="24" />
                                                <circle fill="#000000" cx="9" cy="15" r="6" />
                                                <path
                                                    d="M8.8012943,7.00241953 C9.83837775,5.20768121 11.7781543,4 14,4 C17.3137085,4 20,6.6862915 20,10 C20,12.2218457 18.7923188,14.1616223 16.9975805,15.1987057 C16.9991904,15.1326658 17,15.0664274 17,15 C17,10.581722 13.418278,7 9,7 C8.93357256,7 8.86733422,7.00080962 8.8012943,7.00241953 Z"
                                                    fill="#000000" opacity="0.3" />
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
                                                <div class="input-icon">
                                                    <input type="text" class="form-control form-control-solid"
                                                        placeholder="Search..." id="kt_datatable_search_query" />
                                                    <span>
                                                        <i class="flaticon2-search-1 text-muted"></i>
                                                    </span>
                                                </div>
                                            </div>
                                            <div class="col-md-4 my-2 my-md-0">
                                                <select class="form-control form-control-solid"
                                                    id="kt_datatable_search_status">
                                                    <option value="">Status</option>
                                                    <option value="1">Diproses</option>
                                                    <option value="2">Dibatalkan</option>
                                                    <option value="3">Berhasil</option>
                                                </select>
                                            </div>
                                            <div class="col-md-4 my-2 my-md-0">
                                                <a href="#"
                                                    class="btn btn-light-primary px-6 font-weight-bold">Search</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!--end::Search Form-->
                            <!--end: Search Form-->
                            <!--begin: Datatable-->
                            <div class="datatable datatable-bordered datatable-head-custom datatable-default datatable-primary datatable-loaded"
                                id="kt_datatable">
                                <table class="datatable-table" style="display: block;">
                                    <thead class="datatable-head">
                                        <tr class="datatable-row" style="left: 0px;">
                                            <th class="datatable-cell datatable-toggle-detail datatable-cell-sort">
                                                <span></span></th>
                                            <th data-field="Product"
                                                class="datatable-cell datatable-cell-sort datatable-cell-sorted"
                                                data-sort="desc"><span style="width: 160px;">Jenis Tiket</span></th>
                                            <th data-field="OrderID" class="datatable-cell datatable-cell-sort"><span
                                                    style="width: 114px;">Kode Order</span></th>
                                            <th data-field="Status" data-autohide-disabled="false"
                                                class="datatable-cell datatable-cell-sort"><span
                                                    style="width: 114px;">Status</span></th>
                                            <th data-field="tgl_kunjungan" data-autohide-disabled="false"
                                                class="datatable-cell datatable-cell-sort"><span
                                                    style="width: 114px;">Tanggal Berkunjung</span></th>
                                            <th data-field="tgl_kunjungan" data-autohide-disabled="false"
                                                class="datatable-cell datatable-cell-sort"><span
                                                    style="width: 114px;">Jumlah Tiket</span></th>
                                            <th data-field="tgl_kunjungan" data-autohide-disabled="false"
                                                class="datatable-cell datatable-cell-sort"><span
                                                    style="width: 114px;">Total</span></th>
                                        </tr>
                                    </thead>
                                    <tbody class="datatable-body">
                                        <tr data-row="0" class="datatable-row" style="left: 0px;">
                                            <td class="datatable-cell datatable-toggle-detail"><a
                                                    class="datatable-toggle-detail" href="/riwayatpembayaran"><i
                                                        class="fa fa-caret-right"></i></a></td>
                                            <td class="datatable-cell-sorted datatable-cell" data-field="Product"
                                                aria-label="null"><span style="width: 160px;">
                                                    <div class="d-flex align-items-center">
                                                        <div class="ml-4"> <a href="#"
                                                                class="text-dark-75 font-weight-bolder font-size-lg mb-0">Weekend</a>
                                                        </div>
                                                    </div>
                                                </span></td>
                                            <td data-field="OrderID" aria-label="64616-103" class="datatable-cell"><span
                                                    style="width: 114px;">64616-103</span></td>
                                            <td data-field="Type" data-autohide-disabled="false" aria-label="1"
                                                class="datatable-cell"><span style="width: 114px;"><span
                                                        class="label label-danger label-dot mr-2"></span><span
                                                        class="font-weight-bold text-danger">Diproses</span></span></td>
                                            <td data-field="tgl_berkunjung" aria-label="64616-103"
                                                class="datatable-cell"><span style="width: 114px;">11/5/2022</span></td>
                                            <td data-field="tgl_berkunjung" aria-label="64616-103"
                                                class="datatable-cell"><span style="width: 114px;">1</span></td>
                                            <td data-field="tgl_berkunjung" aria-label="64616-103"
                                                class="datatable-cell"><span style="width: 114px;">50000</span></td>
                                        </tr>
                                    </tbody>
                                </table>
                                <div class="datatable-pager datatable-paging-loaded">
                                    <ul class="datatable-pager-nav my-2 mb-sm-0">
                                        <li><a title="First"
                                                class="datatable-pager-link datatable-pager-link-first datatable-pager-link-disabled"
                                                data-page="1" disabled="disabled"><i
                                                    class="flaticon2-fast-back"></i></a></li>
                                        <li><a title="Previous"
                                                class="datatable-pager-link datatable-pager-link-prev datatable-pager-link-disabled"
                                                data-page="1" disabled="disabled"><i class="flaticon2-back"></i></a>
                                        </li>
                                        <li style="display: none;"><input type="text"
                                                class="datatable-pager-input form-control" title="Page number"></li>
                                        <li><a class="datatable-pager-link datatable-pager-link-number datatable-pager-link-active"
                                                data-page="1" title="1">1</a></li>
                                        <li><a class="datatable-pager-link datatable-pager-link-number" data-page="2"
                                                title="2">2</a></li>
                                        <li><a class="datatable-pager-link datatable-pager-link-number" data-page="3"
                                                title="3">3</a></li>
                                        <li><a class="datatable-pager-link datatable-pager-link-number" data-page="4"
                                                title="4">4</a></li>
                                        <li><a class="datatable-pager-link datatable-pager-link-number" data-page="5"
                                                title="5">5</a></li>
                                        <li><a title="Next" class="datatable-pager-link datatable-pager-link-next"
                                                data-page="2"><i class="flaticon2-next"></i></a></li>
                                        <li><a title="Last" class="datatable-pager-link datatable-pager-link-last"
                                                data-page="35"><i class="flaticon2-fast-next"></i></a></li>
                                    </ul>
                                    <div class="datatable-pager-info my-2 mb-sm-0">
                                        <div class="dropdown bootstrap-select datatable-pager-size"
                                            style="width: 60px;"><select class="selectpicker datatable-pager-size"
                                                title="Select page size" data-width="60px" data-container="body"
                                                data-selected="10">
                                                <option class="bs-title-option" value=""></option>
                                                <option value="5">5</option>
                                                <option value="10">10</option>
                                                <option value="20">20</option>
                                                <option value="30">30</option>
                                                <option value="50">50</option>
                                                <option value="100">100</option>
                                            </select>
                                            <div class="dropdown-menu ">
                                                <div class="inner show" role="listbox" id="bs-select-5" tabindex="-1">
                                                    <ul class="dropdown-menu inner show" role="presentation"></ul>
                                                </div>
                                            </div>
                                        </div><span class="datatable-pager-detail">Showing 1 - 10 of 350</span>
                                    </div>
                                </div>
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