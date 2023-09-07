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
            top: 13px;
            /* Sesuaikan dengan posisi vertikal yang diinginkan */
            left: 20px;
            /* Sesuaikan dengan posisi horizontal yang diinginkan */
            /* background-color: #19383d; Warna latar belakang */
            color: #fff;
            /* Warna teks */
            font-size: 24px;
            /* Ukuran huruf */
            padding: 5px 10px;
            /* Padding untuk ruang di sekitar huruf */
            border-radius: 50%;
            /* Membuat huruf menjadi lingkaran */
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
                <div class=" col-8 col-sm mb-3">
                    <div class="d-flex justify-content-sm-end">
                        <div class="search-box ms-2">
                            <input type="text" class="form-control search" placeholder="Search...">
                            <i class="ri-search-line search-icon"></i>
                        </div>
                    </div>
                </div>
            </div>

            <!-- end page title -->

            <div class="card mt-1">
                <div class="card-body">
                    <div class="row align-items-center g-2">
                        <div class="col-lg-3 me-auto">
                            <a href="{{ route('add.microsite') }}" type="button" class="btn btn-success btn-label"><i
                                    class="ri-add-line label-icon align-middle fs-lg"></i> Buat Baru</a>
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
                <div class="col-12">
                    <div class="card card-body" id="searchResults">
                        <div class="wrapper row  align-items-center">
                            <div class="avatar-md col-1">
                                <div class="avatar-title">
                                    <img src="{{ asset('template/themesbrand.com/steex/layouts/assets/images/sidebar/img-1.jpg') }}"
                                        style="width: 180%; height: 70%;" alt="Gambar">
                                    <div class="initials">{{ $row->name[0] }}</div>
                                </div>
                            </div>
                            <div class="wrapper col-8">
                                <h5 class="card-title">{{ $row->name }}</h5>
                                <p type="button"
                                    class="link-primary link-offset-2 text-decoration-underline link-underline-opacity-25 link-underline-opacity-100-hover card-text text-muted"
                                    id="copyText{{ $row->id }}"
                                    onclick="copyTextToClipboard('{{ $row->link_microsite }}', 'copyText{{ $row->id }}')">
                                    {{ $short_urls->where('microsite_id', $row->id)->first()->default_short_url }}
                                </p>
                                <div id="customAlert" class="custom-alert">
                                    <span class="alert-text"></span>
                                </div>
                            </div>
                            <div class="wrapper col-3">
                                <div class="d-flex justify-content-between align-items-start">
                                    <div class="ml-auto">
                                        <button type="button" class="btn btn-primary btn-sm" data-bs-toggle="collapse"
                                            href="#collapseExample{{ $row->id }}" role="button" aria-expanded="true"
                                            aria-controls="collapseExample{{ $row->id }}">
                                            <i class="bi bi-bar-chart-fill"></i> statistik
                                        </button>
                                        <a href="{{ route('edit.microsite', ['id' => $row->id]) }}"
                                            class="btn btn-primary btn-sm"><i class="bi bi-pencil-square"></i>
                                            Edit</a>
                                        <a href="#" class="btn btn-primary btn-sm"><i
                                                class="bi bi-share-fill"></i></a>
                                    </div>
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
                </div><!-- end col -->
            @endforeach

            <div></div>
        </div>
        <!-- container-fluid -->
    </div>
    </div>
@endsection

@section('script')
    {{-- @foreach ($urlshort as $row)
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
@endforeach --}}
    <script src="{{ asset('template/themesbrand.com/steex/layouts/assets/js/pages/form-wizard.init.js') }}"></script>

    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
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
    <script>
        $(document).ready(function() {
            $("button.btn").click(function() {
                var buttonId = $(this).attr("id");
                $.ajax({
                    type: "POST",
                    url: "{{ route('create.microsite') }}",
                    data: {
                        button_id: buttonId
                    },
                    success: function(response) {
                        console.log(response);
                    },
                    error: function(xhr, status, error) {
                        console.error(error);
                    }
                });
            });
        });
    </script>
    <script>
        $(document).ready(function() {
            $(".btn").click(function() {
                var buttonValue = $(this).attr("data-button-value");

                var checkbox = $("input[type='checkbox'][value='" + buttonValue + "']");

                if (checkbox.is(":checked")) {
                    checkbox.prop("checked", false);
                } else {
                    checkbox.prop("checked", true);
                }
            });
        });
    </script>
    <script>
        function toggleCardHover(cardId) {
            const card = document.getElementById(cardId);
            card.classList.toggle('hover');
        }
    </script>

    <script>
        function toggleCardHover(cardId) {
            const card = document.getElementById(cardId);
            card.classList.toggle('hover');
        }
    </script>

    <script>
        // Fungsi untuk melakukan validasi sebelum submit
        function validateForm() {
            var activeTab = $('.tab-pane.active'); // Dapatkan tab yang sedang aktif
            var inputs = activeTab.find(
                'input[type="text"], input[type="radio"], input[type="checkbox"], select'
            ); // Dapatkan semua input dalam tab yang aktif

            // Periksa apakah ada input yang belum diisi
            var invalidInputs = inputs.filter(function() {
                // Periksa input radio yang dipilih
                if ($(this).attr('type') == 'radio') {
                    var groupName = $(this).attr('name');
                    return $('input[name="' + groupName + '"]:checked').length === 0;
                }

                // Periksa input checkbox yang dipilih
                if ($(this).attr('type') == 'checkbox') {
                    return !$(this).is(':checked');
                }

                // Periksa input teks yang kosong
                if ($(this).is('select')) {
                    return $(this).val() === null;
                }

                return $.trim($(this).val()) === '';
            });

            // Jika ada input yang belum diisi, tampilkan alert
            if (invalidInputs.length > 0) {
                alert('Silakan isi semua data yang diperlukan sebelum melanjutkan.');
                // Aktifkan tab pertama
                $('.nav-link:first').tab('show');
                return false; // Mencegah pengiriman form
            }

            return true; // Submit form jika semua input telah diisi
        }
    </script>
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

@endsection
