@extends('layouts.template-backend-navbar-cust')

<!--begin::Head-->
<head>
    <base href="../../../">
    <meta charset="utf-8" />
    <title>Pemesanan | Keenthemes</title>
    <meta name="description" content="ECommerceCheckout" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <link rel="canonical" href="https://keenthemes.com/metronic" />
    <!--begin::Fonts-->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700" />
    <!--end::Fonts-->
    <!--begin::Page Custom Styles(used by this page)-->
    <link href="assets/css/pages/wizard/wizard-4.css" rel="stylesheet" type="text/css" />
    <!--end::Page Custom Styles-->
    <!--begin::Global Theme Styles(used by all pages)-->
    <link href="assets/plugins/global/plugins.bundle.css" rel="stylesheet" type="text/css" />
    <link href="assets/plugins/custom/prismjs/prismjs.bundle.css" rel="stylesheet" type="text/css" />
    <link href="assets/css/style.bundle.css" rel="stylesheet" type="text/css" />
    <!--end::Global Theme Styles-->
    <!--begin::Layout Themes(used by all pages)-->
    <!--end::Layout Themes-->
    <link rel="shortcut icon" href="assets/media/logos/favicon.ico" />
</head>
<!--end::Head-->

<!--begin::Body-->
<body id="kt_body" class="header-fixed header-mobile-fixed header-bottom-enabled page-loading">
    <!--begin::Main-->

    <div class="d-flex flex-column flex-root">
        <!--begin::Page-->
        <div class="d-flex flex-row flex-column-fluid page">
            <!--begin::Wrapper-->
            <div class="d-flex flex-column flex-row-fluid wrapper" id="kt_wrapper">
                <!--begin::Content-->
                <div class="content d-flex flex-column flex-column-fluid" id="kt_content">
                    <!--begin::Entry-->
                    <div class="d-flex flex-column-fluid">
                        <!--begin::Container-->
                        <div class="container">
                            <!--begin::Page Layout-->
                            <div class="d-flex flex-row">
                                <!--begin::Layout-->
                                <div class="flex-row-fluid ml-lg-8">
                                    <!--begin::Section-->
                                    <div class="card card-custom card-transparent">
                                        <div class="card-body p-0">
                                            <!--begin: Wizard-->
                                            <div class="wizard wizard-4" id="kt_wizard" data-wizard-state="step-first"
                                                data-wizard-clickable="false">
                                                <!--begin: Wizard Nav-->
                                                <div class="wizard-nav">
                                                    <div class="wizard-steps" data-total-steps="3">
                                                        <!--begin::Wizard Step 1 Nav-->
                                                        <div class="wizard-step" data-wizard-type="step"
                                                            data-wizard-state="current">
                                                            <div class="wizard-wrapper">
                                                                <div class="wizard-number">1</div>
                                                                <div class="wizard-label">
                                                                    <div class="wizard-title">Pemesanan Tiket</div>
                                                                    <div class="wizard-desc">emmm</div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <!--end::Wizard Step 1 Nav-->
                                                        <!--begin::Wizard Step 2 Nav-->
                                                        <div class="wizard-step" data-wizard-type="step">
                                                            <div class="wizard-wrapper">
                                                                <div class="wizard-number">2</div>
                                                                <div class="wizard-label">
                                                                    <div class="wizard-title">Rincian Pemesanan Tiket</div>
                                                                    <div class="wizard-desc">Payment Options</div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <!--end::Wizard Step 2 Nav-->
                                                        <!--begin::Wizard Step 3 Nav-->
                                                        <div class="wizard-step" data-wizard-type="step">
                                                            <div class="wizard-wrapper">
                                                                <div class="wizard-number">3</div>
                                                                <div class="wizard-label">
                                                                    <div class="wizard-title">Pembayaran</div>
                                                                    <div class="wizard-desc">Review and Submit</div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <!--end::Wizard Step 3 Nav-->
                                                    </div>
                                                </div>
                                                <!--end: Wizard Nav-->
                                                <!--begin: Wizard Body-->
                                                <div class="card card-custom card-shadowless rounded-top-0">
                                                    <div class="card-body p-0">
                                                        <div
                                                            class="row justify-content-center py-8 px-8 py-lg-15 px-lg-10">
                                                            <div class="col-xl-12 col-xxl-7">
                                                                <!--begin: Wizard Form-->
                                                                <form class="form mt-0 mt-lg-10" id="kt_form">
                                                                    <!--begin: Wizard Step 1-->
                                                                    <div class="pb-5" data-wizard-type="step-content"
                                                                        data-wizard-state="current">
                                                                        <h2 class="mb-10 font-weight-bold text-dark">
                                                                            Pemesanan Tiket</h2>
                                                                        <!--begin::Input-->
                                                                        <div class="row">
                                                                            <div class="col-xl-6">
                                                                                <!--begin::Input-->
                                                                                <div class="form-group">
                                                                                    <label>Tanggal Berkunjung</label>
                                                                                    <input type="text"
                                                                                        class="form-control form-control-solid form-control-lg"
                                                                                        name="tanggal"
                                                                                        placeholder="Pilih tanggal berkunjung" />
                                                                                    <span
                                                                                        class="form-text text-muted">Pilih
                                                                                        tanggal untuk berkunjung</span>
                                                                                </div>
                                                                                <!--end::Input-->
                                                                            </div>
                                                                            <div class="col-xl-6">
                                                                                <!--begin::Input-->
                                                                                <div class="form-group">
                                                                                    <label>Jumlah Pemesanan</label>
                                                                                    <input type="number"
                                                                                        class="form-control form-control-solid form-control-lg"
                                                                                        name="jumlah"
                                                                                        placeholder="Masukkan jumlah tiket" />
                                                                                    <span
                                                                                        class="form-text text-muted">Masukkan
                                                                                        jumlah pemesanan tiket</span>
                                                                                </div>
                                                                                <!--end::Input-->
                                                                            </div>
                                                                        </div>

                                                                        <div class="form-group">
                                                                            <label>Jenis Tiket</label>
                                                                            <input type="text"
                                                                                class="form-control form-control-solid form-control-lg"
                                                                                name="jenis_tiket" value="weekend"
                                                                                disabled />
                                                                            <span class="form-text text-muted">Jenis
                                                                                tiket yang akan dibeli</span>
                                                                        </div>
                                                                        <!--end::Input-->
                                                                        <!--begin::Input-->
                                                                        <div class="form-group">
                                                                            <label>Harga / Qty</label>
                                                                            <input type="text"
                                                                                class="form-control form-control-solid form-control-lg"
                                                                                name="harga" value="5000" disabled />
                                                                            <span class="form-text text-muted">Harga per
                                                                                tiket </span>
                                                                        </div>
                                                                        <!--end::Input-->

                                                                    </div>
                                                                    <!--end: Wizard Step 1-->

                                                                    <!--begin: Wizard Step 2-->
                                                                    <div class="pb-5" data-wizard-type="step-content">
                                                                        <!--begin::Section-->
                                                                        <h2 class="mb-10 font-weight-bold text-dark">
                                                                            Rincian Pemesanan Tiket</h2>
                                                                        <h6 class="font-weight-bolder">Kode Order:</h6>
                                                                        <div class="text-dark-50 line-height-lg mb-7">
                                                                            <div>#0huhftvggggg87</div>
                                                                        </div>

                                                                        <h6 class="font-weight-bolder">Tanggal
                                                                            Berkunjung:</h6>
                                                                        <div class="text-dark-50 line-height-lg">
                                                                            <div>Jumat</div>
                                                                        </div>
                                                                        <div class="separator separator-dashed my-5">
                                                                        </div>
                                                                        <!--end::Section-->
                                                                        <!--begin::Section-->
                                                                        <h6 class="font-weight-bolder mb-3">Informasi
                                                                            Pemesanan Tiket</h6>
                                                                        <div class="text-dark-40 line-height-lg">
                                                                            <div class="table-responsive">
                                                                                <table class="table">
                                                                                    <thead>
                                                                                        <tr>
                                                                                            <th
                                                                                                class="pl-0 font-weight-bold pt-10 text-uppercase">
                                                                                                Jenis Tiket</th>
                                                                                            <th
                                                                                                class="text-right font-weight-bold pt-10 text-uppercase">
                                                                                                Jumlah</th>
                                                                                            <th
                                                                                                class="text-right font-weight-bold pt-10 text-uppercase">
                                                                                                Harga</th>
                                                                                            <th
                                                                                                class="text-right pr-0 font-weight-bold pt-10 text-uppercase">
                                                                                                Total</th>
                                                                                        </tr>
                                                                                    </thead>
                                                                                    <tbody>
                                                                                        <tr class="font-weight">
                                                                                            <td
                                                                                                class="border-0 pl-0 pt-7 d-flex align-items-center">
                                                                                                weekend
                                                                                            </td>
                                                                                            <td
                                                                                                class="text-right pt-7 align-middle">
                                                                                                2</td>
                                                                                            <td
                                                                                                class="text-right pt-7 align-middle">
                                                                                                $90.00</td>
                                                                                            <td
                                                                                                class="text-primary pr-0 pt-7 text-right align-middle">
                                                                                                $180.00</td>
                                                                                        </tr>
                                                                                    </tbody>
                                                                                </table>
                                                                            </div>
                                                                        </div>
                                                                        <div class="separator separator-dashed my-5">
                                                                        </div>
                                                                        <!--end::Section-->
                                                                        <!--begin::Section-->
                                                                        <div class="text-dark-50 line-height-lg">
                                                                            <div>Klik lanjutkan untuk melanjutkan
                                                                                pembayaran</div>
                                                                        </div>
                                                                        <!--end::Section-->
                                                                    </div>
                                                                    <!--end: Wizard Step 2-->

                                                                    <!--begin: Wizard Step 3-->
                                                                    <div class="pb-5" data-wizard-type="step-content">
                                                                        <h4 class="mb-10 font-weight-bold text-dark">
                                                                            Pembayaran</h4>
                                                                        <div class="row">
                                                                            <div class="col-xl-6">
                                                                                <!--begin::Input-->
                                                                                <div class="form-group">
                                                                                    <label>Name on Card</label>
                                                                                    <input type="text"
                                                                                        class="form-control form-control-solid form-control-lg"
                                                                                        name="ccname"
                                                                                        placeholder="Card Name"
                                                                                        value="John Wick" />
                                                                                    <span
                                                                                        class="form-text text-muted">Please
                                                                                        enter your Card Name.</span>
                                                                                </div>
                                                                                <!--end::Input-->
                                                                            </div>
                                                                            <div class="col-xl-6">
                                                                                <!--begin::Input-->
                                                                                <div class="form-group">
                                                                                    <label>Card Number</label>
                                                                                    <input type="text"
                                                                                        class="form-control form-control-solid form-control-lg"
                                                                                        name="ccnumber"
                                                                                        placeholder="Card Number"
                                                                                        value="4444 3333 2222 1111" />
                                                                                    <span
                                                                                        class="form-text text-muted">Please
                                                                                        enter your Address.</span>
                                                                                </div>
                                                                                <!--end::Input-->
                                                                            </div>
                                                                        </div>
                                                                        <div class="row">
                                                                            <div class="col-xl-4">
                                                                                <!--begin::Input-->
                                                                                <div class="form-group">
                                                                                    <label>Card Expiry Month</label>
                                                                                    <input type="number"
                                                                                        class="form-control form-control-solid form-control-lg"
                                                                                        name="ccmonth"
                                                                                        placeholder="Card Expiry Month"
                                                                                        value="01" />
                                                                                    <span
                                                                                        class="form-text text-muted">Please
                                                                                        enter your Card Expiry
                                                                                        Month.</span>
                                                                                </div>
                                                                                <!--end::Input-->
                                                                            </div>
                                                                            <div class="col-xl-4">
                                                                                <!--begin::Input-->
                                                                                <div class="form-group">
                                                                                    <label>Card Expiry Year</label>
                                                                                    <input type="number"
                                                                                        class="form-control form-control-solid form-control-lg"
                                                                                        name="ccyear"
                                                                                        placeholder="Card Expire Year"
                                                                                        value="21" />
                                                                                    <span
                                                                                        class="form-text text-muted">Please
                                                                                        enter your Card Expiry
                                                                                        Year.</span>
                                                                                </div>
                                                                                <!--end::Input-->
                                                                            </div>
                                                                            <div class="col-xl-4">
                                                                                <!--begin::Input-->
                                                                                <div class="form-group">
                                                                                    <label>Card CVV Number</label>
                                                                                    <input type="password"
                                                                                        class="form-control form-control-solid form-control-lg"
                                                                                        name="cccvv"
                                                                                        placeholder="Card CVV Number"
                                                                                        value="123" />
                                                                                    <span
                                                                                        class="form-text text-muted">Please
                                                                                        enter your Card CVV
                                                                                        Number.</span>
                                                                                </div>
                                                                                <!--end::Input-->
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <!--end: Wizard Step 3-->
                                                                    <!--begin: Wizard Actions-->
                                                                    <div
                                                                        class="d-flex justify-content-between border-top mt-5 pt-10">
                                                                        <div class="mr-2">
                                                                            <button type="button"
                                                                                class="btn btn-light-primary font-weight-bolder text-uppercase px-9 py-4"
                                                                                data-wizard-type="action-prev">Batal</button>
                                                                        </div>
                                                                        <div>
                                                                            <button type="button"
                                                                                class="btn btn-success font-weight-bolder text-uppercase px-9 py-4"
                                                                                data-wizard-type="action-submit">Pesan</button>
                                                                            <button type="button"
                                                                                class="btn btn-primary font-weight-bolder text-uppercase px-9 py-4"
                                                                                data-wizard-type="action-next">Lanjutkan</button>
                                                                        </div>
                                                                    </div>
                                                                    <!--end: Wizard Actions-->
                                                                </form>
                                                                <!--end: Wizard Form-->
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <!--end: Wizard Bpdy-->
                                            </div>
                                            <!--end: Wizard-->
                                        </div>
                                    </div>
                                    <!--end::Section-->
                                </div>
                                <!--end::Layout-->
                            </div>
                            <!--end::Page Layout-->
                        </div>
                        <!--end::Container-->
                    </div>
                    <!--end::Entry-->
                </div>
                <!--end::Content-->
            </div>
            <!--end::Wrapper-->
        </div>
        <!--end::Page-->
    </div>
    <!--end::Main-->

    </div>
    <!--end::Demo Panel-->
    <script>
        var HOST_URL = "https://preview.keenthemes.com/metronic/theme/html/tools/preview";
    </script>
    <!--begin::Global Config(global config for global JS scripts)-->
    <script>
        var KTAppSettings = {
            "breakpoints": {
                "sm": 576,
                "md": 768,
                "lg": 992,
                "xl": 1200,
                "xxl": 1200
            },
            "colors": {
                "theme": {
                    "base": {
                        "white": "#ffffff",
                        "primary": "#6993FF",
                        "secondary": "#E5EAEE",
                        "success": "#1BC5BD",
                        "info": "#8950FC",
                        "warning": "#FFA800",
                        "danger": "#F64E60",
                        "light": "#F3F6F9",
                        "dark": "#212121"
                    },
                    "light": {
                        "white": "#ffffff",
                        "primary": "#E1E9FF",
                        "secondary": "#ECF0F3",
                        "success": "#C9F7F5",
                        "info": "#EEE5FF",
                        "warning": "#FFF4DE",
                        "danger": "#FFE2E5",
                        "light": "#F3F6F9",
                        "dark": "#D6D6E0"
                    },
                    "inverse": {
                        "white": "#ffffff",
                        "primary": "#ffffff",
                        "secondary": "#212121",
                        "success": "#ffffff",
                        "info": "#ffffff",
                        "warning": "#ffffff",
                        "danger": "#ffffff",
                        "light": "#464E5F",
                        "dark": "#ffffff"
                    }
                },
                "gray": {
                    "gray-100": "#F3F6F9",
                    "gray-200": "#ECF0F3",
                    "gray-300": "#E5EAEE",
                    "gray-400": "#D6D6E0",
                    "gray-500": "#B5B5C3",
                    "gray-600": "#80808F",
                    "gray-700": "#464E5F",
                    "gray-800": "#1B283F",
                    "gray-900": "#212121"
                }
            },
            "font-family": "Poppins"
        };
    </script>
    <!--end::Global Config-->
    <!--begin::Global Theme Bundle(used by all pages)-->
    <script src="assets/plugins/global/plugins.bundle.js"></script>
    <script src="assets/plugins/custom/prismjs/prismjs.bundle.js"></script>
    <script src="assets/js/scripts.bundle.js"></script>
    <!--end::Global Theme Bundle-->
    <!--begin::Page Scripts(used by this page)-->
    <script src="assets/js/pages/custom/ecommerce/checkout.js"></script>
    <!--end::Page Scripts-->
</body>
<!--end::Body-->