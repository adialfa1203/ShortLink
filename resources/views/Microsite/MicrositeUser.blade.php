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
        .initials {
    position: absolute;
    top: 13px; /* Sesuaikan dengan posisi vertikal yang diinginkan */
    left: 20px; /* Sesuaikan dengan posisi horizontal yang diinginkan */
    /* background-color: #19383d; Warna latar belakang */
    color: #fff; /* Warna teks */
    font-size: 24px; /* Ukuran huruf */
    padding: 5px 10px; /* Padding untuk ruang di sekitar huruf */
    border-radius: 50%; /* Membuat huruf menjadi lingkaran */
}
    </style>
@endsection

@section('content')

    <div class="page-content">
        <div class="container-fluid">
            <!-- start page title -->
            <div class="row">
                <div class="col-9">
                    <div class="page-title-box d-sm-flex align-items-center justify-content-between">
                        <h4 class="mb-sm-0">Microsite</h4>
                    </div>
                </div>
                <div class="col-3 mb-3">
                    <div class="search-box">
                        <input type="text" class="form-control search" placeholder="Cari...">
                        <i class="ri-search-line search-icon"></i>
                    </div>
                </div>
            </div>
            
            <!-- end page title -->

            <div class="card mt-1">
                <div class="card-body">
                    <div class="row align-items-center g-2">
                        <div class="col-lg-3 me-auto">
                            <a href="{{ route('add.microsite') }}" type="button" class="btn btn-success"><i
                                    class="bi bi-plus-circle align-baseline me-1"></i> Buat Baru</a>
                        </div>
                        <div class="col-lg-auto">
                            <div class="hstack gap-2">
                                <a href="" class="btn rounded-pill btn-danger"> Semua</a>
                                <a href="" class="btn rounded-pill btn-secondary"> Terakhir Diperbarui</a>
                            </div>
                        </div>
                        
                    </div>
                </div>
            </div><!--end card-->

            @foreach ($data as $row)
                <div class="col-12" >
                    <div class="card card-body" id="searchResults">
                        <div class="wrapper row  align-items-center">
                            <div class="avatar-md col-1">
                                <div class="avatar-title">
                                    <img src="{{asset('template/themesbrand.com/steex/layouts/assets/images/sidebar/img-1.jpg')}}"
                                        style="width: 180%; height: 70%;" alt="Gambar">
                                    <div class="initials">{{ $row ->name[0] }}</div>
                                </div>
                            </div>
                            <div class="wrapper col-8">
                                <h5 class="card-title">{{ $row ->name }}</h5>
                                <p type="button" class="link-primary link-offset-2 text-decoration-underline link-underline-opacity-25 link-underline-opacity-100-hover card-text text-muted" id="copyText{{ $loop->index }}"
                                    onclick="copyTextToClipboard('{{ $row->link_microsite }}', 'copyText{{ $loop->index }}')">
                                    {{ $row->link_microsite }}
                                </p>
                                <div id="customAlert" class="custom-alert">
                                    <span class="alert-text"></span>
                                </div>
                            </div>
                            <div class="wrapper col-3">
                                <div class="d-flex justify-content-between align-items-start">
                                    <div class="ml-auto">
                                        <a href="#" class="btn btn-primary btn-sm"><i class="bi bi-bar-chart-fill"></i>
                                            Statistik</a>
                                        <a href="{{ route('edit.microsite', ['id' => $row->id]) }}" class="btn btn-primary btn-sm"><i class="bi bi-pencil-square"></i>
                                            Edit</a>
                                        <a href="#" class="btn btn-primary btn-sm"><i class="bi bi-share-fill"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div><!-- end col -->
            @endforeach
            <div ></div>
        </div>
        <!-- container-fluid -->
    </div>
@endsection

@section('script')
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script>
    $(document).ready(function() {
        $('.search').keyup(function() {
            var searchText = $(this).val().toLowerCase();
            $('.card').each(function() {
                var cardText = $(this).text().toLowerCase();
                if (cardText.includes(searchText)) {
                    $(this).show();
                } else {
                    $(this).hide();
                }
            });
        });
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