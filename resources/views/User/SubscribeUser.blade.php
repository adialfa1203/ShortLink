@extends('layout.user.app')
@section('title', 'Berlangganan')
@section('style')

    <style>
        /* Untuk layar kecil (misalnya, ponsel) */
        //card dan gambarnya
        @media (max-width: 576px) {
            .card-img-top {
                width: 50%;
            }

            .col-lg-7 {
                width: 50%;
            }

            .col-lg-3 {
                width: 100%;
                margin-top: 10px;
                /* Tambahkan margin jika diperlukan */
            }
        }

        //text
        @media (max-width: 576px) {
            .col-lg-7 {
                width: 100%;
                /* Kolom akan mengisi seluruh lebar layar ponsel */
            }
        }
    </style>

@endsection
@section('content')
    <div class="page-content">
        <div class="container-fluid">

            <!-- start page title -->
            <div class="row">
                <div class="col-12">
                    <div class="page-title-box d-sm-flex align-items-center justify-content-between">
                        <h4 class="mb-sm-0">Berlangganan</h4>

                        {{-- <div class="page-title-right">
                                    <ol class="breadcrumb m-0">
                                        <li class="breadcrumb-item"><a href="javascript: void(0);">Ecommerce</a></li>
                                        <li class="breadcrumb-item active">Products</li>
                                    </ol>
                                </div> --}}

                    </div>
                </div>
            </div>
            <!-- end page title -->

            <div id="productList">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="card">
                            <div class="card-body">
                                <div class="row align-items-center">
                                    <div class="col-lg-2">
                                        <img class="card-img-top img-fluid" src="{{ asset('plugin/cat-free.jpg') }}"
                                            style="width: 100%;" alt="Card image cap">
                                    </div>
                                    <div class="col-lg-7">
                                        <h6 class="card-title long-text">Go.Link - Layanan Gratis (Selamanya)</h6>
                                        <p class="card-text text-muted long-text">Anda menggunakan layanan gratis dari
                                            Go.Link</p>
                                    </div>
                                    <div class="col-lg-3 mt-3 text-center">
                                        <a href="/subscribe-product-user" type="button"
                                            class="btn btn-outline-danger">Berlangganan Sekarang</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div>

                    <a href="/subscribe-product-user">Lihat semua layanan kami di sini!</a>
                </div><br>
                <div class="row">
                    <div class="col-lg-12">
                        <div class="card">
                            <div class="card-header d-flex align-items-center">
                                <div class="flex-grow-1">
                                    <h5 class="card-title mb-0">Riwayat Transaksi Terakhir</h5>
                                </div>
                            </div>
                            <div class="card-body">
                                <div class="table-responsive">
                                    <table class="table table-centered align-middle table-nowrap mb-0">
                                        <thead class="table-active">
                                            <tr>
                                                {{-- <th>
                                                    <div class="form-check">
                                                        <input class="form-check-input" type="checkbox" value="option"
                                                            id="checkAll">
                                                        <label class="form-check-label" for="checkAll"></label>
                                                    </div>
                                                </th> --}}
                                                <th class="" data-sort="products">Tanggal Bayar</th>
                                                <th class="" data-sort="category">Layanan</th>
                                                <th class="" data-sort="stock">Metode</th>
                                                <th class="" data-sort="price">Harga</th>
                                            </tr>
                                        </thead>
                                        <!-- ... Isi tabel di sini ... -->
                                        <tbody>
                                            <!-- Baris pertama (data dummy) -->
                                            <tr>
                                                <td>2023-09-19</td>
                                                <td>Layanan A</td>
                                                <td>Metode 1</td>
                                                <td>$100</td>
                                            </tr>

                                            <!-- Baris kedua (data dummy) -->
                                            <tr>
                                                <td>2023-09-20</td>
                                                <td>Layanan B</td>
                                                <td>Metode 2</td>
                                                <td>$120</td>
                                            </tr>

                                            <!-- Tambahkan lebih banyak baris sesuai dengan data Anda -->
                                        </tbody>
                                    </table>
                                </div>

                                <div class="noresult" style="display: none">
                                    <div class="text-center py-4">
                                        <div class="avatar-md mx-auto mb-4">
                                            <div class="avatar-title bg-light text-primary rounded-circle fs-4xl">
                                                <i class="bi bi-search"></i>
                                            </div>
                                        </div>
                                        <h5 class="mt-2">Sorry! No Result Found</h5>
                                        <p class="text-muted mb-0">We've searched more than 150+ products We did not find
                                            any products for you search.</p>
                                    </div>
                                </div>
                            </div>
                            <div class="pagination-wrap hstack justify-content-center gap-2 mb-3">
                                <a class="page-item pagination-prev {{ $data->previousPageUrl() ? '' : 'disabled' }}"
                                    href="{{ $data->previousPageUrl() ? $data->previousPageUrl() : '#' }}">
                                    Previous
                                </a>
                                <ul class="pagination listjs-pagination mb-0">
                                    @if ($data->currentPage() > 2)
                                        <li>
                                            <a class="page" href="{{ $data->url(1) }}">1</a>
                                        </li>
                                        @if ($data->currentPage() > 3)
                                            <li class="ellipsis">
                                                <span>...</span>
                                            </li>
                                        @endif
                                    @endif

                                    @for ($i = max(1, $data->currentPage() - 1); $i <= min($data->lastPage(), $data->currentPage() + 1); $i++)
                                        <li class="{{ $i == $data->currentPage() ? 'active' : '' }}">
                                            <a class="page" href="{{ $data->url($i) }}"
                                                data-i="{{ $i }}">{{ $i }}</a>
                                        </li>
                                    @endfor

                                    @if ($data->currentPage() < $data->lastPage() - 1)
                                        @if ($data->currentPage() < $data->lastPage() - 2)
                                            <li class="ellipsis">
                                                <span>...</span>
                                            </li>
                                        @endif
                                        <li>
                                            <a class="page"
                                                href="{{ $data->url($data->lastPage()) }}">{{ $data->lastPage() }}</a>
                                        </li>
                                    @endif
                                </ul>
                                <a class="page-item pagination-next {{ $data->nextPageUrl() ? '' : 'disabled' }}"
                                    href="{{ $data->nextPageUrl() ? $data->nextPageUrl() : '#' }}">
                                    Next
                                    </a>
                            </div>
                        </div><!--end card-->
                    </div><!--end col-->
                </div><!--end row-->
            </div>
        </div>
        <!-- container-fluid -->
    </div>
@endsection
