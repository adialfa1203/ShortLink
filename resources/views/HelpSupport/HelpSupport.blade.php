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
.text-muted {
    --tb-text-opacity: 1;
    color: var(--tb-secondary-color) !important;
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
                    <a class="navbar-brand" href="#">
                        <img src="https://i.postimg.cc/QdZvjL3f/Logo-LINK-ID.png" alt="image">
                    </a>
                    <button class="navbar-toggler" type="button" data-toggle="collapse"
                        data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                        aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon">
                            <!-- <i class="icofont-navigation-menu ico_menu"></i> -->
                            <div class="toggle-wrap">
                                <span class="toggle-bar"></span>
                            </div>
                        </span>
                    </button>

                    <div class="collapse navbar-collapse" id="navbarSupportedContent">
                        <ul class="navbar-nav ml-auto">
                            <!-- secondery menu start -->
                            <li class="nav-item has_dropdown">
                                <a class="nav-link" href="/">Beranda</a>
                            </li>

                            <!-- secondery menu start -->
                            <li class="nav-item has_dropdown">
                                <a class="nav-link" href="/Shortlink">Perpendek Link</a>
                            </li>
                            <!-- secondery menu end -->

                            <li class="nav-item has_dropdown">
                                <a class="nav-link" href="/Microsite">Situs Mikro</a>
                            </li>
                            <li class="nav-item has_dropdown">
                                <a class="nav-link" href="/Subscribe">Berlangganan</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link dark_btn" href="/login">Login / Register</a>
                            </li>
                        </ul>
                    </div>
                </nav>
                <!-- navigation end -->
            </div>
            <!-- container end -->
        </header>

        <!-- Banner-Section-Start -->
        <section class="banner_section mb-5" id="beranda">
            <!-- container start -->
           

            <!-- container end -->

            <!-- wave animation start -->
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
       <div class="container mb-12">
        {{-- <div class="card mb-3">
            <img src="https://i.postimg.cc/85PX89YV/langit2.png">
            <form class="col-6 search-form mb-5 position-absolute top-50 start-50 translate-middle">
              <div class="input-group mx-auto">
                  <input type="search" class="form-control" placeholder="Search..." aria-label="Search">
                  <span class="input-group-text"><i class="bi bi-search"></i></span>
              </div>
          </form>
        </div> --}}
        <div class="container">
          <div class="row justify-content-between mb-3">
              <div class="col-12 text-center">
                  <a href="/Start" class="btn btn-outline-info custom-btn">Memulai</a>
                  <a href="/Announcement" class="btn btn-outline-info custom-btn">Pengumuman</a>
                  <a href="/Account" class="btn btn-outline-info custom-btn">Akun</a>
              </div>
          </div>
      </div>
      <div class="container">
          <div class="row justify-content-between mb-5">
              <div class="col-12 text-center">
                <a href="/BillingSubscriptions" class="btn btn-outline-info custom-btn">Penagihan dan Langganan</a>
                  <a href="/PlatformMicrosite" class="btn btn-outline-info custom-btn">Platform Microsite</a>
                  <a href="/ShortLink" class="btn btn-outline-info custom-btn">Penyingkat Tautan</a>
              </div>
          </div>
      </div>
      <div class="col-xxl-12">
        <div class="card mb-3">
            <div class="card-header-white d-flex align-items-center">
                <h5 class="card-title mb-0 flex-grow-1 text-center mt-2">Aktivitas Terbaru</h5>
            </div>
            <div class="card-body px-0">
                <div class="card-body">
                        <div class="d-flex align-items-start text-muted mb-4">
                            <div class="flex-shrink-0 me-3">
                                <img src="{{asset('template/themesbrand.com/steex/layouts/assets/images/users/avatar-2.jpg')}}" class="avatar-sm rounded" alt="..." width="50px" height="50px">
                            </div>

                            <div class="flex-grow-1">
                                <h6 class="fs-md" style="margin-left: 1%;">Jihan Prahasti Saharani</h6>
                                <p class="mb-1" style="margin-left: 1%;">Web ini sangat Membantu</p>
                            </div>
                        </div>
                        <div class="d-flex align-items-start text-muted mb-4">
                            <div class="flex-shrink-0 me-3">
                                <img src="{{asset('template/themesbrand.com/steex/layouts/assets/images/users/avatar-2.jpg')}}" class="avatar-sm rounded" alt="..." width="50px" height="50px">
                            </div>

                            <div class="flex-grow-1">
                                <h6 class="fs-md" style="margin-left: 1%;">Fira</h6>
                                <p class="mb-1" style="margin-left: 1%;">Semoga Semakin Upgrade</p>
                            </div>
                        </div>
                        
                        
                    </div>
                </div><!-- end card-body -->
            </div>
        </div><!--end card-->
    </div><!--end col-->
    
       </div>
       <footer>
        <div class="top_footer" id="kontak">
            <div class="container">
                <div class="row">
                    <!-- Logo -->
                    <div class="col-lg-3 col-md-6 col-12">
                        <div class="abt_side">
                            <div class="logo">
                                <img src="https://i.postimg.cc/QdZvjL3f/Logo-LINK-ID.png" alt="image"
                                    style="margin-top: -27%;">
                                    <ul style="margin-top: -16%; margin-right:40px;">
                                        <li style="color: white; font-size:14px;">S.id adalah platform untuk orang-orang untuk menunjukkan keahlian mereka dalam membuat situs mikro dan memperpendek tautan terpendek dengan kode s.id/.</li>
                                    </ul>
                                </div>
                        </div>
                    </div>

                    <!-- Footer Links -->
                    
                    <div class="col-lg-2 col-md-6 col-12">
                        <div class="links">
                            <h3>Dukungan</h3>
                            <ul>
                                <li><a href="/Home">Bantuan</a></li>
                                <li><a href="#features">Laporkan</a></li>
                                <li><a href="#kontak">Status</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-lg-2 col-md-6 col-12">
                        <div class="links">
                            <h3>SiteMaps</h3>
                            <ul>
                                <li><a href="#kontak">Beranda</a></li>
                                <li><a href="/Home">Perpendek Link</a></li>
                                <li><a href="#features">Situs Mikro</a></li>
                                <li><a href="#kontak">Berlanggaan</a></li>
                                <li><a href="/HelpSupport">Bantuan dan Dukungan</a></li>
                                <li><a href="/HelpSupport">Kebijakan Privasi</a></li>

                            </ul>
                        </div>
                    </div>

                    <!-- Contact Information -->
                    <div class="col-lg-2 col-md-6 col-12">
                        <div class="links">
                            <h3>Hubungi Kami</h3>
                            <ul style="text-align: justify;">
                                <li>
                                    <a href="https://wa.me/085606270454">
                                        <i class="fab fa-whatsapp"></i>
                                        085606270454
                                    </a>
                                </li>
                                <li>
                                    <a href="#features">
                                        <i class="fab fa-instagram"></i>
                                        @link.id
                                    </a>
                                </li>
                                <li>
                                    <a href="#features">
                                        <i class="fab fa-twitter"></i>
                                        @link.id
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>

                    <!-- Comment Form -->
                    <div class="col-lg-3 col-md-6 col-12 mb-1" >
                        <form action="javascript:void(0);" class="mt-3">
                            <textarea class="form-control bg-light border-light" id="exampleFormControlTextarea1" rows="3"
                                placeholder="Tambahkan Komentar" style="font-size:12px ;"></textarea>
                            <div class="text-start mt-2">
                                <a href="javascript:void(0);" class="btn btn-success">Kirim</a>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>

        <!-- Bottom Footer -->
        <div class="bottom_footer">
            <div class="container">
                <div class="row">
                    <div class="col-md-12 text-right">
                        <p>© LINK.ID Dikelola oleh PT. Hummatech</p>
                    </div>
                </div>
            </div>
        </div>

        <!-- Go Top Button -->
        <div class="go_top">
            <span><img src="https://i.postimg.cc/MZtYYpPg/go-top.png" alt="image"></span>
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

</body>


<!-- Mirrored from kalanidhithemes.com/live-preview/landing-page/apper/all-demo/03-app-landing-page-wave-animation/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 22 May 2023 08:12:27 GMT -->

</html>