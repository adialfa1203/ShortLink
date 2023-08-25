@extends('layout.admin.app')
@section('title', 'Microsite')
@section('style')
    <!-- One of the following themes -->
    <link rel="stylesheet"
        href="{{ asset('template/themesbrand.com/steex/layouts/assets/libs/%40simonwep/pickr/themes/classic.min.css') }}">
    <!-- 'classic' theme -->
    <link rel="stylesheet"
        href="{{ asset('template/themesbrand.com/steex/layouts/assets/libs/%40simonwep/pickr/themes/monolith.min.css') }}">
    <!-- 'monolith' theme -->
    <link rel="stylesheet"
        href="{{ asset('template/themesbrand.com/steex/layouts/assets/libs/%40simonwep/pickr/themes/nano.min.css') }}">
    <!-- 'nano' theme -->
@endsection

@section('content')
<div class="page-content">
    <div class="container-fluid">
        <div class="row">
            <div class="card">
                <div class="card-body">
                    <form action="{{ route('update.button', ['id' => $button->id]) }}" method="POST">
                        @csrf
                        <div class="col-xxl-12 col-md-12">
                            <div class="mt-2">
                                <label for="name_button" class="form-label">Nama Button</label>
                                <input type="text" name="name_button" class="form-control" id="name_button" placeholder="Nama Button" value="{{ $button->name_button }}" required>
                            </div>
                        </div>
                        <div class="col-xxl-12 col-md-12">
                            <div class="mt-2">
                                <label for="icon" class="form-label">Options</label>
                                <select name="icon" class="form-select" id="icon" value="{{ $button->icon }}" required>
                                    <option value="bi bi-whatsapp"></option>
                                    <option value="bi bi-facebook"></option>
                                    <option value="bi bi-twitter"></option>
                                    <option value="bi bi-telephone-fill"></option>
                                    <option value="bi bi-instagram"></option>
                                    <option value="bi bi-linkedin"></option>
                                    <option value="bi bi-telegram"></option>
                                    <option value="bi bi-tiktok"></option>
                                    <option value="bi bi-spotify"></option>
                                </select>
                            </div>
                        </div>
                        <div class="col-xxl-12 col-md-6">
                            <div>
                                <label for="colorPicker" class="form-label">Color Picker</label>
                                <input type="color" class="form-control form-control-color w-100" id="colorPicker" name="color_hex" value="{{ $button->color_hex }}">
                            </div>
                        </div>
                        <div class="mt-3">
                            <button type="submit" class="btn btn-success">Simpan</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
@section('script')
    <script src="{{ asset('template/themesbrand.com/steex/layouts/assets/js/pages/form-validation.init.js') }}"></script>
@endsection
