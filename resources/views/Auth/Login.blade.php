<!doctype html>
<html lang="en" data-layout="vertical" data-sidebar="dark" data-sidebar-size="lg" data-preloader="disable"
    data-theme="default" data-topbar="light" data-bs-theme="light">



<!-- Mirrored from themesbrand.com/steex/layouts/auth-signin.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 10 Aug 2023 01:40:51 GMT -->

<head>

    <meta charset="utf-8">
    <title>Sign In | Steex - Admin & Dashboard Template</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta content="Minimal Admin & Dashboard Template" name="description">
    <meta content="Themesbrand" name="author">
    <!-- App favicon -->
    <link rel="shortcut icon"
        href="{{ asset('template/themesbrand.com/steex/layouts/assets/assets/images/favicon.ico') }}">

    <!-- Fonts css load -->
    <link rel="preconnect"
        href="{{ asset('template/themesbrand.com/steex/layouts/assets/assets/https://fonts.googleapis.com/') }}">
    <link rel="preconnect"
        href="{{ asset('template/themesbrand.com/steex/layouts/assets/assets/https://fonts.gstatic.com/') }}"
        crossorigin>
    <link id="fontsLink"
        href="{{ asset('template/themesbrand.com/steex/layouts/assets/assets/https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&amp;display=swap" rel="stylesheet') }}">

    <!-- Layout config Js -->
    <script src="{{ asset('template/themesbrand.com/steex/layouts/assets/js/layout.js') }}"></script>
    <!-- Bootstrap Css -->
    <link href="{{ asset('template/themesbrand.com/steex/layouts/assets/css/bootstrap.min.css') }}" rel="stylesheet"
        type="text/css">
    <!-- Icons Css -->
    <link href="{{ asset('template/themesbrand.com/steex/layouts/assets/css/icons.min.css') }}" rel="stylesheet"
        type="text/css">
    <!-- App Css-->
    <link href="{{ asset('template/themesbrand.com/steex/layouts/assets/css/app.min.css') }}" rel="stylesheet"
        type="text/css">
    <!-- custom Css-->
    <link href="{{ asset('template/themesbrand.com/steex/layouts/assets/css/custom.min.css') }}" rel="stylesheet"
        type="text/css">

    <style>
        .right-section {
            background-color: #104898;
            color: white;
            padding: 30px;
            margin: 0;
        }

        .custom-btn {
            background-color: #0B7EFF;
        }

    </style>

</head>

<body>
    <section
        class="auth-page-wrapper py-5 position-relative d-flex align-items-center justify-content-center min-vh-100">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-11">
                    <div class="card mb-0 p-0 d-flex justify-content-between">
                            <div class="row">
                                <div class="col-6">
                                    <div class="card mb-0 border-0 shadow-none mb-0">
                                        <div class="card-body p-sm-5 m-lg-4">
                                            <div class="text-center mt-5">
                                                <h5 class="fs-3xl" style="color: #104898">MASUK</h5>
                                                <p class="text-muted">Masuk untuk melanjutkan ke LINK.ID</p>
                                            </div>
                                            <div class="p-2 mt-5">
                                                <form action="{{ route('login.user') }}" method="">
                                                    @csrf
                                                    <div class="mb-3">
                                                        <label for="username" class="form-label">Email</label>
                                                        <div class="position-relative ">
                                                            <input type="text" class="form-control password-input"
                                                                name="email" id="username" placeholder="Masukkan Email"
                                                                required>
                                                        </div>
                                                    </div>

                                                    <div class="mb-3">
                                                        {{-- <div class="float-end">
                                                            <a href="{{ url('send-email')}}" class="text-muted">Lupa kata sandi?</a>
                                                        </div> --}}
                                                        <label class="form-label" for="password-input">Kata Sandi</label>
                                                        <div class="position-relative auth-pass-inputgroup mb-3">
                                                            <input type="password"
                                                                class="form-control pe-5 password-input" name="password"
                                                                placeholder="Kata Sandi" id="password-input"
                                                                required>
                                                            <button
                                                                class="btn btn-link position-absolute end-0 top-0 text-decoration-none text-muted password-addon"
                                                                type="button" id="password-addon"><i
                                                                    class="ri-eye-fill align-middle"></i></button>
                                                        </div>
                                                        <div class="float-end">
                                                            <a href="{{ url('send-email')}}" class="text-muted">Lupa kata sandi?</a>
                                                        </div>
                                                        <div class="k">
                                                            <input class="form-check-input" type="checkbox" name="remember" id="remember">
                                                            <label class="form-check-label" for="remember">Ingat saya</label>
                                                        </div>
                                                    </div>
                                                    <div class="mt-4">
                                                        <button class="btn btn-primary w-100 custom-btn"
                                                            type="submit">Masuk</button>
                                                    </div>

                                                    <div class="mt-4 pt-2 text-center">
                                                        <div class="signin-other-title position-relative">
                                                            <h5 class="fs-sm mb-4 title">Daftar Dengan</h5>
                                                        </div>
                                                        <div class="pt-2 hstack gap-2 justify-content-center">
                                                            <button type="button"
                                                                class="btn btn-subtle-primary btn-icon"><i
                                                                    class="ri-facebook-fill fs-lg"></i></button>
                                                            <button type="button"
                                                                class="btn btn-subtle-danger btn-icon"><i
                                                                    class="ri-google-fill fs-lg"></i></button>
                                                            <button type="button"
                                                                class="btn btn-subtle-dark btn-icon"><i
                                                                    class="ri-github-fill fs-lg"></i></button>
                                                            <button type="button"
                                                                class="btn btn-subtle-info btn-icon"><i
                                                                    class="ri-twitter-fill fs-lg"></i></button>
                                                        </div>
                                                    </div>
                                                </form>

                                                <div class="text-center mt-5">
                                                    <p class="mb-0">Tidak mempunyai akun ? <a
                                                            href="{{url('register')}}"
                                                            class="fw-semibold text-secondary text-decoration-underline">
                                                            Daftar</a> </p>
                                                </div>
                                            </div>
                                        </div><!-- end card body -->
                                    </div><!-- end card -->
                                </div>
                                <div class="col-6 right-section m-0">
                                    <center>
                                    <div class="w-100" style="margin-top: 20%">
                                        <img src="{{ asset('template/image/Login2.png') }} " width="400"
                                            height="400">
                                    </div>
                                </center>
                                </div>
                            </div>
                            <!--end col-->
                        <!--end row-->
                    </div>
                </div>
                <!--end col-->
            </div>
            <!--end row-->
        </div>
        <!--end container-->
    </section>

    <!-- JAVASCRIPT -->
    <script src="{{ asset('template/themesbrand.com/steex/layouts/assets/libs/bootstrap/js/bootstrap.bundle.min.js') }}">
    </script>
    <script src="{{ asset('template/themesbrand.com/steex/layouts/assets/libs/bootstrap/js/bootstrap.bundle.min.js') }}">
    </script>
    <script src="{{ asset('template/themesbrand.com/steex/layouts/assets/js/plugins.js') }}"></script>



    <script src="{{ asset('template/themesbrand.com/steex/layouts/assets/js/pages/password-addon.init.js') }}"></script>

    <!--Swiper slider js-->
    <script src="{{ asset('template/themesbrand.com/steex/layouts/assets/libs/swiper/swiper-bundle.min.js') }}"></script>

    <!-- swiper.init js -->
    <script src="{{ asset('template/themesbrand.com/steex/layouts/assets/js/pages/swiper.init.js') }}"></script>

</body>


<!-- Mirrored from themesbrand.com/steex/layouts/auth-signin.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 10 Aug 2023 01:40:58 GMT -->

</html>
