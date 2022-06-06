@extends('layouts.template-backend-sidebar')
<!--begin::Content-->

@section('main-content')

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
                                                        <option value="">Jenis Transaksi</option>
                                                        <option value="1">Offline</option>
                                                        <option value="2">Online</option>
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
                                                    <span></span>
                                                </th>
                                                <th data-field="Product"
                                                    class="datatable-cell datatable-cell-sort datatable-cell-sorted"
                                                    data-sort="desc"><span style="width: 160px;">Kode Order</span></th>
                                                <th data-field="OrderID" class="datatable-cell datatable-cell-sort"><span
                                                        style="width: 114px;">Nama Pengunjung</span></th>
                                                <th data-field="Status" data-autohide-disabled="false"
                                                    class="datatable-cell datatable-cell-sort"><span
                                                        style="width: 114px;">Jenis Transaksi</span></th>
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
                                                                    class="datatable-toggle-detail"
                                                                    href=""><i
                                                                        class="fa fa-caret-right"></i></a></td>
                                                            <td class="datatable-cell-sorted datatable-cell"
                                                                data-field="Product" aria-label="null"><span
                                                                    style="width: 160px;">
                                                                    <div class="d-flex align-items-center">
                                                                        <div class="ml-4">
                                                                            <a href="#"
                                                                                class="text-dark-75 font-weight-bolder font-size-lg mb-0">12345</a>
                                                                        </div>
                                                                    </div>
                                                                </span></td>
                                                            <td data-field="kd_order" aria-label="64616-103"
                                                                class="datatable-cell"><span
                                                                    style="width: 114px;">Nicken Octaviana</span></td>
                                                            <td data-field="status" data-autohide-disabled="false"
                                                                aria-label="1" class="datatable-cell"><span
                                                                    style="width: 114px;"><span
                                                                        class="font-weight-bold">offline</span></span>
                                                            </td>
                                                            <td data-field="tgl_berkunjung" aria-label="64616-103"
                                                                class="datatable-cell"><span
                                                                    style="width: 114px;">12-10-2022</span>
                                                            </td>
                                                            <td data-field="jumlah" aria-label="64616-103"
                                                                class="datatable-cell"><span
                                                                    style="width: 114px;">2</span></td>
                                                            <td data-field="tgl_berkunjung" aria-label="64616-103"
                                                                class="datatable-cell"><span
                                                                    style="width: 114px;">30000</span>
                                                            </td>
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
                                                    <div class="inner show" role="listbox" id="bs-select-5"
                                                        tabindex="-1">
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
