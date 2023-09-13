    @extends('layout.user.app')

    @section('title', 'Analitik')

    @section('content')
        <div class="page-content">
            <div class="container-fluid">

                <!-- start page title -->
                <div class="row">
                    <div class="col-12">
                        <div class="page-title-box d-sm-flex align-items-center justify-content-between">
                            <h4 class="mb-sm-0">Analitik</h4>

                            {{-- <div class="page-title-right">
                                <ol class="breadcrumb m-0">
                                    <li class="breadcrumb-item"><a href="javascript: void(0);">Real Estate</a></li>
                                    <li class="breadcrumb-item active">Earnings</li>
                                </ol>
                            </div> --}}

                        </div>
                    </div>
                </div>
                <!-- end page title -->

                <div class="row row-cols-xxl-4 row-cols-lg-3 row-cols-md-2 row-cols-1">
                    <div class="col-xl-3 col-sm-6">
                        <div class="card border-bottom border-2 card-animate bg-success">
                            <div class="card-body">
                                <span class="badge bg-success-subtle text-success float-end"></span>
                                <h4 class="mb-4"><span class="counter-value text-white" data-target="{{ $countURL }}">0</span>
                                </h4>

                                <p class="text-white fw-medium text-uppercase mb-0">Jumlah tautan</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3 col-sm-6">
                        <div class="card border-bottom border-2 card-animate bg-primary">
                            <div class="card-body">
                                <span class="badge bg-success-subtle text-success float-end"></span>
                                <h4 class="mb-4"><span class="counter-value text-white" data-target="{{ $totalVisits }}">0</span>
                                </h4>
                                <p class="text-white fw-medium text-uppercase mb-0">Pengunjung</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3 col-sm-6">
                        <div class="card border-bottom border-2 card-animate bg-warning">
                            <div class="card-body">
                                <span class="badge bg-success-subtle text-success float-end"></span>
                                <h4 class="mb-4"><span class="counter-value" data-target="{{ $totalVisitsMicrosite }}">0</span></h4>

                                <p class="text-muted fw-medium text-uppercase mb-0">Pengunjung Microsite</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3 col-sm-6">
                        <div class="card border-bottom border-2 card-animate" style="background-color : #FF6C6C">
                            <div class="card-body">
                                <span class="badge bg-success-subtle text-success float-end"></span>
                                <h4 class="mb-4"><span class="counter-value text-white" data-target="0">0</span></h4>

                                <p class="text-white fw-medium text-uppercase mb-0">Pengunjung Kode QR</p>
                            </div>
                        </div>
                    </div>
                </div><!---end row-->
                <div>
                    <h5 class="mb-sm-0">Lini Masa</h5>
                </div><br>
                <div class="row">
                    <div class="col-lg-12">
                        <div class="card">
                            <div class="card-body pb-0 mb-n4">
                                <div class="d-flex z-1 position-relative">
                                    <div class="flex-shrink-0">
                                        <div data-provider="flatpickr" data-range-date="true" data-date-format="d M, Y"
                                            data-default-date="01 March 2023 to 31 March 2023">01 March 2023 to 31 March
                                            2023 <i class="ph-caret-down align-middle ms-1"></i></div>
                                    </div>
                                </div>
                            </div>
                            <br>
                            <div class="card-body pt-0 mt-4 mt-md-0">
                                <div id="chartDataAnalytic"></div>
                            </div>
                        </div>
                    </div><!--end col-->
                </div><!--end row-->

                <div>
                    <button type="button" class="btn btn-primary bg-gradient">Data Populer</button>
                    <button disabled type="button" class="btn btn-primary bg-gradient">Data Tambahan</button>
                </div>
                <br>
                <div class="row">
                    <div class="col-lg-6">
                        <div class="card" data-simplebar
                        style="max-height: 320px;" id="agenciesList">
                            <div class="card-header fw-bold">
                                Tautan Populer
                            </div>
                            <div class="card-body">
                                <div class="table-responsive">
                                    <table class="table table-borderless table-nowrap" >
                                        <thead>
                                            <tr>
                                                <th scope="col">#</th>
                                                <th scope="col">Tautan</th>
                                                <th scope="col">Pengunjung</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @foreach ($links->sortByDesc('totalVisits') as $link)
                                                <tr>
                                                    <th scope="row">{{ $loop->iteration }}</th>
                                                    <td>{{ $link->default_short_url }}</td>
                                                    <td>{{ $link->totalVisits }} Pengunjung</td>
                                                </tr>
                                            @endforeach
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="card" id="agenciesList">
                            <div class="card-header fw-bold">
                                Microsite Populer
                            </div>
                            <div class="card-body">
                                <table class="table table-borderless table-nowrap">
                                    <thead>
                                        <tr>
                                            <th scope="col">#</th>
                                            <th scope="col">Tautan</th>
                                            <th scope="col">Pengunjung</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($microsites->sortByDesc('totalVisits') as $microsite)
                                        <tr>
                                            <th scope="row">{{ $loop->iteration }}</th>
                                            <td>{{ $microsite->default_short_url }}</td>
                                            <td>{{ $microsite->totalVisits }}</td>
                                        </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div><!--end col-->
                </div><!--end row-->
            </div>
            <!-- container-fluid -->
        </div>
    @endsection
    @section('script')
        <script src="https://cdn.jsdelivr.net/npm/apexcharts"></script>
        <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
        <script>
            function updateChart() {
                $.ajax({
                    url: "{{ route('analytic.users.chart') }}",
                    method: "GET",
                    success: function(data) {
                        console.log(data);

                        var totalUrlData = data.totalUrl.map(item => [new Date(item.date).getTime(), item
                            .totalUrl
                        ]);
                        var totalVisitsData = data.totalVisits.map(item => [new Date(item.date).getTime(), item
                            .totalVisits
                        ]);

                        var options = {
                            chart: {
                                height: 350,
                                type: "line",
                                stacked: false
                            },
                            dataLabels: {
                                enabled: false
                            },
                            colors: ["#6C757D", "#1E88E5"],
                            series: [{
                                    name: "Jumlah Tautan",
                                    data: totalUrlData
                                },
                                {
                                    name: "Pengunjung",
                                    data: totalVisitsData
                                }
                            ],
                            stroke: {
                                width: [4, 4]
                            },
                            plotOptions: {
                                bar: {
                                    columnWidth: "20%"
                                }
                            },
                            xaxis: {
                                type: 'datetime'
                            },
                            yaxis: [{
                                    axisTicks: {
                                        show: true
                                    },
                                    axisBorder: {
                                        show: true,
                                        color: "#FF1654"
                                    },
                                    labels: {
                                        style: {
                                            colors: "#FF1654"
                                        }
                                    },
                                    title: {
                                        text: "Pengunjung",
                                        style: {
                                            color: "#FF1654"
                                        }
                                    }
                                },
                                {
                                    opposite: true,
                                    axisTicks: {
                                        show: true
                                    },
                                    axisBorder: {
                                        show: true,
                                        color: "#1E88E5"
                                    },
                                    labels: {
                                        style: {
                                            colors: "#1E88E5"
                                        }
                                    },
                                    title: {
                                        text: "Total Visits",
                                        style: {
                                            color: "#1E88E5"
                                        }
                                    }
                                }
                            ],
                            tooltip: {
                                shared: true,
                                intersect: false,
                                x: {
                                    show: false
                                }
                            },
                            legend: {
                                horizontalAlign: "left",
                                offsetX: 40
                            }
                        };

                        var chart = new ApexCharts(document.querySelector("#chartDataAnalytic"), options);
                        chart.render();
                    },
                    error: function(xhr, status, error) {
                        console.error(error);
                    }
                });
            }

            updateChart();
        </script>
    @endsection
