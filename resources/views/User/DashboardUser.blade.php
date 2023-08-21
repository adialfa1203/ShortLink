@extends('layout.user.app')

@section('title', 'Dashboard')
@section('style')
    <style>
        .custom-icon-size {
            font-size: 24px;
            /* Ubah ukuran sesuai kebutuhan */
        }

        .custom-icon-size {
            font-size: 30px;
            /* Ubah ukuran font sesuai kebutuhan Anda */
            color: #fafafa;
            /* Warna merah muda */
        }

        .custom-card {
            background-color: #910000;
            /* Warna merah muda */
            border-color: #FF69B4;
            /* Warna border merah muda */
        }

        .form-label {
            display: block;
        }

        .unavailable-text {
            font-size: 10px;
            opacity: 0.5;
            /* Nilai opacity untuk membuat teks transparan */
        }

        .quota-reset {
            font-size: 12px;
            opacity: 0.5;
            /* Nilai opacity untuk membuat teks sedikit memudar */
        }

        .card-title {
            font-size: 13px;
            /* Anda bisa mengatur ukuran font sesuai keinginan */
        }

        .text-white {
            color: white !important;
        }
    </style>
@endsection
@section('content')
    <form action="{{ route('shortLink') }}" method="POST" id="shortlinkSubmit">
        @csrf
        <div class="page-content">
            <div class="container-fluid">

                <!-- start page title -->
                <div class="row">
                    <div class="col-12">
                        <div class="page-title-box d-sm-flex align-items-center justify-content-between">
                            <h4 class="mb-sm-0">Dashboard</h4>
                        </div>
                    </div>
                </div>
                <!-- end page title -->

                <div class="row">
                    <div class="col-xl-4 col-sm-6">


                        <div class="dropdown float-end">
                            <a class="text-reset dropdown-btn" href="#" data-bs-toggle="dropdown" aria-haspopup="true"
                                aria-expanded="false">
                                <span class="text-muted fs-lg"></span>
                            </a>
                            <div class="dropdown-menu dropdown-menu-end">
                                <a class="dropdown-item" href="#">Today</a>
                                <a class="dropdown-item" href="#">Last Week</a>
                                <a class="dropdown-item" href="#">Last Month</a>
                                <a class="dropdown-item" href="#">Current Year</a>
                            </div>
                        </div>

                        <div class="card border-bottom border-2 card-animate border-secondary" data-bs-toggle="modal"
                            data-bs-target="#addAmount">
                            <div class="card-body d-flex justify-content-between align-items-center"
                                style="background-color: #910000">
                                <div class="wrapper d-flex align-items-center">
                                    <i class="bi bi-link-45deg custom-icon-size"></i>
                                    <p class="text-muted fw-medium text-uppercase mb-0 mx-3 text-white">Buat Tautan Baru</p>
                                </div>
                                <i class="ri-arrow-right-s-line custom-icon-size"></i>
                            </div>
                        </div>

                        {{-- modal --}}
                        <div class="modal fade" id="addAmount" tabindex="-1" aria-labelledby="addAmountLabel"
                            aria-hidden="true">
                            <div class="modal-dialog">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h1 class="modal-title" id="addAmountLabel"
                                            style="margin-left: 35%; margin-right: auto;">Buat Tautan Baru</h1>
                                        <button type="button" class="btn-close" data-bs-dismiss="modal"
                                            aria-label="Close"></button>
                                    </div>

                                    <div class="modal-body" id="short-link">
                                            <div class="row g-3">
                                                <div class="col-lg-12">
                                                    <div>
                                                        <label for="AmountInput" class="form-label">Tautan Panjang</label>
                                                        <input class="form-control" name="destination_url" id="AmountInput"
                                                            placeholder="http://domain-mu.id/yang-paling-panjang-disini">
                                                    </div>
                                                </div>

                                                <div class="col-lg-12">
                                                    <div>
                                                        <label for="cardNumber" class="form-label">Judul(Opsional)</label>
                                                        <input name="title" class="form-control" id="cardNumber"
                                                            placeholder="Judul">
                                                    </div>
                                                </div>
                                                <br>
                                                {{-- modal panjang tautan terproteksi --}}
                                                <div class="container-fluid">
                                                    <div class="card">
                                                            <button type="button"
                                                                style="background-color: rgb(13, 13, 118); color: white; font-size: 13px; padding: 5px 10px; border-radius: 5px; display: flex; align-items: center;">
                                                                <i class="bi bi-lock"
                                                                    style="font-size: 12px; margin-right: 5px;"></i>Tautan
                                                                Terproteksi
                                                            </button>


                                                        <div class="collapse" id="collapseExample">
                                                            <div class="card card-body">
                                                                <div class="container">

                                                                    <div class="col-lg-12">

                                                                        <div class="col-lg-12">
                                                                            <div class="position-relative auth-pass-inputgroup mb-3">
                                                                                <label for="emailInput" class="form-label">Kata sandi</label>
                                                                                <div class="position-relative auth-pass-inputgroup mb-3">
                                                                                    <input name="password" type="password" class="form-control pe-5 password-input" placeholder="Kata sandi">
                                                                                    <button class="btn btn-link position-absolute end-0 top-0 text-decoration-none text-muted password-addon" type="button" id="password-addon">
                                                                                        <i class="ri-eye-fill align-middle"></i>
                                                                                    </button>
                                                                                </div>
                                                                            </div>
                                                                            <button type="button" id="resetButton" style="background-color: rgb(13, 13, 118); color: white; font-size: 13px; padding: 5px 10px; border-radius: 5px; display: flex; align-items: center; justify-content: flex-end; float: right;">
                                                                                <span class="bi bi-arrow-clockwise"> Reset</span>
                                                                            </button>
                                                                        </div>

                                                                    </div>

                                                                </div>
                                                            </div>
                                                        </div>
                                                        <button class="btn btn-primary" type="button"
                                                            data-bs-toggle="collapse" data-bs-target="#collapseExample"
                                                            aria-expanded="false" aria-controls="collapseExample"
                                                            id="toggleButton" style="background-color: rgb(13, 13, 118)">
                                                            Tampilkan lebih banyak <i class="fa-solid fa-angle-down"></i>
                                                        </button>
                                                    </div>
                                                </div>
                                                {{-- end modal panjang --}}
                                                {{-- modal panjang tautan berjangka --}}
                                                <div class="container-fluid">
                                                    <div class="card">
                                                            <button type="button"
                                                                style="background-color: rgb(13, 13, 118); color: white; font-size: 13px; padding: 5px 10px; border-radius: 5px; display: flex; align-items: center; width: 100%; text-align: left;">
                                                                <i class="bi bi-clock"
                                                                    style="font-size: 12px; margin-right: 5px;"></i>Tautan
                                                                Berjangka
                                                            </button>
                                                        <div class="collapse" id="tautanberjangka">
                                                            <div class="card card-body">
                                                                <div class="container">

                                                                    <div class="col-lg-12">

                                                                        <div class="col-lg-12">
                                                                            <div class="position-relative auth-pass-inputgroup mb-3">
                                                                                <label for="old_password" class="form-label">Tanggal dan Waktu</label>
                                                                                <input name="deactivated_at" type="datetime-local" id="old_password" class="form-control pe-5 time-input">
                                                                                <button class="btn btn-link position-absolute end-0 top-0 text-decoration-none text-muted password-addon" type="button" id="password-addon">
                                                                                </button>
                                                                            </div>
                                                                            <button type="button" id="time-reset" style="background-color: rgb(13, 13, 118); color: white; font-size: 13px; padding: 5px 10px; border-radius: 5px; display: flex; align-items: center; justify-content: flex-end; float: right;">
                                                                                <span class="bi bi-arrow-clockwise"> Reset</span>
                                                                            </button>
                                                                        </div>

                                                                    </div>

                                                                </div>
                                                            </div>
                                                        </div>
                                                        <button class="btn btn-primary" type="button"
                                                            data-bs-toggle="collapse" data-bs-target="#tautanberjangka"
                                                            aria-expanded="false" aria-controls="collapseExample"
                                                            id="toggleButton" style="background-color: rgb(13, 13, 118)">
                                                            Tampilkan lebih banyak <i class="fa-solid fa-angle-down"></i>
                                                        </button>
                                                    </div>
                                                </div>
                                                {{-- end modal tautan berjangka --}}
                                            </div>
                                    </div>
                                    <div class="col-lg-12">
                                        <div class="modal-footer">
                                            <button type="submit" class="btn btn-danger" style="width: 100%;"
                                                data-bs-toggle="modal" data-bs-target="#singkatkan">
                                                <i class="bi bi-link-45deg"></i> Singkatkan!
                                            </button>
                                        </div>
                                    </div>


                                </div>
                            </div>
                        </div>
                        <!-- Modal singkatkan-->
                        <div class="modal fade" id="singkatkan" tabindex="-1" aria-labelledby="addAmountLabel"
                            aria-hidden="true">
                            <div class="modal-dialog">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h1 class="modal-title" id="addAmountLabel">Buat tautan pemendek baru</h1>
                                        <button type="button" class="btn-close" data-bs-dismiss="modal"
                                            aria-label="Close"></button>
                                    </div>
                                    <div class="modal-body">
                                            <div class="row g-3">
                                                <div class="col-lg-12">

                                                    <label type="button" class="btn btn-primary" style="width: 100%;">
                                                        Berhasil menyingkatkan tautan!
                                                    </label>

                                                </div>
                                                <div class="col-lg-12">
                                                    <label class="form-label">Judul</label>
                                                    <input class="form-control" id="title">
                                                </div>
                                                <hr>                                                
                                                <div class="col-lg-12">
                                                    <div>
                                                        <label for="cardNumber" class="form-label">URL yang
                                                            diperpendek</label>
                                                            <div class="countdown-input-subscribe">
                                                                <input id="default_short_url"  class="form-control">  
                                                                <button class="btn btn-danger" type="button"
                                                                id="button-email" data-bs-toggle="modal"
                                                                data-bs-target="#bagikan"><i class="bi bi-share-fill"></i>
                                                                &nbsp; Bagikan</button>                                                          
                                                            </div>
                                                    </div>
                                                </div>
                                                <div class="col-lg-12">
                                                    <div class="countdown-input-subscribe">
                                                        <label for="cardNumber" class="form-label">URL asli</label>
                                                        <input class="form-control" id="destination_url">                                                     
                                                    </div>
                                                </div>
                                            </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- end Modal singkatkan -->
                        <!-- Modal bagikan -->
                        <div class="modal fade" id="bagikan" tabindex="-1" aria-labelledby="addAmountLabel"
                            aria-hidden="true">
                            <div class="modal-dialog">
                                <div class="modal-content">
                                    <div class="modal-body">
                                            <div class="row g-3">
                                                    <div class="countdown-input-subscribe">


                                                        <label class="" type="" id="button-email"><i
                                                                class="bi bi-facebook"></i> &nbsp; Facebook</label>
                                                        <div class="countdown-input-subscribe">
                                                            <label class="" type="" id="button-email"><i
                                                                    class="bi bi-twitter"></i> &nbsp; Twitter</label>
                                                            <div class="countdown-input-subscribe">
                                                                <label class="" type="" id="button-email"><i
                                                                        class="bi bi-whatsapp"></i> &nbsp; WhatsApp</label>
                                                                <div class="countdown-input-subscribe">
                                                                    <label class="" type=""
                                                                        id="button-email"><i
                                                                            class="bi bi-clipboard-fill"></i> &nbsp;
                                                                        Copy</label>
                                                                    <div class="countdown-input-subscribe">
                                                                        <label class="" type=""
                                                                            id="button-email"><i
                                                                                class="bi bi-qr-code"></i> &nbsp; QR
                                                                            Code</label>




                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                            </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- end Modal bagikan-->


                    </div><!--end col-->
                    <div class="col-xl-4 col-sm-6">


                        <div class="dropdown float-end">
                            <a class="text-reset dropdown-btn" href="#" data-bs-toggle="dropdown"
                                aria-haspopup="true" aria-expanded="false">
                                <span class="text-muted fs-lg"></span>
                            </a>
                            <div class="dropdown-menu dropdown-menu-end">
                                <a class="dropdown-item" href="#">Today</a>
                                <a class="dropdown-item" href="#">Last Week</a>
                                <a class="dropdown-item" href="#">Last Month</a>
                                <a class="dropdown-item" href="#">Current Year</a>
                            </div>
                        </div>

                        <div class="card border-bottom border-2 card-animate border-secondary">
                            <div class="card-body d-flex justify-content-between align-items-center"
                                style="background-color: rgb(13, 13, 118)">
                                <div class="wrapper d-flex align-items-center">
                                    <i class="bi bi-card-text custom-icon-size"></i>
                                    <p class="text-muted fw-medium text-uppercase mb-0 mx-3 text-white">Buat Microsite baru
                                    </p>
                                </div>
                                <i class="ri-arrow-right-s-line custom-icon-size"></i>
                            </div>
                        </div>



                    </div><!--end col-->


                    <div class="col-xl-4 col-sm-6">


                        <div class="dropdown float-end">
                            <a class="text-reset dropdown-btn" href="#" data-bs-toggle="dropdown"
                                aria-haspopup="true" aria-expanded="false">
                                <span class="text-muted fs-lg"></span>
                            </a>
                            <div class="dropdown-menu dropdown-menu-end">
                                <a class="dropdown-item" href="#">Today</a>
                                <a class="dropdown-item" href="#">Last Week</a>
                                <a class="dropdown-item" href="#">Last Month</a>
                                <a class="dropdown-item" href="#">Current Year</a>
                            </div>
                        </div>

                        <div class="card border-bottom border-2 card-animate border-secondary">
                            <div class="card-body d-flex justify-content-between align-items-center"
                                style="background-color: rgb(224, 113, 34)">
                                <div class="wrapper d-flex align-items-center">
                                    <i class="bi bi-question-circle custom-icon-size"></i>
                                    <p class="text-muted fw-medium text-uppercase mb-0 mx-3 text-white"> Bantuan & Dukungan
                                    </p>
                                </div>
                                <i class="ri-arrow-right-s-line custom-icon-size"></i>
                            </div>
                        </div>



                    </div><!--end col-->
                </div><!--end row-->

                <div class="row">
                    <div class="col-xxl-4 col-md-6">
                        <div class="card">
                            <div class="card-body">
                                <div class="d-flex">
                                    <div class="flex-grow-1">
                                        <div class="d-flex flex-column h-100">
                                            <p class="fs-md text-muted mb-4">Pengunjung </p>
                                            <h3 class="mb-0 mt-auto"><span class="counter-value"
                                                    data-target="3652">0</span></h3>
                                        </div>
                                    </div>
                                    <div class="flex-shrink-0">
                                        <div id="property_sale" data-colors='["--tb-primary"]' dir="ltr"></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xxl-4 col-md-6">
                        <div class="card">
                            <div class="card-body">
                                <div class="d-flex">
                                    <div class="flex-grow-1">
                                        <div class="d-flex flex-column h-100">
                                            <p class="fs-md text-muted mb-4">Pengunjung Unik</p>
                                            <h3 class="mb-0 mt-auto"><span class="counter-value"
                                                    data-target="3652">0</span></h3>
                                        </div>
                                    </div>
                                    <div class="flex-shrink-0">
                                        <div id="property_sale" data-colors='["--tb-primary"]' dir="ltr"></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xxl-4 col-md-6">
                        <div class="card">
                            <div class="card-body">
                                <div class="d-flex">
                                    <div class="flex-grow-1">
                                        <div class="d-flex flex-column h-100">
                                            <p class="fs-md text-muted mb-4">Pengunjung Kode QR</p>
                                            <h3 class="mb-0 mt-auto"><span class="counter-value"
                                                    data-target="3652">0</span></h3>
                                        </div>
                                    </div>
                                    <div class="flex-shrink-0">
                                        <div id="property_sale" data-colors='["--tb-primary"]' dir="ltr"></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-12">
                    <div class="card">
                        <div class="card-body">
                            <div class="d-flex mb-4 pb-1">
                                <div class="flex-grow-1">
                                    <h6 class="card-title">Tautan dibuat/bulan <i
                                            class="bi bi-exclamation-circle align-baseline ms-1 fs-sm"
                                            data-bs-toggle="tooltip"
                                            data-bs-title="Setiap bulan pengguna akan dikenakan kuota sesuai dengan layanan yang digunakan. Kuota akan tersedia kembali setelah tanggal reset kuota atau melakukan upgrade ke layanan yang lebih tinggi"></i>
                                    </h6>

                                </div>

                            </div>
                            <div class="progress" data-bs-toggle="tooltip" data-bs-title="$234.95 Paid Amount">
                                <div class="progress-bar progress-bar-striped progress-bar-animated" role="progressbar"
                                    aria-valuenow="75" aria-valuemin="0" aria-valuemax="100" style="width: 75%"></div>
                            </div>
                            <p class="text-muted mb-0"><b>50 dari 100</p>

                            <br>
                            <h6 class="card-title">Nama yang telah diubah/bulan <i
                                    class="bi bi-exclamation-circle align-baseline ms-1 fs-sm" data-bs-toggle="tooltip"
                                    data-bs-title="Setiap bulan pengguna akan dikenakan kuota sesuai dengan layanan yang digunakan. Kuota akan tersedia kembali setelah tanggal reset kuota atau melakukan upgrade ke layanan yang lebih tinggi"></i>
                            </h6>

                            <div class="progress" data-bs-toggle="tooltip" data-bs-title="$234.95 Paid Amount">
                                <div class="progress-bar progress-bar-striped progress-bar-animated" role="progressbar"
                                    aria-valuenow="25" aria-valuemin="0" aria-valuemax="100" style="width: 25%"></div>

                            </div>
                            <p class="text-muted mb-0"><b>25 dari 100</p>
                        </div>
                        <div class="d-flex justify-content-end pe-3" data-bs-toggle="modal"
                            data-bs-target="#lihatlebihbanyak">
                            <p><a href="#"
                                    class="link-primary link-offset-2 text-decoration-underline link-underline-opacity-25 link-underline-opacity-100-hover">Lihat
                                    lebih banyak</a></p>
                        </div>
                        {{-- modal --}}
                        <div class="modal fade" id="lihatlebihbanyak" tabindex="-1" aria-labelledby="addAmountLabel"
                            aria-hidden="true">
                            <div class="modal-dialog">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h1 class="modal-title" id="addAmountLabel"
                                            style="margin-left: 32%; margin-right: auto;">Kuota nama pendek</h1>
                                        <button type="button" class="btn-close" data-bs-dismiss="modal"
                                            aria-label="Close"></button>
                                    </div>

                                    <div class="modal-body">
                                            <div class="row g-3">
                                                <div class="card-body">
                                                    {{-- <div class="d-flex mb-4 pb-1"> --}}
                                                    {{-- <div class="flex-grow-1"> --}}
                                                    <h6 class="card-title">Tautan dibuat/bulan <i
                                                            class="bi bi-exclamation-circle align-baseline ms-1 fs-sm"
                                                            data-bs-toggle="tooltip"
                                                            data-bs-title="Setiap bulan pengguna akan dikenakan kuota sesuai dengan layanan yang digunakan. Kuota akan tersedia kembali setelah tanggal reset kuota atau melakukan upgrade ke layanan yang lebih tinggi"></i>
                                                    </h6>
                                                    {{-- </div> --}}

                                                    {{-- </div> --}}
                                                    <div class="progress" data-bs-toggle="tooltip"
                                                        data-bs-title="$234.95 Paid Amount">
                                                        <div class="progress-bar progress-bar-striped progress-bar-animated"
                                                            role="progressbar" aria-valuenow="75" aria-valuemin="0"
                                                            aria-valuemax="100" style="width: 75%"></div>
                                                    </div>
                                                    <p class="text-muted mb-0"><b>50 dari 100</p>

                                                    <br>
                                                    <h3 class="card-title">Nama yang telah diubah/bulan <i
                                                            class="bi bi-exclamation-circle align-baseline ms-1 fs-sm"
                                                            data-bs-toggle="tooltip"
                                                            data-bs-title="Setiap bulan pengguna akan dikenakan kuota sesuai dengan layanan yang digunakan. Kuota akan tersedia kembali setelah tanggal reset kuota atau melakukan upgrade ke layanan yang lebih tinggi"></i>
                                                    </h3>

                                                    <div class="progress" data-bs-toggle="tooltip"
                                                        data-bs-title="$234.95 Paid Amount">
                                                        <div class="progress-bar progress-bar-striped progress-bar-animated"
                                                            role="progressbar" aria-valuenow="25" aria-valuemin="0"
                                                            aria-valuemax="100" style="width: 25%"></div>

                                                    </div>
                                                    <p class="text-muted mb-0"><b>25 dari 100</p>
                                                </div>
                                                <div class="card-body">
                                                    <div class="col-lg-12">
                                                        <div>
                                                            <label for="AmountInput" class="form-label">Nama tautan
                                                                terbatas/bulan</label>
                                                            <label for="AmountInput" class="unavailable-text"><i>Tidak
                                                                    tersedia pada layanan ini</i></label>
                                                        </div>
                                                        <br>
                                                        <div class="col-lg-12">
                                                            <div>
                                                                <label for="cardNumber" class="form-label">Tautan original
                                                                    diubah/bulan</label>
                                                                <label for="AmountInput" class="unavailable-text"><i>Tidak
                                                                        tersedia pada layanan ini</i></label>
                                                            </div>

                                                        </div>
                                                        <br>
                                                        <div class="quota-reset">
                                                            Quota direset pada 1 September 2023 pukul 00.00
                                                        </div>

                                                    </div>
                                                </div>



                                            </div>
                                    </div>
                                    <div class="col-lg-12">
                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-danger" style="width: 100%;">
                                                Langganan untuk mendapatkan kuota
                                            </button>
                                        </div>
                                    </div>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
            <!-- container-fluid -->
        </div>
    </form>
@endsection

@section('script')
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script>
        $(document).ready(function() {
            $("#shortlinkSubmit").submit(function(event) {
                event.preventDefault(); // Mencegah form submission bawaan

                var formData = $(this).serialize(); // Mengambil data form
                $.ajax({
                    type: "POST",
                    url: "short-link", // Ganti dengan URL endpoint Anda
                    data: formData,
                    success: function(response) {
                        // Tangani respons dari server
                        console.log(response.default_short_url);
                        var defaultShort = response.default_short_url;
                        var title = response.title;
                        var url = response.destination_url;

                        // Tampilkan data yang dipotong di dalam input
                        $("#default_short_url").val(defaultShort);
                        $("#title").val(title);
                        $('#destination_url').val(url);

                        // Menampilkan tombol Copy
                        $("#copyButton").show();

                        // Mengosongkan nilai-nilai input di dalam modal
                        $("#AmountInput").val(""); // Mengosongkan input tautan panjang
                        $("#cardNumber").val(""); // Mengosongkan input judul
                        $(".password-input").val(""); // Mengosongkan input kata sandi
                        $(".time-input").val(""); // Mengosongkan input tanggal dan waktu

                        // Menutup modal saat ini (jika perlu)
                        $("#addAmount").modal("hide");
                    },
                    error: function(error) {
                        console.error("Error:", error);
                    }
                });
            });
            // Menangani klik pada tombol mata
            $("#password-addon").click(function() {
                var passwordInput = $(".password-input");
                var passwordAddon = $("#password-addon");

                if (passwordInput.attr("type") === "password") {
                    passwordInput.attr("type", "text");
                    passwordAddon.html('<i class="ri-eye-off-fill align-middle"></i>');
                } else {
                    passwordInput.attr("type", "password");
                    passwordAddon.html('<i class="ri-eye-fill align-middle"></i>');
                }
            });
            // Menangani klik pada tombol Copy
            $("#copyButton").click(function() {
                var copyText = document.getElementById("default_short_url");
                copyText.select();
                document.execCommand("copy");
                // Anda bisa menambahkan logika lain untuk memberi tahu pengguna bahwa tautan telah disalin
            });
            // Menangani klik pada tombol Reset untuk modal tautan terproteksi
            $("#resetButton").click(function() {
                $(".password-input").val(""); // Mengosongkan input kata sandi
            });
            // Menangani klik pada tombol Reset untuk modal tautan berjangka
            $("#time-reset").click(function() {
                $(".time-input").val(""); // Mengosongkan input tanggal dan waktu
            });
        });
    </script>
    <!-- apexcharts -->
    <script src="{{ asset('template/themesbrand.com/steex/layouts/assets/libs/apexcharts/apexcharts.min.js') }}"></script>

    <!-- Echarts -->
    <script src="{{ asset('template/themesbrand.com/steex/layouts/assets/libs/echarts/echarts.min.js') }}"></script>

    <!-- Vector map-->
    <script src="{{ asset('template/themesbrand.com/steex/layouts/assets/libs/jsvectormap/js/jsvectormap.min.js') }}"></script>
    <script src="{{ asset('template/themesbrand.com/steex/layouts/assets/libs/jsvectormap/maps/world-merc.js') }}"></script>

    <script src="{{ asset('template/themesbrand.com/steex/layouts/assets/libs/list.js/list.min.js') }}"></script>

    <!-- dashboard-analytics init js -->
    <script src="{{ asset('template/themesbrand.com/steex/layouts/assets/js/pages/dashboard-analytics.init.js') }}"></script>

    <!-- App js -->
    <script src="{{ asset('template/themesbrand.com/steex/layouts/assets/js/app.js') }}"></script>
    <!-- profile-setting init js -->
    <script src="{{asset('template/themesbrand.com/steex/layouts/assets/js/pages/profile-setting.init.js')}}"></script>
    <script src="{{asset('template/themesbrand.com/steex/layouts/assets/js/pages/password-addon.init.js')}}"></script>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    
@endsection
