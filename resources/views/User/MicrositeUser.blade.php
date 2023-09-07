@extends('layout.user.app')
@section('title', 'Microsite')

@section('content')
<div class="page-content">
    <div class="container-fluid">

        <!-- start page title -->
        <div class="row">
            <div class="col-12">
                <div class="page-title-box d-sm-flex align-items-center justify-content-between">
                    <h4 class="mb-sm-0">Microsite</h4>

                    {{-- <div class="page-title-right">
                            <ol class="breadcrumb m-0">
                                <li class="breadcrumb-item"><a href="javascript: void(0);">Instructors</a></li>
                                <li class="breadcrumb-item active">Grid View</li>
                            </ol>
                        </div> --}}

                </div>
            </div>
        </div>
        <!-- end page title -->

        <div class="card">
            <div class="card-body">
                <div class="row align-items-center g-2">
                    <div class="col-lg-3 me-auto">

                        {{-- <div class="hstack gap-2">
                                        <a href="" class="btn rounded-pill btn-danger btn-sm"> Semua</a>
                                        <a href="" class="btn rounded-pill btn-secondary btn-sm"> Terakhir Diperbarui</a>
                                    </div> --}}
                        <!-- Radio Buttons -->
                        <div class="btn-group  mt-2" role="group" aria-label="Basic radio toggle button group">
                            <input type="radio" class="btn-check" name="btnradio" id="btnradio1" autocomplete="off" checked="">
                            <label class="btn btn-light" for="btnradio1">Semua</label>

                            <input type="radio" class="btn-check" name="btnradio" id="btnradio2" autocomplete="off">
                            <label class="btn btn-light" for="btnradio2">Terakhir Diperbarui</label>
                        </div>

                    </div><!--end col-->
                    <div class="col-lg-auto">
                        <a href="#addInstructor" data-bs-toggle="modal" class="btn btn-success"><i class="bi bi-plus-circle align-baseline me-1"></i> Buat Baru</a>
                    </div><!--end col-->
                    <div class="col-lg-2">
                        <div class="search-box">
                            <input type="text" class="form-control search" placeholder="Cari...">
                            <i class="ri-search-line search-icon"></i>
                        </div>
                    </div><!--end col-->
                </div>
            </div>
        </div><!--end card-->

        @foreach ($data as $row)
        <div class="col-12">
            <div class="card card-body">
                <div class="wrapper d-flex align-items-center">
                    <div class="avatar-md col-1">
                        <div class="avatar-title bg-success-subtle text-success fs-xl rounded mx-3">
                            <img src="https://i.postimg.cc/tR5pMsYz/orang-gtg.jpg" style="width: 150%; height: 100%;" alt="Gambar">
                        </div>
                    </div>
                    <div class="wrapper mx-5 col-7">
                        <h5 class="card-title">{{$row->name_microsite}}</h5>
                        <p class="card-text text-muted">{{$row->link_microsite}}</p>
                    </div>
                    <div class="col-4">
                        <button type="button" class="btn btn-primary btn-xs" data-bs-toggle="collapse" href="#collapseExample{{ $row->id }}" role="button" aria-expanded="true" aria-controls="collapseExample{{ $row->id }}">
                            <i class="bi bi-bar-chart-line-fill"></i> statistik
                        </button>
                        <a href="" class="btn btn-primary btn-xs"><i class="bi bi-bar-chart-fill"></i> Statistik</a>
                        <a href="" class="btn btn-primary btn-xs"><i class="bi bi-pencil-square"></i> Edit</a>
                        <a href="" class="btn btn-primary btn-xs"><i class="bi bi-share-fill"></i> </a>
                    </div>
                </div>
                <div class="collapse" id="collapseExample{{ $row->id }}">
                    <div class="card-footer">
                        <div class="d-flex">
                            <div class="col-10">
                                <h5><i class="bi bi-bar-chart-line-fill"></i> statistik</h5>
                            </div>
                            <div class="col-2 d-flex flex-row justify-content-end">
                                <button type="button" class="btn btn-light "><span>Lihat
                                        Detail</span>&nbsp;<i class="fa-solid fa-arrow-right"></i></button>
                            </div>
                        </div>
                    </div>
                    <div class="card">
                        <div class="card-body">
                            <div id="chart{{ $row->id }}"></div>
                        </div><!-- end card-body -->
                    </div><!-- end card -->
                </div>
            </div>
        </div><!-- end col -->
        @endforeach
    </div>
    <!-- container-fluid -->
</div>
@endsection
