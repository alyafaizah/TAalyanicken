@extends('layouts.template-backend-sidebar')

@section('main-content')
<div class="content d-flex flex-column flex-column-fluid" id="kt_content">
    <!--begin::Subheader-->
    <div class="subheader py-5 py-lg-10 gutter-b subheader-transparent" id="kt_subheader" style="background-color: #663259; background-position: right bottom; background-size: auto 100%; background-repeat: no-repeat; background-image: url(/metronic/theme/html/demo4/dist/assets/media/svg/patterns/taieri.svg)">
        <div class="container d-flex flex-column">
        </div>
    </div>
    <!--end::Subheader-->
    <!--begin::Container-->
    <div class="container">
        <div class="row">
            <div class="col-md-6 offset-3">
                <!--begin::Card-->
                <div class="card card-custom gutter-b example example-compact">
                    <div class="card-header">
                        <h3 class="card-title">Edit Petugas #</h3>
                    </div>
                    <!--begin::Form-->
                    <form action="/editdiskon/{{ $id_diskon }}" method="POST" enctype="multipart/form-data">


                        @csrf

                        <div class="card-body">
                            <div class="form-group">
                                <label>Kode
                                    <span class="text-danger">*</span></label>
                                <input type="kode_diskon" name="kode_diskon" class="form-control" value="{{ $diskon->kode_diskon }}" placeholder="" />
                            </div>
                            <div class="form-group">
                                <label>Nama
                                    <span class="text-danger">*</span></label>
                                <input type="nama_diskon" name="nama_diskon" class="form-control" value="{{ $diskon->nama_diskon }}" placeholder="" />
                            </div>
                            <div class="form-group">
                                <label>Nilai
                                    <span class="text-danger">*</span></label>
                                <input type="number" name="nilai_diskon" class="form-control" value="{{ $diskon->nilai_diskon }}" placeholder="" />
                            </div>
                            <div class="form-group">
                                <label>Keterangan</label>
                                <input type="keterangan_diskon" name="keterangan_diskon" class="form-control" value="{{ $diskon->keterangan_diskon }}" placeholder="" />
                            </div>
                            <div class="form-group">
                                <label>Tanggal Awal
                                    <span class="text-danger">*</span></label>
                                <input type="text" name="tgl_awal" class="form-control" id="tanggal-1" value="{{ $diskon->tgl_awal }}" readonly="readonly" placeholder="Pilih tanggal awal" />
                            </div>
                            <div class="form-group">
                                <label>Tanggal Akhir
                                    <span class="text-danger">*</span></label>
                                <input type="text" name="tgl_akhir" class="form-control" id="tanggal-2" value="{{ $diskon->tgl_akhir }}" readonly="readonly" placeholder="Pilih tanggal akhir" />
                            </div>
                            <div class="form-group">
                                <label>Status Diskon</label>
                                <div class="radio-inline">
                                    <label class="radio">
                                        <input type="radio" name="status" value="aktif" @php if ( $diskon->status ==
                                        "aktif" ) echo 'checked' @endphp />
                                        <span></span>
                                        Aktif
                                    </label>
                                    <label class="radio">
                                        <input type="radio" name="status" value="non-aktif" @php if ( $diskon->status ==
                                        "non-aktif" ) echo 'checked' @endphp/>
                                        <span></span>
                                        Nonaktif
                                    </label>

                                </div>
                                <span class="form-text text-muted">Status diskon</span>
                            </div>
                        </div>
                        <div class="card-footer">
                            <button type="submit" class="btn btn-warning mr-2">Simpan dan Perbarui</button>
                            <a href="{{route('view-diskon')}}" class="btn btn-secondary">Batal</a>
                        </div>
                    </form>
                    <!--end::Form-->
                </div>
                <!--end::Card-->
            </div>
            <div class="col-md-6">
            </div>
        </div>
    </div>
    <!--end::Container-->
</div>
@endsection