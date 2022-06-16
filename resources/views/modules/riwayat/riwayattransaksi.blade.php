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
                                <a href="#" class="btn btn-primary font-weight-bolder">
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
                                                <div class="input-icon">
                                                    <input type="text" class="form-control form-control-solid" placeholder="Search..." id="kt_datatable_search_query" />
                                                    <span>
                                                        <i class="flaticon2-search-1 text-muted"></i>
                                                    </span>
                                                </div>
                                            </div>
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
                                <table class="datatable-table" style="display: block;">
                                    <thead class="datatable-head">
                                        <tr class="datatable-row" style="left: 0px;">
                                            <th class="datatable-cell datatable-toggle-detail datatable-cell-sort">
                                                <span></span>
                                            </th>
                                            <th data-field="OrderID" class="datatable-cell datatable-cell-sort"><span style="width: 114px;">Kode Order</span></th>
                                            <th data-field="Status" data-autohide-disabled="false" class="datatable-cell datatable-cell-sort"><span style="width: 114px;">Status</span></th>
                                            <th data-field="tgl_kunjungan" data-autohide-disabled="false" class="datatable-cell datatable-cell-sort"><span style="width: 114px;">Tanggal Berkunjung</span></th>
                                            <th data-field="tgl_kunjungan" data-autohide-disabled="false" class="datatable-cell datatable-cell-sort"><span style="width: 114px;">Jumlah Tiket</span></th>
                                            <th data-field="tgl_kunjungan" data-autohide-disabled="false" class="datatable-cell datatable-cell-sort"><span style="width: 114px;">Total</span></th>
                                        </tr>
                                    </thead>
                                    <tbody class="datatable-body">
                                        @foreach ($pemesanan as $p)

                                        <tr data-row="0" class="datatable-row" style="left: 0px;">
                                            <td class="datatable-cell datatable-toggle-detail"><a class="datatable-toggle-detail" href="/detailriwayat/{{ $p->kd_order }}"><i class="fa fa-caret-right"></i></a></td>
                                            
                                            <td data-field="kd_order" aria-label="64616-103" class="datatable-cell"><span style="width: 114px;">{{ $p->kd_order }}</span></td>
                                            <td data-field="status" data-autohide-disabled="false" aria-label="1" class="datatable-cell"><span style="width: 114px;"><span class="label label-danger label-dot mr-2"></span><span class="font-weight-bold text-danger">{{ $p->status }}</span></span>
                                            </td>
                                            <td data-field="tgl_berkunjung" aria-label="64616-103" class="datatable-cell"><span style="width: 114px;">{{ $p->tgl_kunjungan }}</span>
                                            </td>
                                            <td data-field="jumlah" aria-label="64616-103" class="datatable-cell"><span style="width: 114px;">{{ $p->jumlah }}</span></td>
                                            <td data-field="tgl_berkunjung" aria-label="64616-103" class="datatable-cell"><span style="width: 114px;">{{ $p->jumlah * $p->harga }}</span>
                                            </td>
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