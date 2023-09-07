@extends('layout.user.app')
@section('title', 'Microsite')

@section('style')
<style>
    .custom-alert {
        display: none;
        position: absolute;
        top: 50%;
        left: 50%;
        transform: translate(-50%, -50%);
        padding: 15px;
        background-color: #f1f1f1;
        color: #333;
        border-radius: 5px;
        border: 1px solid #ccc;
        z-index: 1000;
        box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.2);
        animation: fade-in 0.3s ease-in-out;
    }

    @keyframes fade-in {
        0% {
            opacity: 0;
        }

        100% {
            opacity: 1;
        }
    }

    .alert-text {
        display: block;
        text-align: center;
    }

    .alert-success {
        font-family: 'Poppins';
        background-color: #2DCB73;
        color: #ffffff;
        border-color: #2DCB73;
    }

    .alert-error {
        background-color: #f8d7da;
        color: #721c24;
        border-color: #f5c6cb;
    }
</style>
@endsection

@section('content')
<div class="page-content">
    <div class="container-fluid">
        <!-- start page title -->
        <div class="row">
            <div class="col-12">
                <div class="page-title-box d-sm-flex align-items-center justify-content-between">
                    <h4 class="mb-sm-0">Microsite</h4>

                    {{-- <div class="page-title-right">
                            <ol class="breadcrumb m-0">
                                <li class="breadcrumb-item"><a href="javascript: void(0);">Instructors</a></li>
                                <li class="breadcrumb-item active">Grid View</li>
                            </ol>
                        </div> --}}

                </div>
            </div>
            <!-- end page title -->

        


        </div>
        <!-- end page title -->

        <div class="card">
            <div class="card-body">
                <div class="row align-items-center g-2">
                    <div class="col-lg-3 me-auto">
                        <a href="{{ route('add.microsite') }}" type="button" class="btn btn-success"><i class="bi bi-plus-circle align-baseline me-1"></i> Buat Baru</a>
                    </div>
                    <div class="col-lg-auto">
                        <div class="hstack gap-2">
                            <a href="" class="btn rounded-pill btn-danger"> Semua</a>
                            <a href="" class="btn rounded-pill btn-secondary"> Terakhir Diperbarui</a>
                        </div>
                    </div>
                    <div class="col-lg-2">
                        <div class="search-box">
                            <input type="text" class="form-control search" placeholder="Cari...">
                            <i class="ri-search-line search-icon"></i>
                        </div>
                    </div><!--end col-->
                </div>
            </div>
        </div><!--end card-->

        @foreach ($data as $index => $row)
        <div class="col-12">
            <div class="card card-body">
                <div class="wrapper row  align-items-center">
                    <div class="avatar-md col-1">
                        <div class="avatar-title">
                            <img src="https://i.postimg.cc/tR5pMsYz/orang-gtg.jpg" style="width: 160%; height: 100%;" alt="Gambar">
                        </div>
                    </div>
                    <div class="wrapper col-8">
                        <h5 class="card-title">{{ $row->name }}</h5>
                        <p type="button" class="link-primary link-offset-2 text-decoration-underline link-underline-opacity-25 link-underline-opacity-100-hover card-text text-muted" id="copyText{{ $index }}" onclick="copyTextToClipboard('{{ $row->link_microsite }}', 'copyText{{ $index }}')">
                            {{ $short_urls[$index]->default_short_url }}
                        </p>
                        <div id="customAlert" class="custom-alert">
                            <span class="alert-text"></span>
                        </div>
                    </div>
                    <div class="wrapper col-3">
                        <div class="d-flex justify-content-between align-items-start">
                            <div class="ml-auto">
                                <button type="button" class="btn btn-primary btn-xs" data-bs-toggle="collapse" href="#collapseExample{{ $row->id }}" role="button" aria-expanded="true" aria-controls="collapseExample{{ $row->id }}">
                                    <i class="bi bi-bar-chart-line-fill"></i> statistik
                                </button>
                                <a href="{{ route('edit.microsite', ['id' => $row->id]) }}" class="btn btn-primary btn-xs"><i class="bi bi-pencil-square"></i>
                                    Edit</a>
                                <a href="#" class="btn btn-primary btn-xs"><i class="bi bi-share-fill"></i></a>
                            </div>
                        </div>
                    </div>
                    <div class="collapse" id="collapseExample{{ $row->id }}">
                    <div class="card-footer">
                        <div class="d-flex">
                            <div class="col-10">
                                <h5><i class="bi bi-bar-chart-line-fill"></i> statistik</h5>
                            </div>
                            <div class="col-2 d-flex flex-row justify-content-end">
                                <button type="button" class="btn btn-light "><span>Lihat
                                        Detail</span>&nbsp;<i class="fa-solid fa-arrow-right"></i></button>
                            </div>
                        </div>
                    </div>
                    <div class="card">
                        <div class="card-body">
                            <div id="chart{{ $row->id }}"></div>
                        </div><!-- end card-body -->
                    </div><!-- end card -->
                </div>
                </div>
            </div>
        </div><!-- end col -->
        @endforeach
    </div>
</div>
@endsection

@section('script')
@foreach ($urlshort as $row)
<script>
    var options = {
          series: [{
            name: "{{$row->title}}",
            data:["{{ $row->visits_count }}"],
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
          categories: ['Jan','feb','Jan','Jan','Jan','Jan','Jan','Jan'],
        }
        };

        var chart = new ApexCharts(document.querySelector("#chart{{ $row->id }}"), options).render();

</script>
@endforeach
<script>
    $(document).ready(function() {
        var selectId = $('#new_url_key').val();
        console.log(selectId);
        var csrfToken = $('meta[name="csrf-token"]').attr('content');

        $('#submitKustom').click(function() {
            var newUrlKey = $('#new_url_key').val();
            // alert('masuk')
            $.ajax({
                headers: {
                    'X-CSRF-Token': csrfToken,
                },
                url: "/update-microsite-link/" + $('#new_url_key').data("original"),
                method: 'POST',
                data: {
                    newUrlKey: newUrlKey
                },
                dataType: 'JSON',
                success: function(e) {
                    alert(e.message)
                    location.reload()
                }
            })
        });
    });

    $('.edit-link').click(function() {
        var link = $(this).data('link');

        // Mengisi nilai input dengan link yang dipilih
        $('#new_url_key').val(link);
        $('#new_url_key').attr("data-original", link);

    });
</script>
<script>
    function copyTextToClipboard(text, elementId) {
        var textElement = document.getElementById(elementId);
        var text = textElement.textContent;

        var dummy = document.createElement("textarea");
        document.body.appendChild(dummy);
        dummy.value = text;
        dummy.select();
        document.execCommand("copy");
        document.body.removeChild(dummy);

        showCustomAlert("Teks berhasil disalin!", "alert-success");
    }

    function showCustomAlert(message, alertType) {
        var customAlert = document.getElementById("customAlert");
        var alertText = customAlert.querySelector(".alert-text");

        alertText.textContent = message;
        customAlert.classList.add(alertType);
        customAlert.style.display = "block";

        setTimeout(function() {
            customAlert.style.display = "none";
            customAlert.classList.remove(alertType);
        }, 3000);
    }
</script>
@endsection
