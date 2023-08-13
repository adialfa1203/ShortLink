<!doctype html>
<html lang="en" data-layout="vertical" data-sidebar="dark" data-sidebar-size="lg" data-preloader="disable" data-theme="default" data-topbar="light" data-bs-theme="light">


    
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
        <link id="fontsLink" href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&amp;display=swap" rel="stylesheet">

        <!-- Layout config Js -->
        <script src="{{ asset ('template/themesbrand.com/steex/layouts/assets/js/layout.js')}}"></script>
        <!-- Bootstrap Css -->
        <link href="{{ asset ('template/themesbrand.com/steex/layouts/assets/css/bootstrap.min.css')}}" rel="stylesheet" type="text/css">
        <!-- Icons Css -->
        <link href="{{ asset ('template/themesbrand.com/steex/layouts/assets/css/icons.min.css')}}" rel="stylesheet" type="text/css">
        <!-- App Css-->
        <link href="{{ asset ('template/themesbrand.com/steex/layouts/assets/css/app.min.css')}}" rel="stylesheet" type="text/css">
        <!-- custom Css-->
        <link href="{{ asset ('template/themesbrand.com/steex/layouts/assets/css/custom.min.css')}}" rel="stylesheet" type="text/css">

    </head>

    <body>
        <style>
            .right-section {
                background-color: #104898;
                color: white; /* Set the text color to white for better visibility */
                padding: 20px; /* Add some padding for spacing */
            }
            .custom-btn {
            background-color: #0B7EFF;
            }
        </style>

        <section class="auth-page-wrapper py-5 position-relative d-flex align-items-center justify-content-center min-vh-100">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-lg-11">
                        <div class="card mb-0">
                            <div class="row g-0 align-items-center">
                                {{-- <div class="col-xxl-5">
                                    <div class="card auth-card bg-secondary h-100 border-0 shadow-none d-none d-sm-block mb-0">
                                        <div class="card-body py-5 d-flex justify-content-between flex-column">
                                            <div class="auth-effect-main my-5 position-relative rounded-circle d-flex align-items-center justify-content-center mx-auto">
                                                <div class="effect-circle-1 position-relative mx-auto rounded-circle d-flex align-items-center justify-content-center">
                                                    <div class="effect-circle-2 position-relative mx-auto rounded-circle d-flex align-items-center justify-content-center">
                                                        <div class="effect-circle-3 mx-auto rounded-circle position-relative text-white fs-4xl d-flex align-items-center justify-content-center">
                                                            Welcome to <span class="text-primary ms-1">Steex</span>
                                                        </div>
                                                    </div>
                                                </div>
                                                <ul class="auth-user-list list-unstyled">
                                                    <li>
                                                        <div class="avatar-sm d-inline-block">
                                                            <div class="avatar-title bg-white shadow-lg overflow-hidden rounded-circle">
                                                                <img src="assets/images/users/avatar-1.jpg" alt="" class="img-fluid">
                                                            </div>
                                                        </div>
                                                    </li>
                                                    <li>
                                                        <div class="avatar-sm d-inline-block">
                                                            <div class="avatar-title bg-white shadow-lg overflow-hidden rounded-circle">
                                                                <img src="assets/images/users/avatar-2.jpg" alt="" class="img-fluid">
                                                            </div>
                                                        </div>
                                                    </li>
                                                    <li>
                                                        <div class="avatar-sm d-inline-block">
                                                            <div class="avatar-title bg-white shadow-lg overflow-hidden rounded-circle">
                                                                <img src="assets/images/users/avatar-3.jpg" alt="" class="img-fluid">
                                                            </div>
                                                        </div>
                                                    </li>
                                                    <li>
                                                        <div class="avatar-sm d-inline-block">
                                                            <div class="avatar-title bg-white shadow-lg overflow-hidden rounded-circle">
                                                                <img src="assets/images/users/avatar-4.jpg" alt="" class="img-fluid">
                                                            </div>
                                                        </div>
                                                    </li>
                                                    <li>
                                                        <div class="avatar-sm d-inline-block">
                                                            <div class="avatar-title bg-white shadow-lg overflow-hidden rounded-circle">
                                                                <img src="assets/images/users/avatar-5.jpg" alt="" class="img-fluid">
                                                            </div>
                                                        </div>
                                                    </li>
                                                </ul>
                                            </div>
                            
                                            <div class="text-center">
                                                <p class="text-white opacity-75 mb-0 mt-3">
                                                    &copy; <script>document.write(new Date().getFullYear())</script> Steex. Crafted with <i class="mdi mdi-heart text-danger"></i> by Themesbrand
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                </div> --}}
                                <!--end col-->
                                <div class="row">
                                    <div class="col-6">
                                        <div class="card mb-0 border-0 shadow-none mb-0">
                                            <div class="card-body p-sm-5 m-lg-4">
                                                <div class="text-center mt-5">
                                                    <h5 class="fs-3xl" style="color: #104898">DAFTAR</h5>
                                                    <p class="text-muted">Silahkan lengkapi seluruh data dibawah ini!</p>
                                                </div>
                                                <div class="p-2 mt-5">
                                                    <form action="{{ route ('registeruser')}}" method="POST">
                                                        @csrf
                                                        <div class="row">
                                                            <div class="col-6 mb-3">
                                                                <label class="form-label">Nomer Ponsel</label>
                                                                <div class="position-relative ">
                                                                    <input name="number" type="number" class="form-control" placeholder="Masukan Nomor" required>
                                                                </div>
                                                            </div>
                                                            <div class="col-6 mb-3">
                                                                <label for="username" class="form-label">Email</label>
                                                                <div class="position-relative ">
                                                                    <input name="email" type="email" class="form-control  password-input" id="username" placeholder="Masukan Email" required>
                                                                    @error('email')
                                                                        <div class="text-danger">{{ $message }}</div>
                                                                    @enderror
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="row">
                                                            <div class="col-6 mb-3">
                                                                <label class="form-label">Nama Lengkap</label>
                                                                <div class="position-relative ">
                                                                    <input name="name" type="text" class="form-control  password-input"placeholder="Masukan Nama Lengkap" required>
                                                                </div>
                                                            </div>
                                                            <div class="col-6 mb-3">
                                                                <label class="form-label">Kata Sandi</label>
                                                                <div class="position-relative auth-pass-inputgroup mb-3">
                                                                    <input name="password" type="password" class="form-control pe-5 password-input " placeholder="Kata Sandi" id="password-input" required>
                                                                    <button class="btn btn-link position-absolute end-0 top-0 text-decoration-none text-muted password-addon" type="button" id="password-addon"><i class="ri-eye-fill align-middle"></i></button>
                                                                    @error('password')
                                                                        <div class="text-danger">{{ $message }}</div>
                                                                    @enderror
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="mb-3">
                                                            <label class="form-label" for="password-input">Ulangi Password</label>
                                                            <div class="position-relative auth-pass-inputgroup mb-3">
                                                                <input name="password_confirmation" type="password" class="form-control pe-5 password-input " placeholder="Masukkan ulang Kata Sandi" id="password-input" required>
                                                                <button class="btn btn-link position-absolute end-0 top-0 text-decoration-none text-muted password-addon" type="button" id="password-addon"><i class="ri-eye-fill align-middle"></i></button>
                                                                @error('password_confirmation')
                                                                    <div class="text-danger">{{ $message }}</div>
                                                                @enderror
                                                            </div>
                                                        </div>
                                
                                                        <div class="mt-4">
                                                            <button class="btn btn-primary w-100 custom-btn" type="submit">Daftar</button>
                                                        </div>
                                
                                                        <div class="mt-4 pt-2 text-center">
                                                            <div class="signin-other-title position-relative">
                                                                <h5 class="fs-sm mb-4 title">Masuk Dengan</h5>
                                                            </div>
                                                            <div class="pt-2 hstack gap-2 justify-content-center">
                                                                <button type="button" class="btn btn-subtle-primary btn-icon"><i class="ri-facebook-fill fs-lg"></i></button>
                                                                <button type="button" class="btn btn-subtle-danger btn-icon"><i class="ri-google-fill fs-lg"></i></button>
                                                                <button type="button" class="btn btn-subtle-dark btn-icon"><i class="ri-github-fill fs-lg"></i></button>
                                                                <button type="button" class="btn btn-subtle-info btn-icon"><i class="ri-twitter-fill fs-lg"></i></button>
                                                            </div>
                                                        </div>
                                                    </form>
                                
                                                    <div class="text-center mt-5">
                                                        <p class="mb-0">Sudah memiliki akun ? <a href="{{ url ('login')}}" class="fw-semibold text-secondary text-decoration-underline"> Masuk</a> </p>
                                                    </div>
                                                </div>
                                            </div><!-- end card body -->
                                        </div><!-- end card -->
                                    </div>
                                    <div class="col-6 right-section">
                                        <div class="text-center" style="margin-top: 20%">
                                            <img src="{{asset('template/image/Login.png')}} " width="400" height="400">
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
        <script src="{{ asset ('template/themesbrand.com/steex/layouts/assets/libs/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
        <script src="{{ asset ('template/themesbrand.com/steex/layouts/assets/libs/simplebar/simplebar.min.js')}}"></script>
        <script src="{{ asset ('template/themesbrand.com/steex/layouts/assets/js/plugins.js')}}"></script>
        

        
        <script src="{{ asset ('template/themesbrand.com/steex/layouts/assets/js/pages/password-addon.init.js')}}"></script>
        
        <!--Swiper slider js-->
        <script src="{{ asset ('template/themesbrand.com/steex/layouts/assets/libs/swiper/swiper-bundle.min.js')}}"></script>
        
        <!-- swiper.init js -->
        <script src="{{ asset ('template/themesbrand.com/steex/layouts/assets/js/pages/swiper.init.js')}}"></script>

    </body>


<!-- Mirrored from themesbrand.com/steex/layouts/auth-signin.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 10 Aug 2023 01:40:58 GMT -->
</html>