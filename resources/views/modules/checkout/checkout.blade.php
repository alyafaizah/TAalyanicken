@extends('layouts.template-backend-navbar-cust')

<!--begin::Head-->

<head>
    <base href="../../../">
    <meta charset="utf-8" />
    <title>Kandang Sapi | {{$title}}</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
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
    <script type="text/javascript" src="https://app.sandbox.midtrans.com/snap/snap.js" data-client-key="SB-Mid-client-wKAF6jye0ktTBz4a"></script>
    <!-- Note: replace with src="https://app.midtrans.com/snap/snap.js" for Production environment -->
    <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
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
                                            <div class="wizard wizard-4" id="kt_wizard" data-wizard-state="step-first" data-wizard-clickable="false">
                                                <!--begin: Wizard Nav-->
                                                <div class="wizard-nav">
                                                    <div class="wizard-steps" data-total-steps="3">
                                                        <!--begin::Wizard Step 1 Nav-->
                                                        <div class="wizard-step" data-wizard-type="step" data-wizard-state="current">
                                                            <div class="wizard-wrapper">
                                                                <div class="wizard-number">1</div>
                                                                <div class="wizard-label">
                                                                    <div class="wizard-title">Pemesanan Tiket</div>
                                                                    <div class="wizard-desc">.</div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <!--end::Wizard Step 1 Nav-->
                                                        <!--begin::Wizard Step 2 Nav-->
                                                        <div class="wizard-step" data-wizard-type="step">
                                                            <div class="wizard-wrapper">
                                                                <div class="wizard-number">2</div>
                                                                <div class="wizard-label">
                                                                    <div class="wizard-title">Rincian Pemesanan Tiket
                                                                    </div>
                                                                    <div class="wizard-desc">.</div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <!--end::Wizard Step 2 Nav-->
                                                    </div>
                                                </div>
                                                <!--end: Wizard Nav-->
                                                <!--begin: Wizard Body-->
                                                <div class="card card-custom card-shadowless rounded-top-0">
                                                    <div class="card-body p-0">
                                                        <div class="row justify-content-center py-8 px-8 py-lg-15 px-lg-10">
                                                            <div class="col-xl-12 col-xxl-7">
                                                                <!--begin: Wizard Form-->
                                                                <form action="{{ url('pengunjung/proses-pemesanan') }}" method="post" id="my-form">

                                                                    @csrf

                                                                    <div class="form mt-0 mt-lg-10" id="kt_form">
                                                                        <!--begin: Wizard Step 1-->
                                                                        <div class="pb-5" data-wizard-type="step-content" data-wizard-state="current">
                                                                            <h2 class="mb-10 font-weight-bold text-dark">
                                                                                Pemesanan Tiket</h2>



                                                                            {{-- Keterangan --}}
                                                                            <div class="row">
                                                                                <div class="col-md-5 text-center">
                                                                                    @php echo weekday() @endphp
                                                                                    <h5>Weekday</h5>
                                                                                    <small>Harga Tiket Mulai dari
                                                                                        <code>Senin -
                                                                                            Jumat</code></small>
                                                                                    <h2>{{ number_format($tiket->weekday, 2) }}
                                                                                    </h2>
                                                                                </div>

                                                                                <div class="col-md-5 text-center">
                                                                                    @php echo weekend() @endphp
                                                                                    <h5>Weekend</h5>
                                                                                    <small>Harga Tiket Mulai dari
                                                                                        <code>Sabtu -
                                                                                            Minggu</code></small>
                                                                                    <h2>{{ number_format($tiket->weekend, 2) }}
                                                                                    </h2>
                                                                                </div>
                                                                            </div>

                                                                            <hr>



                                                                            <!--begin::Input-->
                                                                            <div class="row">
                                                                                <div class="col-xl-6">
                                                                                    <!--begin::Input-->
                                                                                    <div class="form-group">
                                                                                        <label>Tanggal
                                                                                            Berkunjung</label>
                                                                                        <input type="text" value="" name="tanggal" class="form-control" id="kt_datepicker_1_modal" readonly="readonly" placeholder="Pilih tanggal" />
                                                                                        <span class="form-text text-muted">
                                                                                            Pilih tanggal untuk
                                                                                            berkunjung
                                                                                        </span>
                                                                                    </div>
                                                                                    <!--end::Input-->
                                                                                </div>
                                                                                <div class="col-xl-6">
                                                                                    <!--begin::Input-->
                                                                                    <div class="form-group">
                                                                                        <label>Jumlah Pemesanan</label>
                                                                                        <input type="number" class="form-control " value="" name="jumlah" placeholder="Masukkan jumlah tiket" />
                                                                                        <span class="form-text text-muted">Masukkan
                                                                                            jumlah pemesanan
                                                                                            tiket</span>
                                                                                    </div>
                                                                                    <!--end::Input-->
                                                                                </div>
                                                                            </div>


                                                                            <div class="row">
                                                                                <div class="col-md-6">

                                                                                    <div class="form-group">
                                                                                        <label>Jenis Tiket</label>
                                                                                        <input type="hidden" name="jenis_tiket">
                                                                                        <input type="text" class="form-control" name="jenis_tiket_interface" value="weekend" disabled />
                                                                                        <span class="form-text text-muted">Jenis
                                                                                            tiket yang akan
                                                                                            dibeli</span>
                                                                                    </div>
                                                                                </div>
                                                                                <div class="col-md-6">

                                                                                    <!--begin::Input-->
                                                                                    <div class="form-group">
                                                                                        <label>Harga / Qty</label>
                                                                                        <input type="text" class="form-control form-control-solid form-control-lg" name="harga" readonly />
                                                                                        <span class="form-text text-muted">Harga
                                                                                            per
                                                                                            tiket </span>
                                                                                    </div>
                                                                                    <!--end::Input-->
                                                                                </div>
                                                                            </div>

                                                                            <div class="row">
                                                                                <div class="col-md-6">
                                                                                <div class="form-group">
                                                                                        <label>Kode Diskon</label>
                                                                                        <input type="text" class="form-control " value="" name="" placeholder="Masukkan kode diskon" />
                                                                                        <span class="form-text text-muted">Masukkan kode diskon anda</span>
                                                                                    </div>
                                                                                </div>
                                                                            </div>


                                                                            <div class="row">
                                                                                <div class="col-md-12">
                                                                                    <div class="form-group">
                                                                                        <small>Total Biaya</small>
                                                                                        <h2 id="total"></h2>
                                                                                    </div>
                                                                                </div>
                                                                            </div>


                                                                            <!--end::Input-->


                                                                        </div>
                                                                        <!--end: Wizard Step 1-->

                                                                        <!--begin: Wizard Step 2-->
                                                                        <div class="pb-5" data-wizard-type="step-content">
                                                                            <!--begin::Section-->
                                                                            <h2 class="mb-10 font-weight-bold text-dark">
                                                                                Rincian Pemesanan Tiket</h2>
                                                                            <h6 class="font-weight-bolder">Kode Order:
                                                                            </h6>
                                                                            <div class="text-dark-50 line-height-lg mb-7">
                                                                                @php

                                                                                $kd_order = strtoupper(uniqid());
                                                                                @endphp
                                                                                <input type="hidden" name="kd_order" value="{{ $kd_order }}">

                                                                                <div>#{{ $kd_order }}</div>
                                                                            </div>

                                                                            <h6 class="font-weight-bolder">Tanggal
                                                                                Berkunjung:</h6>
                                                                            <div class="text-dark-50 line-height-lg">
                                                                                <div id="hari">Jumat</div>
                                                                            </div>
                                                                            <div class="separator separator-dashed my-5">
                                                                            </div>
                                                                            <!--end::Section-->
                                                                            <!--begin::Section-->
                                                                            <h6 class="font-weight-bolder mb-3">
                                                                                Informasi
                                                                                Pemesanan Tiket</h6>
                                                                            <div class="text-dark-40 line-height-lg">
                                                                                <div class="table-responsive">
                                                                                    <table class="table">
                                                                                        <thead>
                                                                                            <tr>
                                                                                                <th class="pl-0 font-weight-bold pt-10 text-uppercase">
                                                                                                    Jenis Tiket</th>
                                                                                                <th class="text-right font-weight-bold pt-10 text-uppercase">
                                                                                                    Jumlah</th>
                                                                                                <th class="text-right font-weight-bold pt-10 text-uppercase">
                                                                                                    Harga</th>
                                                                                                <th class="text-right pr-0 font-weight-bold pt-10 text-uppercase">
                                                                                                    Total</th>
                                                                                            </tr>
                                                                                        </thead>
                                                                                        <tbody>
                                                                                            <tr class="font-weight">
                                                                                                <td id="table-jenis" class="border-0 pl-0 pt-7 d-flex align-items-center">
                                                                                                    weekend
                                                                                                </td>
                                                                                                <td id="table-jumlah" class="text-right pt-7 align-middle">
                                                                                                    2</td>
                                                                                                <td id="table-harga" class="text-right pt-7 align-middle">
                                                                                                    $90.00</td>
                                                                                                <td id="table-subtotal" class="text-primary pr-0 pt-7 text-right align-middle">
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


                                                                        <!--begin: Wizard Actions-->
                                                                        <div class="d-flex justify-content-between border-top mt-5 pt-10">
                                                                            <div class="mr-2">
                                                                                <button type="button" class="btn btn-light-primary font-weight-bolder text-uppercase px-9 py-4" data-wizard-type="action-prev">Batal</button>
                                                                            </div>
                                                                            <div>
                                                                                <button id="pay-button" type="submit" class="btn btn-success font-weight-bolder text-uppercase px-9 py-4" data-wizard-type="action-submit">Bayar</button>
                                                                                <button type="button" class="btn btn-primary font-weight-bolder text-uppercase px-9 py-4" data-wizard-type="action-next">Lanjutkan</button>
                                                                            </div>
                                                                        </div>
                                                                        <!--end: Wizard Actions-->
                                                                    </div>
                                                                    <!--end: Wizard Form-->
                                                                </form>
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


    <script>
        $(function() {

            var nominal = 0;

            $('input[name="tanggal"]').on('change', function() {

                var tanggal = $(this).val();
                $.ajax({
                    async: false,
                    type: "GET",
                    url: "{{ url('request-date') }}",
                    data: "tanggal=" + tanggal,
                    dataType: "json",
                    success: function(response) {

                        nominal = response[1];

                        $('input[name="jenis_tiket"]').val(response[0]);
                        $('input[name="jenis_tiket_interface"]').val(response[0]);
                        $('input[name="harga"]').val(nominal);
                        $('#hari').text(response[2]);


                        // form 2  :: table
                        $('#table-jenis').text(response[0]);
                        $('#table-harga').text(response[1]);

                    }
                });
            });


            $('input[name="jumlah"]').on('keyup', function() {

                let jumlah = $(this).val();
                let total = jumlah * nominal;

                $('#total').text(total);


                // form 2 :: table
                $('#table-jumlah').text(jumlah);
                $('#table-subtotal').text(total);

            });
        });
    </script>

    <script>
        "use strict";

        // Class definition
        var KTEcommerceCheckout = function() {
            // Base elements
            var _wizardEl;
            var _formEl;
            var _wizardObj;
            var _validations = [];

            // Private functions
            var _initWizard = function() {
                // Initialize form wizard
                _wizardObj = new KTWizard(_wizardEl, {
                    startStep: 1, // initial active step number
                    clickableSteps: false // allow step clicking
                });

                // Validation before going to next page
                _wizardObj.on('change', function(wizard) {
                    if (wizard.getStep() > wizard.getNewStep()) {
                        return; // Skip if stepped back
                    }

                    // Validate form before change wizard step
                    var validator = _validations[wizard.getStep() - 1]; // get validator for currnt step

                    if (validator) {
                        validator.validate().then(function(status) {
                            if (status == 'Valid') {
                                wizard.goTo(wizard.getNewStep());

                                KTUtil.scrollTop();
                            } else {
                                Swal.fire({
                                    text: "Maaf, sepertinya kamu belum mengisi form pemesanan, harap isikan tanggal dan jumlah pesanan.",
                                    icon: "error",
                                    buttonsStyling: false,
                                    confirmButtonText: "Oke saya mengerti",
                                    customClass: {
                                        confirmButton: "btn font-weight-bold btn-light"
                                    }
                                }).then(function() {
                                    KTUtil.scrollTop();
                                });
                            }
                        });
                    }

                    return false; // Do not change wizard step, further action will be handled by he validator
                });

                // Change event
                _wizardObj.on('changed', function(wizard) {
                    KTUtil.scrollTop();
                });

                // Submit event
                _wizardObj.on('submit', function(wizard) {
                    Swal.fire({
                        text: "Terima Kasih, Pemesanan anda berhasil terbuat, selesaikan pembayaran agar segera kami proses segera",
                        icon: "success",
                        showCancelButton: true,
                        buttonsStyling: false,
                        confirmButtonText: "Yes, submit!",
                        cancelButtonText: "No, cancel",
                        customClass: {
                            confirmButton: "btn font-weight-bold btn-primary",
                            cancelButton: "btn font-weight-bold btn-default"
                        }
                    }).then(function(result) {
                        if (result.value) {

                            $('#my-form').submit();

                        } else if (result.dismiss === 'cancel') {
                            Swal.fire({
                                text: "Your form has not been submitted!.",
                                icon: "error",
                                buttonsStyling: false,
                                confirmButtonText: "Ok, got it!",
                                customClass: {
                                    confirmButton: "btn font-weight-bold btn-primary",
                                }
                            });
                        }
                    });
                });
            }

            var _initValidation = function() {
                // Init form validation rules. For more info check the FormValidation plugin's official documentation:https://formvalidation.io/
                // Step 1
                _validations.push(FormValidation.formValidation(
                    _formEl, {
                        fields: {
                            tanggal: {
                                validators: {
                                    notEmpty: {
                                        message: 'Harap isikan tanggal'
                                    }
                                }
                            },
                            jumlah: {
                                validators: {
                                    notEmpty: {
                                        message: 'Isikan jumlah'
                                    }
                                }
                            }
                        },
                        plugins: {
                            trigger: new FormValidation.plugins.Trigger(),
                            // Bootstrap Framework Integration
                            bootstrap: new FormValidation.plugins.Bootstrap({
                                //eleInvalidClass: '',
                                eleValidClass: '',
                            })
                        }
                    }
                ));

            }

            return {
                // public functions
                init: function() {
                    _wizardEl = KTUtil.getById('kt_wizard');
                    _formEl = KTUtil.getById('kt_form');

                    _initWizard();
                    _initValidation();
                }
            };
        }();

        jQuery(document).ready(function() {
            KTEcommerceCheckout.init();
        });
    </script>

    <script type="text/javascript">
        // For example trigger on button clicked, or any time you need
        var payButton = document.getElementById('pay-button');
        payButton.addEventListener('click', function() {
            // Trigger snap popup. @TODO: Replace TRANSACTION_TOKEN_HERE with your transaction token
            window.snap.pay('{{$snap_token}}', {
                onSuccess: function(result) {
                    /* You may add your own implementation here */
                    console.log(result);
                    send_response_to_form(result);
                },
                onPending: function(result) {
                    /* You may add your own implementation here */
                    console.log(result);
                    send_response_to_form(result);
                },
                onError: function(result) {
                    /* You may add your own implementation here */
                    console.log(result);
                    send_response_to_form(result);
                },
                onClose: function() {
                    /* You may add your own implementation here */
                    alert('you closed the popup without finishing the payment');
                }
            })
        });

        function send_response_to_form(result) {
            document.getElementById('json_callback').value = JSON.stringify(result);
            $('#submit_form').submit();
        }
    </script>

    @php

    function weekday()
    {
    return '<svg width="200px" height="200px" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 611.492 523.95294" xmlns:xlink="http://www.w3.org/1999/xlink">
        <title>Tiket Weekday</title>
        <path d="M84.10482,513.25159c-1.21703,.07623-1.88965-1.43585-.96888-2.31714l.09161-.3642-.0364-.0874c-1.23077-2.93475-5.40199-2.91449-6.6223,.0246-1.08311,2.60864-2.46209,5.22174-2.80163,7.97992-.15221,1.21753-.08373,2.45795,.18644,3.65271-2.53788-5.54376-3.87342-11.59735-3.87342-17.68524,0-1.5296,.08373-3.0592,.25493-4.58496,.14079-1.24805,.33484-2.4884,.58598-3.71741,1.35831-6.6434,4.29955-12.97095,8.54201-18.25598,2.03944-1.11487,3.74023-2.85751,4.76755-4.94638,.36907-.75339,.65825-1.56384,.79523-2.3895-.23209,.03043-.87515-3.50436-.70009-3.72122-.32345-.49081-.90237-.7348-1.25563-1.21375-1.75688-2.38196-4.17742-1.96606-5.44104,1.27084-2.69939,1.36237-2.72552,3.62183-1.06919,5.79486,1.05377,1.38251,1.19856,3.2532,2.12316,4.73328-.09514,.12177-.19407,.23975-.28919,.36151-1.74436,2.23734-3.25305,4.64212-4.52489,7.16849,.35945-2.80777-.17123-6.19037-1.07594-8.37085-1.02986-2.48441-2.96017-4.57681-4.66004-6.72458-2.04182-2.5798-6.22877-1.45392-6.58849,1.81638l-.0102,.09497c.25249,.14243,.49984,.29376,.74146,.45355,1.37819,.91147,.90189,3.04791-.73112,3.29999l-.03698,.00571c.09133,.90939,.24733,1.81116,.4756,2.69772-2.18072,8.43344,2.5273,11.50504,9.24972,11.64304,.1484,.07608,.29301,.15219,.44141,.22452-.6811,1.91766-1.22522,3.8848-1.62851,5.87857-.36146,1.76166-.61261,3.54236-.75337,5.33069-.17505,2.25629-.15982,4.52405,.03045,6.77655l-.01142-.0799c-.48321-2.48077-1.83016-4.79797-3.7859-6.40369-2.91346-2.39331-7.02962-3.2746-10.17272-5.19836-1.513-.92603-3.4518,.27066-3.18774,2.02478l.01285,.08398c.468,.19019,.92458,.41095,1.36595,.6582,.25249,.14246,.49984,.29376,.74146,.45355,1.37819,.9115,.90189,3.04797-.73112,3.30005l-.03701,.00568-.07606,.01147c.80284,1.90619,1.92145,3.67554,3.32166,5.20129,1.36355,7.36206,7.22002,8.06055,13.48461,5.91663h.00382c.68488,2.98309,1.68558,5.89764,2.97165,8.67523h10.61568c.03808-.11792,.07231-.23975,.10656-.35767-.98167,.06091-1.97095,.00378-2.93742-.17499,.78763-.96649,1.57523-1.94055,2.36286-2.90698,.01902-.01904,.03427-.03809,.04947-.05707,.39951-.49463,.80284-.98547,1.20234-1.4801l.00022-.00061c.02501-1.51843-.15701-3.03186-.51767-4.50061l-.00033-.00018-.00002-.00006,.00006,.00006Z" fill="#f2f2f2" />
        <path d="M535.94708,513.25159c1.21704,.07623,1.88965-1.43585,.96887-2.31714l-.09161-.3642,.03638-.0874c1.23077-2.93475,5.40198-2.91449,6.62231,.0246,1.08313,2.60864,2.4621,5.22174,2.80164,7.97992,.15222,1.21753,.08374,2.45795-.18646,3.65271,2.5379-5.54376,3.87341-11.59735,3.87341-17.68524,0-1.5296-.08374-3.0592-.25494-4.58496-.14081-1.24805-.33484-2.4884-.586-3.71741-1.35834-6.6434-4.29956-12.97095-8.54199-18.25598-2.03943-1.11487-3.74023-2.85751-4.76758-4.94638-.36908-.75339-.65826-1.56384-.79523-2.3895,.23212,.03043,.87512-3.50436,.70007-3.72122,.32343-.49081,.90234-.7348,1.25562-1.21375,1.7569-2.38196,4.17743-1.96606,5.44104,1.27084,2.6994,1.36237,2.72552,3.62183,1.06921,5.79486-1.05377,1.38251-1.19855,3.2532-2.12317,4.73328,.09515,.12177,.19409,.23975,.28918,.36151,1.74438,2.23734,3.25305,4.64212,4.5249,7.16849-.35944-2.80777,.1712-6.19037,1.07593-8.37085,1.02985-2.48441,2.96014-4.57681,4.66003-6.72458,2.04181-2.5798,6.22876-1.45392,6.5885,1.81638l.01019,.09497c-.2525,.14243-.49982,.29376-.74146,.45355-1.37817,.91147-.90192,3.04791,.73114,3.29999l.03699,.00571c-.09131,.90939-.24731,1.81116-.47559,2.69772,2.18073,8.43344-2.52728,11.50504-9.24969,11.64304-.14838,.07608-.29303,.15219-.44141,.22452,.68109,1.91766,1.22522,3.8848,1.62854,5.87857,.36145,1.76166,.61261,3.54236,.75336,5.33069,.17505,2.25629,.15979,4.52405-.03046,6.77655l.01141-.0799c.48322-2.48077,1.83014-4.79797,3.78589-6.40369,2.91345-2.39331,7.0296-3.2746,10.17273-5.19836,1.513-.92603,3.45178,.27066,3.18774,2.02478l-.01288,.08398c-.46802,.19019-.92456,.41095-1.36597,.6582-.2525,.14246-.49982,.29376-.74146,.45355-1.37817,.9115-.90192,3.04797,.73114,3.30005l.03699,.00568,.07605,.01147c-.80286,1.90619-1.92145,3.67554-3.32166,5.20129-1.36353,7.36206-7.22003,8.06055-13.48462,5.91663h-.00385c-.68488,2.98309-1.68561,5.89764-2.97168,8.67523h-10.61566c-.03809-.11792-.07233-.23975-.10657-.35767,.98169,.06091,1.97095,.00378,2.93744-.17499-.78766-.96649-1.57526-1.94055-2.36285-2.90698-.01904-.01904-.03424-.03809-.0495-.05707-.39954-.49463-.80286-.98547-1.20233-1.4801l-.00024-.00061c-.02502-1.51843,.15698-3.03186,.5177-4.50061l.00031-.00018v-.00006l.00012,.00006Z" fill="#f2f2f2" />
        <g>
            <polygon points="330.42502 517.7486 339.53735 517.74774 343.87213 482.59982 330.42316 482.60071 330.42502 517.7486" fill="#ffb6b6" />
            <path d="M361.64496,517.54187h0c.28372,.47784,.43344,2.02008,.43344,2.57581h0c0,1.70807-1.38467,3.09271-3.09274,3.09271h-28.21979c-1.16525,0-2.10986-.94464-2.10986-2.10986v-1.17487s-1.39603-3.53113,1.47815-7.88342c0,0,3.57217,3.40796,8.90991-1.92981l1.57404-2.8515,11.39395,8.33295,6.31549,.7774c1.38168,.17004,2.60669-.02643,3.31744,1.17059h-.00003Z" fill="#2f2e41" />
        </g>
        <g>
            <polygon points="267.49289 517.7486 276.60522 517.74774 280.94 482.59982 267.49106 482.60071 267.49289 517.7486" fill="#ffb6b6" />
            <path d="M298.71286,517.54187h0c.28372,.47784,.43344,2.02008,.43344,2.57581h0c0,1.70807-1.38467,3.09271-3.09274,3.09271h-28.21979c-1.16525,0-2.10986-.94464-2.10986-2.10986v-1.17487s-1.39603-3.53113,1.47815-7.88342c0,0,3.57217,3.40796,8.90991-1.92981l1.57404-2.8515,11.39395,8.33295,6.31549,.7774c1.38168,.17004,2.60669-.02643,3.31744,1.17059h-.00003Z" fill="#2f2e41" />
        </g>
        <path id="b-183" d="M1.01849,523.95294H610.47351c.5625,0,1.01849-.45599,1.01849-1.01849s-.45599-1.01849-1.01849-1.01849H1.01849c-.5625,0-1.01849,.45599-1.01849,1.01849s.45599,1.01849,1.01849,1.01849Z" fill="#e6e6e6" />
        <path id="c-184" d="M333.14899,351.75031l3.37701,4.44199s.30603,2.07401,5.42798,18.974l2.81,127.022h-17l-22.71899-101.63297-23.58197,103.67099-14.73499,.86902,.69098-117.83301s-1.55164-4.10043-.23172-8.90567c5.05173-18.39136,4.76044-13.54257,4.96774-19.83832,.26285-7.98248,60.99396-6.76804,60.99396-6.76804Z" fill="#2f2e41" />
        <circle id="d" cx="306.35303" cy="227.17233" r="17.83701" fill="#feb8b8" />
        <path id="e-185" d="M296.763,248.36534l-9.87,5.45499c-8.23471,.59613-14.14044,2.78716-19.388,5.429l5.78699,50.73801-1.05298,49.978s32.81897,22.483,64.289-3.77399v-67.90799l-1.47748-27.00558c-.17227-3.14886-2.95694-5.59183-6.08325-5.1781-1.78543,.23627-3.84134,.19052-5.94135-.50946l-6.53244-7.58087-19.7305,.35605v-.00005Z" fill="#00b0ff" />
        <g>
            <path d="M352.56717,206.50858c.9953,2.24483,1.40112,4.52834,1.2692,6.5079l10.83261,20.78603-10.0416,4.86523-9.90741-21.60919c-1.5556-1.23135-2.97543-3.06525-3.97079-5.31007-2.27383-5.1283-1.47156-10.45859,1.7919-11.90555s7.75229,1.53731,10.02609,6.6656h0v.00005Z" fill="#ffb6b6" />
            <path id="f-186" d="M323.02594,255.59019l2.9881,1.36662c2.74161-2.94711,11.00027-2.48346,15.00726-2.10141l17.60876,1.67896-8.22284-25.72507,12.37921-4.98164,14.79181,28.46748c.89471,4.82928-1.11264,9.73624-5.13553,12.55383l-37.73965,21.43237-4.38699-29.35699-7.29013-3.33414v-.00002Z" fill="#00b0ff" />
        </g>
        <g>
            <path d="M231.76274,376.25491c.18797-2.44839,.91338-4.65131,1.96808-6.33173l.31755-23.43723,11.14793,.47736-1.52243,23.72333c.78584,1.82172,1.16643,4.10956,.97845,6.55792-.42944,5.59332-3.66306,9.90604-7.22243,9.63275s-6.09666-5.02911-5.66722-10.62241h0l.00005-.00003,.00002,.00003Z" fill="#ffb6b6" />
            <path id="g-187" d="M275.76624,265.66034l-5.12277-7.78119s-8.35495,1.5947-12.79431,7.89429-21.21986,44.9339-21.21986,44.9339l-3.22243,43.61346,12.48148-2.5705,6.02232-33.07611,19.36482-26.46204,4.49078-26.55185-.00003,.00003Z" fill="#00b0ff" />
        </g>
        <path d="M324.19003,229.53821c.66998-3.40002-9.66864-8.34892-9.65048-8.34312,1.60486,.51225-.91922,3.45261-2.56784,3.106,0,0-2.4223,1.23222-1.10233,2.29222-4.54999-.39001-10.62939-4.71402-15.17938-5.10403-1.83002-.15997-2.53888,4.25305-3.6889,5.68304-1.73999,2.19-3.48508-2.16534-2.84113,3.63696h-.25995c-.95001-2.28998-1.90002-4.62-2.21002-7.07996-.29999-2.46002,.12-5.11005,1.69-7.03003,.52002-.65002-1.52298-2.78984-.97293-3.40984,1.75-2.01001,5.14294-3.11018,6.70291-5.26015,2.06491-2.84814,4.41437-.83783,8.71402-3.23312,1.12491-.62668,3.08011-.85223,4.32602-.52686l2.90997,.75996h0c-.56729,.85094,.13467,1.97322,1.14807,1.83546l3.79196-.51546c1.42999,.45996,2.78998,1.13995,3.42999,2.44995,.39001,.78003,.46002,1.69,.76001,2.51001,.54999,1.51001,1.84998,2.60004,2.89001,3.82001,2.79578,.81416,2.94589,2.90413,2.94589,6.40886,2.6055,1.46161-.11319,4.72974-.83591,8.00006v.00002Z" fill="#2f2e41" />
        <g>
            <path d="M32.3056,64.66941h0c.8119-2.27975,3.07606-3.62541,5.38132-3.36691,.96071,.10773,1.92058,.19329,2.88564,.13653,24.06981-1.41557,53.88227,12.36618,85.61883,31.23966h0c-29.05291-23.50843-55.64321-44.30417-86.9171-22.93323-2.23384,1.52649-5.39877,.98734-6.69819-1.38578-.52203-.95338-.71058-2.09595-.39927-3.27443,.03673-.13906,.07961-.27777,.12878-.41583h-.00001v-.00002Z" fill="#e6e6e6" />
            <path d="M192.83894,8.28241h0c1.98395,1.26489,2.80037,3.67046,2.13899,5.81492l-.07458,.24196c-.66281,2.15276-2.10623,3.96141-4.01843,5.15185-27.36899,17.03845,4.31863,38.84358-46.33417,74.03983v-.00002c24.52843-26.24679,44.70352-87.02903,47.76846-85.53939,.17654,.0858,.35004,.18269,.51971,.29086h.00002Z" fill="#e6e6e6" />
            <path d="M234.78984,141.51893h0c-1.02045,2.12007-3.3121,3.21626-5.5199,2.81412l-.2491-.04534c-2.21622-.40259-4.18342-1.62111-5.59243-3.37848-20.16676-25.15297-38.05631,8.89894-79.01635-37.21784h.00002c28.97281,21.23944,91.72015,34.05687,90.60486,37.27697-.06424,.18548-.13985,.36925-.22711,.55057v.00002h.00001Z" fill="#e6e6e6" />
            <path d="M197.92944,139.94728h0c-1.05028,.58294-2.74425,.50117-4.11177-.13104l-.1543-.07132c-1.37293-.63419-2.4354-1.52396-3.03596-2.49697-8.59565-13.92656-26.44331-4.88932-44.80315-31.28868h.00002c15.05083,14.35417,53.66487,32.84857,52.3532,33.82838-.07555,.05644-.15821,.10976-.24803,.15961h0Z" fill="#e6e6e6" />
            <path d="M206.21237,84.39839h0c-.25973,1.1728-1.44383,2.38694-2.82366,2.99179l-.15568,.06826c-1.38491,.60758-2.75539,.8133-3.88201,.61799-16.12511-2.79552-21.18917,16.55818-53.12549,12.8057h.00001c20.72419-1.75428,60.16756-18.40683,60.03172-16.77525-.00782,.09398-.02269,.19121-.0449,.29151h.00001Z" fill="#e6e6e6" />
            <path d="M44.832,157.14403h0c-1.15762-2.04839-.74881-4.55562,.84212-6.13837l.17947-.1786c1.59609-1.5894,3.71979-2.50841,5.96707-2.66148,32.16473-2.1909,14.42759-36.32243,75.67593-43.61082v.00002c-33.98098,11.65469-80.33583,55.84454-82.34232,53.0901-.11557-.15865-.22326-.32567-.32227-.50085v.00002Z" fill="#e6e6e6" />
            <path d="M174.18474,156.77613h0c-1.18976,.79375-2.71685,.63552-3.73258-.28915l-.11462-.10431c-1.01993-.92761-1.65625-2.20705-1.8357-3.59191-2.5684-19.82104-22.4531-7.55536-29.22231-45.18098h.00001c8.34316,20.58733,36.77697,47.60228,35.19457,48.948-.09114,.07751-.18764,.15046-.28939,.21835h0Z" fill="#e6e6e6" />
            <path d="M138.16052,189.37718h0c-1.82246,.01503-3.35651-1.21017-3.81633-2.89148l-.05191-.18969c-.46234-1.68734-.27146-3.48091,.48286-5.06945,10.79637-22.73624-18.97849-23.54284-.52065-68.01415h.00002c-5.1102,27.54695,6.98887,75.80775,4.36657,76.13438-.15104,.01882-.30471,.0291-.46058,.03039h.00001Z" fill="#00b0ff" />
            <path d="M72.19544,158.30576h0c-1.17417-1.39388-1.20926-3.35683-.20782-4.7835l.11296-.16098c1.00448-1.43244,2.50747-2.42962,4.21199-2.86209,24.3964-6.18983,6.02335-29.6339,52.04531-43.78906v.00002c-24.47373,13.63761-53.92086,53.74196-55.84523,51.93091-.11084-.10431-.21679-.21609-.31722-.3353h0Z" fill="#00b0ff" />
            <path d="M86.99768,137.95189h0c-.7426-.69377-.76259-1.73762-.12623-2.53869l.07178-.09039c.63828-.80427,1.59203-1.39734,2.67286-1.69802,15.46965-4.30353,3.8516-16.02912,33.03677-25.46724h0c-15.5272,8.27276-34.23691,30.84473-35.45451,29.95978-.07013-.05097-.13716-.10612-.20067-.16545h0Z" fill="#00b0ff" />
            <path d="M108.63188,152.78505h0c-.93904-.38855-1.32459-1.3588-1.01034-2.3324l.03544-.10985c.31493-.97728,.99942-1.86769,1.90565-2.52903,12.97055-9.46548-2.02713-16.36026,21.97966-35.45282h0c-11.62954,13.20176-21.21347,40.90907-22.6644,40.50847-.08357-.02307-.1657-.05115-.24601-.08438h0Z" fill="#e6e6e6" />
            <polygon points="45.34017 87.02386 47.69936 94.28473 55.33389 94.28473 49.15743 98.77219 51.51663 106.03306 45.34017 101.5456 39.1637 106.03306 41.5229 98.77219 35.34644 94.28473 42.98097 94.28473 45.34017 87.02386" fill="#00b0ff" />
            <polygon points="150.54813 0 152.9073 7.26087 160.54184 7.26087 154.36539 11.74833 156.72458 19.0092 150.54813 14.52173 144.37164 19.0092 146.73085 11.74833 140.5544 7.26087 148.18892 7.26087 150.54813 0" fill="#e6e6e6" />
            <polygon points="206.39925 77.93181 208.75845 85.19268 216.39297 85.19268 210.21651 89.68015 212.57571 96.94101 206.39925 92.45355 200.22279 96.94101 202.58199 89.68015 196.40552 85.19268 204.04005 85.19268 206.39925 77.93181" fill="#00b0ff" />
            <polygon points="93.39812 157.16249 95.75732 164.42336 103.39185 164.42336 97.21538 168.91081 99.57458 176.17169 93.39812 171.68423 87.22165 176.17169 89.58085 168.91081 83.40439 164.42336 91.03892 164.42336 93.39812 157.16249" fill="#00b0ff" />
            <polygon points="136.26062 77.93181 138.61983 85.19268 146.25433 85.19268 140.07788 89.68015 142.43707 96.94101 136.26062 92.45355 130.08415 96.94101 132.44334 89.68015 126.26689 85.19268 133.90141 85.19268 136.26062 77.93181" fill="#00b0ff" />
            <polygon points="195.20354 0 197.56274 7.26087 205.19727 7.26087 199.0208 11.74833 201.38 19.0092 195.20354 14.52174 189.02708 19.0092 191.38628 11.74833 185.20982 7.26087 192.84435 7.26087 195.20354 0" fill="#e6e6e6" />
            <polygon points="41.33871 143.50191 44.33053 150.5258 51.93516 149.85091 46.17957 154.86681 49.17139 161.8907 42.62242 157.96681 36.86682 162.9827 38.57493 155.5417 32.02596 151.61778 39.6306 150.9429 41.33871 143.50191" fill="#e6e6e6" />
            <path d="M106.64972,9.35388h0c1.3771-.67797,2.92477-.22063,3.80109,1.00777l.09889,.13858c.88012,1.23249,1.29832,2.79173,1.22495,4.38643-1.05014,22.82458,21.77875,12.62182,21.74117,56.29478h-.00001c-4.77104-24.74344-29.0915-60.40532-27.20576-61.63414,.10861-.07078,.2219-.13543,.33968-.19342h0Z" fill="#00b0ff" />
            <path d="M86.74068,43.18536h0c.61043-.76213,1.61209-.86721,2.43019-.32925l.09231,.06068c.82133,.53953,1.46361,1.39592,1.83454,2.39706,5.3089,14.32913,15.69659,2.33369,26.98005,29.25833h0c-9.12782-14.05632-32.239-29.95392-31.48087-31.1827,.04367-.07077,.09159-.13895,.14379-.20413h0Z" fill="#e6e6e6" />
            <path d="M69.1683,84.83546h0c.08366-.97286,.85781-1.61711,1.83691-1.62481l.11046-.00089c.98265-.00819,1.99265,.34654,2.85758,.97247,12.37943,8.95868,14.34443-6.78722,38.69274,9.31907h0c-15.40203-6.60867-43.45069-6.97336-43.50371-8.41622-.00305-.0831-.00113-.16641,.00603-.24962h0Z" fill="#e6e6e6" />
        </g>
        <g>
            <path d="M414.87776,124.76317h0c.52825-1.48329,2.0014-2.35883,3.50129-2.19064,.62507,.07009,1.2496,.12576,1.87751,.08883,15.66074-.92102,35.05787,8.04591,55.70688,20.32572h0c-18.90293-15.29548-36.2036-28.82598-56.55158-14.92123-1.45342,.99319-3.51265,.6424-4.3581-.90164-.33965-.6203-.46233-1.3637-.25978-2.13047,.0239-.09048,.0518-.18073,.08379-.27056h0Z" fill="#e6e6e6" />
            <path d="M519.32689,88.07563h0c1.29083,.82299,1.82203,2.38814,1.39171,3.78341l-.04853,.15743c-.43125,1.40067-1.37039,2.57744-2.61455,3.35199-17.80731,11.08587,2.80987,25.27311-30.14678,48.17314h0c15.95913-17.07718,29.08582-56.62443,31.07999-55.65521,.11487,.05582,.22775,.11886,.33815,.18924h0Z" fill="#e6e6e6" />
            <path d="M546.62174,174.7644h0c-.66394,1.3794-2.15498,2.09262-3.59146,1.83097l-.16208-.0295c-1.44196-.26194-2.72189-1.05476-3.63865-2.19817-13.12126-16.36549-24.76089,5.78999-51.41106-24.21535h.00001c18.85082,13.81919,59.67663,22.1587,58.95098,24.25382-.0418,.12068-.09099,.24025-.14777,.35822h0Z" fill="#e6e6e6" />
            <path d="M522.63896,173.74182h0c-.68336,.37928-1.78552,.32608-2.67528-.08526l-.10039-.0464c-.89328-.41263-1.58457-.99155-1.97531-1.62463-5.59266-9.06115-17.20503-3.18118-29.15064-20.35761h0c9.79264,9.33937,34.91641,21.37253,34.06299,22.01004-.04916,.03672-.10294,.07141-.16138,.10385h0Z" fill="#e6e6e6" />
            <path d="M528.02815,137.59959h0c-.16899,.76307-.93941,1.55303-1.83718,1.94657l-.10129,.04441c-.90108,.39531-1.79276,.52917-2.52579,.40209-10.49161-1.81887-13.78648,10.77338-34.56547,8.33188h0c13.48395-1.1414,39.14731-11.97619,39.05893-10.91462-.00509,.06115-.01476,.12441-.02921,.18967h0Z" fill="#e6e6e6" />
            <path d="M423.02792,184.93068h0c-.75319-1.33276-.4872-2.96406,.54792-3.99386l.11677-.11621c1.03848-1.03413,2.42024-1.63207,3.8824-1.73166,20.9276-1.42548,9.38714-23.63276,49.23765-28.37487h0c-22.10932,7.583-52.26956,36.3346-53.57506,34.54246-.07519-.10322-.14526-.21189-.20968-.32588h0Z" fill="#e6e6e6" />
            <path d="M507.18975,184.69132h0c-.7741,.51644-1.76769,.41349-2.42856-.18813l-.07457-.06787c-.66361-.60354-1.07762-1.43599-1.19438-2.33703-1.6711-12.89633-14.60884-4.91581-19.01315-29.39647h0c5.42838,13.3949,23.9285,30.97186,22.89893,31.84744-.0593,.05043-.12208,.0979-.18829,.14207h0Z" fill="#e6e6e6" />
            <path d="M483.75102,205.90281h0c-1.18576,.00978-2.18387-.78738-2.48305-1.88131l-.03377-.12342c-.30081-1.09785-.17662-2.26482,.31417-3.29838,7.02453-14.79307-12.34813-15.31787-.33875-44.25261h.00001c-3.32489,17.9231,4.54722,49.32342,2.84106,49.53594-.09827,.01224-.19826,.01893-.29967,.01977h0Z" fill="#00b0ff" />
            <path d="M440.83161,185.68655h0c-.76396-.90691-.78679-2.18408-.13521-3.11232l.0735-.10474c.65355-.932,1.63145-1.5808,2.74048-1.86219,15.87323-4.02734,3.91902-19.28094,33.86266-28.49084h0c-15.92355,8.87316-35.08297,34.96658-36.33504,33.78824-.07212-.06787-.14105-.1406-.20639-.21816h0Z" fill="#00b0ff" />
            <path d="M450.46252,172.44355h0c-.48316-.4514-.49617-1.13056-.08213-1.65177l.0467-.05881c.41529-.52329,1.03584-.90916,1.73907-1.1048,10.06514-2.80004,2.506-10.42915,21.49498-16.56996h0c-10.10259,5.38257-22.27584,20.06876-23.06806,19.49298-.04563-.03316-.08924-.06905-.13056-.10765h0Z" fill="#00b0ff" />
            <path d="M464.53855,182.09457h0c-.61098-.25281-.86183-.88408-.65737-1.51755l.02306-.07147c.20491-.63586,.65026-1.21519,1.23989-1.64548,8.43913-6.1586-1.31893-10.64461,14.30081-23.06696h0c-7.56662,8.58957-13.80229,26.61701-14.74632,26.35636-.05437-.01501-.10781-.03328-.16007-.0549h0Z" fill="#e6e6e6" />
            <polygon points="423.35855 139.30782 424.89353 144.03202 429.86085 144.03202 425.84221 146.95174 427.37719 151.67594 423.35855 148.75622 419.3399 151.67594 420.87489 146.95174 416.85625 144.03202 421.82357 144.03202 423.35855 139.30782" fill="#00b0ff" />
            <polygon points="491.81087 82.68678 493.34584 87.41098 498.31316 87.41098 494.29452 90.33069 495.8295 95.05489 491.81087 92.13517 487.79221 95.05489 489.3272 90.33069 485.30856 87.41098 490.27588 87.41098 491.81087 82.68678" fill="#e6e6e6" />
            <polygon points="528.14974 133.39219 529.68473 138.11639 534.65204 138.11639 530.63339 141.03611 532.16838 145.7603 528.14974 142.84059 524.1311 145.7603 525.66608 141.03611 521.64744 138.11639 526.61476 138.11639 528.14974 133.39219" fill="#00b0ff" />
            <polygon points="454.62689 184.9427 456.16187 189.66689 461.12919 189.66689 457.11054 192.5866 458.64553 197.31081 454.62689 194.3911 450.60824 197.31081 452.14323 192.5866 448.12459 189.66689 453.0919 189.66689 454.62689 184.9427" fill="#00b0ff" />
            <polygon points="482.51487 133.39219 484.04986 138.11639 489.01716 138.11639 484.99852 141.03611 486.5335 145.7603 482.51487 142.84059 478.49622 145.7603 480.0312 141.03611 476.01257 138.11639 480.97988 138.11639 482.51487 133.39219" fill="#00b0ff" />
            <polygon points="520.86538 82.68678 522.40037 87.41098 527.36768 87.41098 523.34904 90.33069 524.88403 95.05489 520.86538 92.13518 516.84675 95.05489 518.38173 90.33069 514.36309 87.41098 519.3304 87.41098 520.86538 82.68678" fill="#e6e6e6" />
            <polygon points="420.75505 176.0546 422.70164 180.62461 427.64951 180.1855 423.9047 183.44904 425.85129 188.01905 421.59028 185.46602 417.84547 188.72955 418.95683 183.88815 414.69582 181.3351 419.64369 180.89599 420.75505 176.0546" fill="#e6e6e6" />
            <path d="M463.24889,88.77277h0c.89599-.44112,1.90297-.14355,2.47314,.65569l.06434,.09016c.57264,.8019,.84473,1.81641,.797,2.85398-.68326,14.85054,14.17008,8.21224,14.14563,36.62753h0c-3.10422-16.09903-18.92804-39.302-17.7011-40.10152,.07067-.04605,.14438-.08812,.22101-.12585h0Z" fill="#00b0ff" />
            <path d="M450.2953,110.78482h0c.39717-.49587,1.04889-.56424,1.58118-.21422l.06006,.03948c.53439,.35104,.95228,.90824,1.19362,1.55962,3.45417,9.32308,10.2128,1.51839,17.55425,19.03659h0c-5.93891-9.14558-20.97592-19.48916-20.48265-20.28865,.02841-.04605,.05959-.0904,.09356-.13281h0Z" fill="#e6e6e6" />
            <path d="M438.86204,137.88397h0c.05443-.63298,.55812-1.05215,1.19516-1.05716l.07187-.00058c.63935-.00533,1.2965,.22547,1.85925,.63272,8.05453,5.82886,9.33304-4.41603,25.17498,6.06334h0c-10.02115-4.29986-28.27068-4.53714-28.30518-5.47592-.00199-.05407-.00073-.10827,.00392-.16241h0Z" fill="#e6e6e6" />
        </g>
    </svg>';
    }

    function weekend()
    {
    return '<svg width="200px" height="200px" xmlns="http://www.w3.org/2000/svg" data-name="Layer 1" viewBox="0 0 1106 783.42853" xmlns:xlink="http://www.w3.org/1999/xlink">
        <title>Tiket Weekend</title>
        <path d="M902.08458,367.67256C857.16819,191.05111,701.96793,63.55512,519.7964,58.44137c-96.30863-2.70348-197.65219,29.2378-271.43777,141.012-131.89969,199.80845,8.10555,337.88223,105.7135,403.49213a610.75747,610.75747,0,0,1,126.24112,113.4651c65.931,78.23772,192.76719,175.45908,343.82337,23.12816C933.62233,629.12911,932.00333,485.31989,902.08458,367.67256Z" transform="translate(-47 -58.28574)" fill="#f2f2f2" />
        <ellipse cx="553" cy="751.42853" rx="553" ry="32" fill="#3f3d56" />
        <ellipse cx="199" cy="746.42853" rx="117" ry="14" opacity="0.1" />
        <ellipse cx="898" cy="752.42853" rx="117" ry="14" opacity="0.1" />
        <path d="M755.09137,200.02554C699.20154,180.24674,644.04028,179.44693,600,211.41544c-44.04028-31.96851-99.20154-31.1687-155.09131-11.3899-89.3949,31.636-146.8009,99.84583-103.66089,221.74805C381.42871,535.31387,572.20844,627.93936,598.19312,640.1127c.44055.89551.67425,1.35962.67425,1.35962s.39307-.17773,1.13263-.519c.73956.34131,1.13263.519,1.13263.519s.2337-.46411.67425-1.35962c25.98468-12.17334,216.76441-104.79883,256.94532-218.33911C901.89227,299.87137,844.48627,231.66153,755.09137,200.02554Z" transform="translate(-47 -58.28574)" fill="#00b0ff" />
        <polygon points="616 355.429 564.391 453.577 561.955 389.387 585 328.429 561.439 375.784 558.147 289.041 589 207.429 557.455 270.828 553 153.429 545.615 348.017 545.615 348.017 478 219.429 545.223 358.356 541.407 458.898 487 355.429 541.091 467.218 533 680.429 573 680.429 564.69 461.469 616 355.429" fill="#3f3d56" />
        <path d="M792,768.94947c0,62.194-86.691,42.9568-192.83533,42.9568S407.6173,831.14343,407.6173,768.94947s86.67912-75.72061,192.82347-75.72061S792,706.75552,792,768.94947Z" transform="translate(-47 -58.28574)" opacity="0.1" />
        <path d="M792,753.63626c0,62.19395-86.691,42.95679-192.83533,42.95679S407.6173,815.83021,407.6173,753.63626s86.67912-75.72062,192.82347-75.72062S792,691.4423,792,753.63626Z" transform="translate(-47 -58.28574)" fill="#3f3d56" />
        <path d="M354.75622,569.57406s-14.26484,32.98745,0,33.879,15.1564-33.879,15.1564-33.879Z" transform="translate(-47 -58.28574)" fill="#ffb9b9" />
        <polygon points="200.77 498.807 225.733 617.383 239.107 676.226 272.094 676.226 236.432 495.24 200.77 498.807" fill="#2f2e41" />
        <polygon points="200.77 498.807 225.733 617.383 239.107 676.226 272.094 676.226 236.432 495.24 200.77 498.807" opacity="0.1" />
        <polygon points="239.107 678.009 239.107 692.274 257.829 695.84 259.612 681.575 239.107 678.009" fill="#ffb9b9" />
        <path d="M308.39549,749.66768l-24.96347-1.7831s-7.13243,31.20434-7.13243,33.879-16.93949,29.42123-5.34931,31.20434,28.52968,3.56621,30.31279-1.78311,1.7831-20.50571,5.34931-26.74657,7.13242-13.37329,6.24087-16.9395Z" transform="translate(-47 -58.28574)" fill="#2f2e41" />
        <path d="M290.56444,560.65853s-26.74658,53.49316-19.61416,96.28768,7.13242,82.9144,8.91552,84.6975,35.66211,4.45776,35.66211,4.45776.89155-81.13128-1.78311-90.04681,15.1564-57.95092,22.28882-70.43265S290.56444,560.65853,290.56444,560.65853Z" transform="translate(-47 -58.28574)" fill="#2f2e41" />
        <path d="M258.46854,368.08317s-38.33676-8.024-32.98744,12.48174,26.74657,25.855,26.74657,25.855Z" transform="translate(-47 -58.28574)" fill="#ff6584" />
        <path d="M267.38407,472.39483s-18.72261,6.24087-18.72261,38.33676-8.91552,56.16781,0,57.05937,60.62558,1.7831,60.62558,1.7831Z" transform="translate(-47 -58.28574)" fill="#ff6584" />
        <polygon points="225.733 324.062 248.914 306.231 281.01 317.821 302.407 313.364 315.78 332.978 287.251 354.375 248.914 365.965 223.95 348.134 225.733 324.062" fill="#ff6584" />
        <path d="M303.04617,346.68591s.89155,15.1564-3.56621,17.83105,41.01142,8.91553,41.01142,8.91553l3.56621-24.07192Z" transform="translate(-47 -58.28574)" fill="#ffb9b9" />
        <path d="M303.04617,346.68591s.89155,15.1564-3.56621,17.83105,41.01142,8.91553,41.01142,8.91553l3.56621-24.07192Z" transform="translate(-47 -58.28574)" opacity="0.1" />
        <circle cx="280.11809" cy="275.02689" r="31.20434" fill="#ffb9b9" />
        <path d="M356.53933,391.26354l12.036.44578s10.25285-.44578,12.036,45.915,0,111.44407,0,111.44407,5.34931,32.98745-8.91553,31.20434-28.52968-.89155-22.28881-6.24087,8.91552-35.6621,8.91552-35.6621L344.05759,429.6003Z" transform="translate(-47 -58.28574)" fill="#ff6584" />
        <path d="M295.91375,366.2053s-33.879-2.57989-39.22831.09477-9.80708,28.52968-9.80708,28.52968l-.89155,20.50571s5.885,42.80372,12.74957,44.13645,5.973,8.46515,2.40682,11.13981S289.67288,609.69393,299.48,610.58548s20.50571-11.59018,20.50571-11.59018,19.61416-4.45777,24.07192-8.024,9.80708-106.09476,1.78311-107.87786c0,0-8.91553-1.78311-8.024-4.45776s12.16134-7.77931,12.16134-7.77931L345.8407,429.6003s6.24086-34.77055,22.28881-38.33676c0,0-7.13242-8.91552-9.80708-8.91552s-19.61415,3.56621-24.96347,8.91552-10.69863,22.28882-23.18037,15.1564-22.28881-18.72261-19.61415-24.07192S295.91375,366.2053,295.91375,366.2053Z" transform="translate(-47 -58.28574)" fill="#3f3d56" />
        <path d="M236.995,297.29736c3.43434,2.86155,6.90527,5.76191,9.32519,9.18816,3.15934,4.47316,4.36385,9.623,4.78688,14.70921.35613,4.28183.10109,8.83229-2.86146,12.46029-2.13882,2.61924-5.57872,4.60748-7.00676,7.50165-1.57716,3.19637-.33834,6.83182,1.69081,9.87192s4.82118,5.76143,6.62507,8.88529a16.26988,16.26988,0,0,1,.9254,14.72775c-1.9005,4.39247-5.80027,8.68375-4.55606,13.2145,1.00913,3.67468,5.3047,7.3489,2.99415,10.65347-1.28815,1.84233-4.20907,2.60787-6.908,2.784-6.59934.43074-13.3939-1.86233-17.47278-5.89682-4.03772-3.99378-6.028-9.81687-12.18146-11.56565-2.2586-.64188-4.76655-.597-7.03-1.22844a10.85089,10.85089,0,0,1-7.8519-9.33964c-.69224-6.47492,3.39914-12.67411,8.1435-18.03632a96.07544,96.07544,0,0,1,11.16686-10.70239c5.65965-4.62531,12.13355-8.947,15.3902-14.79543,3.74019-6.71674,2.42908-14.95764-3.305-20.77316-2.12415-2.15434-4.79508-3.98874-6.61521-6.3035-2.1907-2.786-6.00611-12.754-1.47672-15.11721C225.72847,284.95194,234.24069,295.00246,236.995,297.29736Z" transform="translate(-47 -58.28574)" fill="#3f3d56" />
        <path d="M188.92744,705.09005,180.01191,763.041s15.1564,36.55366,28.52969,36.55366,21.39726-1.78311,21.39726-3.56621-8.91553-12.48174-13.37329-14.26484S207.65,760.36632,207.65,755.017s4.45777-49.927,4.45777-49.927Z" transform="translate(-47 -58.28574)" fill="#a0616a" />
        <path d="M188.92744,705.09005,180.01191,763.041s15.1564,36.55366,28.52969,36.55366,21.39726-1.78311,21.39726-3.56621-8.91553-12.48174-13.37329-14.26484S207.65,760.36632,207.65,755.017s4.45777-49.927,4.45777-49.927Z" transform="translate(-47 -58.28574)" opacity="0.1" />
        <path d="M211.21625,760.36632s-28.52968-4.45777-31.20434-6.24087-11.59018,34.77055,2.67466,45.46918,24.07192,8.91553,26.74658,8.91553,16.04795,0,18.7226-1.78311,4.45777-12.48174,1.78311-16.9395S216.56557,780.872,215.674,776.41426,211.21625,760.36632,211.21625,760.36632Z" transform="translate(-47 -58.28574)" fill="#2f2e41" />
        <path d="M211.21625,760.36632s-28.52968-4.45777-31.20434-6.24087-11.59018,34.77055,2.67466,45.46918,24.07192,8.91553,26.74658,8.91553,16.04795,0,18.7226-1.78311,4.45777-12.48174,1.78311-16.9395S216.56557,780.872,215.674,776.41426,211.21625,760.36632,211.21625,760.36632Z" transform="translate(-47 -58.28574)" opacity="0.1" />
        <path d="M168.42173,707.76471s.89155,36.55366-14.26484,41.903,16.9395,27.63813,16.9395,27.63813l14.26484-11.59018,10.69863-64.19179Z" transform="translate(-47 -58.28574)" fill="#a0616a" />
        <path d="M160.39776,736.2944s2.93371,25.511,25.093,19.44216c0,0,2.54513,33.15944,6.11134,37.6172s13.37329,17.83105-2.67466,17.83105-26.74658-.89155-32.09589-7.13242-17.83106-20.50571-21.39727-22.28881,11.59019-40.11987,14.26485-40.11987S160.39776,736.2944,160.39776,736.2944Z" transform="translate(-47 -58.28574)" fill="#2f2e41" />
        <path d="M148.80757,523.21333s-4.45776,22.28881,7.13242,48.14384,22.28882,87.37215,16.9395,96.28768-15.15639,46.36073-5.34931,51.71005,77.56507,8.91552,82.02284,3.56621,0-62.40868-8.024-70.43266,6.24087-95.39613,6.24087-95.39613l-4.45776-20.50571Z" transform="translate(-47 -58.28574)" fill="#3f3d56" />
        <circle cx="167.78247" cy="267.89447" r="31.20434" fill="#a0616a" />
        <path d="M195.16831,336.87883s-11.59019,28.52969-27.63813,32.0959S147.02447,424.251,147.02447,424.251l73.10731-14.26484,22.28882-9.80708s1.7831-21.39726-6.24087-25.855-24.07192-2.67466-24.07192-2.67466,0-17.83105,8.024-21.39726S195.16831,336.87883,195.16831,336.87883Z" transform="translate(-47 -58.28574)" fill="#a0616a" />
        <path d="M195.16831,402.85373s-1.78311-34.77056-27.63813-30.31279c0,0-5.34932-1.78311-16.9395,15.15639l-3.56621-7.13242s15.15639-14.02762,24.07192-12.8089,14.26484-4.1306,32.98744,35.09772l25.855-3.56622-2.67466-31.20434h2.67466l7.13242,26.74658s9.80708,0,10.69863,8.024v8.024s15.1564,10.69863,12.48174,33.879-3.56621,43.68607-3.56621,43.68607-3.56621,30.31279,0,41.01142,24.07192,39.22832,8.024,41.903-22.28881,2.67465-22.28881,2.67465l-3.56621-23.18036s2.67465,9.80707-14.26485,10.69863-66.86644-13.37329-66.86644-15.1564,1.7831-19.61415-2.67466-16.04794-6.24087,22.28881-12.48173,22.28881,9.80707-73.10731,9.80707-73.10731L147.02447,424.251v-6.24087S181.795,421.57633,195.16831,402.85373Z" transform="translate(-47 -58.28574)" fill="#d0cde1" />
        <path d="M165.74707,376.9987s-18.7226,16.048-20.50571,66.86644,57.05937,93.613,57.05937,93.613,16.048,53.49315,27.63813,41.01142-15.15639-53.49316-15.15639-53.49316l-41.01142-54.38471,12.48173-79.34818S186.25278,372.54094,165.74707,376.9987Z" transform="translate(-47 -58.28574)" fill="#a0616a" />
        <path d="M149.9464,404.12682s-7.37969,1.40156-9.1628,12.99175,7.13242,22.28881,11.59018,22.28881,48.14384-8.024,53.49316-15.15639,19.61416-4.45777,19.61416-4.45777l-30.31279-16.04794s-22.16544,20.19663-47.1906,12.32719Z" transform="translate(-47 -58.28574)" fill="#d0cde1" />
        <path d="M249.5547,359.91386c-1.80389-3.12387-4.59592-5.84516-6.6251-8.88528a12.11563,12.11563,0,0,1-2.38489-7.243,31.16664,31.16664,0,0,1-25.69841,13.59694c-2.73474,6.46136-2.73849,15.15841-2.73849,15.15841s5.23183,9.83254-.90162,11.02474c.38809.07515.7732.15846,1.1497.26545,6.15353,1.74882,8.14374,7.57188,12.18147,11.56569,4.07886,4.03446,10.87347,6.32755,17.47278,5.8968,2.699-.17615,5.61987-.94173,6.90806-2.784,2.3105-3.30457-1.985-6.9788-2.99419-10.65346-1.24417-4.53074,2.65556-8.822,4.55609-13.21451A16.27,16.27,0,0,0,249.5547,359.91386Z" transform="translate(-47 -58.28574)" fill="#3f3d56" />
        <path d="M184.262,283.30705a37.6801,37.6801,0,0,0-8.92113,5.50962c-6.79087,5.38759-12.68946,12.14912-15.91736,20.19416s-3.55777,17.4653.25649,25.24947c1.69713,3.46353,4.23166,6.81422,4.094,10.66874-.17534,4.90949-4.60044,8.53231-8.92633,10.8605s-9.21609,4.29688-11.86086,8.43681c-4.42429,6.92544-.52241,16.445-3.5081,24.10152-1.01346,2.59892-2.83387,5.31-1.87642,7.93,6.06637.62822,11.9826-2.27093,16.82437-5.97939s8.988-8.27769,13.94129-11.83578c6.67311-4.79344,14.78149-7.74068,20.29556-13.83186a25.20608,25.20608,0,0,0,5.55942-23c-.56884-2.1265-1.4293-4.2308-1.36848-6.43123.10016-3.62322,2.65785-6.69338,5.37418-9.09324s5.80106-4.54477,7.61247-7.68428c1.82017-3.15468,2.13-6.93041,3.25755-10.39358s3.63946-6.99382,7.26937-7.29175c2.20948-.18134,4.30832.88419,6.26868,1.9194l10.30132,5.43985a5.67167,5.67167,0,0,0,3.52234.95694c2.27178-.4096,3.10916-3.25875,3.016-5.56528-.30705-7.60536-5.67684-14.3614-12.376-17.9749-6.22847-3.35961-13.56845-4.46863-20.57557-4.45714C199.11233,281.04779,191.25832,280.42312,184.262,283.30705Z" transform="translate(-47 -58.28574)" fill="#3f3d56" />
        <path d="M340.51644,295.621c9.72772,3.19839,17.56944,11.02834,21.9305,20.29331a33.31317,33.31317,0,0,1,3.152,10.72482c.71166,6.95557-1.3623,13.87888-3.74361,20.45275-1.87518,5.17663-3.97137,10.86021-2.05211,16.02066.66556,1.78954,1.78682,3.39416,2.33757,5.2223a9.14582,9.14582,0,0,1-3.07738,9.61978c-1.96249,1.5198-4.66128,2.33744-5.76177,4.56231,2.15735.02072,3.67593,2.04935,4.83638,3.86813l5.52916,8.66591-20.71881,12.07569a80.47026,80.47026,0,0,0-4.27434-22.05837,2.49211,2.49211,0,0,0-.7709-1.28539,2.45738,2.45738,0,0,0-1.65087-.26289c-4.05538.33886-8.02658,1.31881-12.04536,1.95944-9.04188,1.44134-18.60915,1.08982-26.935-2.71988a18.02023,18.02023,0,0,1-7.64278-5.91119c-1.82844-2.70105-2.46137-6.37485-.961-9.271,2.28408-4.409,8.17316-5.38212,11.8111-8.76169,1.61852,6.44576,8.901,10.24753,15.53019,9.77727a12.93726,12.93726,0,0,0,4.65215-1.11924c3.02527-1.43889,5.07359-4.32606,6.80069-7.19656a113.75164,113.75164,0,0,0,10.87444-25.57329,36.1119,36.1119,0,0,0,1.66266-7.47167c.657-7.824-3.67665-15.716-10.35762-19.84044s-13.515-2.41564-20.80047.51162c2.45007-.98442,2.28905-5.9181,4.24-7.60139a25.31369,25.31369,0,0,1,8.28568-4.59018A30.38031,30.38031,0,0,1,340.51644,295.621Z" transform="translate(-47 -58.28574)" fill="#d0cde1" />
        <path d="M894.75,412.5164s50.8185,13.37329,51.71,19.61415-25.855,23.25759-25.855,23.25759l-56.16782-26.8238Z" transform="translate(-47 -58.28574)" fill="#3f3d56" />
        <path d="M894.75,412.5164s50.8185,13.37329,51.71,19.61415-25.855,23.25759-25.855,23.25759l-56.16782-26.8238Z" transform="translate(-47 -58.28574)" opacity="0.1" />
        <path d="M921.05078,402.26354s-16.04794,19.61416-35.6621,17.83105,24.07192,41.903,24.07192,41.903l22.28881-19.61416s6.24087-25.855,11.59019-26.74658S921.05078,402.26354,921.05078,402.26354Z" transform="translate(-47 -58.28574)" fill="#cf9595" />
        <path d="M921.05078,402.26354s-16.04794,19.61416-35.6621,17.83105,24.07192,41.903,24.07192,41.903l22.28881-19.61416s6.24087-25.855,11.59019-26.74658S921.05078,402.26354,921.05078,402.26354Z" transform="translate(-47 -58.28574)" opacity="0.1" />
        <path d="M1020.01312,667.94621s2.67466,16.048-5.34931,19.61416-24.07192,57.95092-24.07192,57.95092l15.15639,15.15639,42.79452-69.5411s12.48174-24.96347,8.024-24.96347S1020.01312,667.94621,1020.01312,667.94621Z" transform="translate(-47 -58.28574)" fill="#ffb9b9" />
        <path d="M1020.01312,667.94621s2.67466,16.048-5.34931,19.61416-24.07192,57.95092-24.07192,57.95092l15.15639,15.15639,42.79452-69.5411s12.48174-24.96347,8.024-24.96347S1020.01312,667.94621,1020.01312,667.94621Z" transform="translate(-47 -58.28574)" opacity="0.1" />
        <path d="M994.1581,743.72819l-3.56621-1.78311s-20.50571,10.69863-17.83106,16.048,8.91553,16.04794,8.91553,19.61415,3.56621,24.96348,15.15639,26.74658,11.59019-8.91552,9.80708-13.37329-2.67466-19.61415-1.7831-24.96347a34.40035,34.40035,0,0,1,4.12176-10.59841Z" transform="translate(-47 -58.28574)" fill="#2f2e41" />
        <path d="M976.327,663.48845s-2.67465,66.86645,16.048,94.50458c0,0,7.13242,19.61415,8.024,21.39726s16.048-6.24087,16.048-6.24087-8.024-53.49315-7.13242-62.40868-4.45776-20.50571-4.45776-20.50571l-.89156-26.74658Z" transform="translate(-47 -58.28574)" fill="#ffb9b9" />
        <path d="M1018.23,768.69166l-18.61612,8.79863s1.67662,13.49018,2.56817,16.16484-12.48174,22.28882,1.7831,24.07192,28.52969,0,24.96348-4.45776-8.91553-24.07192-8.024-29.42124S1018.23,768.69166,1018.23,768.69166Z" transform="translate(-47 -58.28574)" fill="#2f2e41" />
        <path d="M980.78481,414.74528s-11.59019-.89155-13.37329,32.98744a527.05949,527.05949,0,0,0,0,58.84248l28.52968.89155-2.67466-53.49316Z" transform="translate(-47 -58.28574)" fill="#ffb9b9" />
        <path d="M1014.66381,388.89025s2.67465,19.61416-9.80708,21.39726,14.26484,29.42124,14.26484,29.42124l34.77055-19.61416s-13.37329-24.07192-6.24087-35.6621S1014.66381,388.89025,1014.66381,388.89025Z" transform="translate(-47 -58.28574)" fill="#ffb9b9" />
        <path d="M1014.66381,388.89025s2.67465,19.61416-9.80708,21.39726,14.26484,29.42124,14.26484,29.42124l34.77055-19.61416s-13.37329-24.07192-6.24087-35.6621S1014.66381,388.89025,1014.66381,388.89025Z" transform="translate(-47 -58.28574)" opacity="0.1" />
        <circle cx="896.3396" cy="338.62849" r="31.20434" fill="#cf9595" />
        <circle cx="980.14554" cy="310.09881" r="31.20434" fill="#ffb9b9" />
        <path d="M849.72658,478.04551s-.89156,32.98745,0,38.33676-5.34932,50.8185-5.34932,50.8185l19.61416-14.26484s15.15639-48.14384,8.91552-60.62558S849.72658,478.04551,849.72658,478.04551Z" transform="translate(-47 -58.28574)" fill="#cf9595" />
        <path d="M952.25512,492.31035s-3.56621,26.74658,8.024,28.52969,14.26484-20.50571,14.26484-20.50571l-4.45776-22.28882Z" transform="translate(-47 -58.28574)" fill="#cf9595" />
        <path d="M926.46,390.073c1.60588,1.45874,3.21451,3.05129,5.28288,3.706,3.46342,1.09625,7.68128-.60993,10.6353,1.50448,2.80935,2.01084,3.03173,6.60011,6.105,8.17831a8.576,8.576,0,0,0,4.05284.61227l10.868-.12832a5.20255,5.20255,0,0,0,3.59772,6.94278c1.13722.2153,2.56367.16178,3.1272,1.17275.60889,1.09237.32275,3.26741,1.53967,2.9791a17.90728,17.90728,0,0,1,5.73549-6.00243c1.32793-.857,2.83746-1.60291,3.63-2.97032,1.09319-1.88623.45627-4.2432.37835-6.42193-.24247-6.77953,5.23364-13.11947,3.84111-19.75888a19.91439,19.91439,0,0,0-1.88746-4.74517l-6.95281-13.87867c-1.22874-2.45269-2.65765-5.09775-5.19455-6.14161-3.84022-1.58013-7.959,1.23376-12.04867,1.95407-4.64787.81864-9.26851-1.12533-13.80834-2.41484s-9.95987-1.75388-13.47639,1.39366c-1.42867,1.27876-2.41867,3.06754-4.08661,4.01322-2.84578,1.61348-7.3415.6682-8.79133,3.60074-.71122,1.43858-.24172,3.19529-.7055,4.7316-.63241,2.09494-2.77194,3.26951-4.55752,4.53459s-3.52,3.3613-2.792,5.425c.30995.87868,1.02874,1.57048,1.31857,2.456.53335,1.62956-.49994,3.30285-1.297,4.82178-2.65778,5.066,1.71505,6.04717,5.02807,3.77259C920.03815,386.6387,922.399,386.3841,926.46,390.073Z" transform="translate(-47 -58.28574)" fill="#3f3d56" />
        <path d="M1005.74828,404.04665s1.78311,17.83105,16.048,17.83105,27.49359-11.90934,27.49359-11.90934,25.108,6.56,25.108,10.12623-20.50571,29.42124-20.50571,29.42124-8.91553,67.758-5.34932,71.32421,41.01142,131.05823,34.77056,141.75686-3.56621,10.69863-45.46919,13.37329-45.46918,11.59018-63.30023-1.78311-20.50571-21.39726-27.63813-22.28881-15.1564-98.96234-8.024-112.33563,19.61415-30.31279,24.07192-33.879,15.01374-37.54932,15.01374-37.54932l.14265-55.17215Z" transform="translate(-47 -58.28574)" fill="#ff6584" />
        <path d="M1066.37386,418.31149s20.50571-2.67466,14.26484,18.7226-15.1564,60.62558-29.42124,62.40868,2.67466-51.71005,2.67466-51.71005Z" transform="translate(-47 -58.28574)" fill="#ffb9b9" />
        <path d="M1022.38853,335.18391c9.82994-2.16224,20.24825-2.66169,29.84849.36128s18.27933,9.93458,21.82426,19.35459,1.048,21.23535-7.02109,27.25147c-4.20376,3.13423-9.57629,4.623-13.28474,8.33-3.9998,3.99831-5.95212,10.4228-11.2726,12.34045a23.525,23.525,0,0,1-.356-12.119,35.90463,35.90463,0,0,0,1.42028-6.39756c.1081-2.18613-.6703-4.60361-2.58181-5.66991-2.03154-1.13325-4.5502-.40717-6.87012-.57839-5.77166-.426-9.50811-6.214-11.67637-11.57978s-4.11036-11.45752-9.11631-14.362c-4.71443-2.73525-9.94218-1.47753-14.97031-.77634-.75557-2.76185,6.99684-8.77273,9.274-10.31515A42.5131,42.5131,0,0,1,1022.38853,335.18391Z" transform="translate(-47 -58.28574)" fill="#3f3d56" />
        <path d="M1061.91609,478.04551s-8.024-35.6621-8.024-40.11986-4.45776-25.855-1.78311-31.20435,8.91553-35.6621-.89155-32.98744-14.26484,41.01142-14.26484,41.01142,1.78311,22.28881,0,29.42123-.89155,54.38471,5.34932,55.27626S1061.91609,495.87656,1061.91609,478.04551Z" transform="translate(-47 -58.28574)" fill="#ffb9b9" />
        <circle cx="1023.38584" cy="290.03887" r="19.61416" fill="#3f3d56" />
        <path d="M859.97943,428.56434s-17.38527,25.40925-17.38527,54.83049c0,0,21.39726-.89155,33.879,16.9395S859.97943,428.56434,859.97943,428.56434Z" transform="translate(-47 -58.28574)" fill="#3f3d56" />
        <path d="M857.75055,737.48732s13.37329,28.52968,13.37329,42.79452S898.762,782.9565,898.762,782.9565s-17.83105-46.36074-16.048-52.6016S857.75055,737.48732,857.75055,737.48732Z" transform="translate(-47 -58.28574)" fill="#cf9595" />
        <path d="M906.78594,735.70421s3.747,53.11852-.80114,57.7636,17.74064,1.97043,17.74064,1.97043,0-40.11987,7.13242-56.16782Z" transform="translate(-47 -58.28574)" fill="#cf9595" />
        <path d="M868.44918,549.36972s-26.74658,12.48174-26.74658,17.83105-4.45776,32.09589-6.24087,34.77055-1.7831,26.74658,0,30.31279,5.34932,113.22718,18.72261,113.22718,32.09589-6.24087,32.98744-11.59018c0,0-12.48173-49.0354-8.024-61.51713s6.24087-53.49316,15.1564-58.84247,8.91552,5.34931,8.91552,5.34931l-1.7831,74.89042s-1.78311,48.14384,1.7831,49.03539,26.74658,4.45777,29.42124.89156,11.59018-52.60161,11.59018-57.95092,8.91553-62.40869,9.80708-68.64955,3.56621-59.734-2.67466-63.30024S868.44918,549.36972,868.44918,549.36972Z" transform="translate(-47 -58.28574)" fill="#2f2e41" />
        <path d="M882.714,779.39029s-8.91552-7.13242-14.26484,6.24087a53.5728,53.5728,0,0,1-14.26484,20.50571s-3.56621,8.91552,11.59018,7.13242,41.01142-17.83105,41.01142-17.83105-6.36188-16.29576-9.42181-16.17186S892.5211,785.63116,882.714,779.39029Z" transform="translate(-47 -58.28574)" fill="#2f2e41" />
        <path d="M920.15923,789.19737s-13.36479-3.56621-16.0437,0-6.24511,24.07192-1.78735,26.74658,24.07192,1.7831,26.74658,0,0-13.37329,0-13.37329Z" transform="translate(-47 -58.28574)" fill="#2f2e41" />
        <path d="M905.00284,434.35943s-13.37329-11.59018-9.80708-21.39726c0,0-40.11987,13.37329-39.22832,24.07192s16.9395,55.27626,16.9395,55.27626-25.855,49.92695-12.48173,60.62558,9.80708-1.78311,32.98744,6.24087,32.98745,4.45776,41.903,2.67466,10.69864-.89156,16.9395-.89156,2.67466-17.831,0-27.63813-6.24086-24.07192-3.56621-27.63813,25.855-65.97489,25.855-65.97489S956.53983,425.295,935.2291,430.273C935.2291,430.273,920.15923,442.38341,905.00284,434.35943Z" transform="translate(-47 -58.28574)" fill="#3f3d56" />
        <path d="M965.62841,442.38341c0-.89155,8.91553-2.67466,8.91553-2.67466s5.34931,35.6621,2.67466,42.79453-24.96348,15.15639-28.52969,14.26484S965.62841,442.38341,965.62841,442.38341Z" transform="translate(-47 -58.28574)" fill="#3f3d56" />
        <circle cx="899" cy="295.71426" r="21" fill="#3f3d56" />
    </svg>';
    }

    @endphp
</body>
<!--end::Body-->