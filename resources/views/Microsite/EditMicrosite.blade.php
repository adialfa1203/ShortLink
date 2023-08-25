@extends('layout.user.app')
@section('title', 'Edit Microsite')

@section('content')
    <div class="page-content">
        <div class="container-fluid">

            <!-- start page title -->
            <div class="row">
                <div class="col-12">
                    <div class="page-title-box d-sm-flex align-items-center justify-content-between">
                        <h4 class="mb-sm-0">Edit Microsite</h4>
                    </div>
                </div>
            </div>
            <!-- end page title -->

            <form action="{{ route('update.microsite', ['id' => $row->id])) }}" method="post" class="row">
                <div class="col-xxl-9">
                    <div class="card">
                        <div class="card-body">
                            <ul class="nav nav-pills animation-nav nav-justified gap-2 mb-3" role="tablist">
                                <li class="nav-item ">
                                    <a class="nav-link active" data-bs-toggle="tab" href="#animation-home" role="tab">
                                        Komponen
                                    </a>
                                </li>
                                <li class="nav-item ">
                                    <a class="nav-link" data-bs-toggle="tab" href="#animation-profile" role="tab">
                                        Pengaturan
                                    </a>
                                </li>
                            </ul>
                            <div class="tab-content text-muted">
                                <div class="tab-pane active" id="animation-home" role="tabpanel">
                                    <div action="">
                                        <div class="mb-3">
                                            <label for="employeeName" class="form-label">Nama Profile</label>
                                            <input type="text" class="form-control" id="employeeName"
                                                placeholder="Placeholder" required name="name">
                                        </div>
                                        <div class="mb-3">
                                            <label class="form-label">Deskripsi Profil</label>
                                            <input class="ckeditor-classic" required name="description">
                                        </div>
                                        <div class="mb-3">
                                            <div class="card-body">
                                                <div class="accordion" id="default-accordion-example">
                                                    <div class="accordion-item">
                                                        <h2 class="accordion-header" id="headingOne">
                                                            <button class="accordion-button collapsed" type="button"
                                                                data-bs-toggle="collapse" data-bs-target="#collapseOne"
                                                                aria-expanded="false" aria-controls="collapseOne">
                                                                Link : WhatsApp
                                                            </button>
                                                        </h2>
                                                        <div id="collapseOne" class="accordion-collapse collapse"
                                                            aria-labelledby="headingOne"
                                                            data-bs-parent="#default-accordion-example">
                                                            <div class="accordion-body">
                                                                <div class="col-xxl-12">
                                                                    <div>
                                                                        <label for="placeholderInput"
                                                                            class="form-label">WhatsApp</label>
                                                                        <input type="text" class="form-control"
                                                                            id="placeholderInput" placeholder="Placeholder">
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="accordion-item">
                                                        <h2 class="accordion-header" id="headingTwo">
                                                            <button class="accordion-button collapsed" type="button"
                                                                data-bs-toggle="collapse" data-bs-target="#collapseTwo"
                                                                aria-expanded="false" aria-controls="collapseTwo">
                                                                Link : Email
                                                            </button>
                                                        </h2>
                                                        <div id="collapseTwo" class="accordion-collapse collapse"
                                                            aria-labelledby="headingTwo"
                                                            data-bs-parent="#default-accordion-example">
                                                            <div class="accordion-body">
                                                                <div class="col-xxl-12">
                                                                    <div>
                                                                        <label for="placeholderInput"
                                                                            class="form-label">Email</label>
                                                                        <input type="text" class="form-control"
                                                                            id="placeholderInput" placeholder="Placeholder">
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="accordion-item">
                                                        <h2 class="accordion-header" id="headingThree">
                                                            <button class="accordion-button collapsed" type="button"
                                                                data-bs-toggle="collapse" data-bs-target="#collapseThree"
                                                                aria-expanded="false" aria-controls="collapseThree">
                                                                Link : Linkedin
                                                            </button>
                                                        </h2>
                                                        <div id="collapseThree" class="accordion-collapse collapse"
                                                            aria-labelledby="headingThree"
                                                            data-bs-parent="#default-accordion-example">
                                                            <div class="accordion-body">
                                                                <div class="col-xxl-12">
                                                                    <div>
                                                                        <label for="placeholderInput"
                                                                            class="form-label">Linkedin</label>
                                                                        <input type="text" class="form-control"
                                                                            id="placeholderInput"
                                                                            placeholder="Placeholder">
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="accordion-item">
                                                        <h2 class="accordion-header" id="headingFour">
                                                            <button class="accordion-button collapsed" type="button"
                                                                data-bs-toggle="collapse" data-bs-target="#collapseFour"
                                                                aria-expanded="false" aria-controls="collapseFour">
                                                                Tulis Nama Perusahaan Anda Disini!
                                                            </button>
                                                        </h2>
                                                        <div id="collapseFour" class="accordion-collapse collapse"
                                                            aria-labelledby="headingFour"
                                                            data-bs-parent="#default-accordion-example">
                                                            <div class="accordion-body">
                                                                <div class="col-xxl-12">
                                                                    <div>
                                                                        <label for="placeholderInput"
                                                                            class="form-label">Nama Perusahaan</label>
                                                                        <input type="text" class="form-control"
                                                                            id="placeholderInput"
                                                                            placeholder="Placeholder">
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="accordion-item">
                                                        <h2 class="accordion-header" id="headingFive">
                                                            <button class="accordion-button collapsed" type="button"
                                                                data-bs-toggle="collapse" data-bs-target="#collapseFive"
                                                                aria-expanded="false" aria-controls="collapseFive">
                                                                Tulis Alamat Perusahaan Anda Disini!
                                                            </button>
                                                        </h2>
                                                        <div id="collapseFive" class="accordion-collapse collapse"
                                                            aria-labelledby="headingFive"
                                                            data-bs-parent="#default-accordion-example">
                                                            <div class="accordion-body">
                                                                <div class="col-xxl-12">
                                                                    <div>
                                                                        <label for="placeholderInput"
                                                                            class="form-label">Alamat Perusahaan</label>
                                                                        <input type="text" class="form-control"
                                                                            id="placeholderInput"
                                                                            placeholder="Placeholder">
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div><!-- end card -->
                                    </div>
                                </div>
                                <div class="tab-pane" id="animation-profile" role="tabpanel">
                                        <div class="d-flex">
                                            <div class="flex-grow-1 ms-2">
                                                <div>
                                                    <div class="row g-3">
                                                        <div class="col-12">
                                                            <label for="address" class="form-label">Nama
                                                                Microsite</label>
                                                            <input type="text" class="form-control" id="address"
                                                                placeholder="aqua-link" value="{{ $microsite->name }}">
                                                        </div>
                                                        <div class="col-12">
                                                            <label for="address" class="form-label">Tautan
                                                                Microsite</label>
                                                            <div class="input-group">
                                                                <input type="text" class="form-control" id="address"
                                                                    placeholder="aqua-link"
                                                                    value="{{ $microsite->link_microsite }}">
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                </div>
                            </div>
                        </div><!-- end card-body -->
                    </div>
                </div>
                <div class="col-lg-3">
                    <div class="card real-estate-grid-widgets card-animate">
                        <div class="card overflow-hidden">
                            <div>
                                <img src="{{ asset('component/' . $component->cover_img) }}" alt=""
                                    class="card-img-top profile-wid-img object-fit-cover" style="height: 200px;">
                            </div>
                            <div class="card-body pt-0 mt-n5">
                                <div class="text-center">
                                    <div class="profile-user position-relative d-inline-block mx-auto">
                                        <img src="{{ asset('component/' . $component->profile_img) }}" alt=""
                                            class="avatar-lg rounded-circle object-fit-cover border-0 img-thumbnail user-profile-image">
                                    </div>
                                    <div class="mt-3">
                                        <h5>Nama Profil<i class="align-baseline text-info ms-1"></i>
                                        </h5>
                                        <p class="text-muted">Deskripsi Profil</p>
                                    </div>
                                </div>
                            </div>
                            <div class="card-body border-top">
                                <div class="d-flex align-items-center text-center mb-4">
                                    <div class="flex-grow-1">
                                        <button type="button" class="btn ms-2 btn-subtle-success btn-icon"><i
                                                class="bi bi-whatsapp"></i></button>
                                        <button type="button" class="btn ms-2 btn-subtle-warning btn-icon"><i
                                                class="bi bi-envelope"></i></button>
                                        <button type="button" class="btn ms-2 btn-subtle-primary btn-icon"><i
                                                class="bi bi-linkedin"></i></button>
                                    </div>
                                </div>
                                <button type="button" class="col-12 mb-2 btn btn-success btn-label rounded-pill"
                                    data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true"
                                    aria-controls="collapseOne"><i
                                        class="bi bi-whatsapp label-icon align-middle rounded-pill fs-lg me-2"></i>
                                    WhatsApp</button>
                                <button type="button" class="col-12 mb-2 btn btn-warning btn-label rounded-pill"
                                    data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="true"
                                    aria-controls="collapseTwo"><i
                                        class="bi bi-envelope label-icon align-middle rounded-pill fs-lg me-2"></i>
                                    Email</button>
                                <button type="button" class="col-12 mb-2 btn btn-primary btn-label rounded-pill"
                                    data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="false"
                                    aria-controls="collapseThree"><i
                                        class="bi bi-linkedin label-icon align-middle rounded-pill fs-lg me-2"></i>
                                    Linkedin</button>
                                <div class="card card-body text-center">
                                    <h4 type="button" class="card-title" data-bs-toggle="collapse"
                                        data-bs-target="#collapseFour" aria-expanded="false"
                                        aria-controls="collapseFour">Nama Perusahaan Anda</h4>
                                    <p type="button" class="card-text text-muted" data-bs-toggle="collapse"
                                        data-bs-target="#collapseFive" aria-expanded="false"
                                        aria-controls="collapseFive">Alamat Perusahaan Anda </p>
                                </div>
                            </div>
                        </div><!--end card-->
                    </div><!--end col-->
                </div>
            </form>
            <!-- container-fluid -->
        </div>
    @endsection

    @section('script')
        <!-- dropzone js -->
        <script src="{{ asset('template/themesbrand.com/steex/layouts/assets/libs/dropzone/dropzone-min.js') }}"></script>

        <!--real estate list init js -->
        <script src="{{ asset('template/themesbrand.com/steex/layouts/assets/js/pages/real-estate-add-property.init.js') }}">
        </script>

        <!-- ckeditor -->
        <script
            src="{{ asset('template/themesbrand.com/steex/layouts/assets/libs/%40ckeditor/ckeditor5-build-classic/build/ckeditor.js') }}">
        </script>

        <!-- init js -->
        <script src="{{ asset('template/themesbrand.com/steex/layouts/assets/js/pages/form-editor.init.js') }}"></script>

        <script src="{{ asset('template/themesbrand.com/steex/layouts/assets/js/app.js') }}"></script>
    @endsection
