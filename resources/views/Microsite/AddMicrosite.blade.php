@extends('layout.user.app')
@section('title', 'Microsite')

@section('style')
    <style>
        .hover {
            border: 0.5px solid black;
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
                            <form action="{{ route('create.microsite') }}" class="vertical-navs-step" method="POST">
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
                                                                <div class="card">
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
                                                                                <img src="{{ asset('component/' . $microsite->profile_img) }}"
                                                                                    alt=""
                                                                                    class="avatar-lg rounded-circle object-fit-cover border-0 img-thumbnail user-profile-image">
                                                                            </div>
                                                                        </div>
                                                                        <div class="text-center mt-3">
                                                                            <label class="form-check-label">
                                                                                <input type="radio"
                                                                                    name="microsite_selection"
                                                                                    value="{{ $microsite->id }}"
                                                                                    class="form-check-input">
                                                                                Pilih jenis microsite {{ $microsite->name }}
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
                                                            <div class="col-12">
                                                                <label for="address" class="form-label">Tautan
                                                                    Microsite</label>
                                                                <div class="input-group">
                                                                    <button type="button"
                                                                        class="btn btn-danger bg-gradient">link.id/</button>
                                                                    <input type="text" class="form-control"
                                                                        id="address" placeholder="aqua-link"
                                                                        name="link_microsite">
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
                                                                <div class="card" id="{{ $data->id }}">
                                                                    <div class="card-footer text-center ">
                                                                        <div
                                                                            class="d-flex align-items-center justify-content-end">
                                                                            <label class="mb-0 me-2 ">
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
                                                            data-nexttab="v-pills-finish-tab"><i
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


@endsection
