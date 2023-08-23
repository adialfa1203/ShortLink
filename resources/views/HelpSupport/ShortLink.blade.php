<!DOCTYPE html>
<html lang="en">


<!-- Mirrored from kalanidhithemes.com/live-preview/landing-page/apper/all-demo/03-app-landing-page-wave-animation/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 22 May 2023 08:10:18 GMT -->

<head>

    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>LINK.ID</title>

    <!-- icofont-css-link -->
    <link rel="stylesheet" href="{{ asset('landingPage/css/icofont.min.css') }}">
    <!-- Owl-Carosal-Style-link -->
    <link rel="stylesheet" href="{{ asset('landingPage/css/owl.carousel.min.css') }}">
    <!-- Bootstrap-Style-link -->
    <link rel="stylesheet" href="{{ asset('landingPage/css/bootstrap.min.css') }}">
    <!-- Aos-Style-link -->
    <link rel="stylesheet" href="{{ asset('landingPage/css/aos.css') }}">
    <!-- Coustome-Style-link -->
    <link rel="stylesheet" href="{{ asset('landingPage/css/style.css') }}">
    <!-- Responsive-Style-link -->
    <link rel="stylesheet" href="{{ asset('landingPage/css/responsive.css') }}">
    <!-- waveanimation-Style-link -->
    <link rel="stylesheet" href="{{ asset('landingPage/css/wave-animation-style.css') }}">
    <!-- Favicon -->
    <link rel="shortcut icon" href="{{ asset('https://i.postimg.cc/P55dtZjM/Logo-A-1.png') }}" type="image/x-icon">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <link rel="preconnect" href="https://fonts.googleapis.com/">
    <link rel="preconnect" href="https://fonts.gstatic.com/" crossorigin>
    <link id="fontsLink" href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&amp;display=swap" rel="stylesheet">

    <!-- Layout config Js -->
    <!-- Bootstrap Css -->
    <link href="{{asset('template/themesbrand.com/steex/layouts/assets/css/bootstrap.min.css')}}" rel="stylesheet" type="text/css">
    <!-- Icons Css -->
    <!-- App Css-->
    <!-- custom Css-->

</head>

<body>
    <style>
       .custom-btn {
        width: 100%;
        max-width: 300px; /* Sesuaikan dengan lebar maksimum yang Anda inginkan */
        margin: 5px; /* Sesuaikan jarak antara tombol jika diperlukan */
    }
    header {
  height: 100px; /* Ganti dengan tinggi yang Anda inginkan */
}
header {
  padding: 20px 0; /* Atur padding sesuai kebutuhan Anda */
}
    </style>

    <!-- Page-wrapper-Start -->
    <div class="page_wrapper">

        <!-- Preloader -->
        <div id="preloader">
            <div id="loader"></div>
        </div>

        <!-- Header Start -->
        <header>
            <!-- container start -->
            <div class="container">
                <!-- navigation bar -->
              <nav class="navbar navbar-expand-lg" style="margin-top: -90px;">
                <a class="navbar-brand mb-6" href="#">
                  <img src="https://i.postimg.cc/QdZvjL3f/Logo-LINK-ID.png" alt="image" >
                </a>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <div class="banner-text">
                        <h6 style="color: white;">Bantuan & Dukungan | Penyingkat Tautan</h6>
                    </div>
                </div>
                
                
              </nav>
              <!-- navigation end -->
            </div>
            <!-- container end -->
          </header>

        <!-- Banner-Section-Start -->
        <section class="banner_section" id="beranda">
            <div>
                {{-- <svg class="waves" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"
                    viewBox="0 24 150 28" preserveAspectRatio="none" shape-rendering="auto">
                    <defs>
                        <path id="gentle-wave"
                            d="M-160 44c30 0 58-18 88-18s 58 18 88 18 58-18 88-18 58 18 88 18 v44h-352z" />
                    </defs>
                    <g class="parallax">
                        <use xlink:href="#gentle-wave" x="48" y="0" fill="rgba(255,255,255,0.7" />
                        <use xlink:href="#gentle-wave" x="48" y="3" fill="rgba(255,255,255,0.5)" />
                        <use xlink:href="#gentle-wave" x="48" y="5" fill="rgba(255,255,255,0.3)" />
                        <use xlink:href="#gentle-wave" x="48" y="7" fill="#f6f4fe" />
                    </g>
                </svg> --}}
            </div>
            <!-- wave animation end -->

        </section>
        <div class="card">
            <div class="card-body">
                <div class="row">
                    <a href="/HelpSupport" class="col-1 btn btn-info">
                        <i class="fas fa-arrow-left"></i> Kembali
                    </a>
                    <p></p>
                    <div class="col-12">
                        <div class="accordion accordion-border-box" id="genques-accordion">
                            <div class="accordion-item ">
                                <h2 class="accordion-header" id="genques-headingOne">
                                    <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#genques-collapseOne" aria-expanded="true" aria-controls="genques-collapseOne">
                                        Bisakah saya menghapus tautan pendek atau shortener link?
                                    </button>
                                </h2>
                                <div id="genques-collapseOne" class="accordion-collapse collapse show" aria-labelledby="genques-headingOne" data-bs-parent="#genques-accordion">
                                    <div class="accordion-body">
                                        <ul>
                                            <li>Tanya Dibul dulu ya besti</li>
                                    </div>
                                    
                                </div>
                            </div>
                            <div class="accordion-item">
                                <h2 class="accordion-header" id="genques-headingTwo">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#genques-collapseTwo" aria-expanded="false" aria-controls="genques-collapseTwo">
                                        Apakah ada batasan kuota dalam membuat tautan pendek?
                                    </button>
                                </h2>
                                <div id="genques-collapseTwo" class="accordion-collapse collapse" aria-labelledby="genques-headingTwo" data-bs-parent="#genques-accordion">
                                    <div class="accordion-body">
                                        <p> kuota bulanan untuk membuat shortlink/tautan pendek di S.id adalah :</p>
                                        <li><strong>Free - 100/bulan</strong></li>
                                        <li><strong>Lite - 100/bulan</strong></li>
                                        <li><strong>Starter - 300/bulan</strong></li>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!--end accordion-->
                    </div>
                </div><!--end row-->
            </div>
        </div>
       </div>
       <footer class="footer">
        <div class="container-fluid">
            <div class="row">
                <div class="col-6">
                    <script>
                        document.write(new Date().getFullYear())
                    </script> © Link.id
                </div>
                <div class="col-6">
                    <div class="text-sm-end d-none d-sm-block">
                        Design & Develop by Link.id
                    </div>
                </div>
            </div>
        </div>
    </footer>
        <!-- Footer-Section end -->

        <!-- VIDEO MODAL -->
        <div class="modal fade youtube-video" id="myModal" tabindex="-1" role="dialog"
            aria-labelledby="myModalLabel">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <button id="close-video" type="button" class="button btn btn-default text-right"
                        data-dismiss="modal">
                        <i class="icofont-close-line-circled"></i>
                    </button>
                    <div class="modal-body">
                        <div id="video-container" class="video-container">
                            <iframe id="youtubevideo" src="#" width="640" height="360" frameborder="0"
                                allowfullscreen></iframe>
                        </div>
                    </div>
                    <div class="modal-footer">
                    </div>
                </div>
            </div>
        </div>

        <div class="purple_backdrop"></div>

    </div>
    <!-- Page-wrapper-End -->

    <!-- Jquery-js-Link -->
    <script src="{{ asset('landingPage/js/jquery.js') }}"></script>
    <!-- owl-js-Link -->
    <script src="{{ asset('landingPage/js/owl.carousel.min.js') }}"></script>
    <!-- bootstrap-js-Link -->
    <script src="{{ asset('landingPage/js/bootstrap.min.js') }}"></script>
    <!-- aos-js-Link -->
    <script src="{{ asset('landingPage/js/aos.js') }}"></script>
    <!-- main-js-Link -->
    <script src="{{ asset('landingPage/js/main.js') }}"></script>
    <script>
        // Fungsi untuk mengarahkan ke halaman Facebook
        document.getElementById("facebook-link").addEventListener("click", function() {
            window.location.href = "https://www.facebook.com/nama_akun_facebook";
        });

        // Fungsi untuk mengarahkan ke halaman Twitter
        document.getElementById("twitter-link").addEventListener("click", function() {
            window.location.href = "https://twitter.com/nama_akun_twitter";
        });

        // Fungsi untuk mengarahkan ke halaman Instagram
        document.getElementById("instagram-link").addEventListener("click", function() {
            window.location.href = "https://www.instagram.com/nama_akun_instagram";
        });
    </script>
        <script src="{{asset('template/themesbrand.com/steex/layouts/assets/libs/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
        <script src="{{asset('template/themesbrand.com/steex/layouts/assets/libs/simplebar/simplebar.min.js')}}"></script>
        <script src="{{asset('template/themesbrand.com/steex/layouts/assets/js/plugins.js')}}"></script>

        <!-- App js -->
        <script src="{{asset('template/themesbrand.com/steex/layouts/assets/js/app.js')}}"></script>
</body>


<!-- Mirrored from kalanidhithemes.com/live-preview/landing-page/apper/all-demo/03-app-landing-page-wave-animation/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 22 May 2023 08:12:27 GMT -->

</html>
