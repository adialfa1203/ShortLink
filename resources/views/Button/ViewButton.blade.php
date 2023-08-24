@extends('layout.admin.app')
@section('title', 'Microsite')

@section('content')
<div class="page-content">
    <div class="container-fluid">
        <div class="row">
            <div class="col-12 mt-4">
                <a class="btn btn-success btn-label" href="{{ route('create.button') }}" role="button">
                    <i class="ri-add-line label-icon align-middle fs-lg"></i>Tambah Button
                </a>
            </div>
        </div>

        <div class="row mt-4">
            @foreach ($button as $data)
                <div class="col-lg-3 col-md-4 col-sm-6 mb-4">
                    <div class="card">
                        <div class="card-footer text-center">
                            <div class="dropdown float-end">
                                <a class="text-reset dropdown-btn" href="#" data-bs-toggle="dropdown"
                                    aria-haspopup="true" aria-expanded="false">
                                    <span class="text-muted fs-lg"><i
                                            class="mdi mdi-dots-vertical align-middle"></i></span>
                                </a>
                                <div class="dropdown-menu dropdown-menu-end">
                                    <a class="dropdown-item"
                                        href="{{ route('edit.button', ['id' => $data->id]) }}">Edit</a>
                                    <a class="dropdown-item"
                                        href="{{ route('delete.button', ['id' => $data->id]) }}">Hapus</a>
                                </div>
                            </div>
                        </div>
                        <div class="card-body">
                            <button style="background-color: {{ $data->color_hex }}; color: white;" type="button"
                                class="col-xl-12 btn btn-label rounded-pill" data-bs-toggle="collapse"
                                data-bs-target="{{ $data->id }}" aria-expanded="true" aria-controls="{{ $data->id }}">
                                <i class="{{ $data->icon }} label-icon align-middle rounded-pill fs-lg me-2" style="color: white;"></i>
                                {{ $data->name_button }}
                            </button>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
</div>

@endsection
