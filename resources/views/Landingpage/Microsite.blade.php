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
        <style>body {
            margin: 0;
            /* Reset margin body */
        }

        .link-form {
            width: 100%;
            margin: 20px;
            /* Ubah margin dari auto ke nilai tetap */
            padding: 20px;
        }

        .input-container {
            display: flex;
            align-items: center;
            margin-bottom: 10px;
        }

        .input-icon {
            position: relative;
            display: flex;
            align-items: center;
        }

        .input-icon i {
            position: absolute;
            right: 10px;
            color: #00;
            margin-right: 17%;
            /* Margin kanan untuk jarak antara ikon dan input */
            margin-top: 1%;
            /* Margin bawah untuk jarak antara ikon dan teks */
        }

        input[type="text"] {
            width: 400px;
            padding: 8px;
            border: 1px solid #ccc;
            border-radius: 10px 0 0 10px;
        }

        button {
            background-color: #D9D9D9;
            color: #000;
            border: none;
            padding: 10px 15px;
            border-radius: 0 10px 10px 0;
            cursor: pointer;
        }

        button:hover {
            background-color: #D9D9D9;
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
                      <a class="nav-link active" href="/">Beranda</a>
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
                    <span class="banner_shape1"> <img src="https://i.postimg.cc/3RVg0kJv/banner-shape1.png"
                            alt="image"> </span>
                    <span class="banner_shape2"> <img src="https://i.postimg.cc/rp6XjJnn/banner-shape2.png"
                            alt="image"> </span>
                    <span class="banner_shape3"> <img src="https://i.postimg.cc/wxrWDBbF/banner-shape3.png"
                            alt="image"> </span>
                    <div class="col-lg-6 col-md-12" data-aos="fade-right" data-aos-duration="1500">
                        <!-- banner text -->
                        <div class="banner_text">
                            <!-- h1 -->
                            <h2 style="color: white;">Buat dan kreasikan tautan Anda</h2>
                            <!-- p -->
                            <span style="color: white;">Penyingkat tautan terbaik dan Terpendek
                                untuk</span>
                            <p>Apakah kamu ingin mempersingkat URL sesuai dengan
                                yang Anda inginkan?
                            </p>
                        </div>
                        <!-- app buttons -->

                        <!-- users -->
                    </div>
                    <!-- banner slides start -->
                    <div class="col-lg-6 col-md-12" data-aos="fade-in" data-aos-duration="1500">
                        <div class="banner_image">
                            <img class="moving_animation" src="{{ asset('template/image/situs mikro.png') }}"
                                alt="image">
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
                        <path id="gentle-wave"
                            d="M-160 44c30 0 58-18 88-18s 58 18 88 18 58-18 88-18 58 18 88 18 v44h-352z" />
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
                                <h1 style="color: #1B5A6F;">Gak cuma untuk Bio-
                                    Link</h1>
                                <h6 class="" style="color:  #1B5A6F;">Microsite bukan hanya tentang memasukkan
                                    banyak tautan ke dalam satu URL,
                                    Anda juga dapat membuat dan menempatkan banyak konten dan berkreasi sendiri
                                    dengan lebih banyak konten di dalam microsite Anda.</h6>
                            </div>
                        </div>
                        <!--end col-->
                        <div class="col-lg-6 offset-xl-1">
                            <div class="mt-lg-0 mt-5 d-flex justify-content-start">
                                <!-- Tambahkan kelas text-lg-start untuk memposisikan ke kiri pada layar lebar -->
                                <img src="https://i.postimg.cc/ZqHQGxQD/Landing-Page2.png" alt="home04"
                                    class="home-img" width="500" height="400">
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
                                <img src="{{ asset('template/image/situs mikro.png') }}" alt="home04"
                                    class="home-img"  width="500" height="400">
                            </div>
                        </div>
                        <div class="col-lg-6 offset-xl-1">
                            <div>
                                <h1 style="color: #104898; font-family: 'Poppins', sans-serif;">Mau buat Acara?</h1>
                                <h6 style="color: #104898;">bisa menjadi solusi untuk acara Anda. Gunakan komponen yang
                                    kami
                                    sediakan, seperti hitungan mundur, peta, dan apa saja untuk membuat halaman acara
                                    Anda lebih
                                    bernilai dan meyakinkan.</h6>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section class="row_am latest_story" id="blog">
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
                    <div class="col-md-4" style="margin-bottom: 2%;">
                        <div class="story_box" data-aos="fade-up" data-aos-duration="1500" style="height: 100%;">
                          <svg xmlns="http://www.w3.org/2000/svg" width="80" height="80" viewBox="0 0 640 512" style="margin-top: 10%;"><!--! Font Awesome Free 6.4.2 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2023 Fonticons, Inc. --><path fill="#104898" d="M579.8 267.7c56.5-56.5 56.5-148 0-204.5c-50-50-128.8-56.5-186.3-15.4l-1.6 1.1c-14.4 10.3-17.7 30.3-7.4 44.6s30.3 17.7 44.6 7.4l1.6-1.1c32.1-22.9 76-19.3 103.8 8.6c31.5 31.5 31.5 82.5 0 114L422.3 334.8c-31.5 31.5-82.5 31.5-114 0c-27.9-27.9-31.5-71.8-8.6-103.8l1.1-1.6c10.3-14.4 6.9-34.4-7.4-44.6s-34.4-6.9-44.6 7.4l-1.1 1.6C206.5 251.2 213 330 263 380c56.5 56.5 148 56.5 204.5 0L579.8 267.7zM60.2 244.3c-56.5 56.5-56.5 148 0 204.5c50 50 128.8 56.5 186.3 15.4l1.6-1.1c14.4-10.3 17.7-30.3 7.4-44.6s-30.3-17.7-44.6-7.4l-1.6 1.1c-32.1 22.9-76 19.3-103.8-8.6C74 372 74 321 105.5 289.5L217.7 177.2c31.5-31.5 82.5-31.5 114 0c27.9 27.9 31.5 71.8 8.6 103.9l-1.1 1.6c-10.3 14.4-6.9 34.4 7.4 44.6s34.4 6.9 44.6-7.4l1.1-1.6C433.5 260.8 427 182 377 132c-56.5-56.5-148-56.5-204.5 0L60.2 244.3z"/></svg>
                            <div class="story_text">
                                <h6 class="mb-3 fs-17">Tautan</h6>
                                <p class="text-muted">Bagikan tautan Anda dan atur di
                                    satu tempat.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4" style="margin-bottom: 2%;">
                        <div class="story_box" data-aos="fade-up" data-aos-duration="1500" style="height: 100%;">
                          <svg xmlns="http://www.w3.org/2000/svg" width="80" height="80" viewBox="0 0 512 512" style="margin-top: 10%;"><!--! Font Awesome Free 6.4.2 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2023 Fonticons, Inc. --><path fill="#104898" d="M0 96C0 60.7 28.7 32 64 32H448c35.3 0 64 28.7 64 64V416c0 35.3-28.7 64-64 64H64c-35.3 0-64-28.7-64-64V96zM323.8 202.5c-4.5-6.6-11.9-10.5-19.8-10.5s-15.4 3.9-19.8 10.5l-87 127.6L170.7 297c-4.6-5.7-11.5-9-18.7-9s-14.2 3.3-18.7 9l-64 80c-5.8 7.2-6.9 17.1-2.9 25.4s12.4 13.6 21.6 13.6h96 32H424c8.9 0 17.1-4.9 21.2-12.8s3.6-17.4-1.4-24.7l-120-176zM112 192a48 48 0 1 0 0-96 48 48 0 1 0 0 96z"/></svg>
                            <div class="story_text">
                                <h6 class="mb-3 fs-17">Gambar-gambar</h6>
                                <p class="text-muted">Microsite Anda tidak semuanya
                                    tentang tautan, Anda juga dapat
                                    menempatkan beberapa gambar
                                    di dalamnya.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4" style="margin-bottom: 2%;">
                        <div class="story_box" data-aos="fade-up" data-aos-duration="1500" style="height: 100%;">
                          <svg xmlns="http://www.w3.org/2000/svg" width="80" height="80" viewBox="0 0 320 512" style="margin-top: 10%;"><!--! Font Awesome Free 6.4.2 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2023 Fonticons, Inc. --><path fill="#104898" d="M16 144a144 144 0 1 1 288 0A144 144 0 1 1 16 144zM160 80c8.8 0 16-7.2 16-16s-7.2-16-16-16c-53 0-96 43-96 96c0 8.8 7.2 16 16 16s16-7.2 16-16c0-35.3 28.7-64 64-64zM128 480V317.1c10.4 1.9 21.1 2.9 32 2.9s21.6-1 32-2.9V480c0 17.7-14.3 32-32 32s-32-14.3-32-32z"/></svg>
                            <div class="story_text">
                                <h6 class="mb-3 fs-17">Sematkan Media</h6>
                                <p class="text-muted">Sematkan media di platform
                                    populer tepat di microsite Anda.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4" style="margin-bottom: 2%;">
                        <div class="story_box" data-aos="fade-up" data-aos-duration="1500" style="height: 100%;">
                          <svg xmlns="http://www.w3.org/2000/svg"  width="80" height="80" viewBox="0 0 512 512" style="margin-top: 10%;"><!--! Font Awesome Free 6.4.2 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2023 Fonticons, Inc. --><path fill="#104898" d="M57.7 193l9.4 16.4c8.3 14.5 21.9 25.2 38 29.8L163 255.7c17.2 4.9 29 20.6 29 38.5v39.9c0 11 6.2 21 16 25.9s16 14.9 16 25.9v39c0 15.6 14.9 26.9 29.9 22.6c16.1-4.6 28.6-17.5 32.7-33.8l2.8-11.2c4.2-16.9 15.2-31.4 30.3-40l8.1-4.6c15-8.5 24.2-24.5 24.2-41.7v-8.3c0-12.7-5.1-24.9-14.1-33.9l-3.9-3.9c-9-9-21.2-14.1-33.9-14.1H257c-11.1 0-22.1-2.9-31.8-8.4l-34.5-19.7c-4.3-2.5-7.6-6.5-9.2-11.2c-3.2-9.6 1.1-20 10.2-24.5l5.9-3c6.6-3.3 14.3-3.9 21.3-1.5l23.2 7.7c8.2 2.7 17.2-.4 21.9-7.5c4.7-7 4.2-16.3-1.2-22.8l-13.6-16.3c-10-12-9.9-29.5 .3-41.3l15.7-18.3c8.8-10.3 10.2-25 3.5-36.7l-2.4-4.2c-3.5-.2-6.9-.3-10.4-.3C163.1 48 84.4 108.9 57.7 193zM464 256c0-36.8-9.6-71.4-26.4-101.5L412 164.8c-15.7 6.3-23.8 23.8-18.5 39.8l16.9 50.7c3.5 10.4 12 18.3 22.6 20.9l29.1 7.3c1.2-9 1.8-18.2 1.8-27.5zM0 256a256 256 0 1 1 512 0A256 256 0 1 1 0 256z"/></svg>
                            <div class="story_text">
                                <h6 class="mb-3 fs-17">Peta</h6>
                                <p class="text-muted">Tempatkan dan bagikan lokasi di
                                    microsite Anda.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4" style="margin-bottom: 2%;">
                        <div class="story_box" data-aos="fade-up" data-aos-duration="1500" style="height: 100%;">
                          <svg xmlns="http://www.w3.org/2000/svg" width="80" height="80" viewBox="0 0 512 512"  style="margin-top: 10%;"><!--! Font Awesome Free 6.4.2 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2023 Fonticons, Inc. --><path fill="#104898" d="M256 0a256 256 0 1 1 0 512A256 256 0 1 1 256 0zM232 120V256c0 8 4 15.5 10.7 20l96 64c11 7.4 25.9 4.4 33.3-6.7s4.4-25.9-6.7-33.3L280 243.2V120c0-13.3-10.7-24-24-24s-24 10.7-24 24z"/></svg>
                            <div class="story_text">
                                <h6 class="mb-3 fs-17">Hitung Mundur</h6>
                                <p class="text-muted">Buat hitungan mundur dan
                                    masukkan ke microsite Anda, ini
                                    juga merupakan praktik terbaik
                                    jika Anda memiliki acara.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4" style="margin-bottom: 2%;">
                        <div class="story_box" data-aos="fade-up" data-aos-duration="1500" style="height: 100%;">
                          <svg xmlns="http://www.w3.org/2000/svg" width="80" height="80" viewBox="0 0 512 512" style="margin-top: 10%;"><!--! Font Awesome Free 6.4.2 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2023 Fonticons, Inc. --><path fill="#104898" d="M416 208c0 45.9-14.9 88.3-40 122.7L502.6 457.4c12.5 12.5 12.5 32.8 0 45.3s-32.8 12.5-45.3 0L330.7 376c-34.4 25.2-76.8 40-122.7 40C93.1 416 0 322.9 0 208S93.1 0 208 0S416 93.1 416 208zM184 296c0 13.3 10.7 24 24 24s24-10.7 24-24V232h64c13.3 0 24-10.7 24-24s-10.7-24-24-24H232V120c0-13.3-10.7-24-24-24s-24 10.7-24 24v64H120c-13.3 0-24 10.7-24 24s10.7 24 24 24h64v64z"/></svg>
                            <div class="story_text">
                                <h6 class="mb-3 fs-17">Masih Banyak Lagi</h6>
                                <p class="text-muted">Ada banyak komponen tersedia
                                    di fitur platform microsite kami!.</p>
                            </div>
                        </div>
                    </div>
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
                                    <li><a href="/HelpSupport">Bantuan dan Dukungan</a></li>
                                    <li><a href="/Privacy">Kebijakan Privasi</a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="col-lg-2 col-md-6 col-12">
                            <div class="links">
                                <h3>SiteMaps</h3>
                                <ul>
                                    <li><a href="/">Beranda</a></li>
                                    <li><a href="/Shortlink">Perpendek Link</a></li>
                                    <li><a href="/Microsite">Situs Mikro</a></li>
                                    <li><a href="/Subscribe">Berlanggaan</a></li>
    
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
                        <div class="col-lg-3 col-md-6 col-12 mb-1">
                            <form id="commentForm" method="POST" enctype="multipart/form-data" class="mt-3">
                                @csrf
                                <textarea class="form-control bg-light border-light" id="exampleFormControlTextarea1" rows="3"
                                    placeholder="Tambahkan Komentar" name="isikomentar" style="font-size:12px ;"></textarea>
                                @error('isikomentar')
                                    <div class="alert alert-danger">{{ $message }}</div>
                                @enderror
                                <div class="text-start mt-2">
                                    <button type="submit" class="btn btn-success">Kirim</button>
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
<script>
    $(document).ready(function() {
        // Handle form submission
        $('#commentForm').submit(function(event) {
            event.preventDefault();
            // Check if the user is authenticated
            @if(auth()->check())
                // If authenticated, submit the form to /create
                this.action = '/create';
                this.submit();
            @else
                // If not authenticated, show a SweetAlert message with a link to /login
                Swal.fire({
                    icon: 'error',
                    title: 'Oh Tidakkk...',
                    text: 'Anda harus login dulu',
                    confirmButtonText: 'Batal',
                    footer: '<a href="/login">Login disini</a>'
                });
            @endif
        });
    });
</script>
</body>


<!-- Mirrored from kalanidhithemes.com/live-preview/landing-page/apper/all-demo/03-app-landing-page-wave-animation/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 22 May 2023 08:12:27 GMT -->

</html>
