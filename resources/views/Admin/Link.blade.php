@extends('layout.admin.app')

@section('title','Link')
@section('style')
<style>

</style>
@endsection
@section('content')
<div class="page-content">
    <div class="row">
        <div class="col-xl-3 col-sm-6">
            <div class="card">
                <div class="card-body">
                    <h5 class="fs-md text-muted mb-0">Pengguna</h5>

                    <div class="row mt-3">
                        <div class="col-2">
                            <i class="fa-solid fa-user" style="font-size: 30px;"></i>
                        </div>
                        <div class="col-10">
                            <h3 class="mb-4" style="float: right;"><span class="counter-value" data-target="{{($totalUser)}}">0</span> </h3>
                        </div>
                    </div>
                </div>
            </div>
        </div><!--end col-->
        <div class="col-xl-3 col-sm-6">
            <div class="card">
                <div class="card-body">
                    <h5 class="fs-md text-muted mb-0">Tautan</h5>

                    <div class="row mt-3">
                        <div class="col-2">
                            <i class="fa-solid fa-link" style="font-size: 30px;"></i>
                        </div>
                        <div class="col-10">
                            <h3 class="mb-4" style="float: right;"><span class="counter-value" data-target="{{($totalUrl)}}">0</span> </h3>
                        </div>
                    </div>
                </div>
            </div>
        </div><!--end col-->
        <div class="col-xl-3 col-sm-6">
            <div class="card">
                <div class="card-body">
                    <h5 class="fs-md text-muted mb-0">Microsite</h5>
                    <div class="row mt-3">
                        <div class="col-2">
                            <i class="fa-solid fa-link" style="font-size: 30px;"></i>
                        </div>
                        <div class="col-10">
                            <h3 class="mb-4" style="float: right;"><span class="counter-value" data-target="{{($totalMicrosite)}}">0</span> </h3>
                        </div>
                    </div>
                </div>
            </div>
        </div><!--end col-->
        <div class="col-xl-3 col-sm-6">
            <div class="card">
                <div class="card-body">
                    <h5 class="fs-md text-muted mb-0">Pengunjung</h5>
                    <div class="row mt-3">
                        <div class="col-2">
                            <i class="fa-solid fa-user" style="font-size: 30px;"></i>
                        </div>
                        <div class="col-10">
                            <h3 class="mb-4" style="float: right;"><span class="counter-value" data-target="{{($totalVisits)}}">0</span> </h3>
                        </div>
                    </div>
                </div>
            </div>
        </div><!--end col-->
    </div><!--end row-->
    <div class="row">
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
                    </div>
                </div>
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table table-borderless table-centered align-middle table-nowrap mb-0">
                            <thead class="text-muted table-light">
                                <tr class="searchable">
                                    <th scope="col" data-sort="order_id">#</th>
                                    <th scope="col" data-sort="order_date">Nama</th>
                                    <th scope="col" data-sort="delivery_date">Tautan</th>
                                    <th scope="col" data-sort="status">Tautan Populer</th>
                                    <th scope="col" data-sort="status">Microsite</th>
                                    <th scope="col" data-sort="status">Microsite Populer</th>
                                    <th scope="col">Aksi</th>
                                </tr>
                            </thead>
                            <tbody class="list form-check-all">
                                @foreach ($userData as $userId => $data)
                                    @php
                                        $user = $users->find($userId);
                                        $popularLinks = $data['popular_links'];
                                        $popularMicrosites = $data['popular_microsites'];
                                    @endphp
                                    <tr>
                                        <td class="order_id">{{ $loop->iteration }}</td>
                                        <td class="order_date">
                                            {{ $user->name }}
                                        </td>
                                        <td class="products">{{ $data['total_links'] }}</td>
                                        <td class="status">
                                        @if ($popularLinks)
                                        <span class="badge bg-primary-subtle text-primary">{{ $popularLinks->default_short_url }}</span>
                                        @else
                                        <span class="badge bg-danger-subtle text-danger">Tidak ada link populer</span>
                                        @endif</td>
                                        <td class="products">{{ $data['total_microsites'] }}</td>
                                        <td class="status">
                                        @if ($popularMicrosites)
                                        <span class="badge bg-primary-subtle text-primary">{{ $popularMicrosites->default_short_url }}</span>
                                        @else
                                        <span class="badge bg-danger-subtle text-danger">Tidak ada microsite populer</span>
                                        @endif</td>
                                        <td>
                                            <ul class="d-flex gap-2 list-unstyled mb-0">
                                                <li>
                                                    <a href="#deleteRecordModal" class="btn btn-subtle-danger btn-icon btn-sm me-3"><i class="fas fa-ban"></i></a>
                                                </li>
                                            </ul>
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody><!-- end tbody -->
                            
                        </table><!-- end table -->
                        <br><!-- end table -->
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
    </div>
</div>
@section('script')
<script>
    var options = {
        series: [{
            name: "sunardi",
            data: [10, 41, 35, 51, 49, 62, 69, 91, 148]
        }],
        chart: {
            height: 350,
            type: 'bar',
            zoom: {
                enabled: false
            }
        },
        dataLabels: {
            enabled: false
        },
        stroke: {
            curve: 'straight'
        },
        title: {
            text: '',
            align: 'left'
        },
        grid: {
            row: {
                colors: ['#f3f3f3', 'transparent'], // takes an array which will be repeated on columns
                opacity: 0.5
            },
        },
        xaxis: {
            categories: ['Jan', 'Feb', 'Mar', 'Apr', 'May', 'Jun', 'Jul', 'Aug', 'Sep'],
        }
    };

    var chart = new ApexCharts(document.querySelector("#chart1"), options);
    chart.render();
</script>
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
            // Ambil elemen checkbox pertama
            var checkAllCheckbox = document.getElementById("checkAll");

            // Ambil semua checkbox child
            var childCheckboxes = document.querySelectorAll('input[name="chk_child"]');

            // Tambahkan event listener untuk checkbox pertama
            checkAllCheckbox.addEventListener("change", function() {
                // Set status semua checkbox child sesuai dengan status checkbox pertama
                childCheckboxes.forEach(function(childCheckbox) {
                    childCheckbox.checked = checkAllCheckbox.checked;
                });
            });
        </script>
@endsection
@endsection
