@extends('template.index')

@section('title')
Dashboard
@endsection

@section('content')
<div class="col-lg-6 col-6">
    <!-- small box -->
    <div class="small-box bg-info">
        <div class="inner">
            <h3>{{$pangkalan}}</h3>

            <p>Total Pangkalan</p>
        </div>
        <div class="icon">
            <i class="ion ion-bag"></i>
        </div>
        <a href="#" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
    </div>
</div>
<!-- ./col -->
<div class="col-lg-6 col-6">
    <!-- small box -->
    <div class="small-box bg-success">
        <div class="inner">
            <h3>{{$agen}}</h3>

            <p>Total Agen</p>
        </div>
        <div class="icon">
            <i class="ion ion-stats-bars"></i>
        </div>
        <a href="#" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
    </div>
</div>

<!-- <div class="col-md-12">
    <div class="card card-primary card-outline">
        <div class="card-header">
            <center>
                <h4 style="font-weight:bold; font-family:mono; color:gray">Grafik Pangkalan</h4>
            </center>
        </div>
        <div class="card-body">
            <div class="chart">
                <canvas id="grafikPangkalan"
                    style="min-height: 250px; height: 250px; max-height: 250px; max-width: 100%;"></canvas>
            </div>
        </div>
    </div>
</div> -->

<script>
    // $(document).ready(function () {

    //     var areaChartData = {
    //         labels: ['Januari', 'Februari', 'Maret', 'April', 'May', 'Juni', 'Juli', 'August', 'September',
    //             'Oktober', 'November', 'Desember'
    //         ],
    //         datasets:
    //     }

    //     var barChartCanvas = $('#grafikPangkalan').get(0).getContext('2d')
    //     var barChartData = $.extend(true, {}, areaChartData)
    //     var temp0 = areaChartData.datasets[0]
    //     var temp1 = areaChartData.datasets[1]
    //     barChartData.datasets[0] = temp1
    //     barChartData.datasets[1] = temp0

    //     var barChartOptions = {
    //         responsive: true,
    //         maintainAspectRatio: false,
    //         datasetFill: false
    //     }

    //     new Chart(barChartCanvas, {
    //         type: 'bar',
    //         data: barChartData,
    //         options: barChartOptions
    //     })

    // })

</script>
@endsection
