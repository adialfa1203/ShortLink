@extends('layout.admin.app')

@section('title','Link')
@section('style')
<style>

</style>
@endsection
@section('content')
<div class="page-content">
    <div class="row">
        <div class="col-6">
            <div class="mb-3">
                <label for="username" class="form-label">Tipe Langganan <span class="text-danger">*</span></label>
                <div class="position-relative ">
                    <input type="text" class="form-control  password-input" id="username" placeholder="Lite" required>
                </div>
            </div>
        </div>
        <div class="col-6">
            <div class="mb-3">
                <label for="username" class="form-label">Lini Masa <span class="text-danger">*</span></label>
                <div class="position-relative ">
                    <input type="text" class="form-control  password-input" id="username" placeholder="Tahunan" required>
                </div>
            </div>
        </div>
        <div class="col-6">
            <div class="mb-3">
                <label for="username" class="form-label">Harga <span class="text-danger">*</span></label>
                <div class="position-relative ">
                    <input type="text" class="form-control  password-input" id="username" placeholder="Rp:1.000.000" required>
                </div>
            </div>
        </div>
        <div class="col-6">
            <div class="mb-3">
                <label for="username" class="form-label">Deskripsi Langganan <span class="text-danger">*</span></label>
                <div class="position-relative ">
                    <input type="textarea" class="form-control  password-input" id="username" placeholder="Paket Dasar untuk memulai perjalanan Anda bersama kami" required>
                </div>
            </div>
        </div>
        <div class="col-6">
            <div class="mb-3">
                <label for="username" class="form-label">Tambah Foto <span class="text-danger">*</span></label>
                <div class="position-relative ">
                    <input type="file" class="form-control  password-input" id="username" placeholder="Paket Dasar untuk memulai perjalanan Anda bersama kami" required>
                </div>
            </div>
        </div>
    </div>
</div>
@section('script')
<script>

</script>
@endsection
@endsection
