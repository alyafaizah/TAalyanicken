@extends('layouts.template-backend-cust')

@section('main-navbar-cust')
<!--begin::Header-->
<div id="kt_header" class="header flex-column header-fixed">
    <!--begin::Top-->
    <div class="header-top">
        <!--begin::Container-->
        <div class="container">
            <!--begin::Left-->
            <div class="d-none d-lg-flex align-items-center mr-3">
                <!--begin::Tab Navs(for desktop mode)-->
                <ul class="header-tabs nav align-self-end font-size-lg" role="tablist">
                    <!--begin::Item-->
                    <li class="nav-item">
                        <a href="#" class="nav-link py-4 px-6 active" data-toggle="tab" data-target="#kt_header_tab_1" role="tab">Home</a>
                    </li>
                    <!--end::Item-->
                </ul>
                <!--begin::Tab Navs-->
            </div>
            <!--end::Left-->
            <!--begin::Topbar-->
            <div class="topbar bg-primary">
                <!--begin::Search-->
                <div class="dropdown">
                    <!--begin::Dropdown-->
                    <div class="dropdown-menu p-0 m-0 dropdown-menu-right dropdown-menu-anim-up dropdown-menu-lg">
                        <div class="quick-search quick-search-dropdown" id="kt_quick_search_dropdown">
                            <!--begin:Form-->
                            <form method="get" class="quick-search-form">
                                <div class="input-group">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text">
                                            <span class="svg-icon svg-icon-lg">
                                                <!--begin::Svg Icon | path:assets/media/svg/icons/General/Search.svg-->
                                                <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
                                                    <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                                        <rect x="0" y="0" width="24" height="24" />
                                                        <path d="M14.2928932,16.7071068 C13.9023689,16.3165825 13.9023689,15.6834175 14.2928932,15.2928932 C14.6834175,14.9023689 15.3165825,14.9023689 15.7071068,15.2928932 L19.7071068,19.2928932 C20.0976311,19.6834175 20.0976311,20.3165825 19.7071068,20.7071068 C19.3165825,21.0976311 18.6834175,21.0976311 18.2928932,20.7071068 L14.2928932,16.7071068 Z" fill="#000000" fill-rule="nonzero" opacity="0.3" />
                                                        <path d="M11,16 C13.7614237,16 16,13.7614237 16,11 C16,8.23857625 13.7614237,6 11,6 C8.23857625,6 6,8.23857625 6,11 C6,13.7614237 8.23857625,16 11,16 Z M11,18 C7.13400675,18 4,14.8659932 4,11 C4,7.13400675 7.13400675,4 11,4 C14.8659932,4 18,7.13400675 18,11 C18,14.8659932 14.8659932,18 11,18 Z" fill="#000000" fill-rule="nonzero" />
                                                    </g>
                                                </svg>
                                                <!--end::Svg Icon-->
                                            </span>
                                        </span>
                                    </div>
                                    <input type="text" class="form-control" placeholder="Search..." />
                                    <div class="input-group-append">
                                        <span class="input-group-text">
                                            <i class="quick-search-close ki ki-close icon-sm text-muted"></i>
                                        </span>
                                    </div>
                                </div>
                            </form>
                            <!--end::Form-->
                            <!--begin::Scroll-->
                            <div class="quick-search-wrapper scroll" data-scroll="true" data-height="325" data-mobile-height="200"></div>
                            <!--end::Scroll-->
                        </div>
                    </div>
                    <!--end::Dropdown-->
                </div>
                <!--end::Search-->
                <!--begin::User-->
                <div class="topbar-item">
                    <div class="btn btn-icon btn-hover-transparent-white w-sm-auto d-flex align-items-center btn-lg px-2" id="kt_quick_user_toggle">
                        <div class="d-flex flex-column text-right pr-sm-3">

                            @php
                            $level = "require login";
                            $nama_lengkap = "require login";

                            if ( session('nama_lengkap') ) {

                            $level = session('level');
                            $nama_lengkap = session('nama_lengkap');

                            }

                            @endphp
                            <span class="text-white opacity-50 font-weight-bold font-size-sm d-none d-sm-inline">{{ $level }}</span>
                            <span class="text-white font-weight-bolder font-size-sm d-none d-sm-inline">{{$nama_lengkap}}</span>
                        </div>
                        <span class="symbol symbol-35">
                            <span class="symbol-label font-size-h5 font-weight-bold text-white bg-white-o-30">{{$nama_lengkap[0]}}</span>
                        </span>
                    </div>
                </div>
                <!--end::User-->
            </div>
            <!--end::Topbar-->
        </div>
        <!--end::Container-->
    </div>
    <!--end::Top-->
    <!--begin::Bottom-->
    <div class="header-bottom">
        <!--begin::Container-->
        <div class="container">
            <!--begin::Header Menu Wrapper-->
            <div class="header-navs header-navs-left" id="kt_header_navs">
                <!--begin::Tab Navs(for tablet and mobile modes)-->
                <ul class="header-tabs p-5 p-lg-0 d-flex d-lg-none nav nav-bold nav-tabs" role="tablist">
                    <!--begin::Item-->
                    <li class="nav-item mr-2">
                        <a href="#" class="nav-link btn btn-clean active" data-toggle="tab" data-target="#kt_header_tab_1" role="tab">Home</a>
                    </li>
                    <!--end::Item-->
                    <!--begin::Item-->
                    <!--end::Item-->
                </ul>
                <!--begin::Tab Navs-->
                <!--begin::Tab Content-->
                <div class="tab-content">
                    <!--begin::Tab Pane-->
                    <div class="tab-pane py-5 p-lg-0 show active" id="kt_header_tab_1">
                        <!--begin::Menu-->
                        <div id="kt_header_menu" class="header-menu header-menu-mobile header-menu-layout-default">
                            <!--begin::Nav-->
                            <ul class="menu-nav">
                                <li class="menu-item" aria-haspopup="true">
                                    <a href="/checkout" class="menu-link ">
                                        <span class="menu-text">Pemesanan</span>
                                    </a>
                                </li>
                                <li class="menu-item" data-menu-toggle="click" aria-haspopup="true">
                                    <a href="javascript:;" class="menu-link menu-toggle">
                                        <span class="menu-text">Pembayaran</span>
                                        <span class="menu-desc"></span>
                                        <i class="menu-arrow"></i>
                                    </a>
                                </li>
                                <li class="menu-item" data-menu-toggle="click" aria-haspopup="true">
                                    <a href="/riwayattransaksi" class="menu-link">
                                        <span class="menu-text">Riwayat Transaksi</span>
                                    </a>
                                </li>
                                <li class="menu-item" data-menu-toggle="click" aria-haspopup="true">
                                    <a href="/riwayatpembayaran" class="menu-link">
                                        <span class="menu-text">Riwayat Pembayaran</span>
                                    </a>
                                </li>
                                <li class="menu-item" data-menu-toggle="click" aria-haspopup="true">
                                    <a href="/dashboardcust" class="menu-link">
                                        <span class="menu-text">Profile</span>
                                    </a>
                                </li>
                            </ul>
                            <!--end::Nav-->
                        </div>
                        <!--end::Menu-->
                    </div>
                    <!--begin::Tab Pane-->
                    <!--begin::Tab Pane-->
                    <div class="tab-pane p-5 p-lg-0 justify-content-between" id="kt_header_tab_2">
                        <div class="d-flex flex-column flex-lg-row align-items-start align-items-lg-center">
                            <!--begin::Actions-->
                            <a href="#" class="btn btn-light-success font-weight-bold mr-3 my-2 my-lg-0">Latest
                                Orders</a>
                            <a href="#" class="btn btn-light-primary font-weight-bold my-2 my-lg-0">Customer Service</a>
                            <!--end::Actions-->
                        </div>
                        <div class="d-flex align-items-center">
                            <!--begin::Actions-->
                            <a href="#" class="btn btn-danger font-weight-bold my-2 my-lg-0">Generate Reports</a>
                            <!--end::Actions-->
                        </div>
                    </div>
                    <!--begin::Tab Pane-->
                </div>
                <!--end::Tab Content-->
            </div>
            <!--end::Header Menu Wrapper-->
        </div>
        <!--end::Container-->
    </div>
    <!--end::Bottom-->
</div>
<!--end::Header-->
@endsection