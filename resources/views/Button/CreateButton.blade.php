@extends('layout.admin.app')
@section('title', 'Microsite')

@section('content')
    <div class="page-content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-xxl-12 col-md-12">
                    <div>
                        <label for="placeholderInput" class="form-label">Nama Button</label>
                        <input type="text" class="form-control" id="placeholderInput" placeholder="Placeholder">
                    </div>
                </div>
                <div class="col-xxl-12 col-md-12">
                    <div>
                        <label for="colorPicker" class="form-label">Color Picker</label>
                        <input type="color" class="form-control form-control-color w-100" id="colorPicker" value="#364574">
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
