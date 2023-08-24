@extends('layout.admin.app')
@section('title', 'Microsite')

@section('content')
    <div class="page-content">
        <div class="container-fluid">
            <div class="row">
                <div class="d-flex align-items-start gap-3 mt-4">
                    <a class="btn btn-success btn-label right" href="{{ route('create.component') }}" role="button">
                        <i class="ri-add-line label-icon align-middle fs-lg ms-2"></i>Tambah Komponen
                    </a>
                </div>
                <div class="row mt-4">
                    @foreach ($component as $item)
                        <div class="col-xl-3 col-sm-6 mb-4">
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
                                                href="{{ route('edit.component', ['id' => $item->id]) }}">Edit</a>
                                            <a class="dropdown-item"
                                                href="{{ route('delete.component', ['id' => $item->id]) }}">Hapus</a>
                                        </div>
                                    </div>
                                    <strong class="fs-md text-muted mb-0">{{ $item->component_name }}</strong>
                                </div>
                                <div>
                                    <img src="{{ asset('component/' . $item->cover_img) }}" alt=""
                                        class="card-img-top profile-wid-img object-fit-cover" style="height: 200px;">
                                </div>
                                <div class="card-body pt-0 mt-n5">
                                    <div class="text-center">
                                        <div class="profile-user position-relative d-inline-block mx-auto">
                                            <img src="{{ asset('component/' . $item->profile_img) }}" alt=""
                                                class="avatar-lg rounded-circle object-fit-cover border-0 img-thumbnail user-profile-image">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
@endsection
