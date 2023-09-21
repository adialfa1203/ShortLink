<!doctype html>
<html lang="en" data-layout="vertical" data-sidebar="dark" data-sidebar-size="lg" data-preloader="disable"
    data-theme="default" data-topbar="light" data-bs-theme="light">



<!-- Mirrored from themesbrand.com/steex/layouts/auth-signin.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 10 Aug 2023 01:40:51 GMT -->

<head>

    <meta charset="utf-8">
    <title>Masuk | Go Link</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta content="Minimal Admin & Dashboard Template" name="description">
    <meta content="Themesbrand" name="author">
    <!-- App favicon -->
    <link rel="shortcut icon" href="{{ asset('template/themesbrand.com/steex/layouts/assets/images/Logo.png') }}" style="width: 200px; height: 200px;">


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


</head>

<body>
    <section
        class="auth-page-wrapper py-5 position-relative d-flex align-items-center justify-content-center min-vh-100">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-11">
                    <div class="card mb-0 p-0 d-flex justify-content-between">
                        <div class="row">
                            <div class="col-lg-6 col-md-9 col-sm-10 col-lg-6">
                                <div class="card mb-0 border-0 shadow-none mb-0">
                                    <div class="card-body p-sm-4 m-lg-3">
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
                                                            required value="{{ old('email') }}">
                                                    </div>
                                                </div>

                                                <div class="mb-3">
                                                    {{-- <div class="float-end">
                                                            <a href="{{ url('send-email')}}" class="text-muted">Lupa kata sandi?</a>
                                                        </div> --}}
                                                    <label class="form-label" for="password-input">Kata Sandi</label>
                                                    <div class="position-relative auth-pass-inputgroup mb-3">
                                                        <input type="password" class="form-control pe-5 password-input"
                                                            name="password" placeholder="Kata Sandi" id="password-input"
                                                            required value="{{ old('password') }}">
                                                        <button
                                                            class="btn btn-link position-absolute end-0 top-0 text-decoration-none text-muted password-addon"
                                                            type="button" id="password-addon"><i
                                                                class="ri-eye-fill align-middle"></i></button>
                                                    </div>
                                                    <div class="float-end">
                                                        <a href="{{ url('send-email') }}" class="text-muted">Lupa kata
                                                            sandi?</a>
                                                    </div>
                                                    <div>
                                                        <input class="form-check-input" type="checkbox" name="remember"
                                                            id="remember">
                                                        <label class="form-check-label" for="remember">Saya setuju
                                                            dengan <a href="#" data-bs-target="#myModal"
                                                                data-bs-toggle="modal" id="privacyLink">Kebijakan
                                                                Privasi</a></label>
                                                    </div>
                                                    <div>
                                                        @if ($errors->has('remember'))
                                                            <span
                                                                class="text-danger">{{ $errors->first('remember') }}</span>
                                                        @endif
                                                    </div>
                                                    {{-- <div id="requiredAlert" style="display: none; color: red;">Anda harus menyetujui Kebijakan Privasi.</div> --}}
                                                    <!-- Default Modals -->
                                                    <div id="myModal" class="modal fade" tabindex="-1"
                                                        aria-labelledby="myModalLabel" aria-hidden="true"
                                                        style="display: none;">
                                                        <div class="modal-dialog">
                                                            <div class="modal-content">
                                                                <div class="modal-header">
                                                                    <h5 class="modal-title" id="myModalLabel">Kebijakan
                                                                        Privasi</h5>
                                                                    <button type="button" class="btn-close"
                                                                        data-bs-dismiss="modal"
                                                                        aria-label="Close"></button>
                                                                </div>
                                                                <div class="modal-body">
                                                                    <p>Hummasoft Technology membangun aplikasi LinkID
                                                                        sebagai aplikasi Komersial. LAYANAN ini adalah
                                                                        disediakan oleh Hummasoft Technology dan
                                                                        dimaksudkan untuk digunakan sebagaimana adanya.
                                                                    </p>

                                                                    <p>Halaman ini digunakan untuk memberi tahu
                                                                        pengunjung mengenai kebijakan kami terkait
                                                                        pengumpulan, penggunaan, dan
                                                                        pengungkapan Informasi Pribadi jika ada yang
                                                                        memutuskan untuk menggunakan Layanan kami.</p>

                                                                    <p>Jika Anda memilih untuk menggunakan Layanan kami,
                                                                        maka Anda menyetujui pengumpulan dan penggunaan
                                                                        informasi di
                                                                        kaitannya dengan kebijakan ini. Informasi
                                                                        Pribadi yang kami kumpulkan digunakan untuk
                                                                        menyediakan dan
                                                                        meningkatkan Layanan. Kami tidak akan
                                                                        menggunakan atau membagikan informasi Anda
                                                                        kepada siapa pun kecuali sebagai
                                                                        dijelaskan dalam Kebijakan Privasi ini.</p>

                                                                    <p>Istilah yang digunakan dalam Kebijakan Privasi
                                                                        ini memiliki arti yang sama dengan <a
                                                                            href="/Privasi">Syarat dan Ketentuan</a>,
                                                                        yang dapat diakses di
                                                                        LinkID kecuali ditentukan lain dalam Kebijakan
                                                                        Privasi ini.</p>

                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>

                                                </div>
                                                <div class="mt-4">
                                                    <button class="btn btn-primary w-100 custom-btn"
                                                        type="submit">Masuk</button>
                                                </div>

                                                {{-- <div class="mt-4 pt-2 text-center">
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
                                                        <button type="button" class="btn btn-subtle-dark btn-icon"><i
                                                                class="ri-github-fill fs-lg"></i></button>
                                                        <button type="button" class="btn btn-subtle-info btn-icon"><i
                                                                class="ri-twitter-fill fs-lg"></i></button>
                                                    </div>
                                                </div> --}}
                                            </form>

                                            <div class="text-center mt-5">
                                                <p class="mb-0">Tidak mempunyai akun ? <a
                                                        href="{{ url('register') }}"
                                                        class="fw-semibold text-secondary text-decoration-underline">
                                                        Daftar</a> </p>
                                            </div>
                                        </div>
                                    </div><!-- end card body -->
                                </div><!-- end card -->
                            </div>
                            <div class="col-6 right-section img col-lg-6">
                                <center>
                                    <div class="w-100" style="margin-top: 20% ">
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
    <script>
        // Fungsi untuk menampilkan atau menyembunyikan pesan kesalahan
        function toggleRequiredAlert(show) {
            var requiredAlert = document.getElementById('requiredAlert');
            requiredAlert.style.display = show ? 'block' : 'none';
        }

        // Fungsi untuk memvalidasi formulir sebelum pengiriman
        function validateForm(event) {
            var rememberCheckbox = document.getElementById('remember');

            if (!rememberCheckbox.checked) {
                toggleRequiredAlert(true);
                event.preventDefault(); // Mencegah pengiriman formulir
            } else {
                toggleRequiredAlert(false);
            }
        }

        // Tambahkan event listener untuk tautan kebijakan privasi
        var privacyLink = document.getElementById('privacyLink');
        privacyLink.addEventListener('click', function(event) {
            event.preventDefault(); // Mencegah tautan dari mengarahkan ke halaman lain
            // Tampilkan atau sembunyikan modal kebijakan privasi di sini jika diperlukan
        });

        // Tambahkan event listener untuk validasi sebelum pengiriman formulir
        var loginForm = document.getElementById('loginForm');
        loginForm.addEventListener('submit', validateForm);
    </script>

</body>


<!-- Mirrored from themesbrand.com/steex/layouts/auth-signin.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 10 Aug 2023 01:40:58 GMT -->

</html>
