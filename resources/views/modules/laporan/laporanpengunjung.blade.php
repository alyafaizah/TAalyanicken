@extends('layouts.template-backend-sidebar')

@section('main-content')
<!--begin::Content-->
<div class="content d-flex flex-column flex-column-fluid" id="kt_content">
    <!--begin::Entry-->
    <div class="d-flex flex-column-fluid">
        <!--begin::Container-->
        <div class="container" style="margin-top: 100px;">
            <!--begin::Card-->
            <div class="card card-custom">
                <div class="card-header flex-wrap border-0 pt-6 pb-0">
                    <div class="card-title">
                        <h2 class="card-label">Data Pengunjung Pemesanan Tiket Online
                            <span class="d-block text-muted pt-2 font-size-sm">Wisata Kandang Sapi Wonosalam</span></h2>
                    </div>
                    <div class="card-toolbar">
                        <!--begin::Dropdown-->
                        <div class="dropdown dropdown-inline mr-2">
                            <a href="/cetakpdfcust" class="btn btn-light-primary font-weight-bolder" aria-haspopup="true" aria-expanded="false">
                                <span class="svg-icon svg-icon-md">
                                    <!--begin::Svg Icon | path:/metronic/theme/html/demo4/dist/assets/media/svg/icons/Design/PenAndRuller.svg-->
                                    <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
                                        <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                            <rect x="0" y="0" width="24" height="24" />
                                            <path d="M3,16 L5,16 C5.55228475,16 6,15.5522847 6,15 C6,14.4477153 5.55228475,14 5,14 L3,14 L3,12 L5,12 C5.55228475,12 6,11.5522847 6,11 C6,10.4477153 5.55228475,10 5,10 L3,10 L3,8 L5,8 C5.55228475,8 6,7.55228475 6,7 C6,6.44771525 5.55228475,6 5,6 L3,6 L3,4 C3,3.44771525 3.44771525,3 4,3 L10,3 C10.5522847,3 11,3.44771525 11,4 L11,19 C11,19.5522847 10.5522847,20 10,20 L4,20 C3.44771525,20 3,19.5522847 3,19 L3,16 Z" fill="#000000" opacity="0.3" />
                                            <path d="M16,3 L19,3 C20.1045695,3 21,3.8954305 21,5 L21,15.2485298 C21,15.7329761 20.8241635,16.200956 20.5051534,16.565539 L17.8762883,19.5699562 C17.6944473,19.7777745 17.378566,19.7988332 17.1707477,19.6169922 C17.1540423,19.602375 17.1383289,19.5866616 17.1237117,19.5699562 L14.4948466,16.565539 C14.1758365,16.200956 14,15.7329761 14,15.2485298 L14,5 C14,3.8954305 14.8954305,3 16,3 Z" fill="#000000" />
                                        </g>
                                    </svg>
                                    <!--end::Svg Icon-->
                                </span>Cetak PDF</a>
                        </div>
                        <!--end::Dropdown-->
                    </div>
                </div>
                <div class="card-body">
                    <!--begin: Datatable-->
                    <table class="datatable datatable-bordered datatable-head-custom" id="kt_datatable">
                        <thead>
                            <tr>
                                <th title="Field #1">Nama Lengkap</th>
                                <th title="Field #2">Email</th>
                                <th title="Field #3">Alamat</th>
                                <th title="Field #4">Nomor Telepon</th>
                                <th title="Field #5">Tempat Lahir</th>
                                <th title="Field #6">Tanggal Lahir</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>{{ $identitas->nama_lengkap }}</td>
                                <td>{{ $profile->email }}</td>
                                <td>{{ $identitas->alamat }}</td>
                                <td>{{ $identitas->telepon }}</td>
                                <td> {{ $identitas->tempat_lahir}}</td>
                                <td> {{date('d M Y', strtotime($identitas->tgl_lahir))}}</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
            <!--end::Card-->
        </div>
        <!--end::Container-->
    </div>
    <!--end::Entry-->
</div>
<!--end::Content-->
<script>
    'use strict';
    // Class definition

    var KTDatatableHtmlTableDemo = function() {
        // Private functions

        // demo initializer
        var demo = function() {

            var datatable = $('#kt_datatable').KTDatatable({
                data: {
                    saveState: {
                        cookie: false
                    },
                },
                search: {
                    input: $('#kt_datatable_search_query'),
                    key: 'generalSearch',
                },
                layout: {
                    class: 'datatable-bordered',
                },
                columns: [{
                        field: 'DepositPaid',
                        type: 'number',
                    },
                    {
                        field: 'OrderDate',
                        type: 'date',
                        format: 'YYYY-MM-DD',
                    }, {
                        field: 'Status',
                        title: 'Status',
                        autoHide: false,
                        // callback function support for column rendering
                        template: function(row) {
                            var status = {
                                1: {
                                    'title': 'Proses',
                                    'class': ' label-light-warning',
                                },
                                2: {
                                    'title': 'Dibatalkan',
                                    'class': ' label-light-danger',
                                },
                                3: {
                                    'title': 'Berhasil',
                                    'class': ' label-light-success',
                                },
                            };
                            return '<span class="label font-weight-bold label-lg' + status[row.Status].class + ' label-inline">' + status[row.Status].title + '</span>';
                        },
                    }, {
                        field: 'Type',
                        title: 'Type',
                        autoHide: false,
                        // callback function support for column rendering
                        template: function(row) {
                            var status = {
                                1: {
                                    'title': 'Online',
                                    'state': 'danger',
                                },
                                2: {
                                    'title': 'Retail',
                                    'state': 'primary',
                                },
                                3: {
                                    'title': 'Direct',
                                    'state': 'success',
                                },
                            };
                            return '<span class="label label-' + status[row.Type].state + ' label-dot mr-2"></span><span class="font-weight-bold text-' + status[row.Type].state + '">' + status[row.Type].title + '</span>';
                        },
                    },
                ],
            });

            $('#kt_datatable_search_status').on('change', function() {
                datatable.search($(this).val().toLowerCase(), 'Status');
            });

            $('#kt_datatable_search_type').on('change', function() {
                datatable.search($(this).val().toLowerCase(), 'Type');
            });

            $('#kt_datatable_search_status, #kt_datatable_search_type').selectpicker();

        };

        return {
            // Public functions
            init: function() {
                // init dmeo
                demo();
            },
        };
    }();

    jQuery(document).ready(function() {
        KTDatatableHtmlTableDemo.init();
    });
</script>

@endsection