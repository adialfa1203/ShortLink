@extends('layout.admin.app')
@section('title', 'Microsite')

@section('content')
    <div class="page-content">
        <div class="container-fluid">
            <div class="row">
                <div class="d-flex align-items-start gap-3 mt-4">
                    <a class="btn btn-success btn-label right" href="{{ route('create.button') }}" role="button">
                        <i class="ri-add-line label-icon align-middle fs-lg ms-2"></i>Tambah Button</i>
                    </a>
                </div>
            </div>
        </div>
    </div>
@endsection
