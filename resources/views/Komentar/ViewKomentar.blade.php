@extends('layout.admin.app')
@section('title', 'Komentar')

@section('content')
    <div class="page-content">
        <div class="container-fluid">
            <!-- start page title -->
            <div class="row">
                <div class="col-12">
                    <div class="page-title-box d-sm-flex align-items-center justify-content-between">
                        <h4 class="mb-sm-0">Komentar</h4>
                    </div>
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
                            </div>
                        </div>
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table table-borderless table-centered align-middle table-nowrap mb-0">
                                    <thead class="text-muted table-light">
                                        <tr class="searchable">
                                            <th scope="col" data-sort="order_id">No</th>
                                            <th scope="col" data-sort="order_id">Email</th>
                                            <th scope="col" data-sort="order_id">Nama Pengguna</th>
                                            <th scope="col" data-sort="order_date">Isi Komentar</th>
                                            <th scope="col" data-sort="order_date">Waktu</th>
                                        </tr>
                                    </thead>
                                    <tbody class="list form-check-all">
                                        @if ($komentar->isEmpty())
                                            <tr>
                                                <td colspan="4">
                                                    <div class="page-content">
                                                        <div class="container-fluid">
                                                            <div class="d-flex flex-column align-items-center">
                                                                <img style="width: 300px; height: 300px;" src="{{ asset('images/Empty.jpg') }}" alt="Gambar">
                                                                <div class="d-flex justify-content-center align-items-center mt-2">
                                                                    <i class="ph-magnifying-glass mb-2 fs-2 text-primary"></i>
                                                                    <h5 class="mt-2 mb-3">Maaf! Belum Ada Data Yang Ditemukan</h5>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </td>
                                            </tr>
                                        @else
                                            @foreach ($komentar as $index => $row)
                                                <tr>
                                                    <td class="order_id">{{ $komentar->firstItem() + $index }}</td>
                                                    <td class="products">
                                                        @if ($row->user)
                                                            {{ $row->user->email }}
                                                        @else
                                                            Email Tidak Ditemukan
                                                        @endif
                                                    </td>
                                                    <td>
                                                        @if ($row->user)
                                                            {{ $row->user->name }}
                                                        @else
                                                            Pengguna Tidak Ditemukan
                                                        @endif
                                                    </td>
                                                    <td class="products">{{ $row->isikomentar }}</td>
                                                    <td class="products">{{ $row->created_at->format('d-m-Y H:i:s') }}</td>

                                                </tr>
                                            @endforeach
                                        @endif
                                    </tbody>
                                </table>
                                <br><!-- end table -->
                                <div class="noresult" style="display: none">
                                    <div class="text-center py-4">
                                        <i class="ph-magnifying-glass fs-1 text-primary"></i>
                                        <h5 class="mt-2">Sorry! No Result Found</h5>
                                        <p class="text-muted mb-0">We've searched more than 150+ orders We did not find any
                                            orders for you search.</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- end card -->
                    <div class="pagination-wrap hstack justify-content-center gap-2 mb-4">
                        <a class="page-item pagination-prev {{ $d->previousPageUrl() ? '' : 'disabled' }}"
                            href="{{ $d->previousPageUrl() ? $d->previousPageUrl() : '#' }}">
                            Sebelumnya
                        </a>
                        <ul class="pagination listjs-pagination mb-0">
                            @if ($d->currentPage() > 2)
                                <li>
                                    <a class="page" href="{{ $d->url(1) }}">1</a>
                                </li>
                                @if ($d->currentPage() > 3)
                                    <li class="ellipsis">
                                        <span>...</span>
                                    </li>
                                @endif
                            @endif
    
                            @for ($i = max(1, $d->currentPage() - 1); $i <= min($d->lastPage(), $d->currentPage() + 1); $i++)
                                <li class="{{ $i == $d->currentPage() ? 'active' : '' }}">
                                    <a class="page" href="{{ $d->url($i) }}"
                                        data-i="{{ $i }}">{{ $i }}</a>
                                </li>
                            @endfor
    
                            @if ($d->currentPage() < $d->lastPage() - 1)
                                @if ($d->currentPage() < $d->lastPage() - 2)
                                    <li class="ellipsis">
                                        <span>...</span>
                                    </li>
                                @endif
                                <li>
                                    <a class="page"
                                        href="{{ $d->url($d->lastPage()) }}">{{ $d->lastPage() }}</a>
                                </li>
                            @endif
                        </ul>
                        <a class="page-item pagination-next {{ $d->nextPageUrl() ? '' : 'disabled' }}"
                            href="{{ $d->nextPageUrl() ? $d->nextPageUrl() : '#' }}">
                            Selanjutnya
                            </a>
                    </div>
                </div>
                <!-- end col -->
            </div>
            <!-- end row -->

        </div>
        <!-- container-fluid -->
    </div>

@endsection
@section('script')
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
    {{-- <script>
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
    </script> --}}
@endsection
