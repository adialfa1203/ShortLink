<!DOCTYPE html>
<html lang="en">


<!-- Mirrored from kalanidhithemes.com/live-preview/landing-page/apper/all-demo/03-app-landing-page-wave-animation/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 22 May 2023 08:10:18 GMT -->
<head>

  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>LINK.ID</title>

  <!-- icofont-css-link -->
  <link rel="stylesheet" href="{{asset('landingPage/css/icofont.min.css')}}">
  <!-- Owl-Carosal-Style-link -->
  <link rel="stylesheet" href="{{asset('landingPage/css/owl.carousel.min.css')}}">
  <!-- Bootstrap-Style-link -->
  <link rel="stylesheet" href="{{asset('landingPage/css/bootstrap.min.css')}}">
  <!-- Aos-Style-link -->
  <link rel="stylesheet" href="{{asset('landingPage/css/aos.css')}}">
  <!-- Coustome-Style-link -->
  <link rel="stylesheet" href="{{asset('landingPage/css/style.css')}}">
  <!-- Responsive-Style-link -->
  <link rel="stylesheet" href="{{asset('landingPage/css/responsive.css')}}">
  <!-- waveanimation-Style-link -->
  <link rel="stylesheet" href="{{asset('landingPage/css/wave-animation-style.css')}}">
  <!-- Favicon -->
  <link rel="shortcut icon" href="{{asset('https://i.postimg.cc/P55dtZjM/Logo-A-1.png')}}" type="image/x-icon">

</head>

<body>
<style>
  .text-center {
            text-align: center;
        }

        .subscribe-form {
            max-width: 400px;
            margin: 0 auto;
        }

        .control-form {
            width: 70%;
            padding: 10px;
            border: 1px solid #ccc;
            border-radius: 3px 0 0 3px;
        }

        .btn {
            padding: 10px 20px;
            background-color: #007bff;
            color: #fff;
            border: none;
            border-radius: 0 3px 3px 0;
            cursor: pointer;
        }

        .btn-primary {
            background-color: #007bff;
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
        <nav class="navbar navbar-expand-lg">
          <a class="navbar-brand" href="#">
            <img src="https://i.postimg.cc/QdZvjL3f/Logo-LINK-ID.png" alt="image" >
          </a>
          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
            aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
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
                <a class="nav-link" href="/Home">Beranda</a>
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
    <section class="banner_section" id="beranda">
      <!-- container start -->
      <div class="container">
        <!-- row start -->
        <div class="row">
          <!-- shape animation  -->
        	<span class="banner_shape1"> <img src="https://i.postimg.cc/3RVg0kJv/banner-shape1.png" alt="image" > </span>
        	<span class="banner_shape2"> <img src="https://i.postimg.cc/rp6XjJnn/banner-shape2.png" alt="image" > </span>
        	<span class="banner_shape3"> <img src="https://i.postimg.cc/wxrWDBbF/banner-shape3.png" alt="image" > </span>
          <div class="col-lg-6 col-md-12"  data-aos="fade-right" data-aos-duration="1500">
          	<!-- banner text -->
            <div class="banner_text">
              <!-- h1 -->
              <h1>Buat dan kreasikan tautan Anda</h1>
              <!-- p -->
              <span style="color: yellow;">Penyingkat tautan terbaik dan Terpendek 
                untuk</span>
              <p>Apakah kamu ingin mempersingkat URL sesuai dengan
                yang Anda inginkan?
              </p>
              <div class="text-center subscribe-form mt-5">
                <form action="#">
                    <input type="text" class="control-form" id="inputemail" placeholder="Https://Domain-mu/yang-ingin kau">
                    <button type="submit" class="btn btn-primary">Singkatkan</button>
                </form>
            </div>
            </div>
            <!-- app buttons -->

            <!-- users -->
      </div>
          <!-- banner slides start -->
          <div class="col-lg-6 col-md-12"  data-aos="fade-in" data-aos-duration="1500">
            <div class="banner_image">
              <img class="moving_animation" src="https://i.postimg.cc/D00862P6/shortlink.png" alt="image" >
            </div>
          </div>
          <!-- banner slides end -->


        <!-- row end -->
      </div>
      </div>

      <!-- container end -->

      <!-- wave animation start -->
      <div>
        <svg class="waves" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"
        viewBox="0 24 150 28" preserveAspectRatio="none" shape-rendering="auto">
        <defs>
        <path id="gentle-wave" d="M-160 44c30 0 58-18 88-18s 58 18 88 18 58-18 88-18 58 18 88 18 v44h-352z" />
        </defs>
        <g class="parallax">
        <use xlink:href="#gentle-wave" x="48" y="0" fill="rgba(255,255,255,0.7" />
        <use xlink:href="#gentle-wave" x="48" y="3" fill="rgba(255,255,255,0.5)" />
        <use xlink:href="#gentle-wave" x="48" y="5" fill="rgba(255,255,255,0.3)" />
        <use xlink:href="#gentle-wave" x="48" y="7" fill="#f6f4fe" />
        </g>
        </svg>
      </div>
      <!-- wave animation end -->

    </section>
   

<section class="bg-white overflow-hidden" id="home">
    <div class="container">
        <div class="position-relative" style="z-index: 1;">
            <div class="row align-items-center">
                <div class="col-xl-5 col-lg-6">
                    <div>
                        {{-- <h6 class="home-subtitle text-primary mb-4">Awesome</h6> --}}
                        <h1 style="color: #FFC727; font-family">Gak cuma untuk Bio-
                            Link</h1>
                        <h6 class="" style="color: #FFC727;">Microsite bukan hanya tentang memasukkan banyak tautan ke dalam satu URL,
                             Anda juga dapat membuat dan menempatkan banyak konten dan berkreasi sendiri
                             dengan lebih banyak konten di dalam microsite Anda.</h6>
                    </div>
                </div>
                <!--end col-->
                <div class="col-lg-6 offset-xl-1">
                    <div class="mt-lg-0 mt-5 d-flex justify-content-start"> <!-- Tambahkan kelas text-lg-start untuk memposisikan ke kiri pada layar lebar -->
                        <img src="{{ asset('landingpage/images/microsite.png') }}" alt="home04" class="home-img">
                    </div>
                </div>
                
            </div>
            <!--end row-->
        </div>
    </div>
    <!--end container-->
  </section>
  <section class="bg-white overflow-hidden" id="home">
    <div class="container">
        <div class="position-relative" style="z-index: 1;">
            <div class="row align-items-center">
                <div class="col-xl-5 col-lg-6">
                    <div class="mt-lg-0 mt-5 d-flex justify-content-start">
                        <img src="{{ asset('landingpage/images/microsite2.png') }}" alt="home04" class="home-img">
                    </div>
                </div>
                <div class="col-lg-6 offset-xl-1">
                    <div>
                        <h1 style="color: #104898; font-family: 'Poppins', sans-serif;">Mau buat Acara?</h1>
                        <h6 style="color: #104898;">bisa menjadi solusi untuk acara Anda. Gunakan komponen yang kami
                             sediakan, seperti hitungan mundur, peta, dan apa saja untuk membuat halaman acara Anda lebih
                             bernilai dan meyakinkan.</h6>
                    </div>
                </div>
            </div>
        </div>
    </div>
  </section> 
  <section class="section" id="features">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-6">
                <div class="text-center mb-5">
                    <h3 style="color: #104898;">Apa saja yang tersedia?</h3>
                </div>
            </div>
            <!--end col-->
        </div>
        <!--end row-->
        <div class="row">
            <div class="col-lg-4 col-md-6">
                <div class="feature-box card border-0 mt-3">
                    <div class="card-body">
                        <div class="feature-icon mx-auto">
                            <i class="mdi mdi-chart-areaspline"></i>
                        </div>
                        <div class="mt-4">
                            <h6 class="mb-3 fs-17">Tautan</h6>
                            <p class="text-muted">Bagikan tautan Anda dan atur di
                                satu tempat.</p>
                        </div>
                        <div class="feature-link">
                            <a href="#" class="text-primary text-decoration-underline">Selengkapnya <i
                                    class="mdi mdi-arrow-right"></i></a>
                        </div>
                    </div>
                    <!--end card-body-->
                </div>
                <!--end feature-box-->
            </div>
            <!--end col-->
  
            <div class="col-lg-4 col-md-6">
                <div class="feature-box card border-0 mt-3">
                    <div class="card-body">
                        <div class="feature-icon mx-auto">
                            <i class="mdi mdi-gift"></i>
                        </div>
                        <div class="mt-4">
                            <h6 class="mb-3 fs-17">Gambar-gambar</h6>
                            <p class="text-muted">Microsite Anda tidak semuanya
                                tentang tautan, Anda juga dapat
                                menempatkan beberapa gambar
                                di dalamnya.</p>
                        </div>
                        <div class="feature-link">
                            <a href="#" class="text-primary text-decoration-underline">Selengkapnya <i
                                    class="mdi mdi-arrow-right"></i></a>
                        </div>
                    </div>
                    <!--end card-body-->
                </div>
                <!--end feature-box-->
            </div>
            <!--end col-->
  
            <div class="col-lg-4 col-md-6">
                <div class="feature-box card border-0 mt-3">
                    <div class="card-body">
                        <div class="feature-icon mx-auto">
                            <i class="mdi mdi-xml"></i>
                        </div>
                        <div class="mt-4">
                            <h6 class="mb-3 fs-17">Sematkan Media</h6>
                            <p class="text-muted">Sematkan media di platform
                                populer tepat di microsite Anda.</p>
                        </div>
                        <div class="feature-link">
                            <a href="#" class="text-primary text-decoration-underline">Selengkapnya <i
                                    class="mdi mdi-arrow-right"></i></a>
                        </div>
                    </div>
                    <!--end card-body-->
                </div>
                <!--end feature-box-->
            </div>
            <!--end col-->
  
           <div class="col-lg-4 col-md-6">
                    <div class="feature-box card border-0 mt-3">
                        <div class="card-body">
                            <div class="feature-icon mx-auto">
                                <i class="mdi mdi-webpack"></i>
                            </div>
                            <div class="mt-4">
                                <h6 class="mb-3 fs-17">Peta</h6>
                                <p class="text-muted">Tempatkan dan bagikan lokasi di
                                    microsite Anda.</p>
                            </div>
                            <div class="feature-link">
                                <a href="#" class="text-primary text-decoration-underline">Selengkapnya <i
                                        class="mdi mdi-arrow-right"></i></a>
                            </div>
                        </div>
                        <!--end card-body-->
                    </div>
                    <!--end feature-box-->
                </div> 
            <!--end col-->
  
            <div class="col-lg-4 col-md-6">
                    <div class="feature-box card border-0 mt-3">
                        <div class="card-body">
                            <div class="feature-icon mx-auto">
                                <i class="mdi mdi-responsive"></i>
                            </div>
                            <div class="mt-4">
                                <h6 class="mb-3 fs-17">Hitung Mundur</h6>
                                <p class="text-muted"> Buat hitungan mundur dan
                                    masukkan ke microsite Anda, ini
                                    juga merupakan praktik terbaik
                                    jika Anda memiliki acara.</p>
                            </div>
                            <div class="feature-link">
                                <a href="#" class="text-primary text-decoration-underline">Selengkapnya <i class="mdi mdi-arrow-right"></i></a>
                            </div>
                        </div>
                        <!--end card-body-->
                    </div>
                    <!--end feature-box-->
                </div>
            <!--end col-->
  
            <div class="col-lg-4 col-md-6">
                    <div class="feature-box card border-0 mt-3">
                        <div class="card-body">
                            <div class="feature-icon mx-auto">
                                <i class="mdi mdi-leaf"></i>
                            </div>
                            <div class="mt-4">
                                <h6 class="mb-3 fs-17">Masih banyak lagi</h6>
                                <p class="text-muted"> Ada banyak komponen tersedia
                                    di fitur platform microsite kami!.</p>
                            </div>
                            <div class="feature-link">
                                <a href="#" class="text-primary text-decoration-underline">Selengkapnya <i class="mdi mdi-arrow-right"></i></a>
                            </div>
                        </div>
                        <!--end card-body-->
                    </div>
                    <!--end feature-box-->
                </div>
            <!--end col-->
        </div>
        <!--end row-->
    </div>
    <!--end container-->
  </section>
    <!-- Trusted Section start -->

    <!-- Trusted Section ends -->


    <!-- Footer-Section start -->
    <footer>
        <div class="top_footer" id="kontak">
          	<!-- container start -->
            <div class="container">
              <!-- row start -->
              <div class="row">
              	<span class="banner_shape1"> <img src="https://i.postimg.cc/3RVg0kJv/banner-shape1.png" alt="image" > </span>
        		    <span class="banner_shape2"> <img src="https://i.postimg.cc/rp6XjJnn/banner-shape2.png" alt="image" > </span>
        		    <span class="banner_shape3"> <img src="https://i.postimg.cc/wxrWDBbF/banner-shape3.png" alt="image" > </span>
              	  <!-- footer link 1 -->
                  <div class="col-lg-4 col-md-6 col-12">
                      <div class="abt_side">
                        <div class="logo"> <img src="https://i.postimg.cc/0NVBwBW8/logoland.png" alt="image" ></div>
                        <ul>
                          <li><a href="mailto:kalopsia@gmail.com">kalopsia@gmail.com</a></li>
                          <li><a href="https://api.whatsapp.com/send?phone=+628123456789">+62 0812 3456 789</a></li>
                          <li><a href="#">Hummasoft Technology</a></li>
                        </ul>
                        <ul class="social_media">
                          <li><a href="#" id="facebook-link"><i class="icofont-facebook"></i></a></li>
                          <li><a href="#" id="twitter-link"><i class="icofont-twitter"></i></a></li>
                          <li><a href="#" id="instagram-link"><i class="icofont-instagram"></i></a></li>
                      </ul>
                      
                      </div>
                  </div>

                  <!-- footer link 3 -->
                  <div class="col-lg-6 col-md-6 col-12">
                    <div class="links">
                      <h3>Tentang</h3>
                        <ul style="text-align: justify;">
                          <li><a href="/Home">Beranda</a></li>
                            <li><a href="#features">Tentang</a></li>
                            <li><a href="#kontak">Kontak</a></li>
                            <li><a href="/login">Login</a></li>
                        </ul>
                    </div>
                  </div>
              </div>
              <!-- row end -->
          </div>
          <!-- container end -->
        </div>

        <!-- last footer -->
        <div class="bottom_footer">
        	<!-- container start -->
            <div class="container">
              <!-- row start -->
              <div class="row">
                <div class="col-md-12">
                  <center>
                    <p>© Kalopsia</p>
                    </center>
                </div>
            </div>
            <!-- row end -->
            </div>
            <!-- container end -->
        </div>

        <!-- go top button -->
        <div class="go_top">
            <span><img src="https://i.postimg.cc/MZtYYpPg/go-top.png" alt="image" ></span>
        </div>
    </footer>
    <!-- Footer-Section end -->

  <!-- VIDEO MODAL -->
  <div class="modal fade youtube-video" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
          <button id="close-video" type="button" class="button btn btn-default text-right" data-dismiss="modal">
            <i class="icofont-close-line-circled"></i>
          </button>
            <div class="modal-body">
                <div id="video-container" class="video-container">
                    <iframe id="youtubevideo" src="#" width="640" height="360" frameborder="0" allowfullscreen></iframe>
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
  <script src="{{asset('landingPage/js/jquery.js')}}"></script>
  <!-- owl-js-Link -->
  <script src="{{asset('landingPage/js/owl.carousel.min.js')}}"></script>
  <!-- bootstrap-js-Link -->
  <script src="{{asset('landingPage/js/bootstrap.min.js')}}"></script>
  <!-- aos-js-Link -->
  <script src="{{asset('landingPage/js/aos.js')}}"></script>
  <!-- main-js-Link -->
  <script src="{{asset('landingPage/js/main.js')}}"></script>
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