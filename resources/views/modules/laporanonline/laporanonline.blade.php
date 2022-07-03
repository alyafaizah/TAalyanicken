<!-- extends('layouts.template-backend') -->
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
                    <!-- begin::Card-->
                    <div class="card card-custom overflow-hidden">
                        <div class="card-body p-0">
                            <!-- begin: Invoice-->
                            <!-- begin: Invoice header-->
                            <div class="row justify-content-center bgi-size-cover bgi-no-repeat py-8 px-8 px-md-0" style="background: linear-gradient(#000046, #6b5b95);">
                                <div class="col-md-9">
                                    <div class="d-flex justify-content-between pb-10 pb-md-20 flex-column flex-md-row">
                                        <h2 class="display-4 text-white font-weight-boldest mb-10">LAPORAN PEMESANAN</h2>
                                        <div class="d-flex flex-column align-items-md-end px-0">
                                            <span class="text-white d-flex flex-column align-items-md-end opacity-70">
                                                <h3 class="display-4 text-white font-weight-boldest mb-10">Wisata Kandang Sapi</h3>
                                                <span>Jl. Anjasmoro Dsn Tukum, RT.06/RW.04, Notorejo, Wonosalam,</span>
                                                <span>Kec. Wonosalam, Kabupaten Jombang, Jawa Timur 61476</span>
                                            </span>
                                        </div>
                                    </div>
                                    <div class="border-bottom opacity-20"></div>

                                </div>
                            </div>
                            <!-- end: Invoice header-->
                            <!-- begin: Invoice body-->
                            <div class="row justify-content-center py-8 px-8 py-md-10 px-md-0">
                                <div class="col-md-9">
                                    <div class="row">
                                        <div class="col-md-9 mb-3" style="float:right"><a href="#" id="btn-filter" class="btn btn-sm btn-flat btn-primary"><i class="fa fa-filter"></i> Filter Berdasarkan Tanggal Berkunjung</a></div>

                                        @php
                                        $start = "-";
                                        $end = "-";

                                        if ( $dari ) {

                                        $start = date('d M Y', strtotime($dari));
                                        $end = date('d M Y', strtotime($sampai));
                                        }
                                        @endphp
                                        <div class="col-md-9 mb-3">Laporan Pemesanan Tiket Online mulai ({{ $start }}) sampai ({{ $end }}):</div>
                                    </div>

                                    @php
                                    $pemasukan=0
                                    @endphp
                                    <div class="table-responsive">
                                        <table class="table table-bordered table-hover table-checkable" id="kt_datatable" style="margin-top: 13px !important">
                                            <thead>
                                                <tr>
                                                    <th>Nama Pengunjung</th>
                                                    <th>Kode Order</th>
                                                    <th>Jenis Tiket</th>
                                                    <th>Tanggal Kunjungan</th>
                                                    <th>Tanggal Pemesanan</th>
                                                    <th>Jumlah Tiket</th>
                                                    <th>Total</th>
                                                </tr>
                                            </thead>
                                            @foreach ( $pemesanan AS $e => $p )
                                            @php
                                            $pemasukan+=$p->total;
                                            @endphp
                                            <tbody>
                                                <tr>
                                                    <td>Nama Pengunjung</td>
                                                    <td>{{ $p->kd_order }}</td>
                                                    <td>@php
                                                        $color="";
                                                        $text="";

                                                        if ( $p->jenis_tiket == "weekday" ) {

                                                        $color = "light-primary";
                                                        $text = "weekday";
                                                        }else{
                                                        $color = "light-danger";
                                                        $text = "weekend";
                                                        }

                                                        @endphp
                                                        <span class="label label-{{ $color }} label-pill label-inline mr-2">{{ $text }}</span>
                                                    </td>
                                                    <td>{{date('d M Y', strtotime($p->tgl_kunjungan))}}</td>
                                                    <td>{{date('d M Y', strtotime($p->created_at))}}</td>
                                                    <td>{{ $p->jumlah }}</td>
                                                    <td style="color:red;">Rp {{ number_format ($p->total, 0, ',','.') }}</td>
                                                </tr>
                                                @endforeach
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                            <!-- end: Invoice body-->
                            <!-- begin: Invoice footer-->

                            <div class="row justify-content-center bg-gray-100 py-8 px-8 py-md-10 px-md-0">
                                <div class="col-md-9">
                                    <div class="d-flex justify-content-between flex-column flex-md-row font-size-lg">
                                        <div class="d-flex flex-column mb-10 mb-md-0">
                                        </div>
                                        <div class="d-flex flex-column text-md-right">
                                            <span class="font-size-lg font-weight-bolder mb-1">TOTAL PEMASUKAN</span>
                                            <span class="font-size-h2 font-weight-boldest text-danger mb-1">{{number_format($pemasukan, 0, ',','.')}}</span>
                                        </div>
                                    </div>
                                </div>

                            </div>

                            <!-- end: Invoice footer-->
                            <!-- begin: Invoice action-->
                            <div class="row justify-content-center py-8 px-8 py-md-10 px-md-0">
                                <div class="col-md-9">
                                    <div class="d-flex justify-content-between">
                                        <a href="{{url('cetakpdfonline?dari='.$dari.'&sampai='.$sampai)}}" class="btn btn-light-primary font-weight-bolder" aria-haspopup="true" aria-expanded="false">
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

                                </div>
                            </div>
                            <!-- end: Invoice action-->
                            <!-- end: Invoice-->
                        </div>
                    </div>
                    <!-- end::Card-->
                </div>
            </div>
        </div>
    </div>
</div>

<div class="modal fade" id="modal-filter" tabindex="-1" role="dialog" aria-labelledby="modal-notification" aria-hidden="true">
    <div class="modal-dialog modal-default modal-dialog-centered modal-" role="document">
        <div class="modal-content bg-gradient-danger">

            <div class="modal-header">
                <h6 class="modal-title" id="modal-title-notification">Filter Laporan Berdasarkan Tanggal Berkunjung</h6>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">×</span>
                </button>
            </div>

            <div class="modal-body">

                <form role="form" action="/laporanonline/periode" method="get">
                    <div class="box-body">
                        <div class="form-group">
                            <label for="exampleInputEmail1">Mulai Tanggal</label>
                            <input type="date" name="dari" class="form-control datepicker" id="exampleInputEmail1" placeholder="Dari tanggal" value="{{date('d-m-Y')}}" autocomplete="off">
                        </div>
                        <div class="form-group">
                            <label for="exampleInputPassword1">Sampai Tanggal</label>
                            <input type="date" name="sampai" class="form-control datepicker" id="exampleInputPassword1" placeholder="Sampai tanggal" value="{{date('d-m-Y')}}" autocomplete="off">
                        </div>
                    </div>
                    <!-- /.box-body -->

                    <div class="box-footer">
                        <button type="submit" class="btn btn-primary">Submit</button>
                    </div>
                </form>

            </div>

        </div>
    </div>
</div>

<script type="text/javascript">
    $('#btn-filter').click(function(e) {
        e.preventDefault(); //mencegah menjalankan proses apapun

        $('#modal-filter').modal();
    })
</script>
@endsection