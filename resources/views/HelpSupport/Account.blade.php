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
    <link rel="shortcut icon" href="{{ asset('template/themesbrand.com/steex/layouts/assets/images/Logo.png') }}" style="width: 200px; height: 200px;">
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
.carousel-item::after {
    content: "";
    position: absolute;
    top: 0;
    left: 0;
    width: 100%;
    height: 100%;
    /* background-color: #104898; */
    /* opacity: 0.7; */
    z-index: 1;
}

/* Mengatur teks "Memulai" menjadi putih */
.image-text {
    position: absolute;
    top: 50%;
    left: 50%;
    transform: translate(-50%, -50%);
    background-color: rgba(0, 0, 0, 0.5);
    color: white;
    padding: 100% 100%;
    border-radius: 5%;
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
        <section class="banner_section" id="beranda">
            <div>
                <div id="carouselExampleFade" class="carousel slide carousel-fade">
                    <div class="carousel-inner">
                        <div class="carousel-item active">
                                <img src="https://i.postimg.cc/BQR0t7wR/Desain-tanpa-judul.png" class="w-100" alt="..." style="max-height: 200px;">
                            <!-- Menggunakan style untuk mengatur tinggi gambar -->
                            <div class="image-text">
                                <p style="color: white; font-size:50px;"><b>Akun</b></p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <div class="card">
            <div class="card-body">
                <div class="row">
                    {{-- <a href="/HelpSupport" class="col-1 btn btn-info btn-sm">
                        <i class="fas fa-arrow-left"></i> Kembali
                    </a> --}}
                    <p></p>
                    <div class="col-12">
                        <div class="accordion accordion-border-box" id="genques-accordion">
                            <div class="accordion-item ">
                                <h2 class="accordion-header" id="genques-headingOne">
                                    <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#genques-collapseOne" aria-expanded="true" aria-controls="genques-collapseOne">
                                        Apa yang dimaksud dengan pengunjung unik?
                                    </button>
                                </h2>
                                <div id="genques-collapseOne" class="accordion-collapse collapse show" aria-labelledby="genques-headingOne" data-bs-parent="#genques-accordion">
                                    <div class="accordion-body">
                                        <p><strong>Pengunjung Unik</strong> (Unique Visitor) adalah istilah yang umum digunakan dalam analisis web untuk mengukur jumlah individu yang mengunjungi suatu situs web atau halaman web selama periode waktu tertentu. Konsep pengunjung unik bertujuan untuk mengidentifikasi dan menghitung setiap individu yang mengakses situs web, meskipun mereka mengunjungi situs tersebut beberapa kali dalam periode waktu yang sama.</p>
                                    
                                        <p><strong>Contoh:</strong></p>
                                        
                                        <ul>
                                            <li>10 orang dalam 1 jaringan WIFI mengunjungi tautan atau microsite Anda, maka akan terhitung sebagai 1 <strong>pengunjung unik</strong> dan 10 pengunjung.</li>
                                            <li>3 orang dalam koneksi yang berbeda, baik itu menggunakan selular maupun WIFI, maka akan terhitung sebagai 3 <strong>pengunjung unik</strong> dan 3 pengunjung.</li>
                                        </ul>
                                    
                                        <p>Hal ini disebabkan karena jika seseorang kembali mengunjungi situs tautan atau microsite Anda, sistem akan memeriksa apakah informasi unik tersebut sudah ada. Jika iya, maka pengunjung tersebut tidak dihitung sebagai pengunjung unik baru.</p>
                                    </div>
                                </div>
                            </div>
                            <div class="accordion-item">
                                <h2 class="accordion-header" id="genques-headingTwo">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#genques-collapseTwo" aria-expanded="false" aria-controls="genques-collapseTwo">
                                        Apa yang dimaksud dengan pengunjung?
                                    </button>
                                </h2>
                                <div id="genques-collapseTwo" class="accordion-collapse collapse" aria-labelledby="genques-headingTwo" data-bs-parent="#genques-accordion">
                                    <div class="accordion-body">
                                        <p><strong>Pengunjung</strong> adalah seseorang atau entitas yang mengunjungi tautan atau microsite Anda. Anda dapat melihat jumlah total pengunjung dalam periode tertentu atau yang telah ditentukan melalui statistik di dashboard S.id.</p>
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
       @auth
       <footer>
           <div class="top_footer" id="kontak">
               <div class="container">
                   <div class="row">
                       <!-- Logo -->
                       <div class="col-lg-3 col-md-6 col-12">
                           <div class="abt_side">
                               <div class="logo">
                                   <img src="https://i.postimg.cc/QdZvjL3f/Logo-LINK-ID.png" alt="image"
                                       style="margin-top: -20%;">
                                   <ul style="margin-top: -10%; margin-right:10px;">
                                       <li style="color: white; font-size:14px;">{!! $data->description !!}</li>
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
                                   <li><a href="/HelpSupport">Bantuan dan Dukungan</a></li>
                                   <li><a href="/Privacy">Kebijakan Privasi</a></li>

                               </ul>
                           </div>
                       </div>

                       <!-- Contact Information -->
                       <div class="col-lg-2 col-md-6 col-12">
                           <div class="links">
                               <h3>Hubungi Kami</h3>
                               <ul style="text-align: justify;">
                                   <li>
                                       <a href="https://api.whatsapp.com/send?phone={{ $data->whatsapp }}&text=Halo%2C%20saya%20pengguna%20LINKID"
                                           target="_blank">
                                           <i class="fab fa-whatsapp"></i>
                                           Whatsapp
                                           {{-- {{ $data->whatsapp }} --}}
                                       </a>
                                   </li>
                                   <li>
                                       <a href="https://www.instagram.com/{{ $data->instagram }}" target="_blank">
                                           <i class="fab fa-instagram"></i>
                                           Instagram
                                           {{-- {{ $data->instagram }} --}}
                                       </a>
                                   </li>
                                   <li>
                                       <a href="https://twitter.com/{{ $data->twitter }}" target="_blank">
                                           <i class="fab fa-twitter"></i>
                                           Twitter
                                           {{-- {{ $data->twitter }} --}}
                                       </a>
                                   </li>
                               </ul>
                           </div>
                       </div>
                       @auth
                           <!-- Comment Form -->
                           <div class="col-lg-3 col-md-6 col-12 mb-1">
                               <form action="/create/{{ Auth::user()->id }}" id="commentForm" method="POST"
                                   enctype="multipart/form-data" class="mt-3">
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
                       @endauth
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
   @else
       <footer>
           <div class="top_footer" id="kontak">
               <div class="container">
                   <div class="row">
                       <!-- Logo -->
                       <div class="col-lg-3 col-md-6 col-12">
                           <div class="abt_side">
                               <div class="logo">
                                   <img src="https://i.postimg.cc/QdZvjL3f/Logo-LINK-ID.png" alt="image"
                                       style="margin-top: -20%;">
                                   <ul style="margin-top: -10%; margin-right:10px;">
                                       <li style="color: white; font-size:14px;">{!! $data->description !!}</li>
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
                       <div class="col-lg-3 col-md-6 col-12" style="margin-left: 6%;">
                           <div class="links">
                               <h3>SiteMaps</h3>
                               <ul>
                                   <li><a href="/">Beranda</a></li>
                                   <li><a href="/Shortlink">Perpendek Link</a></li>
                                   <li><a href="/Microsite">Situs Mikro</a></li>
                                   <li><a href="/Subscribe">Berlanggaan</a></li>
                                   <li><a href="/HelpSupport">Bantuan dan Dukungan</a></li>
                                   <li><a href="/Privacy">Kebijakan Privasi</a></li>

                               </ul>
                           </div>
                       </div>

                       <!-- Contact Information -->
                       <div class="col-lg-3 col-md-6 col-12">
                           <div class="links">
                               <h3>Hubungi Kami</h3>
                               <ul style="text-align: justify;">
                                   <li>
                                       <a href="https://api.whatsapp.com/send?phone={{ $data->whatsapp }}&text=Halo%2C%20saya%20pengguna%20LINKID"
                                           target="_blank">
                                           <i class="fab fa-whatsapp"></i>
                                           Whatsapp
                                           {{-- {{ $data->whatsapp }} --}}
                                       </a>
                                   </li>
                                   <li>
                                       <a href="https://www.instagram.com/{{ $data->instagram }}" target="_blank">
                                           <i class="fab fa-instagram"></i>
                                           Instagram
                                           {{-- {{ $data->instagram }} --}}
                                       </a>
                                   </li>
                                   <li>
                                       <a href="https://twitter.com/{{ $data->twitter }}" target="_blank">
                                           <i class="fab fa-twitter"></i>
                                           Twitter
                                           {{-- {{ $data->twitter }} --}}
                                       </a>
                                   </li>
                               </ul>
                           </div>
                       </div>
                       @auth
                           <!-- Comment Form -->
                           <div class="col-lg-3 col-md-6 col-12 mb-1">
                               <form action="/create/{{ Auth::user()->id }}" id="commentForm" method="POST"
                                   enctype="multipart/form-data" class="mt-3">
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
                       @endauth

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
   @endauth

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
