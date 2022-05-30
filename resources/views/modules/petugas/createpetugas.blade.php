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
                        <h3 class="card-title">Tambah Petugas</h3>
                    </div>
                    <!--begin::Form-->
                    <form action="{{ route('add-petugas') }}" method="POST">


                        @csrf

                        <div class="card-body">
                            <div class="form-group">
                                <label for="exampleSelect1">Username Petugas
                                    <span class="text-danger">*</span></label>
                                <input type="text" name="username" class="form-control" placeholder="" />
                            </div>
                            <div class="form-group">
                                <label>Email
                                    <span class="text-danger">*</span></label>
                                <input type="email" name="email" class="form-control" placeholder="" />
                            </div>
                            <div class="form-group">
                                <label>Password
                                    <span class="text-danger">*</span></label>
                                <input type="password" name="password" class="form-control" placeholder="" />
                            </div>
                        </div>
                        <div class="card-footer">
                            <button type="submit" class="btn btn-primary mr-2">Tambahkan dan Simpan</button>
                            <a href="{{route('view-petugas')}}" class="btn btn-secondary">Batal</a>
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