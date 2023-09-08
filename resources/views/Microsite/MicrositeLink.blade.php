@extends('layout.guest.app')
@section('title', 'Example Microsite Name')
@section('style')
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
        <div class="card-body">
            <div class="card-body">
                <div class="mt-n5 text-center mb-4">
                    <img src="{{ asset('template/themesbrand.com/steex/layouts/assets/images/users/avatar-5.jpg') }}"
                        alt="" class="avatar-xl rounded-circle p-1 mt-n3 mx-auto">
                </div>
            </div>

            <!-- start page title -->
            <div class="row">
                <div class="d-flex justify-content-center col-12">
                    <div class="page-title fw-bold d-sm-flex align-items-center">
                        <h4 class="mb-sm-0">{{$accessMicrosite->name}}</h4>
                    </div>
                </div>
                <div class="d-flex justify-content-center col-12">
                    <p class="text-muted mb-4">Welcome to my own microsite</p>
                </div>
            </div>
            <!-- end page title -->

            <a href="https://myanimelist.net/anime/48316/Kage_no_Jitsuryokusha_ni_Naritakute">
                <div class="row">
                    <div align="center">
                        <div class="col-md-4 mb-3">
                            <a href="https://myanimelist.net/anime/48316/Kage_no_Jitsuryokusha_ni_Naritakute"
                                target="_blank">
                                <div class="card card-animate">
                                    <div class="card-body">
                                        <div class="row align-items-center">
                                            <div class="col-2">
                                                <div class="position-relative d-inline-block">
                                                    <img src="{{ asset('template/themesbrand.com/steex/layouts/assets/images/users/avatar-6.jpg') }}"
                                                        alt="" class="avatar-md rounded">
                                                </div>
                                            </div>
                                            <div style="margin-left: 5%" class="col-8">
                                                <div class="d-flex align-items-center">
                                                    <h6 class="fs-md my-2">Example Name 1</h6>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </a>
                        </div>
                        <div class="col-md-4 mb-3">
                            <a href="https://myanimelist.net/anime/48316/Kage_no_Jitsuryokusha_ni_Naritakute"
                                target="_blank">
                                <div class="card card-animate">
                                    <div class="card-body">
                                        <div class="row align-items-center">
                                            <div class="col-2">
                                                <div class="position-relative d-inline-block">
                                                    <img src="{{ asset('template/themesbrand.com/steex/layouts/assets/images/users/avatar-3.jpg') }}"
                                                        alt="" class="avatar-md rounded">
                                                </div>
                                            </div>
                                            <div style="margin-left: 5%" class="col-8">
                                                <div class="d-flex align-items-center">
                                                    <h6 class="fs-md my-2">Example Name 2</h6>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </a>
                        </div>
                        <div class="col-md-4 mb-3">
                            <a href="https://myanimelist.net/anime/48316/Kage_no_Jitsuryokusha_ni_Naritakute"
                                target="_blank">
                                <div class="card card-animate">
                                    <div class="card-body">
                                        <div class="row align-items-center">
                                            <div class="col-2">
                                                <div class="position-relative d-inline-block">
                                                    <img src="{{ asset('template/themesbrand.com/steex/layouts/assets/images/users/avatar-7.jpg') }}"
                                                        alt="" class="avatar-md rounded">
                                                </div>
                                            </div>
                                            <div style="margin-left: 5%" class="col-8">
                                                <div class="d-flex align-items-center">
                                                    <h6 class="fs-md my-2">Example Name 3</h6>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </a>
                        </div>
                        <div class="col-xxl-4">
                            <div class="card-body d-flex justify-content-center">
                                <ul class="d-flex align-items-center gap-2 list-unstyled mt-4">
                                    <li class="mb-3">
                                        <a href="#!" class="btn btn-subtle-success btn-icon btn-lg"><i
                                                class="bi bi-whatsapp fs-2"></i></a>
                                    </li>
                                    <li class="mb-3">
                                        <a href="#!" class="btn btn-subtle-primary btn-icon btn-lg"><i
                                                class="bi bi-facebook fs-2"></i></a>
                                    </li>
                                    <li class="mb-3">
                                        <a href="#addInstructor" class="btn btn-subtle-secondary btn-icon btn-lg" data-bs-toggle="modal" data-share-id="9"><i
                                                class="bi bi-share-fill fs-2"></i></a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </a>
        </div>
    </div>
    <div class="modal fade" id="addInstructor" tabindex="-1" aria-labelledby="addInstructorModalLabel" aria-hidden="true">
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
        <!-- modal-content -->
    </div>
</div><!--end modal-->
</div>