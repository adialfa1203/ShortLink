@extends('layout.user.app')

@section('title','Link')
@section('style')
<style>
    .card-header .col-12 {
        margin-bottom: 0.25rem;
        /* Sesuaikan jarak vertikal sesuai kebutuhan */
    }

    .card-header h6,
    .card-header h5,
    .card-header p {
        margin: 0;
        /* Hapus margin bawaan */
    }

    .card-header h6 {
        margin-right: 0.5rem;
        /* Jarak kanan untuk h6 */
    }

    .isi {
        border: 2px solid #7B7B7B;
        border-radius: 10px;
        padding-top: 5px;
        padding-right: 0px;
        padding-bottom: 0px;
        padding-left: 0px;
    }

    .card-footer {
        padding-top: 10px;
        padding-bottom: 5px;
        border-top: 1px solid var(--tb-border-color-translucent)
    }

    /* Gaya untuk tag <a> saat cursor di atasnya */
    .garisbawah:hover {
        text-decoration: underline;
        /* Menambahkan garis bawah saat cursor di atasnya */
    }

    a:hover {
        text-decoration: underline;
        /* Menambahkan garis bawah saat cursor di atasnya */
    }
</style>
@endsection
@section('content')

<form action="{{ route ('active.link')}}" method="POST">
    @csrf
<div class="page-content">
    <div class="container-fluid">
        <div class="card">
                <div class="countdown-input-subscribe">
                    <input type="text" name="destination_url" class="form-control" placeholder="http://domain-mu.id/yang-paling-panjang-disini"/>
                    <button class="btn btn-danger" type="submit" ><i class="fa-solid fa-link"></i> &nbsp; Singkatkan</button>
                </div>            
            <div class="collapse" id="collapseExample">
                <div class="card card-body">
                    <div class="container">

                        <div class="card">
                            <div class="card-header">
                                <h6 class="card-title mb-0">Judul (Opsional)</h6>
                            </div>
                            <div class="card-body">
                                    <div class="row">
                                        <div class="col-lg-12">
                                            <div class="mb-3">
                                                <input name="title" type="text" class="form-control" id="degreeName" placeholder="Judul">
                                            </div>
                                        </div>
                                        <!--end col-->
                                    </div>
                                    <!--end row-->
                            </div>
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-md-3">
                                        <div class="nav flex-column nav-pills text-center" id="v-pills-tab" role="tablist" aria-orientation="vertical">
                                            <a class="nav-link mb-2 active" id="v-pills-home-tab" data-bs-toggle="pill" href="#v-pills-home" role="tab" aria-controls="v-pills-home" aria-selected="true"><i class="fa-solid fa-lock"></i> &nbsp; Tautan terproteksi</a>
                                            <a class="nav-link mb-2" id="v-pills-profile-tab" data-bs-toggle="pill" href="#v-pills-profile" role="tab" aria-controls="v-pills-profile" aria-selected="false"><i class="fa-solid fa-clock"></i> &nbsp; Tautan Berjangka</a>
                                        </div>
                                    </div><!-- end col -->
                                    <div class="col-md-9">
                                        <div class="tab-content text-muted mt-4 mt-md-0" id="v-pills-tabContent">
                                            <div class="tab-pane fade show active" id="v-pills-home" role="tabpanel" aria-labelledby="v-pills-home-tab" style=" border-left: 3px solid #C1C1C1;">
                                                &nbsp;
                                                <div class="d-flex mb-2">
                                                    <div class="flex-grow-1 ms-3">
                                                        <div class="card-header">
                                                            <h6 class="card-title mb-0"> Tautan terproteksi</h6>
                                                        </div>
                                                        <div class="card-body">
                                                                <div class="row">
                                                                    <div class="col-lg-12">
                                                                        <div class="mb-3">
                                                                            <input type="text" class="form-control" id="degreeName" placeholder="Tautan  yang diberi kode privasi sebelum beralih ke tautan yang asli" disabled>
                                                                        </div>
                                                                    </div>
                                                                    <!--end col-->
                                                                    <div class="col-lg-12">
                                                                        <div class="mb-3">
                                                                            <div class="position-relative auth-pass-inputgroup mb-3">
                                                                                <input name="password" type="password" class="form-control pe-5 password-input" placeholder="Kata sandi">
                                                                                <button class="btn btn-link position-absolute end-0 top-0 text-decoration-none text-muted password-addon" type="button" id="password-addon">
                                                                                    <i class="ri-eye-fill align-middle"></i>
                                                                                </button>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <!--end col-->
                                                                    <div class="hstack gap-2 justify-content-end">
                                                                        <button type="button" id="resetButton" style="background-color: rgb(13, 13, 118); color: white; font-size: 13px; padding: 5px 10px; border-radius: 5px; display: flex; align-items: center; justify-content: flex-end; float: right;">
                                                                            <span class="bi bi-arrow-clockwise"> Reset</span>
                                                                        </button>
                                                                    </div>
                                                                </div>
                                                                <!--end row-->
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="tab-pane fade" id="v-pills-profile" role="tabpanel" aria-labelledby="v-pills-profile-tab">
                                                <div class="d-flex mb-2">
                                                    <div class="flex-grow-1 ms-3">
                                                        <div class="card-header">
                                                            <h6 class="card-title mb-0"> Tautan berjangka</h6>
                                                        </div>
                                                        <div class="card-body">
                                                                <div class="row">
                                                                    <div class="col-lg-12">
                                                                        <div class="mb-3">
                                                                            <input type="text" class="form-control" id="degreeName" placeholder="Apabila tautan sudah kadaluarsa, pengunjung tidak dapat mengakses tautan" disabled>
                                                                        </div>
                                                                    </div>
                                                                    <!--end col-->
                                                                    <div class="col-lg-12 d-flex">
                                                                        <div class="col-lg-12 mb-3">
                                                                            <label for="degreeName">Tanggal dan Waktu</label>
                                                                            <input name="deactivated_at" type="datetime-local" class="form-control time-input" id="degreeName" placeholder="Password">
                                                                        </div>
                                                                    </div>
                                                                    <!--end col-->
                                                                    <div class="hstack gap-2 justify-content-end">
                                                                        <button type="button" id="time-reset" style="background-color: rgb(13, 13, 118); color: white; font-size: 13px; padding: 5px 10px; border-radius: 5px; display: flex; align-items: center; justify-content: flex-end; float: right;">
                                                                            <span class="bi bi-arrow-clockwise"></span> Reset
                                                                        </button>
                                                                    </div>
                                                                </div>
                                                                <!--end row-->
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div><!--  end col -->
                                </div>
                                <!--end row-->
                            </div><!-- end card-body -->
                        </div>

                    </div>
                </div>
            </div>
            <button class="btn btn-primary" type="button" data-bs-toggle="collapse" data-bs-target="#collapseExample" aria-expanded="false" aria-controls="collapseExample" id="toggleButton">
                Tampilkan lebih banyak <i class="fa-solid fa-angle-down"></i>
            </button>
        </div>
    </div>
    <div class="d-flex">
        <div class="col-4">
            <h5>Tautan yang Dihasilkan Terbaru</h5>
        </div>
        <div class=" col-8 col-sm mb-3">
            <div class="d-flex justify-content-sm-end">
                <div class="search-box ms-2">
                    <input type="text" class="form-control search" placeholder="Search...">
                    <i class="ri-search-line search-icon"></i>
                </div>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-lg-12">
            <div class="card" style="border: 1px solid var(--tb-border-color-translucent); padding: 0px;">
                <div class="card-body">
                    <div class="d-flex">
                        <h6 class="col-3">Sunardi</h6>
                        <div class=" col-9 d-flex flex-row justify-content-end">
                            <button type="button" class="btn btn-primary me-3" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="fa-solid fa-share-nodes"></i> &nbsp;Bagikan</button>
                            <div class="dropdown-menu">
                                <a class="dropdown-item" href="#">Action</a>
                                <a class="dropdown-item" href="#">Another action</a>
                                <a class="dropdown-item" href="#">Something else here</a>
                                <div class="dropdown-divider"></div>
                                <a class="dropdown-item" href="#">Separated link</a>
                            </div>
                            <button type="button" class="btn btn-light  me-3" data-bs-toggle="modal" data-bs-target="#zoomInModal2"><span data-bs-toggle="tooltip" data-bs-placement="left" title="Kode QR"><i class="fa-solid fa-qrcode"></i></span></button>
                            <button type="button" class="btn btn-light  me-3" data-bs-toggle="modal" data-bs-target="#zoomInModal"><span><i class="fa-solid fa-pen-to-square"></i>&nbsp;Edit</span></button>
                        </div>
                    </div>
                    <a>
                        <h3 class="garisbawah card-title mb-2"><span style="color: red;">Link</span>.id/sunardi</h3>
                    </a>
                    <a href="https://youtu.be/r-XVPvj4_ns" class="card-subtitle font-14 text-muted">https://youtu.be/r-XVPvj4_ns</a>
                </div>
                <div class="card-footer">
                    <div class="d-flex">
                        <div class="col-3">
                            <p style="margin-top: 10px;">03 agt 2023 13:13</p>
                        </div>
                        <div class=" col-9 d-flex flex-row justify-content-end">
                            <button type="button" class="btn btn-light  me-3" data-bs-toggle="modal" data-bs-target="#zoomInModal"><span data-bs-toggle="tooltip" data-bs-placement="left" title="Tautan berbasis waktu"><i class="fa-solid fa-clock"></i>&nbsp;Atur waktu</span></button>
                            <button type="button" class="btn btn-light me-3" data-bs-toggle="modal" data-bs-target="#zoomInModal1"><span data-bs-toggle="tooltip" data-bs-placement="left" title="Tautan terlindungi"><i class="fa-solid fa-lock"></i>&nbsp;kata sandi</span></button>
                            <button type="button" class="btn btn-light" data-bs-toggle="collapse" href="#collapseExample112" role="button" aria-expanded="true" aria-controls="collapseExample112">
                                <i class="bi bi-bar-chart-line-fill"></i> statistik
                            </button>
                        </div>


                    </div>
                </div>
                <div id="zoomInModal1" class="modal fade zoomIn" tabindex="-1" aria-labelledby="zoomInModalLabel" aria-hidden="true" style="display: none;">
                    <div class="modal-dialog modal-dialog-centered">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="zoomInModalLabel"><i class="fa-solid fa-lock"></i>&nbsp;Tautan Terlindungi</h5>
                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                            </div>
                            <div class="modal-body">
                                <div class="card-body d-flex" style="background-color: #D9D9D9;">
                                    <p><i class="fa-solid fa-clock"></i></p>
                                    &nbsp;
                                    <p>Protected link adalah jenis link yang dapat diberikan Secret key/Passphrase sebelum dialihkan ke link aslinya. </p>
                                </div>
                                <div class="col-lg-12">
                                    <div class="mt-3">
                                        <input type="text" class="form-control" id="degreeName" placeholder="Password">
                                    </div>
                                </div>
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-light" data-bs-dismiss="modal">Tutup</button>
                                <button type="button" class="btn btn-primary ">Simpan</button>
                            </div>

                        </div><!-- /.modal-content -->
                    </div><!-- /.modal-dialog -->
                </div><!-- /.modal -->
                <div id="zoomInModal2" class="modal fade zoomIn modal-sm" tabindex="-1" aria-labelledby="zoomInModalLabel" aria-hidden="true" style="display: none;">
                    <div class="modal-dialog modal-dialog-centered">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="zoomInModalLabel">Gambar Kode QR</h5>
                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                            </div>
                            <div class="modal-body">
                                <center>
                                    <img src="{{asset('template/themesbrand.com/steex/layouts/assets/images/qr.png')}}" alt="" width="100%">
                                </center>
                            </div>
                            <center>
                                <a href="{{asset('template/themesbrand.com/steex/layouts/assets/images/qr.png')}}" download>
                                    <button type="button" class="btn btn-danger">Download</button>
                                </a>
                                <button type="button" class="btn btn-light  me-3"><span><i class="fa-solid fa-pen-to-square"></i>&nbsp;Ganti</span></button>
                            </center>
                            <div class="modal-footer"></div>
                        </div><!-- /.modal-content -->
                    </div><!-- /.modal-dialog -->
                </div><!-- /.modal -->
                <div id="zoomInModal" class="modal fade zoomIn" tabindex="-1" aria-labelledby="zoomInModalLabel" aria-hidden="true" style="display: none;">
                    <div class="modal-dialog modal-dialog-centered">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="zoomInModalLabel"><i class="fa-solid fa-clock"></i>&nbsp;Tautan berbasis waktu</h5>
                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                            </div>
                            <div class="modal-body">
                                <div class="card-body d-flex" style="background-color: #D9D9D9;">
                                    <p><i class="fa-solid fa-clock"></i></p>
                                    &nbsp;
                                    <p>
                                        Tautan berbasis waktu adalah jenis tautan yang hanya berlangsung selama periode waktu tertentu. Ketika tautan telah kedaluwarsa, maka tautan tersebut tidak dapat diakses lagi.
                                    </p>
                                </div>
                                <div class="col-lg-12 d-flex mtx-3">
                                    <div class="col-lg-6 mb-3">
                                        <label for="">Tanggal</label>
                                        <input type="date" class="form-control" id="degreeName" placeholder="Password">
                                    </div>
                                    <div class="col-lg-6 mb-3">
                                        <label for="">Waktu</label>
                                        <input type="time" class="form-control" id="appt" name="appt" min="09:00" max="18:00">
                                    </div>
                                </div>
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-light" data-bs-dismiss="modal">Tutup</button>
                                <button type="button" class="btn btn-primary ">Simpan</button>
                            </div>

                        </div><!-- /.modal-content -->
                    </div><!-- /.modal-dialog -->
                </div><!-- /.modal -->
                <div class="collapse" id="collapseExample112">
                    <div class="card-footer">
                        <div class="d-flex">
                            <div class="col-10">
                                <h5><i class="bi bi-bar-chart-line-fill"></i> statistik</h5>
                            </div>
                            <div class="col-2 d-flex flex-row justify-content-end">
                                <button type="button" class="btn btn-light "><span>Lihat Detail</span>&nbsp;<i class="fa-solid fa-arrow-right"></i></button>
                            </div>
                        </div>
                    </div>
                    <div class="card">
                        <div class="card-body">
                            <div id="chart1"></div>
                        </div><!-- end card-body -->
                    </div><!-- end card -->
                </div>
            </div>
        </div>
        <!-- end col -->
    </div>
    <!-- container-fluid -->
</div>
</form>
@section('script')
<script>
    const toggleButton = document.getElementById('toggleButton');
    const icon = toggleButton.querySelector('i.fa-solid');

    toggleButton.addEventListener('click', function() {
        if (icon.classList.contains('fa-angle-down')) {
            icon.classList.remove('fa-angle-down');
            icon.classList.add('fa-angle-up');
            toggleButton.textContent = 'Tampilkan lebih sedikit ';
        } else {
            icon.classList.remove('fa-angle-up');
            icon.classList.add('fa-angle-down');
            toggleButton.textContent = 'Tampilkan lebih banyak ';
        }
    });
    var options = {
        series: [{
            name: "sunardi",
            data: [10, 41, 35, 51, 49, 62, 69, 91, 148]
        }],
        chart: {
            height: 350,
            type: 'line',
            zoom: {
                enabled: false
            }
        },
        dataLabels: {
            enabled: false
        },
        stroke: {
            curve: 'straight'
        },
        title: {
            text: '',
            align: 'left'
        },
        grid: {
            row: {
                colors: ['#f3f3f3', 'transparent'], // takes an array which will be repeated on columns
                opacity: 0.5
            },
        },
        xaxis: {
            categories: ['Jan', 'Feb', 'Mar', 'Apr', 'May', 'Jun', 'Jul', 'Aug', 'Sep'],
        }
    };

    var chart = new ApexCharts(document.querySelector("#chart1"), options);
    chart.render();
</script>
<script src="{{asset('template/themesbrand.com/steex/layouts/assets/js/pages/password-addon.init.js')}}"></script>
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script>
    $(document).ready(function () {
        $("#resetButton").click(function() {
                $(".password-input").val(""); // Mengosongkan input kata sandi
            });
        // Menangani klik pada tombol Reset untuk modal tautan berjangka
        $("#time-reset").click(function() {
            $(".time-input").val(""); // Mengosongkan input tanggal dan waktu
        });
    });
</script>
@endsection
@endsection
