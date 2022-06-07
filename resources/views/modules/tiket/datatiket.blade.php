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
                    <!--begin::Card-->

                    @if(Session::has('pesan'))


                    <div class="alert alert-danger">
                        <b>Pemberitahuan</b><br>
                        {{ Session('pesan') }}
                    </div>

                    @endif

                    <div class="card card-custom">
                        <div class="card-header flex-wrap border-0 pt-6 pb-0">
                            <div class="card-title">
                                <h1 class="card-label">Data Tiket</h1>
                            </div>
                            <div class="card-toolbar">
                            </div>
                        </div>
                        <div class="card-body">

                            <!--begin: Datatable-->
                            <div class="datatable datatable-bordered datatable-head-custom datatable-default datatable-primary datatable-loaded" id="kt_datatable" style="">
                                <table class="datatable-table" style="display: block;">
                                    <thead class="datatable-head">
                                        <tr class="datatable-row" align="center" style="left: 0px;">
                                            <th data-field="OrderID" class="datatable-cell datatable-cell-sort">
                                                <span style="width: 108px;">Kode Tiket</span>
                                            </th>
                                            <th data-field="Country" class="datatable-cell datatable-cell-sort">
                                                <span style="width: 108px;">Jenis Tiket</span>
                                            </th>
                                            <th data-field="ShipDate" class="datatable-cell datatable-cell-sort">
                                                <span style="width: 108px;">Weekday</span>
                                            </th>
                                            <th data-field="ShipDate" class="datatable-cell datatable-cell-sort">
                                                <span style="width: 108px;">Weekend</span>
                                            </th>
                                            <th data-field="CompanyName" class="datatable-cell datatable-cell-sort">
                                                <span style="width: 108px;">Kapasitas</span>
                                            </th>
                                            <th data-field="ShipDate" class="datatable-cell datatable-cell-sort">
                                                <span style="width: 108px;">Keterangan</span>
                                            </th>
                                            <th data-field="Actions" data-autohide-disabled="false" class="datatable-cell datatable-cell-sort">
                                                <span style="width: 125px;">Actions</span>
                                            </th>
                                        </tr>
                                    </thead>

                                    <tbody class="datatable-body" align="center" style="">

                                        @foreach ( $tiket AS $t )
                                        <tr data-row="0" class="datatable-row" style="left: 0px;">
                                            <td data-field="OrderID" aria-label="68084-198" class="datatable-cell"><span style="width: 108px;">{{ $t->kd_tiket }}</span></td>
                                            <td data-field="Country" aria-label="Philippines" class="datatable-cell">
                                                <span style="width: 108px;"><span class="label font-weight-bold label-lg  label-light-success label-inline">REGULAR</span></span>
                                            </td>
                                            <td data-field="ShipDate" aria-label="10/4/2017" class="datatable-cell"><span style="width: 108px;">
                                                    Rp {{ number_format($t->weekend) }}
                                                </span>
                                            </td>
                                            <td data-field="ShipDate" aria-label="10/4/2017" class="datatable-cell"><span style="width: 108px;">
                                                Rp {{ number_format($t->weekday) }}
                                            </span>
                                        </td>
                                            <td class="datatable-cell-sorted datatable-cell" align="center"><span style="width: 108px;">{{ $t->stok }} item</span></td>
                                            <td data-field="Status" aria-label="2" class="datatable-cell">

                                            </td>
                                            <td data-field="keterangan" data-autohide-disabled="false" aria-label="3" class="datatable-cell">

                                                {{ $t->keterangan }}


                                            </td>
                                            <td data-field="Actions" data-autohide-disabled="false" aria-label="null" class="datatable-cell"><span style="overflow: visible; position: relative; width: 125px;">
                                                    
                                                    </div> <a href="edit-ticket/{{ $t->kd_tiket }}" class="btn btn-sm btn-clean btn-icon mr-2" title="Edit details"> <span class="svg-icon svg-icon-md"> <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
                                                                <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                                                    <rect x="0" y="0" width="24" height="24"></rect>
                                                                    <path d="M8,17.9148182 L8,5.96685884 C8,5.56391781 8.16211443,5.17792052 8.44982609,4.89581508 L10.965708,2.42895648 C11.5426798,1.86322723 12.4640974,1.85620921 13.0496196,2.41308426 L15.5337377,4.77566479 C15.8314604,5.0588212 16,5.45170806 16,5.86258077 L16,17.9148182 C16,18.7432453 15.3284271,19.4148182 14.5,19.4148182 L9.5,19.4148182 C8.67157288,19.4148182 8,18.7432453 8,17.9148182 Z" fill="#000000" fill-rule="nonzero" transform="translate(12.000000, 10.707409) rotate(-135.000000) translate(-12.000000, -10.707409) ">
                                                                    </path>
                                                                    <rect fill="#000000" opacity="0.3" x="5" y="20" width="15" height="2" rx="1"></rect>
                                                                </g>
                                                            </svg> </span> </a>


                                                </span></td>
                                        </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                            </div>
                            <!--end: Datatable-->
                        </div>
                    </div>
                    <!--end::Card-->
                </div>
                <!--end::Container-->
            </div>
            <!--end::Entry-->
        </div>
    </div>
</div>
<!--end::Content-->

@endsection
