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
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">

</head>

<body>
<style>
input, textarea { 
  -webkit-font-smoothing: antialiased;
  -webkit-text-size-adjust: 100%;
  -ms-text-size-adjust: 100%;
  -webkit-box-sizing: border-box;
  -moz-box-sizing: border-box;
  box-sizing: border-box;
  outline: none; 
}

blockquote, q { quotes: none; }
blockquote:before, blockquote:after, q:before, q:after { content: ''; content: none; }
strong, b { font-weight: bold; } 

table { border-collapse: collapse; border-spacing: 0; }
img { border: 0; max-width: 100%; }



/** page structure **/
#wrapper {
  display: block;
  width: 850px;
  background: #fff;
  margin: 0 auto;
  padding: 10px 17px;
  -webkit-box-shadow: 2px 2px 3px -1px rgba(0,0,0,0.35);
}

#keywords {
  margin: 0 auto;
  font-size: 1.2em;
  margin-bottom: 15px;
}


#keywords thead {
  cursor: pointer;
  background: #c9dff0;
}
#keywords thead tr th { 
  font-weight: bold;
  padding: 12px 30px;
  padding-left: 42px;
}
#keywords thead tr th span { 
  padding-right: 20px;
  background-repeat: no-repeat;
  background-position: 100% 100%;
}

#keywords thead tr th.headerSortUp, #keywords thead tr th.headerSortDown {
  background: #acc8dd;
}

#keywords thead tr th.headerSortUp span {
  background-image: url('https://i.imgur.com/SP99ZPJ.png');
}
#keywords thead tr th.headerSortDown span {
  background-image: url('https://i.imgur.com/RkA9MBo.png');
}


#keywords tbody tr { 
  color: #555;
}
#keywords tbody tr td {
  text-align: center;
  padding: 15px 10px;
}
#keywords tbody tr td.lalign {
  text-align: left;
}
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
            border-radius: 10px 0 0 10px;
        }

        .btn {
            padding: 10px 20px;
            background-color: #fff;
            color: #000000;
            border: none;
            border-radius: 10px 10px 10px 10px;
            cursor: pointer;
            border: 1px solid black;
        }

        .btn-primary {
            background-color: #fff;
        }
        .button_wrapper {
            margin-block-end: 2%;
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
              <h1>Berlangganan</h1>
              <!-- p -->
              <span style="color: white;">Mari berlangganan dari sekarang!!
                Agar Anda bebas untuk memangkas atau mempersingkat URL
                yang Anda inginkan.</span>
            </div>
            <!-- app buttons -->

            <!-- users -->
      </div>
          <!-- banner slides start -->
          <div class="col-lg-6 col-md-12"  data-aos="fade-in" data-aos-duration="1500">
            <div class="banner_image">
              <img class="moving_animation" src="https://i.postimg.cc/pXw0jrpt/Berlangganan.png" alt="image" >
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
    <section class="row_am latest_story" id="blog">
      <!-- container start -->
       <div class="container">
           <div class="section_title" data-aos="fade-in" data-aos-duration="1500" data-aos-delay="100">
               <h2 style="color: #104898;">Berlangganan Yang Tersedia</h2>
           </div>
           <!-- row start -->
           <div class="row d-flex justify-content-md-center" style="margin-top: 2%;">
             <!-- story -->
             <div class="col-md-4" style="margin-bottom: 2%;">
                <div class="story_box" data-aos="fade-up" data-aos-duration="1500" style="height: 100%;">
                    <img src="https://i.postimg.cc/xj3JMTgb/kucing.png" alt="Kode QR" width="300" height="150" style="margin-top: 10%;">
                    <div class="story_text">
                        <h2 class="mb-3 fs-17"><b>Rp 0</b></h2>
                        <h5 class="mb-3 fs-17"><b>Gratis</b></h5>
                        <p class="text-muted">Paket Dasar untuk memulai perjalanan Anda bersama kami</p>
                        <p class="text-muted">Benar-benar gratis</p>
                        <p class="text-muted">Menyingkat Tautan 100/bln, bisa Kustomisasi nama tautan dan  Mengubah nama tautan kustomisasi 5/bln</p>

                    </div>
                </div>
            </div>
             <!-- story -->
             <div class="col-md-4" style="margin-bottom: 2%;">
                <div class="story_box" data-aos="fade-up" data-aos-duration="1500" style="height: 100%;">
                    <img src="https://i.postimg.cc/Kc0cmKJQ/kucing2.png" alt="Kode QR" width="300" height="150" style="margin-top: 10%;">
                    <div class="story_text">
                        <h2 class="mb-3 fs-17"><b>Rp. 100.000/bln</b></h2>
                        <h5 class="mb-3 fs-17"><b>Premium</b></h5>
                        <p class="text-muted">Paket Dasar untuk memulai perjalanan Anda bersama kami</p>
                        <p class="text-muted">Menyingkat Tautan tanpa batas, bisa Kustomisasi nama tautan, Mengubah nama tautan kustomisasi tanpa batas dan mengubah Tautan Asli tanpa batas</p>

                    </div>
                </div>
            </div>
             </div>
            </div>
           <!-- row end -->
           </div>
       <!-- container end -->
     </section>
     <section class="row_am latest_story" id="blog">
      <div class="container">
          <div class="section_title" data-aos="fade-in" data-aos-duration="1500" data-aos-delay="100">
              <h2 style="color: #104898;">Fitur & Jenis berlangganan yang tersedia</h2>
          </div>
          <div class="row d-flex justify-content-md-center" style="margin-top: 2%;">
              <div class="col-12" style="margin-bottom: 2%;">
                <div class="tabel_box" data-aos="fade-up" data-aos-duration="1500">
                  <div id="wrapper">
                      <table id="keywords">
                        <div class="row">
                          <div class="col-lg-10 button_wrapper  d-flex justify-content-end" data-aos="fade-up" data-aos-duration="1500">
                            <a href="#" class="btn btn-white white-button">Gratis</a>
                          </div> 
                          <div class="col-1 button_wrapper" data-aos="fade-up" data-aos-duration="1500">
                            <a href="#" class="btn btn-white white-button">Premium</a>
                          </div>
                        </div>                            
                          <thead class="text-center">
                              <tr style="font-size: 12px;">
                                  <th><span>Batasan Pengunjung Tautan Link.id</span></th>
                                  <th>Tanpa Batas</th>
                                  <th>Tanpa Batas</th>
                              </tr>
                          </thead>
                          <tbody style="font-size: 12px;">
                              <tr>
                                  <td class="lalign"><b>Menyingkat Tautan</b></td>
                                  <td>100/bln</td>
                                  <td>Tanpa batas</td>
                              </tr>
                              <tr>
                                  <td class="lalign">— Kustomisasi nama tautan</td>
                                  <td><i class="fas fa-check"></i></td>
                                  <td><i class="fas fa-check"></i></td>
                              </tr>
                              <tr>
                                  <td class="lalign">— Mengubah nama tautan kustomisasi</td>
                                  <td>5/bln</td>
                                  <td>Tanpa batas</td>
                              </tr>
                              <tr>
                                  <td class="lalign">— Ubah Tautan Asli</td>
                                  <td><i class="fas fa-times"></i></td>
                                  <td><i class="fas fa-check"></i></td>
                              </tr>
                              <tr>
                                  <td colspan="3"><hr></td>
                              </tr>
                              <tr>
                                  <td class="lalign"><b>Membuat Microsite</b></td>
                                  <td>Hingga 10</td>
                                  <td>Tanpa batas</td>
                              </tr>
                              <tr>
                                  <td class="lalign">— Komponen Microsite</td>
                                  <td>Hingga 100</td>
                                  <td>Tanpa batas</td>
                              </tr>
                              <tr>
                                  <td class="lalign">— Mengubah nama tautan microsite</td>
                                  <td><i class="fas fa-times"></i></td>
                                  <td><i class="fas fa-check"></i></td>
                              </tr>
                              <tr>
                                  <td class="lalign">— Komponen terkunci</td>
                                  <td><i class="fas fa-times"></i></td>
                                  <td><i class="fas fa-check"></i></td>
                              </tr>
                              <tr>
                                  <td colspan="3"><hr></td>
                              </tr>
                              <tr>
                                  <td class="lalign">Nama Pendek untuk Tautan / Microsite terbatas</td>
                                  <td><i class="fas fa-times"></i></td>
                                  <td>Tanpa batas</td>
                              </tr>
                              <tr>
                                  <td class="lalign">Kode QR</td>
                                  <td><i class="fas fa-check"></i></td>
                                  <td><i class="fas fa-check"></i></td>
                              </tr>
                              <tr>
                                  <td colspan="3"><hr></td>
                              </tr>
                              <tr>
                                  <td class="lalign"><b>Analitik</b></td>
                                  <td><i class="fas fa-check"></i></td>
                                  <td><i class="fas fa-check"></i></td>
                              </tr>
                              <tr>
                                  <td class="lalign">— Pengunjung Keseluruhan</td>
                                  <td><i class="fas fa-check"></i></td>
                                  <td><i class="fas fa-check"></i></td>
                              </tr>
                          </tbody>
                      </table>
              </div>
          </div>
          </div>
      </div>
  </section>
  
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
                    <div class="logo"> <img src="https://i.postimg.cc/QdZvjL3f/Logo-LINK-ID.png" alt="image" style="margin-top: -50px;" ></div>
                  </div>
              </div>

              <!-- footer link 3 -->
              <div class="row">
                <div class="col-lg-5 col-md-6 col-12">
                  <div class="links">
                    <h3>Dukungan</h3>
                      <ul style="text-align: justify;">
                        <li><a href="/Home">Bantuan</a></li>
                          <li><a href="#features">Laporkan</a></li>
                          <li><a href="#kontak">Status</a></li>
                      </ul>
                  </div>
                </div>
                <div class="col-lg-7 col-md-6 col-12">
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
            <div class="col-md-12" style="text-align: right;">
                <p>©LINK.ID Dikelola oleh PT. Hummatech</p>
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
<script>
  $(function(){
  $('#keywords').tablesorter(); 
});
</script>
</body>


<!-- Mirrored from kalanidhithemes.com/live-preview/landing-page/apper/all-demo/03-app-landing-page-wave-animation/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 22 May 2023 08:12:27 GMT -->
</html>
