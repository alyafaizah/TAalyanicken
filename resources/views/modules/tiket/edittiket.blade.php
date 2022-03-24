@extends('layouts.template-backend-sidebar')
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
                        <h3 class="card-title">Sunting Tiket #{{ $kd_tiket }}</h3>
                    </div>
                    <!--begin::Form-->
                    <form action="/edit-ticket/{{ $kd_tiket }}" method="POST">


                        @csrf

                        <div class="card-body">
                            <div class="form-group">
                                <label for="exampleSelect1">Jenis
                                    <span class="text-danger">*</span></label>
                                    <input type="text" name="jenis" class="form-control" value="{{ $tiket->jenis }}" placeholder="" />
                            </div>
                            <div class="form-group">
                                <label>Harga
                                    <span class="text-danger">*</span></label>
                                <input type="number" name="harga" class="form-control" value="{{ $tiket->harga }}" placeholder="" />
                            </div>
                            <div class="form-group">
                                <label>Stok
                                    <span class="text-danger">*</span></label>
                                <input type="number" name="stok" class="form-control" value="{{ $tiket->stok }}" placeholder="" />
                            </div>
                            <div class="form-group mb-1">
                                <label for="exampleTextarea">Keterangan</label>
                                <textarea class="form-control" name="keterangan" id="exampleTextarea" rows="3">{{ $tiket->keterangan }}</textarea>
                            </div>
                        </div>
                        <div class="card-footer">
                            <button type="submit" class="btn btn-warning mr-2">Simpan dan Perbarui</button>
                            <a href="tiket" class="btn btn-secondary">Batal</a>
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