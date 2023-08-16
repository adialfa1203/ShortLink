@extends('layout.app')

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
                            <h3 class="mb-4" style="float: right;"><span class="counter-value" data-target="{{$jumlahuser}}">0</span> </h3>
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
                            <h3 class="mb-4" style="float: right;"><span class="counter-value" data-target="291.32">0</span> </h3>
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
                            <h3 class="mb-4" style="float: right;"><span class="counter-value" data-target="291.32">0</span> </h3>
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
                            <h3 class="mb-4" style="float: right;"><span class="counter-value" data-target="291.32">0</span> </h3>
                        </div>
                    </div>
                </div>
            </div>
        </div><!--end col-->
    </div><!--end row-->
    <div class="card">
                        <div class="card-body">
                            <div id="chart1"></div>
                        </div><!-- end card-body -->
                    </div><!-- end card -->
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
@endsection
@endsection
