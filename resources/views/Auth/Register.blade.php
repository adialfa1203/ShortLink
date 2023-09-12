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
    <link rel="shortcut icon" href="assets/images/favicon.ico">

    <!-- Fonts css load -->
    <link rel="preconnect" href="https://fonts.googleapis.com/">
    <link rel="preconnect" href="https://fonts.gstatic.com/" crossorigin>
    <link id="fontsLink"
        href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&amp;display=swap"
        rel="stylesheet">

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

</head>

<body>
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
    <style>
        @media (max-width: 768px) {
            .img {
                display: none;
                /* Hide the element with class "img" for screens up to 768px wide (tablet) */
            }

            .col-lg-6 {
                width: 100%;
                /* Make the column full-width on tablets */
            }
        }
    </style>

    <script>
        window.addEventListener('resize', function() {
            var screenWidth = window.innerWidth || document.documentElement.clientWidth || document.body
                .clientWidth;
            if (screenWidth <= 768) { // Adjusted to 768px to match the tablet width
                var imgElement = document.querySelector('.img');
                if (imgElement) {
                    imgElement.remove(); // Remove the element with class "img" on tablet screens
                }
            }
        });
    </script>


    <section
        class="auth-page-wrapper py-5 position-relative d-flex align-items-center justify-content-center min-vh-100">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-11">
                    <div class="card mb-0">
                        <div class="row g-0 align-items-center">
                            <div class="row">
                                <div class="col-lg-6 col-md-9 col-sm-10 col-lg-6">
                                    <div class="card mb-0 border-0 shadow-none mb-0">
                                        <div class="card-body p-sm-4 m-lg-3">
                                            <div class="text-center mt-5">
                                                <h5 class="fs-3xl" style="color: #104898">DAFTAR</h5>
                                                <p class="text-muted">Silahkan lengkapi seluruh data dibawah ini!</p>
                                            </div>
                                            <div class="p-2 mt-5">
                                                <form action="{{ route('register.user') }}" method="POST">
                                                    @csrf
                                                    <div class="row">
                                                        <div class="col-6 mb-3">
                                                            <label class="form-label">Nomer Ponsel</label>
                                                            <div class="position-relative ">
                                                                <input name="number" type="number"
                                                                    class="form-control" placeholder="Masukan Nomor"
                                                                    value="{{ old('number') }}">
                                                            </div>
                                                            <div>
                                                                @if ($errors->has('number'))
                                                                    <span
                                                                        class="text-danger">{{ $errors->first('number') }}</span>
                                                                @endif
                                                            </div>
                                                        </div>
                                                        <div class="col-6 mb-3">
                                                            <label for="username" class="form-label">Email</label>
                                                            <div class="position-relative ">
                                                                <input name="email" type="text"
                                                                    class="form-control  password-input" id="username"
                                                                    placeholder="Masukan Email"
                                                                    value="{{ old('email') }}">
                                                            </div>
                                                            <div>
                                                                @if ($errors->has('email'))
                                                                    <span
                                                                        class="text-danger">{{ $errors->first('email') }}</span>
                                                                @endif
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="row">
                                                        <div class="col-6 mb-3">
                                                            <label class="form-label">Nama Lengkap</label>
                                                            <div class="position-relative ">
                                                                <input name="name" type="text"
                                                                    class="form-control  password-input"placeholder="Masukan Nama Lengkap"
                                                                    value="{{ old('name') }}">
                                                            </div>
                                                            <div>
                                                                @if ($errors->has('name'))
                                                                    <span
                                                                        class="text-danger">{{ $errors->first('name') }}</span>
                                                                @endif
                                                            </div>
                                                        </div>
                                                        <div class="col-6 mb-3">
                                                            <label class="form-label">Kata Sandi</label>
                                                            <div class="position-relative auth-pass-inputgroup mb-3">
                                                                <input name="password" type="password"
                                                                    class="form-control pe-5 password-input "
                                                                    placeholder="Kata Sandi" id="password-input"
                                                                    value="{{ old('password') }}">
                                                                <button
                                                                    class="btn btn-link position-absolute end-0 top-0 text-decoration-none text-muted password-addon"
                                                                    type="button" id="password-addon"><i
                                                                        class="ri-eye-fill align-middle"></i></button>
                                                            </div>
                                                            <div>
                                                                @if ($errors->has('password'))
                                                                    <span
                                                                        class="text-danger">{{ $errors->first('password') }}</span>
                                                                @endif
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="mb-3">
                                                        <label class="form-label" for="password-input">Ulangi
                                                            Password</label>
                                                        <div class="position-relative auth-pass-inputgroup mb-3">
                                                            <input name="password_confirmation" type="password"
                                                                class="form-control pe-5 password-input "
                                                                placeholder="Masukkan ulang Kata Sandi"
                                                                id="password-input">
                                                            <button
                                                                class="btn btn-link position-absolute end-0 top-0 text-decoration-none text-muted password-addon"
                                                                type="button" id="password-addon"><i
                                                                    class="ri-eye-fill align-middle"></i></button>
                                                        </div>
                                                        <div>
                                                            @if ($errors->has('password_confirmation'))
                                                                <span
                                                                    class="text-danger">{{ $errors->first('password_confirmation') }}</span>
                                                            @endif
                                                        </div>
                                                    </div>

                                                    <div class="mt-4">
                                                        <button class="btn btn-primary w-100 custom-btn"
                                                            type="submit">Daftar</button>
                                                    </div>

                                                    <div class="mt-4 pt-2 text-center">
                                                        <div class="signin-other-title position-relative">
                                                            <h5 class="fs-sm mb-4 title">Masuk Dengan</h5>
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
                                                    <p class="mb-0">Sudah memiliki akun ? <a
                                                            href="{{ url('login') }}"
                                                            class="fw-semibold text-secondary text-decoration-underline">
                                                            Masuk</a> </p>
                                                </div>
                                            </div>
                                        </div><!-- end card body -->
                                    </div><!-- end card -->
                                </div>
                                <div class="col-6 right-section img col-lg-6">
                                    <div class="text-center" style="margin-top: 20%">
                                        <img src="{{ asset('template/image/Login.png') }} " width="400"
                                            height="400">
                                    </div>
                                </div>
                            </div>
                            <!--end col-->
                        </div>
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
    <script src="{{ asset('template/themesbrand.com/steex/layouts/assets/libs/simplebar/simplebar.min.js') }}"></script>
    <script src="{{ asset('template/themesbrand.com/steex/layouts/assets/js/plugins.js') }}"></script>



    <script src="{{ asset('template/themesbrand.com/steex/layouts/assets/js/pages/password-addon.init.js') }}"></script>

    <!--Swiper slider js-->
    <script src="{{ asset('template/themesbrand.com/steex/layouts/assets/libs/swiper/swiper-bundle.min.js') }}"></script>

    <!-- swiper.init js -->
    <script src="{{ asset('template/themesbrand.com/steex/layouts/assets/js/pages/swiper.init.js') }}"></script>

</body>


<!-- Mirrored from themesbrand.com/steex/layouts/auth-signin.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 10 Aug 2023 01:40:58 GMT -->

</html>
