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
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
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
/* Menghapus aturan CSS yang membuat latar belakang gambar semi-transparan */
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
                                <p style="color: white; font-size:50px;"><b>Memulai</b></p>  
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        
        <div class="card">
            <div class="card-body">
                <div class="row">
                    {{-- <div class="p-3 mb-2 text-white text-center" style="background-color:#104898; height: 200px; margin-bottom: 10%; font-size:50px;">Memulai</div> --}}
                    {{-- <a href="/HelpSupport" class="col-1 btn btn-info btn-sm">
                        <i class="fas fa-arrow-left"></i> Kembali
                    </a> --}}
                    <p></p>
                    
                    <div class="col-xl-12">
                        <div class="accordion accordion-border-box" id="genques-accordion">
                            <div class="accordion-item ">
                                <h2 class="accordion-header" id="genques-headingOne">
                                    <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#genques-collapseOne" aria-expanded="true" aria-controls="genques-collapseOne">
                                        Apa itu&nbsp;<b>LINK.ID</b>?
                                    </button>
                                </h2>
                                <div id="genques-collapseOne" class="accordion-collapse collapse show" aria-labelledby="genques-headingOne" data-bs-parent="#genques-accordion">
                                    <div class="accordion-body">
                                        <b>LINK.ID</b> adalah platform untuk orang-orang untuk menunjukkan keahlian mereka dalam membuat situs mikro dan memperpendek tautan terpendek dengan kode <b>LINK.ID/</b>. Tidak hanya aplikasi konten online, <b>LINK.ID/</b>
                                        juga merupakan alat pemasaran yang memudahkan masyarakat, terutama pembuat konten, influencer, brand, atau marketing perusahaan, untuk berbagi informasi, pengetahuan, keahlian, dan pengetahuan
                                        produk yang dipasarkan ke semua orang melalui fitur-fitur yang disediakan oleh <b>LINK.ID</b>.Kami sangat senang Anda ada di sini. Anda dapat langsung masuk membuat microsite dan dengan mudah mempersingkat,
                                        memodifikasi, dan membagikan tautan Anda. Mari kita mulai dengan dasar-dasarnya.
                                    </div>
                                    <div class="accordion-body">
                                        <b>Buat Tautan Pendek</b>
                                        <p>Ubah tautan panjang Anda menjadi tautan pendek.</p>
                                        <b>Sesuaikan agar mudah diingat</b>
                                        <p>Ubah link dari https://link.id/11SUi menjadi link seperti ini https://link.id/nwsltr.</p>
                                        <b>Buat Tautan Situs Mikro/Bio</b>
                                        <p>Microsite adalah cara untuk membagikan seluruh konten online Anda hanya menggunakan satu tautan.</p>
                                        <b>Buat konten anda agar terlihat menarik</b>
                                        <p>Kreasikan microsite Anda dengan banyak pilihan komponen.</p>
                                        
                                    </div>
                                </div>
                            </div>
                            <div class="accordion-item">
                                <h2 class="accordion-header" id="genques-headingTwo">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#genques-collapseTwo" aria-expanded="false" aria-controls="genques-collapseTwo">
                                        Apa saja fitur Tautan?
                                    </button>
                                </h2>
                                <div id="genques-collapseTwo" class="accordion-collapse collapse" aria-labelledby="genques-headingTwo" data-bs-parent="#genques-accordion">
                                    <div class="accordion-body">
                                        Sesuaikan Penyingkat URL Anda dengan fitur yang memberi Anda pemendekan tautan berkualitas lebih baik.
                                        <p>1. Masuk ke akun <b>LINK.ID</b> Anda yang ada.</p>
                                        <p>2. Klik Tautan di menu bilah sisi.</p>
                                        <p>3. Terdapat empat fitur yang tersedia yang dapat anda gunakan.</p>
                                        <p>4. Pertama, anda dapat menyunting tautan pendek anda..</p>
                                        <p>5. Kedua, klik gambar ini untuk salin tautan.</p>
                                        <p>6. Ketiga, terdapat laporan statistik dari jumlah pengunjung dalam tujuh hari terakhir.</p>
                                        <p>7. Dan terakhir, jika ingin membagikan tautan, klik tombol bagikan.</p>
                                    </div>
                                </div>
                            </div>
                            <div class="accordion-item">
                                <h2 class="accordion-header" id="genques-headingThree">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#genques-collapseThree" aria-expanded="false" aria-controls="genques-collapseThree">
                                        Bagaimana Cara membuat Microsite?
                                    </button>
                                </h2>
                                <div id="genques-collapseThree" class="accordion-collapse collapse" aria-labelledby="genques-headingThree" data-bs-parent="#genques-accordion">
                                    <div class="accordion-body">
                                        <p>Tahukah Anda bahwa sekarang Anda dapat membuat microsite <b>LINK.ID</b> untuk ditampilkan di bio media sosial Anda?</p>
                                        
                                        <p>Membuat microsite sangat mudah:</p>
                                        <ol>
                                            <li>1. Masuk ke akun <b>LINK.ID</b> Anda yang ada.</li>
                                            <li>2. Dari menu sidebar, Klik Microsite kemudian Klik Create New.</li>
                                            <li>3. Pilih satu tema microsite dan klik Next.</li>
                                            <li>4. Masukkan Nama dan URL microsite Anda dan klik Buat.</li>
                                            <li>5. Terakhir, mulailah menambahkan komponen lain melalui fitur Microsite.</li>
                                        </ol>
                                    </div>
                                </div>
                            </div>
                            <div class="accordion-item">
                                <h2 class="accordion-header" id="genques-headingFour">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#genques-collapseFour" aria-expanded="false" aria-controls="genques-collapseFour">
                                        Apa keuntungan menggunakan penyingkat tautan?
                                    </button>
                                </h2>
                                <div id="genques-collapseFour" class="accordion-collapse collapse" aria-labelledby="genques-headingFour" data-bs-parent="#genques-accordion">
                                    <div class="accordion-body">
                                        <p>Keuntungannya adalah :</p>
                                        <p><b>Secara estetika menyenangkan</b></p>
                                        <p>URL panjang tidak terlihat bagus. Dengan tautan pendek, lebih terfokus kepada konten daripada URL.</p>
                                        <p><b>Mudah diingat</b></p>
                                        <p>Berapa banyak orang yang bisa mengucapkan 200 karakter URL? Sedikit karakter lebih mudah diingat.</p>
                                        <p><b>Mudah Diprediksi</b></p>
                                        <p>Dapat mengukur efektivitas tautan dan konten Anda secara real-time dan buat bisa membuat keputusan tepat.</p>
                                        <p><b>Menghemat Ruang</b></p>
                                        <p>Baik di bio profil, di Tweet, atau di kartu nama, penyingkat URL dapat menghemat ruang.</p>
                                        <p>Mulai mempersingkat dengan S.ID hari ini!</p>
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
                                <li><a href="/HelpSupport">Bantuan dan Dukungan</a></li>
                                <li><a href="/Privacy">Kebijakan Privasi</a></li>

                            </ul>
                        </div>
                    </div>

                    <!-- Contact Information -->
                    <div class="col-lg-2 col-md-6 col-12">
                        <div class="links">
                            <h3 style="margin-left: 30px;">Hubungi Kami</h3>
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
        <script src="{{asset('template/themesbrand.com/steex/layouts/assets/libs/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
        <script src="{{asset('template/themesbrand.com/steex/layouts/assets/libs/simplebar/simplebar.min.js')}}"></script>
        <script src="{{asset('template/themesbrand.com/steex/layouts/assets/js/plugins.js')}}"></script>

        <!-- App js -->
        <script src="{{asset('template/themesbrand.com/steex/layouts/assets/js/app.js')}}"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous"></script>
</body>


<!-- Mirrored from kalanidhithemes.com/live-preview/landing-page/apper/all-demo/03-app-landing-page-wave-animation/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 22 May 2023 08:12:27 GMT -->

</html>
