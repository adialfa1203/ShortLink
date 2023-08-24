@extends('layout.user.app')
@section('title', 'Komponen Baru')

@section('content')
    <form action="{{ Route('save.component') }}" method="POST" enctype="multipart/form-data" class="page-content">
        @csrf
        <div class="container-fluid">

            <!-- start page title -->
            <div class="row">
                <div class="col-12">
                    <div class="page-title-box d-sm-flex align-items-center justify-content-between">
                        <h4 class="mb-sm-0">Tambah Komponen</h4>
                    </div>
                </div>
            </div>
            <!-- end page title -->
            <div class="row">
                <div class="card">

                    <div class="card-body">
                        <div class="row">
                            <div class="col-lg-12">
                                <div class="mb-3">
                                    <label for="designationInput" class="form-label">Nama Komponen</label>
                                    <input type="text" class="form-control" id="designationInput"
                                        placeholder="Designation" name="component_name">
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="card-body">
                        <div class="row">
                            <div class="col-xxl-12">
                                <div class="card overflow-hidden">
                                    <div>
                                        <img src="{{ asset('template/themesbrand.com/steex/layouts/assets/images/small/img-7.jpg') }}"
                                            alt="" class="card-img-top profile-wid-img object-fit-cover"
                                            style="height: 200px;">
                                        <div>
                                            <input id="profile-foreground-img-file-input" type="file"
                                                class="profile-foreground-img-file-input d-none" name="cover_img">
                                            <label for="profile-foreground-img-file-input"
                                                class="profile-photo-edit btn btn-light btn-sm position-absolute end-0 top-0 m-3">
                                                <i class="ri-image-edit-line align-bottom me-1"></i> Edit Gambar Cover
                                            </label>
                                        </div>
                                    </div>
                                    <div class="card-body pt-0 mt-n5">
                                        <div class="text-center">
                                            <div class="profile-user position-relative d-inline-block mx-auto">
                                                <img src="{{ asset('template/themesbrand.com/steex/layouts/assets/images/users/avatar-1.jpg') }}"
                                                    alt=""
                                                    class="avatar-lg rounded-circle object-fit-cover border-0 img-thumbnail user-profile-image">
                                                <div
                                                    class="avatar-xs p-0 rounded-circle profile-photo-edit position-absolute end-0 bottom-0">
                                                    <input id="profile-img-file-input" type="file"
                                                        class="profile-img-file-input d-none" name="profile_img">
                                                    <label for="profile-img-file-input"
                                                        class="profile-photo-edit avatar-xs">
                                                        <span class="avatar-title rounded-circle bg-light text-body">
                                                            <i class="bi bi-camera"></i>
                                                        </span>
                                                    </label>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="d-flex align-items-start gap-3 mt-4">
                                <button type="submit" class="btn btn-success right ms-auto">Kirim</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </form>
@endsection
@section('script')
    <!-- password-create init -->
    <script src="{{ asset('template/themesbrand.com/steex/layouts/assets/js/pages/passowrd-create.init.js') }}"></script>

    <!-- profile-setting init js -->
    <script src="{{ asset('template/themesbrand.com/steex/layouts/assets/js/pages/profile-setting.init.js') }}"></script>
@endsection
