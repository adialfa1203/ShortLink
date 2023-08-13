@extends('layout.app')

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
    a:hover {
        text-decoration: underline;
        /* Menambahkan garis bawah saat cursor di atasnya */
    }
</style>
@endsection
@section('content')

<div class="page-content">
    <div class="container-fluid">
        <div class="card">
            <form action="#!">
                <div class="countdown-input-subscribe">
                    <input type="email" class="form-control" placeholder="Https://domainkamu.id/very-long-link" required />
                    <button class="btn btn-danger" type="submit" id="button-email"><i class="fa-solid fa-link"></i> &nbsp; Singkatkan</button>



                </div>
            </form>
            <div class="collapse" id="collapseExample">
                <div class="card card-body">
                    <div class="container">

                        <div class="card">
                            <div class="card-header">
                                <h6 class="card-title mb-0">Judul (Opsional)</h6>
                            </div>
                            <div class="card-body">
                                <form>
                                    <div class="row">
                                        <div class="col-lg-12">
                                            <div class="mb-3">
                                                <input type="text" class="form-control" id="degreeName" placeholder="Judul" disabled>
                                            </div>
                                        </div>
                                        <!--end col-->
                                    </div>
                                    <!--end row-->
                                </form>
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
                                                            <form>
                                                                <div class="row">
                                                                    <div class="col-lg-12">
                                                                        <div class="mb-3">
                                                                            <input type="text" class="form-control" id="degreeName" placeholder="Tautan  yang diberi kode privasi sebelum beralih ke tautan yang asli" disabled>
                                                                        </div>
                                                                    </div>
                                                                    <!--end col-->
                                                                    <div class="col-lg-12">
                                                                        <div class="mb-3">
                                                                            <input type="text" class="form-control" id="degreeName" placeholder="Password">
                                                                        </div>
                                                                    </div>
                                                                    <!--end col-->
                                                                    <div class="hstack gap-2 justify-content-end">
                                                                        <a class="btn btn-danger" href="javascript:deleteEl(1)">Delete</a>
                                                                    </div>
                                                                </div>
                                                                <!--end row-->
                                                            </form>
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
                                                            <form>
                                                                <div class="row">
                                                                    <div class="col-lg-12">
                                                                        <div class="mb-3">
                                                                            <input type="text" class="form-control" id="degreeName" placeholder="Apabila tautan sudah kadaluarsa, pengunjung tidak dapat mengakses tautan" disabled>
                                                                        </div>
                                                                    </div>
                                                                    <!--end col-->
                                                                    <div class="col-lg-12 d-flex">
                                                                        <div class="col-lg-6 mb-3">
                                                                            <label for="">Tanggal</label>
                                                                            <input type="date" class="form-control" id="degreeName" placeholder="Password">
                                                                        </div>
                                                                        <div class="col-lg-6 mb-3">
                                                                            <label for="">Waktu</label>
                                                                            <input type="time" class="form-control" id="appt" name="appt" min="09:00" max="18:00">
                                                                        </div>
                                                                    </div>
                                                                    <!--end col-->
                                                                    <div class="hstack gap-2 justify-content-end">
                                                                        <a class="btn btn-danger" href="javascript:deleteEl(1)">Delete</a>
                                                                    </div>
                                                                </div>
                                                                <!--end row-->
                                                            </form>
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
                        <h6 class="col-6">Sunardi</h6>
                        <button type="button" class="btn btn-outline-light col-2">Light</button>
                        <button type="button" class="btn btn-outline-light col-2">Light</button>
                        <button type="button" class="btn btn-outline-light col-2">Light</button>
                    </div>
                    <a>
                        <h3 class="card-title mb-2"><span style="color: red;">Link</span>.id/sunardi</h3>
                    </a>
                    <a href="https://youtu.be/r-XVPvj4_ns" class="card-subtitle font-14 text-muted">https://youtu.be/r-XVPvj4_ns</a>
                </div>
                <div class="card-footer">
                    <div class="d-flex">
                        <div class="col-8">
                            <p style="margin-top: 10px;">03 agt 2023 13:13</p>
                        </div>
                        <div class="col-2">
                            <button type="button" class="btn btn-light" style="float: right;"><span><i class="fa-solid fa-clock"></i>&nbsp;Atur waktu</span></button>
                        </div>
                        &nbsp;
                        <div class="col-1">
                            <button type="button" class="btn btn-light"><span style="color: blue;"><i class="fa-solid fa-lock"></i>&nbsp;terkunci</span></button>
                        </div>
                        <div class="col-1">
                            <div class="hstack gap-2 flex-wrap mb-3">
                                <button class="btn btn-primary" data-bs-toggle="collapse" href="#collapseExample112" role="button" aria-expanded="true" aria-controls="collapseExample112">
                                    statistik
                                </button>
                            </div>
                        </div>

                    </div>
                    <div class="collapse" id="collapseExample112">
                        <div class="card mb-0">
                            When designing, the goal is to draw someone’s attention and portray to them what you’re trying to say. You can make a big statement by using little tricks, like this one. Use contrasting fonts. you can use a bold sanserif font with a cursive.

                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- end col -->
    </div>
    <!-- container-fluid -->
</div>
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
</script>
@endsection
@endsection