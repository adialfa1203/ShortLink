    @extends('layout.admin.app')

@section('title', 'Link')
@section('style')
    <style>
        @import url(https://fonts.googleapis.com/css?family=Roboto);

        body {
            font-family: Roboto, sans-serif;
        }

        #chart {
            max-width: 650px;
            margin: 35px auto;
        }
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
                                <h3 class="mb-4" style="float: right;"><span class="counter-value"
                                        data-target="{{ $totalUser }}">0</span>
                                </h3>
                            </div>kojfdgo
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
                                <h3 class="mb-4" style="float: right;"><span class="counter-value"
                                        data-target="{{ $totalUrl }}">0</span>
                                </h3>
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
                                <h3 class="mb-4" style="float: right;"><span class="counter-value"
                                        data-target="{{ $totalVisits }}">0</span>
                                </h3>
                            </div>
                        </div>
                    </div>
                </div>
            </div><!--end col-->
            <div class="col-xl-3 col-sm-6">
                <div class="card">
                    <div class="card-body">
                        <h5 class="fs-md text-muted mb-0">Subscription</h5>

                        <div class="row mt-3">
                            <div class="col-2">
                                <i class="fa-solid fa-thumbs-up" style="font-size: 30px;"></i>
                            </div>
                            <div class="col-10">
                                <h3 class="mb-4" style="float: right;"><span class="counter-value"
                                        data-target="0">0</span> </h3>
                            </div>
                        </div>
                    </div>
                </div>
            </div><!--end col-->
        </div><!--end row-->
        <div class="row">
            <div class="col-lg-12">
                <div class="card">
                    <div class="card-body pb-0 mb-n4">
                        <div class="d-flex z-1 position-relative">
                        </div>
                        <div class="card-body pt-0 mt-4 mt-md-0">
                            <div id="chartDataDashboard" style="min-height: 365px; min-width: 100%;"></div>
                        </div>
                    </div>
                </div>
            </div><!--end col-->
        </div><!--end row-->
    </div>
@endsection
@section('script')
    <script src="https://cdn.jsdelivr.net/npm/apexcharts"></script>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script>
        function updateChart() {
            $.ajax({
                url: "{{ route('dashboard.chart') }}",
                method: "GET",
                success: function(data) {
                    console.log(data);

                    var totalUserData = data.totalUser.map(item => [new Date(item.date).getTime(), item
                        .totalUser
                    ]);
                    var totalUrlData = data.totalUrl.map(item => [new Date(item.date).getTime(), item
                    .totalUrl]);
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
                        colors: ["#E53935", "#1E88E5", "#FDD835"],
                        series: [{
                                name: "Series A",
                                data: totalUserData
                            },
                            {
                                name: "Series B",
                                data: totalUrlData
                            },
                            {
                                name: "Series C",
                                data: totalVisitsData
                            }
                        ],
                        stroke: {
                            width: [4, 4, 4]
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
                                text: "Series A",
                                style: {
                                    color: "#FF1654"
                                }
                            }
                        }],
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

                    var chart = new ApexCharts(document.querySelector("#chartDataDashboard"), options);
                    chart.render();
                },
                error: function(xhr, status, error) {
                    console.error(error);
                }
            });
        }
        updateChart();
        // setInterval(data, 5000);
    </script>
@endsection
