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
                        <h3 class="card-title">Edit Petugas #{{ $id_profile }}</h3>
                    </div>
                    <!--begin::Form-->
                    <form action="/edit-petugas/{{ $id_profile }}" method="POST">


                        @csrf

                        <div class="card-body">
                            <div class="form-group">
                                <label for="exampleSelect1">Username
                                    <span class="text-danger">*</span></label>
                                    <input type="text" name="username" class="form-control" value="{{ $petugas->username }}" placeholder="" />
                            </div>
                            <div class="form-group">
                                <label>Email
                                    <span class="text-danger">*</span></label>
                                <input type="text" name="email" class="form-control" value="{{ $petugas->email }}" placeholder="" />
                            </div>
                            <div class="form-group">
                                <label>Password
                                    <span class="text-danger">*</span></label>
                                <input type="text" name="password" class="form-control" value="{{ $petugas->password }}" placeholder="" />
                            </div>
                        </div>
                        <div class="card-footer">
                            <button type="submit" class="btn btn-warning mr-2">Simpan dan Perbarui</button>
                            <a href="petugas" class="btn btn-secondary">Batal</a>
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