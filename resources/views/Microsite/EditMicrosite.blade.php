@extends('layout.user.app')
@section('title', 'Edit Microsite')

@section('style')
    <script src="https://cdn.ckeditor.com/ckeditor5/39.0.1/classic/ckeditor.js"></script>
@endsection

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

            <form action="{{ route('update.microsite', ['id' => $id]) }}" method="post" class="row">
                @csrf
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
                                    <div>
                                        <div class="mb-3">
                                            <label for="employeeName" class="form-label">Nama Profile</label>
                                            <input type="text" class="form-control" id="employeeName"
                                                placeholder="Nama Profile" value="{{ $microsite->name_microsite }}"
                                                name="name_microsite">
                                            <div>
                                                @if ($errors->has('name_microsite'))
                                                    <span class="text-danger">{{ $errors->first('name_microsite') }}</span>
                                                @endif
                                            </div>
                                        </div>
                                        <textarea name="description" id="editor">{{ $microsite->description }}</textarea>
                                        <div>
                                            @if ($errors->has('description'))
                                                <span class="text-danger">{{ $errors->first('description') }}</span>
                                            @endif
                                        </div>
                                        <div class="mb-3">
                                            <div class="card-body">
                                                <div class="accordion" id="default-accordion-example">
                                                    @foreach ($social as $data)
                                                        <div class="accordion-item">
                                                            <h2 class="accordion-header" id="headingOne">
                                                                <button class="accordion-button collapsed" type="button"
                                                                    data-bs-toggle="collapse"
                                                                    data-bs-target="#{{ $data->button->name_button }}"
                                                                    aria-expanded="false"
                                                                    aria-controls="{{ $data->button->name_button }}">
                                                                    {{ $data->button->name_button }}
                                                                </button>
                                                            </h2>
                                                            <div id="{{ $data->button->name_button }}"
                                                                class="accordion-collapse collapse"
                                                                aria-labelledby="headingOne"
                                                                data-bs-parent="#default-accordion-example">
                                                                <div class="accordion-body">
                                                                    <div class="col-xxl-12">
                                                                        <div>
                                                                            <label for="placeholderInput"
                                                                                class="form-label">{{ $data->button->name_button }}</label>
                                                                            <input type="text" class="form-control"
                                                                                id="placeholderInput"
                                                                                placeholder="Placeholder"
                                                                                name="button_link[{{ $data->button->id }}]"
                                                                                value="{{ $data->button_link }}">
                                                                            <div>
                                                                                @if ($errors->has('button_link'))
                                                                                    <span
                                                                                        class="text-danger">{{ $errors->first('button_link') }}</span>
                                                                                @endif
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    @endforeach

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
                                                                            name="company_name" id="placeholderInput"
                                                                            placeholder="Nama Perusahaan"
                                                                            value="{{ $microsite->company_name }}">
                                                                        <div>
                                                                            @if ($errors->has('company_name'))
                                                                                <span
                                                                                    class="text-danger">{{ $errors->first('company_name') }}</span>
                                                                            @endif
                                                                        </div>
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
                                                                            value="{{ $microsite->company_address }}"
                                                                            id="placeholderInput" name="company_address"
                                                                            placeholder="Alamat Perusahaan">
                                                                        <div>
                                                                            @if ($errors->has('company_address'))
                                                                                <span
                                                                                    class="text-danger">{{ $errors->first('company_address') }}</span>
                                                                            @endif
                                                                        </div>
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
                                                            name="name" placeholder="aqua-link"
                                                            value="{{ $microsite->name }}">
                                                        <div>
                                                            @if ($errors->has('name'))
                                                                <span
                                                                    class="text-danger">{{ $errors->first('name') }}</span>
                                                            @endif
                                                        </div>
                                                    </div>
                                                    <div class="col-12">
                                                        <label for="address" class="form-label">Tautan
                                                            Microsite</label>
                                                        <div class="input-group">
                                                            <input type="text" class="form-control" id="address"
                                                                placeholder="aqua-link" name="default_short_url"
                                                                value="{{ $short_url->default_short_url }}">
                                                            <div>
                                                                @if ($errors->has('default_short_url'))
                                                                    <span
                                                                        class="text-danger">{{ $errors->first('default_short_url') }}</span>
                                                                @endif
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="d-flex align-items-start gap-3 mt-4">
                                <button type="submit" class="btn btn-success right ms-auto">Kirim</button>
                            </div>
                        </div><!-- end card-body -->
                    </div>
                </div>
                <div class="col-lg-3">
                    <div class="card real-estate-grid-widgets card-animate">
                        <div class="card overflow-hidden">
                            <div>
                                <img src="{{ asset('component/' . $microsite->component->cover_img) }}" alt=""
                                    class="card-img-top profile-wid-img object-fit-cover" style="height: 200px;">
                            </div>
                            <div class="card-body pt-0 mt-n5">
                                <div class="text-center">
                                    <div class="profile-user position-relative d-inline-block mx-auto">
                                        <img src="{{ asset(Auth::user()->profile_picture ? 'storage/' . Auth::user()->profile_picture : 'profile_pictures/default.jpg') }}" alt="{{ Auth::user()->name }}"
                                        alt=""
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
                                <div class="d-flex flex-wrap justify-content-center text-center mb-4">
                                    @foreach ($social as $socialItem)
                                        <div class="mb-2 mx-2">
                                            <button style="background-color: {{ $socialItem->button->color_hex }};"
                                                type="button" class="btn btn-icon"><i
                                                    class="{{ $socialItem->button->icon }} " style="color:white;"></i>
                                            </button>
                                        </div>
                                    @endforeach
                                </div>
                                @foreach ($social as $socialItem)
                                    <button type="button" class="col-12 mb-2 btn btn-label rounded-pill"
                                        style="color: white; background-color: {{ $socialItem->button->color_hex }}"
                                        data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true"
                                        aria-controls="collapseOne"><i style="color: white"
                                            class="{{ $socialItem->button->icon }} label-icon align-middle rounded-pill fs-lg me-2"></i>
                                        {{ $socialItem->button->name_button }} </button>
                                @endforeach
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
        <script
            src="{{ asset('template/themesbrand.com/steex/layouts/assets/libs/%40ckeditor/ckeditor5-build-classic/build/ckeditor.js') }}">
        </script>
        <!-- profile-setting init js -->
        <script src="{{ asset('template/themesbrand.com/steex/layouts/assets/js/pages/profile-setting.init.js') }}"></script>
        <!-- init js -->
        <script src="{{ asset('template/themesbrand.com/steex/layouts/assets/js/pages/form-editor.init.js') }}"></script>

        <script src="{{ asset('template/themesbrand.com/steex/layouts/assets/js/app.js') }}"></script>
    @endsection
