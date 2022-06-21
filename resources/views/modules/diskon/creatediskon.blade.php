@extends('layouts.template-backend-sidebar')
<div class="content d-flex flex-column flex-column-fluid" id="kt_content">
    <!--begin::Subheader-->
    <div class="subheader py-5 py-lg-10 gutter-b subheader-transparent" id="kt_subheader">
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
                        <h3 class="card-title">Tambah Diskon</h3>
                    </div>
                    <!--begin::Form-->
                    <form action="{{ route('add-diskon') }}" method="POST" enctype="multipart/form-data">
                    @csrf
                        <div class="card-body">
                            <div class="form-group">
                                <label>Kode
                                    <span class="text-danger">*</span></label>
                                <input type="text" name="kode_diskon" class="form-control" placeholder="" />
                            </div>
                            <div class="form-group">
                                <label>Nama
                                    <span class="text-danger">*</span></label>
                                <input type="text" name="nama_diskon" class="form-control" placeholder="" />
                            </div>
                            <div class="form-group">
                                <label>Nilai
                                    <span class="text-danger">*</span></label>
                                <input type="number" name="nilai_diskon" class="form-control" value="" placeholder="" />
                            </div>
                            <div class="form-group">
                                <label for="image" class="form-label">Foto</label>
                                <input class="form-control  @error('image') is-invalid @enderror"  type="file" id="image" name="image">
                                @error('image')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label>Keterangan
                                    <span class="text-danger">*</span></label>
                                <input type="text" name="keterangan_diskon" class="form-control" placeholder="" />
                            </div>
                            <div class="form-group">
                                <label>Tanggal Awal
                                    <span class="text-danger">*</span></label>
                                <input type="text" value="" name="tgl_awal" class="form-control" id="tanggal-1" readonly="readonly" placeholder="Pilih tanggal awal" />
                            </div>
                            <div class="form-group">
                                <label>Tanggal Akhir
                                    <span class="text-danger">*</span></label>
                                <input type="text" value="" name="tgl_akhir" class="form-control" id="tanggal-2" readonly="readonly" placeholder="Pilih tanggal akhir" />
                            </div>
                        </div>
                        <div class="card-footer">
                            <button type="submit" class="btn btn-primary mr-2">Tambahkan dan Simpan</button>
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