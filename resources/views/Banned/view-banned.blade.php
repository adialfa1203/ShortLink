@extends('layout.admin.app')
@section('title', 'Data Pengguna')
@section('style')
    <link href="{{ asset('template/themesbrand.com/steex/layouts/assets/libs/sweetalert2/sweetalert2.min.css') }}"
        rel="stylesheet" type="text/css">
@endsection

@section('content')
    <div class="page-content">
        <div class="container-fluid">

            <!-- start page title -->
            <div class="row">
                <div class="col-12">
                    <div class="page-title-box d-sm-flex align-items-center justify-content-between">
                        <h4 class="mb-sm-0">Data Pengguna</h4>

                        <div class="page-title-right">
                            <ol class="breadcrumb m-0">
                                <li class="breadcrumb-item"><a href="javascript: void(0);">Ecommerce</a></li>
                                <li class="breadcrumb-item active">Orders</li>
                            </ol>
                        </div>

                    </div>
                    <!-- end page title -->

                    {{-- <div class="row">
                        <div class="col-lg-12">
                            <div class="card" id="orderList">
                                <div class="card-header">
                                    <div class="row align-items-center gy-3">
                                        <div class="col-lg-3 col-md-6">
                                            <div class="search-box">
                                                <input type="text" class="form-control search" id="searchInput" placeholder="Cari...">
                                                <i class="ri-search-line search-icon"></i>
                                            </div>
                                        </div>

                                        <div class="col-md-auto ms-md-auto">
                                            <div class="d-flex flex-wrap align-items-center gap-2">
                                                <button class="btn btn-subtle-danger d-none" id="remove-actions" onClick="deleteMultiple()"><i class="ri-delete-bin-2-line"></i></button>
                                                <div class="dropdown card-header-dropdown sortble-dropdown flex-shrink-0">
                                                    <a class="text-reset dropdown-btn" href="#" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                        <span class="text-muted dropdown-title">Order Date</span> <i class="mdi mdi-chevron-down ms-1"></i>
                                                    </a>
                                                    <div class="dropdown-menu dropdown-menu-end">
                                                        <button class="dropdown-item sort" data-sort="order_date">Order Date</button>
                                                        <button class="dropdown-item sort" data-sort="order_id">Order ID</button>
                                                        <button class="dropdown-item sort" data-sort="amount">Amount</button>
                                                        <button class="dropdown-item sort" data-sort="status">Status</button>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="card-body">
                                    <div class="table-responsive">
                                        <table class="table table-borderless table-centered align-middle table-nowrap mb-0">
                                            <thead class="text-muted table-light">
                                                <tr class="searchable">
                                                    <th>
                                                        <div class="form-check">
                                                            <input class="form-check-input" type="checkbox" value="option" id="checkAll">
                                                            <label class="form-check-label" for="checkAll"></label>
                                                        </div>
                                                    </th>
                                                    <th scope="col" class="sort cursor-pointer" data-sort="order_id">Nama Pengguna</th>
                                                    <th scope="col" class="sort cursor-pointer" data-sort="order_date">E-mail</th>
                                                    <th scope="col" class="sort cursor-pointer" data-sort="delivery_date">No Telepon</th>
                                                    <th scope="col" class="sort cursor-pointer" data-sort="status">Berlangganan</th>
                                                    <th scope="col">Action</th>
                                                </tr>
                                            </thead>
                                            <tbody class="list form-check-all">
                                            @foreach ($data as $row)
                                                <tr>
                                                    <th>
                                                        <div class="form-check">
                                                            <input class="form-check-input" type="checkbox" name="chk_child">
                                                            <label class="form-check-label"></label>
                                                        </div>
                                                    </th>
                                                    <td class="order_id">{{$row->name}}</td>
                                                    <td class="order_date">
                                                        {{$row->email}}
                                                    </td>
                                                    <td class="products">{{$row->number}}</td>
                                                    <td class="status"><span class="badge bg-primary-subtle text-primary">Berlangganan</span></td>
                                                    <td>
                                                        <ul class="d-flex gap-2 list-unstyled mb-0">
                                                            <li>
                                                                <a href="#deleteRecordModal" class="btn btn-subtle-danger btn-icon btn-sm me-3"><i class="bi bi-lock-fill"></i></a>
                                                            </li>
                                                        </ul>
                                                    </td>
                                                </tr>
                                            @endforeach
                                            </tbody><!-- end tbody -->
                                        </table>
                                        <br><!-- end table -->
                                        <button type="button" class="btn btn-subtle-danger"><i class="bi bi-lock-fill"></i></i>Banned</button>
                                        <div class="noresult" style="display: none">
                                            <div class="text-center py-4">
                                                <i class="ph-magnifying-glass fs-1 text-primary"></i>
                                                <h5 class="mt-2">Sorry! No Result Found</h5>
                                                <p class="text-muted mb-0">We've searched more than 150+ orders We did not find any orders for you search.</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="d-flex justify-content-center justify-content-sm-end mt-2">
                                        <div class="pagination-wrap hstack gap-2">
                                            <a class="page-item pagination-prev disabled" href="javascript:void(0)">
                                                <i class="mdi mdi-chevron-left align-middle"></i>
                                            </a>
                                            <ul class="pagination listjs-pagination mb-0"></ul>
                                            <a class="page-item pagination-next" href="javascript:void(0)">
                                                <i class="mdi mdi-chevron-right align-middle"></i>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- end card -->
                        </div>
                        <!-- end col -->
                    </div> --}}
                    <!-- end row -->

                </div>
            </div>
            <!-- end page title -->

            <div class="row">
                <div class="col-lg-12">
                    <div class="card" id="orderList">
                        <div class="card-header">
                            <div class="row align-items-center gy-3">
                                <div class="col-lg-3 col-md-6">
                                    <div class="search-box">
                                        <input type="text" class="form-control search" id="searchInput"
                                            placeholder="Cari...">
                                        <i class="ri-search-line search-icon"></i>
                                    </div>
                                </div>

                                <div class="col-md-auto ms-md-auto">
                                    <div class="d-flex flex-wrap align-items-center gap-2">
                                        <button class="btn btn-subtle-danger d-none" id="remove-actions"
                                            onClick="deleteMultiple()"><i class="ri-delete-bin-2-line"></i></button>
                                        <div class="dropdown card-header-dropdown sortble-dropdown flex-shrink-0">
                                            <a class="text-reset dropdown-btn" href="#" data-bs-toggle="dropdown"
                                                aria-haspopup="true" aria-expanded="false">
                                                <span class="text-muted dropdown-title">Order Date</span> <i
                                                    class="mdi mdi-chevron-down ms-1"></i>
                                            </a>
                                            <div class="dropdown-menu dropdown-menu-end">
                                                <button class="dropdown-item sort" data-sort="order_date">Order
                                                    Date</button>
                                                <button class="dropdown-item sort" data-sort="order_id">Order ID</button>
                                                <button class="dropdown-item sort" data-sort="amount">Amount</button>
                                                <button class="dropdown-item sort" data-sort="status">Status</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table table-borderless table-centered align-middle table-nowrap mb-0">
                                    <thead class="text-muted table-light">
                                        <tr class="searchable">
                                            <th>
                                                <div class="form-check">
                                                    <input class="form-check-input" type="checkbox" value="option" id="checkAll">
                                                    <label class="form-check-label" for="checkAll"></label>
                                                </div>
                                            </th>
                                            <th scope="col" class="sort cursor-pointer" data-sort="order_id">Nama
                                                Pengguna</th>
                                            <th scope="col" class="sort cursor-pointer" data-sort="order_date">E-mail
                                            </th>
                                            <th scope="col" class="sort cursor-pointer" data-sort="delivery_date">No
                                                Telepon</th>
                                            <th scope="col" class="sort cursor-pointer" data-sort="status">Berlangganan
                                            </th>
                                            <th scope="col">Action</th>
                                        </tr>
                                    </thead>
                                    <tbody class="list form-check-all">
                                        @foreach ($data as $row)
                                            <tr>
                                                <th>
                                                    <div class="form-check">
                                                        <input class="form-check-input child-checkbox" type="checkbox" name="chk_child">
                                                        <label class="form-check-label"></label>
                                                    </div>
                                                </th>
                                                <td class="order_id">{{ $row->name }}</td>
                                                <td class="order_date">
                                                    {{ $row->email }}
                                                </td>
                                                <td class="products">{{ $row->number }}</td>
                                                <td class="status"><span
                                                        class="badge bg-primary-subtle text-primary">Berlangganan</span>
                                                </td>
                                                <td>
                                                    <ul class="d-flex gap-2 list-unstyled mb-0">
                                                        <li>
                                                            <a href="#"
                                                            @if ($row->is_banned == 1)
                                                            class="btn btn-subtle-success btn-icon btn-sm me-3"
                                                            @else
                                                            class="btn btn-subtle-danger btn-icon btn-sm me-3"
                                                            @endif
                                                                data-bs-toggle="modal" data-user-id="{{ $row->id }}"
                                                                data-is-banned="{{ $row->is_banned }}">
                                                                <i class="fas fa-ban"></i>
                                                            </a>
                                                        </li> 
                                                    </ul>
                                                </td>
                                            </tr>
                                        @endforeach
                                    </tbody><!-- end tbody -->
                                </table>
                                <br><!-- end table -->
                                <button type="button" class="btn btn-subtle-success"><i
                                        class="fas fa-ban me-1"></i>UnBanned</button>
                                <div class="noresult" style="display: none">
                                    <div class="text-center py-4">
                                        <i class="ph-magnifying-glass fs-1 text-primary"></i>
                                        <h5 class="mt-2">Sorry! No Result Found</h5>
                                        <p class="text-muted mb-0">We've searched more than 150+ orders We did not find any
                                            orders for you search.</p>
                                    </div>
                                </div>
                            </div>
                            <div class="d-flex justify-content-center justify-content-sm-end mt-2">
                                <div class="pagination-wrap hstack gap-2">
                                    <a class="page-item pagination-prev disabled" href="javascript:void(0)">
                                        <i class="mdi mdi-chevron-left align-middle"></i>
                                    </a>
                                    <ul class="pagination listjs-pagination mb-0"></ul>
                                    <a class="page-item pagination-next" href="javascript:void(0)">
                                        <i class="mdi mdi-chevron-right align-middle"></i>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- end card -->
                </div>
                <!-- end col -->
            </div>
            <!-- end row -->

        </div>
        <!-- container-fluid -->
    </div>

@endsection
@section('script')
    <script src="{{ asset('template/themesbrand.com/steex/layouts/assets/libs/sweetalert2/sweetalert2.min.js') }}"></script>
    <script src="{{ asset('template/themesbrand.com/steex/layouts/assets/js/pages/sweetalerts.init.js') }}"></script>

    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script>
        $(document).ready(function() {
            $(".search").on("keyup", function() {
                var value = $(this).val().toLowerCase();
                $(".list tr").filter(function() {
                    $(this).toggle($(this).text().toLowerCase().indexOf(value) > -1)
                });
            });
        });
    </script>
    <script>
        // Mendapatkan referensi elemen checkbox utama dan semua checkbox anak dengan class yang sama
        var checkAllCheckbox = document.getElementById("checkAll");
        var childCheckboxes = document.querySelectorAll('.child-checkbox');
    
        // Menambahkan event listener ke checkbox utama
        checkAllCheckbox.addEventListener("change", function() {
            // Mengatur status semua checkbox anak sesuai dengan status checkbox utama
            childCheckboxes.forEach(function(checkbox) {
                checkbox.checked = checkAllCheckbox.checked;
            });
        });
    </script>
@endsection
