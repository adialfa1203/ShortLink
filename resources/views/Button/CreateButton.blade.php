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
                    <form action="{{ route('save.button') }}" method="POST" class="needs-validation" novalidate>
                        @csrf
                        <div class="col-xxl-12 mt-2 col-md-12">
                            <div class="mt-2">
                                <label for="name_button" class="form-label">Nama Button</label>
                                <input type="text" name="name_button" class="form-control" id="name_button" placeholder="Nama Button" required>
                                <div class="invalid-feedback">
                                    Harap isi kolom ini sebelum melanjutkan proses.
                                </div>
                                <div class="valid-feedback">
                                    Kolom telah diisi dengan benar. Terima kasih.
                                </div>
                            </div>
                        </div>
                        <div class="col-xxl-12 mt-2 col-md-12">
                            <div class="mt-2">
                                <label for="icon" class="form-label">Options</label>
                                <select name="icon" class="form-select" id="icon" required>
                                    <option value="" disabled selected>Choose...</option>
                                    <option value="bi bi-facebook">Facebook</option>
                                    <option value="bi bi-twitter">Twitter</option>
                                    <option value="bi bi-telephone-fill">Telephone</option>
                                    <option value="bi bi-instagram">Instagram</option>
                                    <option value="bi bi-linkedin">Linkedin</option>
                                    <option value="bi bi-telegram">Telegram</option>
                                    <option value="bi bi-tiktok">Tiktok</option>
                                    <option value="bi bi-spotify">Spotify</option>
                                </select>
                                <div class="invalid-feedback">
                                    Harap isi kolom ini sebelum melanjutkan proses.
                                </div>
                                <div class="valid-feedback">
                                    Kolom telah diisi dengan benar. Terima kasih.
                                </div>
                            </div>
                        </div>
                        <div class="col-xxl-12 mt-2 col-md-6">
                            <div>
                                <label for="colorPicker" class="form-label">Color Picker</label>
                                <input type="color" class="form-control form-control-color w-100" id="colorPicker" name="color_hex" required>
                                <div class="invalid-feedback">
                                    Harap isi kolom ini sebelum melanjutkan proses.
                                </div>
                                <div class="valid-feedback">
                                    Kolom telah diisi dengan benar. Terima kasih.
                                </div>
                            </div>
                        </div>
                        <div class="d-flex align-items-start gap-3 mt-4">
                            <button type="submit" class="btn btn-success right ms-auto">Kirim</button>
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
