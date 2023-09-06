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
<div class="page-content">
    <div class="d-flex">
        <div class="col-4">
            <h5>Tautan yang Diarsip</h5>
                </div>
        <div class="col-8 col-sm mb-3">
            <div class="d-flex justify-content-sm-end">
                <div class="search-box ms-2">
                    <input type="text" class="form-control search" placeholder="Search...">
                    <i class="ri-search-line search-icon"></i>
                </div>
            </div>
        </div>
    </div>
    <div class="row">
        @foreach ($data as $row)
        <form action="/restore/{{$row->id}}">
            <div class="col-lg-12">
                <div class="card" style="border: 1px solid var(--tb-border-color-translucent); padding: 0px;">
                    <div class="card-body">
                        <div class="d-flex">
                            <h6 class="col-6">{{$row->title}}</h6>
                            <!-- Rounded Buttons -->
                            <button style="margin-left: 39%" type="button" class="btn btn-primary btn-sm" onclick="restore({{ $row->id }})"><i class="bi bi-archive-fill"></i> Buka Arsipan</button>

                                {{-- <button type="button" class="btn btn-outline-light col-2">Kembalikan Tautan</button> --}}
                            </div>
                            <a>
                                <h3 class="garisbawah card-title mb-2"><span style="color: red;">Link</span>{{$row->default_short_url}}</h3>
                            </a>
                            <a href="{{$row->destination_url}}" class="card-subtitle font-14 text-muted">{{$row->destination_url}}</a>
                        </div>
                        <div class="card-footer">
                            <div class="d-flex">
                                <div class="col-3">
                                    <p style="margin-top: 10px;">{{ \Carbon\Carbon::parse($row->deactivated_at)->format('F j, Y, h:i A') }}</p>
                                </div>
                                <div class=" col-9 d-flex flex-row justify-content-end">
                                    <button disabled type="button" class="btn disable btn-light me-3 btn-sm"><span data-bs-toggle="tooltip" data-bs-placement="left" title="Tautan berbasis waktu"><i class="fa-solid fa-clock"></i>&nbsp;Atur waktu</span></button>
                                    <button disabled type="button" class="btn disable btn-light me-3 btn-sm"><span data-bs-toggle="tooltip" data-bs-placement="left" title="Tautan terlindungi"><i class="fa-solid fa-lock"></i>&nbsp;kata sandi</span></button>
                                    <button type="button" class="btn btn-light btn-sm" data-bs-toggle="collapse" href="#collapseExample112" role="button" aria-expanded="true" aria-controls="collapseExample112">
                                        <i class="bi bi-bar-chart-line-fill"></i> statistik
                                    </button>
                                </div>
                            </div>
                            <div class="collapse" id="collapseExample112">
                                <div class="card mb-0">
                                <div class="card">
                                        <div class="card-header">
                                            <h4 class="card-title mb-0">Basic Line Chart</h4>
                                        </div><!-- end card header -->

                                        <div class="card-body">
                                            <div id="chart" ></div>
                                        </div><!-- end card-body -->
                                    </div><!-- end card -->
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </form>
            @endforeach
            <!-- end col -->
        </div>
        <!-- container-fluid -->
    </div>
    @section('script')
    <script>
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
            text: 'Product Trends by Month',
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

            var chart = new ApexCharts(document.querySelector("#chart"), options);
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
+<script>
    function restore() {
        message = confirm('Apakah Anda Ingin Memulihkan Tautan?');
        if(message){
            window.location.reload();
        }
    }
</script>
<script>
    $(document).ready(function () {
        $("#toggleButton").click(function () {
            $("#tautanberjangka").collapse('toggle');
            var buttonText = $(this).text();
            if (buttonText.trim() === "Tampilkan lebih banyak") {
                $(this).html('Tampilkan lebih sedikit <i class="fa-solid fa-angle-up"></i>');
            } else {
                $(this).html('Tampilkan lebih banyak <i class="fa-solid fa-angle-down"></i>');
            }
        });
    });
</script>

@endsection
@endsection
