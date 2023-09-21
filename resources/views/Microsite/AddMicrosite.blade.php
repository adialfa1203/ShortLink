@extends('layout.user.app')

@section('title', 'Microsite')
@section('style')
    <style>
        /* CSS untuk hover card */
        .hover {
            background-color: #f8f8f8;
            transform: scale(1.05);
            transition: background-color 0.3s, transform 0.3s;
        }
    </style>

@endsection

@section('style')
    <style>
        .hover {
            border: 0.5px solid black;
        }

        /* Untuk mengurangi jarak antara ikon panah dan teks */
        .btn.btn-label.previetab {
            padding-right: 1px;
            /* Sesuaikan padding kanan sesuai kebutuhan */
        }

        .btn.btn-label.nexttab {
            padding-left: 5px;
            /* Sesuaikan padding kiri sesuai kebutuhan */
        }

        .hover {
            background-color: lightgray;
        }

        .hide-radio {
            display: none;
        }

        .radio-button {
            display: inline-block;
            width: 16px;
            height: 16px;
            border: 1px solid #ccc;
            border-radius: 50%;
            cursor: pointer;
            background-color: #fff;
        }

        .hidden-radio:checked+.radio-button {
            background-color: #ccc;
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
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-xl-12">
                    <div class="card">
                        <div class="card-header">
                            <h4 class="card-title mb-0">Buat Microsite Baru</h4>
                        </div><!-- end card header -->
                        <div class="card-body form-steps">
                            <form action="{{ route('create.microsite') }}" class="vertical-navs-step needs-validation"
                                novalidate method="POST">
                                @csrf
                                <div class="row gy-5">
                                    <div class="col-lg-3">
                                        <div class="nav flex-column custom-nav nav-pills" role="tablist"
                                            aria-orientation="vertical">
                                            <button class="nav-link active" id="v-pills-bill-info-tab" data-bs-toggle="pill"
                                                data-bs-target="#v-pills-bill-info" type="button" role="tab"
                                                aria-controls="v-pills-bill-info" aria-selected="true">
                                                <span class="step-title me-2">
                                                    <i class="ri-close-circle-fill step-icon me-2"></i> Tentukann jenis
                                                    microsite anda!
                                                </span>
                                            </button>
                                            <button class="nav-link" id="v-pills-bill-address-tab" data-bs-toggle="pill"
                                                data-bs-target="#v-pills-bill-address" type="button" role="tab"
                                                aria-controls="v-pills-bill-address" aria-selected="false">
                                                <span class="step-title me-2">
                                                    <i class="ri-close-circle-fill step-icon me-2"></i> Pilih nama anda!
                                                </span>
                                            </button>
                                            <button class="nav-link" id="v-pills-payment-tab" data-bs-toggle="pill"
                                                data-bs-target="#v-pills-payment" type="button" role="tab"
                                                aria-controls="v-pills-payment" aria-selected="false">
                                                <span class="step-title me-2">
                                                    <i class="ri-close-circle-fill step-icon me-2"></i> Pilih media sosial
                                                    anda!
                                                </span>
                                            </button>
                                            <button class="nav-link" id="v-pills-finish-tab" data-bs-toggle="pill"
                                                data-bs-target="#v-pills-finish" type="button" role="tab"
                                                aria-controls="v-pills-finish" aria-selected="false">
                                                <span class="step-title me-2">
                                                    <i class="ri-close-circle-fill step-icon me-2"></i> Kirim
                                                </span>
                                            </button>
                                        </div>
                                        <!-- end nav -->
                                    </div> <!-- end col-->

                                    <div class="col-lg-9">
                                        <div class="px-lg-4">
                                            <div class="tab-content">
                                                <div class="tab-pane fade show active" id="v-pills-bill-info"
                                                    role="tabpanel" aria-labelledby="v-pills-bill-info-tab">
                                                    <div>
                                                        <h5>Jenis Microsite</h5>
                                                        <p class="text-muted">Pilih jenis microsite yang cocok dengan
                                                            kebutuhan Anda!</p>
                                                    </div>
                                                    <div class="row">
                                                        @foreach ($data as $microsite)
                                                            <div class="col-xl-4 col-sm-6 mb-4">
                                                                <div class="card clickable-card"
                                                                    data-microsite-id="{{ $microsite->id }}">
                                                                    <div class="text-center">
                                                                        <div class="dropdown float-end">
                                                                            <a class="text-reset dropdown-btn"
                                                                                href="#" data-bs-toggle="dropdown"
                                                                                aria-haspopup="true" aria-expanded="false">
                                                                            </a>
                                                                        </div>
                                                                        <strong
                                                                            class="fs-md text-muted mb-0">{{ $microsite->name }}</strong>
                                                                    </div>
                                                                    <div>
                                                                        <img src="{{ asset('component/' . $microsite->cover_img) }}"
                                                                            alt=""
                                                                            class="card-img-top profile-wid-img object-fit-cover"
                                                                            style="height: 200px;">
                                                                    </div>
                                                                    <div class="card-body pt-0 mt-n5">
                                                                        <div class="text-center">
                                                                            <div
                                                                                class="profile-user position-relative d-inline-block mx-auto">
                                                                                <img src="{{ asset('template/themesbrand.com/steex/layouts/assets/images/users/default.jpg') }}"
                                                                                    alt=""
                                                                                    class="avatar-lg rounded-circle object-fit-cover border-0 img-thumbnail user-profile-image">
                                                                            </div>
                                                                        </div>
                                                                        <div class="text-center mt-3">
                                                                            <label class="form-check-label">
                                                                                <input type="radio"
                                                                                    id="tema{{ $microsite->id }}"
                                                                                    name="microsite_selection"
                                                                                    value="{{ $microsite->id }}"
                                                                                    class="form-check-input">&nbsp;
                                                                                {{ $microsite->component_name }}
                                                                            </label>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        @endforeach
                                                    </div>
                                                    <div class="d-flex align-items-start gap-3 mt-4">
                                                        <button type="button"
                                                            class="btn btn-success btn-label right ms-auto nexttab nexttab"
                                                            data-nexttab="v-pills-bill-address-tab"><i
                                                                class="ri-arrow-right-line label-icon align-middle fs-lg ms-2"></i>Selanjutnya</button>
                                                    </div>
                                                </div>
                                                <!-- end tab pane -->
                                                <div class="tab-pane fade" id="v-pills-bill-address" role="tabpanel"
                                                    aria-labelledby="v-pills-bill-address-tab">
                                                    <div>
                                                        <h5>Pilih Nama</h5>
                                                        <p class="text-muted">Buat nama dan link sesuai keinginan Anda!</p>
                                                    </div>
                                                    <div>
                                                        <div class="row g-2">
                                                            <div class="col-12">
                                                                <label for="address" class="form-label">Nama
                                                                    Microsite</label>
                                                                <input type="text" class="form-control" id="address"
                                                                    name="name" placeholder="aqua-link">
                                                            </div>
                                                            <div>
                                                                @if ($errors->has('name'))
                                                                    <span
                                                                        class="text-danger">{{ $errors->first('name') }}</span>
                                                                @endif
                                                            </div>
                                                            <div class="col-12">
                                                                <label for="address" class="form-label">Tautan
                                                                    Microsite</label>
                                                                <div class="input-group">
                                                                    <button type="button"
                                                                        class="btn btn-danger bg-gradient">Go.Link/</button>
                                                                    <input type="text" class="form-control"
                                                                        id="address" placeholder="aqua-link"
                                                                        name="link_microsite">
                                                                </div>
                                                                <div>
                                                                    @if ($errors->has('link_microsite'))
                                                                        <span
                                                                            class="text-danger">{{ $errors->first('link_microsite') }}</span>
                                                                    @endif
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="d-flex align-items-start gap-3 mt-4">
                                                        <button type="button" class="btn btn-light btn-label previestab"
                                                            data-previous="v-pills-bill-info-tab"><i
                                                                class="ri-arrow-left-line label-icon align-middle fs-lg me-2"></i>
                                                            Sebelumnya</button>
                                                        <button type="button"
                                                            class="btn btn-success btn-label right ms-auto nexttab nexttab"
                                                            data-nexttab="v-pills-payment-tab"><i
                                                                class="ri-arrow-right-line label-icon align-middle fs-lg ms-2"></i>Selanjutnya</button>
                                                    </div>
                                                </div>
                                                <!-- end tab pane -->
                                                <div class="tab-pane fade" id="v-pills-payment" role="tabpanel"
                                                    aria-labelledby="v-pills-payment-tab">
                                                    <div>
                                                        <h5>Sosial Media</h5>
                                                        <p class="text-muted">Pilih sosial media yang sering anda gunakan!
                                                        </p>
                                                    </div>
                                                    <div class="row">
                                                        @foreach ($button as $data)
                                                            <div class="col-xl-4 col-sm-6 mb-4">
                                                                <div class="card" id="{{ $data->id }}"
                                                                    data-card-id="{{ $data->id }}">
                                                                    <div class="card-footer text-center">
                                                                        <div
                                                                            class="d-flex align-items-center justify-content-end">
                                                                            <label class="mb-0 me-2">
                                                                                <input type="checkbox"
                                                                                    name="selectedButtons[]"
                                                                                    value="{{ $data->id }}"
                                                                                    class="checkbox"
                                                                                    style="display: none;">
                                                                            </label>
                                                                            <button
                                                                                style="background-color: {{ $data->color_hex }}; color: white;"
                                                                                type="button" name="button"
                                                                                value="{{ $data->name_button }}"
                                                                                class="col-xl-12 btn btn-label rounded-pill"
                                                                                data-button-value="{{ $data->id }}"
                                                                                onclick="toggleCardHover('{{ $data->id }}')">
                                                                                <i class="{{ $data->icon }} label-icon align-middle rounded-pill fs-lg me-2"
                                                                                    style="color: white;"></i>
                                                                                {{ $data->name_button }}
                                                                            </button>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        @endforeach
                                                    </div>
                                                    <div class="d-flex align-items-start gap-3 mt-4">
                                                        <button type="button" class="btn btn-light btn-label previestab"
                                                            data-previous="v-pills-bill-address-tab"><i
                                                                class="ri-arrow-left-line label-icon align-middle fs-lg me-2"></i>
                                                            Sebelumnya</button>
                                                        <button type="submit"
                                                            class="btn btn-success btn-label right ms-auto nexttab nexttab"
                                                            data-nexttab="v-pills-finish-tab"
                                                            onclick="return validateForm();"><i
                                                                class="ri-arrow-right-line label-icon align-middle fs-lg ms-2"></i>
                                                            Submit</button>
                                                    </div>
                                                </div>
                                                <div class="tab-pane fade" id="v-pills-finish" role="tabpanel"
                                                    aria-labelledby="v-pills-finish-tab">
                                                    <div class="text-center pt-4 pb-2">

                                                        <div class="mb-4">
                                                            <lord-icon src="https://cdn.lordicon.com/lupuorrc.json"
                                                                trigger="loop" colors="primary:#0ab39c,secondary:#405189"
                                                                style="width:120px;height:120px"></lord-icon>
                                                        </div>
                                                        <h5>Your Order is Completed !</h5>
                                                        <p class="text-muted">You Will receive an order confirmation email
                                                            with details of your order.</p>
                                                    </div>
                                                </div>
                                                <!-- end tab pane -->
                                            </div>
                                            <!-- end tab content -->
                                        </div>

                                    </div>
                                    <!-- end row -->
                            </form>
                        </div>
                    </div>
                    <!-- end -->
                </div>
                <!-- end col -->
            </div>
        </div>
    </div>
@endsection
@section('script')
    <script src="{{ asset('template/themesbrand.com/steex/layouts/assets/js/pages/form-wizard.init.js') }}"></script>

    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script>
        // Ambil semua elemen card
        const cards = document.querySelectorAll('.card');

        // Tambahkan event listener untuk setiap card
        cards.forEach(card => {
            card.addEventListener('click', function() {
                // Dapatkan ID microsite dari atribut data-kustom
                const micrositeId = this.getAttribute('data-microsite-id');

                // Dapatkan elemen radio button yang sesuai dengan ID microsite
                const radio = document.querySelector(`#tema${micrositeId}`);

                // Periksa apakah radio button sudah dipilih atau belum
                const isChecked = radio.checked;

                // Hapus efek hover dari card-card yang lain
                cards.forEach(otherCard => {
                    if (otherCard !== this) {
                        otherCard.classList.remove('hover');
                    }
                });

                // Toggle status radio button saat card diklik
                radio.checked = !isChecked;

                // Tambahkan atau hapus class 'hover' saat card diklik
                this.classList.toggle('hover');
            });
        });
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
        var selectedButtons = []; // Array untuk menyimpan ID sosial media yang dipilih

        function toggleCardHover(cardId) {
            var card = document.getElementById(cardId);
            var checkbox = $("input[type='checkbox'][value='" + cardId + "']");
            var cardElement = $(card);

            if (checkbox.is(":checked")) {
                checkbox.prop("checked", false);
                cardElement.removeClass("selected-card hover");
                cardElement.css("border", "none");

                // Hapus ID sosial media dari array selectedButtons
                var index = selectedButtons.indexOf(cardId);
                if (index !== -1) {
                    selectedButtons.splice(index, 1);
                }
            } else {
                if (selectedButtons.length >= 4) {
                    var firstSelectedButtonId = selectedButtons.shift(); // Hapus ID sosial media pertama dari array
                    var firstSelectedButton = document.getElementById(firstSelectedButtonId);
                    var firstSelectedCheckbox = $("input[type='checkbox'][value='" + firstSelectedButtonId + "']");
                    firstSelectedCheckbox.prop("checked", false);
                    $(firstSelectedButton).removeClass("selected-card hover");
                    $(firstSelectedButton).css("border", "none");
                }

                checkbox.prop("checked", true);
                cardElement.addClass("selected-card hover");
                cardElement.css("border", "1px solid black");

                // Tambahkan ID sosial media ke array selectedButtons
                selectedButtons.push(cardId);
            }
        }
    </script>
    <script src="sweetalert2.all.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <script>
        function validateForm() {
            // Validasi langkah pertama
            var micrositeSelection = document.querySelector('input[name="microsite_selection"]:checked');
            if (!micrositeSelection) {
                Swal.fire({
                    text: 'Silakan pilih jenis microsite yang cocok dengan kebutuhan Anda!',
                    onClose: function() {
                        // Mengarahkan kembali ke halaman awal tab
                        document.getElementById('v-pills-bill-info-tab').click();
                    }
                }).then(function() {
                    setTimeout(function() {
                        location.reload(); // Memuat ulang halaman setelah pengguna menekan "OK"
                    }, 0);
                });
                return false;
            }

            // Validasi langkah kedua
            var micrositeName = document.getElementById("address").value;
            var micrositeLink = document.getElementById("address").value;
            if (micrositeName.trim() === "" || micrositeLink.trim() === "") {
                Swal.fire({
                    text: 'Silakan isi nama dan tautan microsite sesuai keinginan Anda!',
                    onClose: function() {
                        // Mengarahkan kembali ke halaman awal tab
                        document.getElementById('v-pills-bill-info-tab').click();
                    }
                }).then(function() {
                    setTimeout(function() {
                        location.reload(); // Memuat ulang halaman setelah pengguna menekan "OK"
                    }, 0);
                });
                return false;
            }

            // Validasi langkah ketiga
            var selectedButtons = document.querySelectorAll('input[name="selectedButtons[]"]:checked');
            if (selectedButtons.length === 0) {
                Swal.fire({
                    text: 'Silakan pilih setidaknya satu sosial media!',
                    onClose: function() {
                        // Mengarahkan kembali ke halaman awal tab
                        document.getElementById('v-pills-bill-info-tab').click();
                    }
                }).then(function() {
                    setTimeout(function() {
                        location.reload(); // Memuat ulang halaman setelah pengguna menekan "OK"
                    }, 0);
                });
                return false;
            }

            // Semua input telah valid, lanjutkan dengan menyimpan data
            // ...

            return true;
        }
    </script>

@endsection
