@extends('layout.guest.app')
@section('title', 'Example Microsite Name')
@section('style')
<script src="https://cdn.ckeditor.com/ckeditor5/39.0.1/classic/ckeditor.js"></script>
<style>
    .body {
        background-color: #e7e7e7 !important;
    }

    .card-body {
        padding: 0 !important;
    }
</style>
@endsection
<div class="page-content">
    <div class="container-fluid">
        <center>
            <div class="card real-estate-grid-widgets card-animate" style="width: 50%; ">
                <div class="card overflow-hidden">
                    <div>
                        <img src="{{ asset('component/' . $accessMicrosite->component->cover_img) }}" alt="" class="card-img-top profile-wid-img object-fit-cover" style="height: 200px;">
                    </div>
                    <div class="card-body pt-0 mt-n5">
                        <div class="text-center">
                            {{-- <div class="profile-user position-relative d-inline-block mx-auto">
                                <img src="{{ asset(Auth::user()->profile_picture ? 'storage/' . Auth::user()->profile_picture : 'profile_pictures/default.jpg') }}" alt="{{ Auth::user()->name }}" alt="" class="avatar-lg rounded-circle object-fit-cover border-0 img-thumbnail user-profile-image">
                            </div> --}}
                            <div class="mt-3">
                                <h5>{{$accessMicrosite->name}}<i class="align-baseline text-info ms-1"></i>
                                </h5>
                                <p class="text-muted">{!! $accessMicrosite->description !!}</p>
                            </div>
                        </div>
                    </div>
                    <div class="card-body border-top">
                        <div class="d-flex flex-wrap justify-content-center text-center mb-4">
                            <div class="mb-2 mx-2">
                                <button style="background-color: {{ $social->button->color_hex }};" type="button" class="btn btn-icon"><i class="{{ $social->button->icon }} " style="color:white;"></i>
                                </button>
                            </div>
                        </div>
                        <button type="button" class="col-12 mb-2 btn btn-label rounded-pill" style="color: white; background-color: {{ $social->button->color_hex }}" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne"><i style="color: white" class="{{ $social->button->icon }} label-icon align-middle rounded-pill fs-lg me-2"></i>
                            {{ $social->button->name_button }} </button>
                        <div class="card card-body text-center">
                            <h4 type="button" class="card-title" data-bs-toggle="collapse" data-bs-target="#collapseFour" aria-expanded="false" aria-controls="collapseFour">{{ $accessMicrosite->company_name }}</h4>
                            <p type="button" class="card-text text-muted" data-bs-toggle="collapse" data-bs-target="#collapseFive" aria-expanded="false" aria-controls="collapseFive">{{ $accessMicrosite->company_address }} </p>
                        </div>
                    </div>

                </div><!--end card-->
            </div><!--end col-->
        </center>
    </div>
    <!-- <div class="modal fade" id="addInstructor" tabindex="-1" aria-labelledby="addInstructorModalLabel" aria-hidden="true">
        <div class="modal-dialog">
        <div class="modal-content border-0">
            <div class="modal-header">
                <h1 class="modal-title fw-semibold fs-2" id="addInstructorModalLabel">Share Microsite</h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"
                    id="close-addInstructorModal"></button>
            </div>
            <form class="tablelist-form" novalidate autocomplete="off">
                <div class="modal-body">
                    <div id="alert-error-msg" class="d-none alert alert-danger py-2"></div>
                    <input type="hidden" id="id-field">
                    <input type="hidden" id="rating-field">
                    <div class="row">
                        <div class="col-12 mb-4 justify-content-center">
                            <div class="mb-3">
                                <div class="card">
                                    <img class="w-50 h-50" style="margin-left: 25%;" src="{{ asset('landingpage/images/QR code.svg') }}" alt="">
                                </div>
                                <div class="mb-3">
                                    <p class="text-muted text-center">https://link.id/SSWQF</p>
                                </div>
                                <div class="mb-3 text-center">
                                    <button type="button" class="btn btn-subtle-danger btn-label "><i class="bi bi-download label-icon align-middle fs-lg me-2 "></i>Download</button>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-12">
                            <div class="mb-3">
                                <button type="button" class="fw-bold card-animate btn btn-light btn-label col-12"><i class="bi bi-link-45deg label-icon align-middle fs-lg me-2"></i>Buat Micrositemu sendiri</button>
                            </div>
                        </div>
                        <div class="col-lg-12">
                            <div class="mb-3">
                                <button type="button" class="card-animate btn btn-light btn-label col-12"><i class="bi bi-facebook label-icon align-middle fs-lg me-2"></i>Facebook</button>
                            </div>
                        </div>
                        <div class="col-lg-12">
                            <div class="mb-3">
                                <button type="button" class="card-animate btn btn-light btn-label col-12"><i class="bi bi-twitter label-icon align-middle fs-lg me-2"></i>Twitter</button>
                            </div>
                        </div>
                        <div class="col-lg-12">
                            <div class="mb-3">
                                <button type="button" class="card-animate btn btn-light btn-label col-12"><i class="bi bi-whatsapp label-icon align-middle fs-lg me-2"></i>Whatsapp</button>
                            </div>
                        </div>
                        <div class="col-lg-12">
                            <div class="mb-3">
                                <button type="button" class="card-animate btn btn-light btn-label col-12"><i class="bi bi-clipboard-fill label-icon align-middle fs-lg me-2"></i> Copy Url</button>
                            </div>
                        </div>
                    </div>
            </form>
        </div>
    </div> -->
</div><!--end modal-->
</div>
@section('script')
<script>
    ClassicEditor
        .create(document.querySelector('#editor'))
        .catch(error => {
            console.error(error);
        });
</script>
<!-- dropzone js -->
<script src="{{ asset('template/themesbrand.com/steex/layouts/assets/libs/dropzone/dropzone-min.js') }}"></script>

<!--real estate list init js -->
<script src="{{ asset('template/themesbrand.com/steex/layouts/assets/js/pages/real-estate-add-property.init.js') }}">
</script>

<!-- ckeditor -->
<script src="{{ asset('template/themesbrand.com/steex/layouts/assets/libs/%40ckeditor/ckeditor5-build-classic/build/ckeditor.js') }}">
</script>
<!-- profile-setting init js -->
<script src="{{ asset('template/themesbrand.com/steex/layouts/assets/js/pages/profile-setting.init.js') }}"></script>
<!-- init js -->
<script src="{{ asset('template/themesbrand.com/steex/layouts/assets/js/pages/form-editor.init.js') }}"></script>

<script src="{{ asset('template/themesbrand.com/steex/layouts/assets/js/app.js') }}"></script>
@endsection
