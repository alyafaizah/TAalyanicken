<!DOCTYPE html>
<!--
Template Name: Metronic - Bootstrap 4 HTML, React, Angular 11 & VueJS Admin Dashboard Theme
Author: KeenThemes
Website: http://www.keenthemes.com/
Contact: support@keenthemes.com
Follow: www.twitter.com/keenthemes
Dribbble: www.dribbble.com/keenthemes
Like: www.facebook.com/keenthemes
Purchase: https://1.envato.market/EA4JP
Renew Support: https://1.envato.market/EA4JP
License: You must have a valid license purchased only from themeforest(the above link) in order to legally use the theme for your project.
-->
<html lang="en">
<!--begin::Head-->

<head>

    <!-- End Google Tag Manager -->
    <meta charset="utf-8" />
    <title>Login</title>
    <meta name="description" content="Login page example" />
    <meta name="csrf-token" content="{{ csrf_token() }}" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <link rel="canonical" href="https://keenthemes.com/metronic" />
    <!--begin::Fonts-->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700" />
    <!--end::Fonts-->
    <!--begin::Page Custom Styles(used by this page)-->
    <link href="{{ asset('/assets/css/pages/login/classic/login-2.css') }}" rel="stylesheet" type="text/css" />
    <!--end::Page Custom Styles-->
    <!--begin::Global Theme Styles(used by all pages)-->
    <link href="{{ asset('/demo7/distpengunjung/assets/plugins/global/plugins.bundle.css?v=7.2.9') }}" rel="stylesheet" type="text/css" />
    <link href="{{ asset('/demo7/distpengunjung/assets/plugins/custom/prismjs/prismjs.bundle.css?v=7.2.9') }}" rel="stylesheet" type="text/css" />
    <link href="{{ asset('/demo7/distpengunjung/assets/css/style.bundle.css?v=7.2.9') }}" rel="stylesheet" type="text/css" />
    <!--end::Global Theme Styles-->
    <!--begin::Layout Themes(used by all pages)-->
    <!--end::Layout Themes-->
    <link rel="shortcut icon" href="" />
</head>
<!--end::Head-->
<!--begin::Body-->

<body id="kt_body" class="header-fixed header-mobile-fixed header-bottom-enabled subheader-enabled page-loading">
    <!-- Google Tag Manager (noscript) -->
    <noscript>
        <iframe src="https://www.googletagmanager.com/ns.html?id=GTM-5FS8GGP" height="0" width="0" style="display:none;visibility:hidden"></iframe>
    </noscript>
    <!-- End Google Tag Manager (noscript) -->
    <!--begin::Main-->
    <div class="d-flex flex-column flex-root">
        <!--begin::Login-->
        <div class="login login-2 login-signin-on d-flex flex-column flex-lg-row flex-column-fluid bg-white" id="kt_login">
            <!--begin::Aside-->
            <div class="login-aside order-2 order-lg-1 d-flex flex-column-fluid flex-lg-row-auto bgi-size-cover bgi-no-repeat p-7 p-lg-10">
                <!--begin: Aside Container-->
                <div class="d-flex flex-row-fluid flex-column justify-content-between">
                    <!--begin::Aside body-->
                    <div class="d-flex flex-column-fluid flex-column flex-center mt-5 mt-lg-0">
                        <a href="#" class="mb-15 text-center">
                            <!-- logo -->
                            
                        </a>
                        <!--begin::Signin-->
                        <div class="login-form login-signin">
                            <div class="text-center mb-10 mb-lg-20">
                                <h2 class="font-weight-bold">Masuk</h2>
                                <p class="text-muted font-weight-bold">Masukkan detail Anda untuk masuk ke akun Anda</p>
                            </div>
                            <!--begin::Form-->


                            @if(Session::has('pesan'))


                            <div class="alert alert-danger">
                                <b>Pemberitahuan</b><br>
                                {{ Session('pesan') }}
                            </div>

                            @endif


                            <form class="form" novalidate="novalidate" id="kt_login_signin_form">

                                @csrf

                                <div class="form-group py-3 m-0">
                                    <input class="form-control h-auto border-0 px-0 placeholder-dark-75" type="email" placeholder="Email" name="email-user" autocomplete="off" />
                                </div>
                                <div class="form-group py-3 border-top m-0">
                                    <input class="form-control h-auto border-0 px-0 placeholder-dark-75" type="password" placeholder="Kata Sandi" name="password" />
                                </div>
                                <div class="form-group d-flex flex-wrap justify-content-between align-items-center mt-3">
                                    <a href="javascript:;" id="kt_login_forgot" class="text-muted text-hover-primary">Lupa kata sandi ?</a>
                                </div>
                                <div class="form-group d-flex flex-wrap justify-content-between align-items-center mt-2">
                                    <div class="my-3 mr-2">
                                        <span class="text-muted mr-2">Belum punya akun?</span>
                                        <a href="javascript:;" id="kt_login_signup" class="font-weight-bold">Daftar</a>
                                    </div>
                                    <button id="btn-submit" type="button" class="btn btn-primary font-weight-bold px-9 py-4 my-3">Masuk</button>
                                </div>
                            </form>
                            <!--end::Form-->
                        </div>
                        <!--end::Signin-->
                        <!--begin::Signup-->
                        <div class="login-form login-signup">
                            <div class="text-center mb-10 mb-lg-20">
                                <h1>Daftar</h1>
                                <p class="text-muted font-weight-bold">Masukkan detail Anda untuk membuat akun</p>
                            </div>
                            <!--begin::Form-->
                            <form class="form">

                                @csrf


                                <div class="form-group py-3 m-0">
                                    <input class="form-control h-auto border-0 px-0 placeholder-dark-75 " type="text" placeholder="Nama Lengkap" id="nama_lengkap" name="nama_lengkap" :value="old('nama_lengkap')" required autofocus autocomplete="nama_lengkap" autocomplete="off" />
                                    <div id="caption-nama-regis"></div>
                                </div>
                                <div class="form-group py-3 border-top m-0">
                                    <input class="form-control h-auto border-0 px-0 placeholder-dark-75" type="text" placeholder="Email" id="email-regis" name="email-regis" :value="old('email-regis')" autofocus autocomplete="email" required autocomplete="off" />
                                    <div id="caption-email-regis"></div>
                                </div>
                                <div class="form-group py-3 border-top m-0">
                                    <input class="form-control h-auto border-0 px-0 placeholder-dark-75 @error ('password-regis') is-invalid @enderror" type="password" placeholder="Kata Sandi" id="password-regis" name="password-regis" required autocomplete="off" />
                                    <div id="caption-password-regis"></div>
                                </div>
                                <div class="form-group py-3 border-top m-0">
                                    <input class="form-control h-auto border-0 px-0 placeholder-dark-75" type="password" placeholder="Konfirmasi kata sandi" name="cpassword-regis" required autocomplete="off" />
                                    <div id="caption-password-cf"></div>
                                </div>
                                <div class="form-group mt-5">
                                    <div class="checkbox-inline">
                                        <label class="checkbox checkbox-outline">
                                            <input type="checkbox" name="agree" />
                                            <span></span>Saya setuju dengan
                                            <a href="#" class="ml-1">syarat dan ketentuan</a>.</label>
                                    </div>
                                </div>
                                <div class="form-group d-flex flex-wrap flex-center">
                                    <button id="btn-submit-register" type="button" class="btn btn-primary font-weight-bold px-9 py-4 my-3 mx-2">Daftar</button>
                                    <a href="/login" class="btn btn-outline-primary font-weight-bold px-9 py-4 my-3 mx-2">Batal</a>
                                </div>
                            </form>
                            <!--end::Form-->
                        </div>
                        <!--end::Signup-->
                        <!--begin::Forgot-->
                        <div class="login-form login-forgot">
                            <div class="text-center mb-10 mb-lg-20">
                                <h3 class="">Lupa Kata Sandi ?</h3>
                                <p class="text-muted font-weight-bold">Masukkan email Anda untuk mengatur ulang kata sandi</p>
                            </div>
                            <!--begin::Form-->
                            <form class="form" novalidate="novalidate">
                                <div class="form-group py-3 border-bottom mb-10">
                                    <input class="form-control h-auto border-0 px-0 placeholder-dark-75" type="email" placeholder="Email" name="email-forgot" autocomplete="off" />
                                </div>
                                <div class="form-group d-flex flex-wrap flex-center">
                                    <button type="submit" id="btn-submit-forgot" class="btn btn-primary font-weight-bold px-9 py-4 my-3 mx-2">Atur Ulang</button>
                                    <button id="kt_login_forgot_cancel" class="btn btn-light-primary font-weight-bold px-9 py-4 my-3 mx-2">Batal</button>
                                </div>
                            </form>
                            <!--end::Form-->
                        </div>
                        <!--end::Forgot-->
                    </div>
                    <!--end::Aside body-->
                </div>
                <!--end: Aside Container-->
            </div>
            <!--begin::Aside-->
            <!--begin::Content-->
            <div class="order-1 order-lg-2 flex-column-auto flex-lg-row-fluid d-flex flex-column p-7" style="background-image: url(assets/media/bg/bg-6.jpg);">
                <!--begin::Content body-->
                <div class="d-flex flex-column-fluid flex-lg-center">
                    <div class="d-flex flex-column justify-content-center">
                        <h3 class="display-3 font-weight-bold my-7 text-white">Selamat Datang di KANSA!</h3>
                        <p class="font-weight-bold font-size-lg text-white opacity-80">Nikmati keseruan bersama orang tersayang di Wisata Kandang Sapi Wonosalam.</p>
                    </div>
                </div>
                <!--end::Content body-->
            </div>
            <!--end::Content-->
        </div>
        <!--end::Login-->
    </div>
    <!--end::Main-->
    <script>
        var HOST_URL = "/metronic/theme/html/tools/preview";
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
    <script src="{{ asset('/demo7/distpengunjung/assets/plugins/global/plugins.bundle.js?v=7.2.9') }}"></script>
    <script src="{{ asset('/demo7/distpengunjung/assets/plugins/custom/prismjs/prismjs.bundle.js?v=7.2.9') }}"></script>
    <script src="{{ asset('/demo7/distpengunjung/assets/js/scripts.bundle.js?v=7.2.9') }}"></script>
    <!--end::Global Theme Bundle-->
    <!--begin::Page Scripts(used by this page)-->
    <script src="{{ asset('/demo7/distpengunjung/assets/js/pages/custom/login/login-general.js?v=7.2.9') }}"></script>
    <!--end::Page Scripts-->


    <script>
        // @TODO 1
        $(function() {


            // @TODO 2
            $('#btn-submit').click(function() {

                // @TODO 3
                var email = $('input[name="email-user"]').val();
                var password = $('input[name="password"]').val();

                // @TODO 4
                data_input = {

                    "email": email,
                    "password": password,
                }


                // @TODO 5
                $.ajax({

                    url: "{{ url('login/proses') }}",
                    data: data_input,
                    dataType: "json",
                    success: function(response) {

                        if (response.status == "success") {

                            swal.fire({
                                text: "Login Berhasil, Selamat Datang di KANSA!",
                                icon: "success",
                                buttonsStyling: false,
                                confirmButtonText: "Ok, got it!",
                                customClass: {
                                    confirmButton: "btn font-weight-bold btn-light-primary"
                                }
                            }).then(function(tombol) {

                                // jika tombol 
                                if (tombol.isConfirmed) {

                                    window.location.href = response.url;
                                }

                            });
                        } else {

                            swal.fire({
                                text: response.status,
                                icon: "error",
                                buttonsStyling: false,
                                confirmButtonText: "Ok, got it!",
                                customClass: {
                                    confirmButton: "btn font-weight-bold btn-light-danger"
                                }
                            });
                        }
                    }
                })
            });

            const validateEmail = (email) => {
                return email.match(
                    /^(([^<>()[\]\\.,;:\s@\"]+(\.[^<>()[\]\\.,;:\s@\"]+)*)|(\".+\"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/
                );
                if (validateEmail(email)) {
                    $('#caption-email-regis').html("<small class='text-danger'>Email yang anda masukkan tidak valid</small>").hide().show(500);
                }
            };

            $('#btn-submit-register').click(function() {

                var email = $('input[name="email-regis"]').val();
                var password = $('input[name="password-regis"]').val();
                var password_cf = $('input[name="cpassword-regis"]').val();
                var nama_lengkap = $('input[name="nama_lengkap"]').val();

                data_input = {

                    "email": email,
                    "password": password,
                    "nama_lengkap": nama_lengkap,
                }

                // console.log(data_input);


                if (password == password_cf) {


                    $.ajax({

                        type: "GET",
                        url: "{{ url('register/proses') }}",
                        data: data_input,
                        dataType: "json",
                        success: function(response) {

                            if (response.status == "success") {

                                // notifikasi
                                swal.fire({
                                    text: "Daftar Berhasil, Silahkan Masuk untuk Memulai Pesanan!",
                                    icon: "success",
                                    buttonsStyling: false,
                                    confirmButtonText: "Ok, got it!",
                                    customClass: {
                                        confirmButton: "btn font-weight-bold btn-light-primary"
                                    }
                                }).then(function(tombol) {

                                    // jika tombol 
                                    if (tombol.isConfirmed) {

                                        window.location.href = response.url;
                                    }

                                });
                            } else {

                                swal.fire({
                                    text: response.status,
                                    icon: "error",
                                    buttonsStyling: false,
                                    confirmButtonText: "Ok, got it!",
                                    customClass: {
                                        confirmButton: "btn font-weight-bold btn-light-danger"
                                    }
                                });
                            }
                        }
                    })
                } else {

                    // notifikasi button
                    // swal.fire({
                    //     text: "Katasandi tidak sama",
                    //     icon: "warning",
                    //     buttonsStyling: false,
                    //     confirmButtonText: "Dimengerti",
                    //     customClass: {
                    //         confirmButton: "btn font-weight-bold btn-light-warning"
                    //         }
                    //     });

                    //notif di bawah inputan
                    $('#caption-password-cf').html("<small class='text-danger'>Password tidak sama</small>");
                }

                if (!nama_lengkap) {
                    $('#caption-nama-regis').html("<small class='text-danger'>Nama tidak boleh kosong</small>").hide().show(500);
                }

                

                if (!password) {
                    $('#caption-password-regis').html("<small class='text-danger'>Kata sandi harus diisi</small>").hide().show(500);
                } else if (password < 8) {
                    $('#caption-password-regis').html("<small class='text-danger'>Kata sandi minimal 8 karakter</small>").hide().show(500);
                }
            });

            $('#btn-submit-forgot').click(function( aksi ){
                
                var email = $('input[name="email-forgot"]').val();

                data_input = {
                    "email-forgot": email,
                }
                

                $.ajax({
                    type: "GET",
                    url: "{{ url('/forgotpass') }}",
                    data: data_input,
                    dataType: "json",
                    success: function(response){
                        
                        if (response.status == "success"){
                            swal.fire({
                                    text: "Email Berhasil Dikirim",
                                    icon: "success",
                                    buttonsStyling: false,
                                    confirmButtonText: "Ok, got it!",
                                    customClass: {
                                        confirmButton: "btn font-weight-bold btn-light-primary"
                                    }
                                }).then(function(tombol) {

                                    // jika tombol 
                                    if (tombol.isConfirmed) {

                                        window.location.href = response.url;
                                    }

                                });
                        }
                    }, error: function( error ) {

                        console.log( error );
                    }
                })

                aksi.preventDefault();
            })
        });
    </script>
</body>
<!--end::Body-->

</html>