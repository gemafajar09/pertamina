@extends('template.index')

@section('title')
    Dashboard
@endsection

@section('content')
    <div class="col-lg-6 col-6">
        <!-- small box -->
        <div class="small-box bg-info">
            <div class="inner">
                <h3>{{ $pangkalan }}</h3>

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
                <h3>{{ $agen }}</h3>

                <p>Total Agen</p>
            </div>
            <div class="icon">
                <i class="ion ion-stats-bars"></i>
            </div>
            <a href="#" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
        </div>
    </div>

    <div class="col-md-12">
        <div class="card card-primary card-outline">
            <div class="card-body text-center">
                <h5>DATA PANGKALAN YANG AKTIF</h5>
            </div>
            <div class="card-body">
                <table id="example1" class="table table-bordered table-striped">
                    <thead>
                        <tr>
                            <th>ID Registrasi</th>
                            <th>Nama Pangkalan</th>
                            <th>No Telpon Kantor</th>
                            <th>Nama Pemilik</th>
                            <th>No Ktp Pemilik</th>
                            <th>No Hp Pemilik</th>
                            <th>Provinsi</th>
                            <th>Kabupaten /Kota</th>
                            <th>Kecamatan</th>
                            <th>Kelurahan</th>
                            <th>Kode Pos</th>
                            <th>Alamat</th>
                            <th>Status</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($data_pangkalan_aktif as $i => $a)
                            <tr>
                                <td>{{ $a->id_registrasi }}</td>
                                <td>{{ $a->nama_pangkalan }}</td>
                                <td>{{ $a->telpon_kantor }}</td>
                                <td>{{ $a->nama_pemilik }}</td>
                                <td>{{ $a->nik }}</td>
                                <td>{{ $a->no_hp }}</td>
                                <td>{{ $a->provinsi }}</td>
                                <td>{{ $a->kabupaten }}</td>
                                <td>{{ $a->kecamatan }}</td>
                                <td>{{ $a->kelurahan }}</td>
                                <td>{{ $a->kode_pos }}</td>
                                <td>{{ $a->alamat }}</td>
                                <td>{{ $a->status == 'AKTIF' ? 'DISETUJUI' : 'TIDAK DISETUJUI' }}</td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>

    <!-- <div class="col-lg-3 col-6">
        <div class="small-box bg-warning">
            <div class="inner">
                <h3>44</h3>

                <p>Bright Gas</p>
            </div>
            <div class="icon">
                <i class="ion ion-person-add"></i>
            </div>
            <a href="#" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
        </div>
    </div>

    <div class="col-lg-3 col-6">
        <div class="small-box bg-danger">
            <div class="inner">
                <h3>65</h3>

                <p>Unique Visitors</p>
            </div>
            <div class="icon">
                <i class="ion ion-pie-graph"></i>
            </div>
            <a href="#" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
        </div>
    </div> -->

    {{-- <div class="col-md-12">
    <div class="card card-primary card-outline">
        <div class="card-header">
            <center>
                <h4 style="font-weight:bold; font-family:mono; color:gray">Grafik Pangkalan</h4>
            </center>
        </div>
        <div class="card-body">
            <div class="chart">
                  <canvas id="grafikPangkalan" style="min-height: 250px; height: 250px; max-height: 250px; max-width: 100%;"></canvas>
            </div>
        </div>
    </div>
</div>

<script>
    $(document).ready(function(){

        var areaChartData = {
            labels: ['January', 'February', 'March', 'April', 'May', 'June', 'July'],
            datasets: [{
                    label: 'Digital Goods',
                    backgroundColor: 'rgba(60,141,188,0.9)',
                    borderColor: 'rgba(60,141,188,0.8)',
                    pointRadius: false,
                    pointColor: '#3b8bba',
                    pointStrokeColor: 'rgba(60,141,188,1)',
                    pointHighlightFill: '#fff',
                    pointHighlightStroke: 'rgba(60,141,188,1)',
                    data: [28, 48, 40, 19, 86, 27, 90]
                },
                {
                    label: 'Electronics',
                    backgroundColor: 'rgba(210, 214, 222, 1)',
                    borderColor: 'rgba(210, 214, 222, 1)',
                    pointRadius: false,
                    pointColor: 'rgba(210, 214, 222, 1)',
                    pointStrokeColor: '#c1c7d1',
                    pointHighlightFill: '#fff',
                    pointHighlightStroke: 'rgba(220,220,220,1)',
                    data: [65, 59, 80, 81, 56, 55, 40]
                },
            ]
        }

        var barChartCanvas = $('#grafikPangkalan').get(0).getContext('2d')
        var barChartData = $.extend(true, {}, areaChartData)
        var temp0 = areaChartData.datasets[0]
        var temp1 = areaChartData.datasets[1]
        barChartData.datasets[0] = temp1
        barChartData.datasets[1] = temp0

        var barChartOptions = {
            responsive: true,
            maintainAspectRatio:  false,
            datasetFill: false
        }

        new Chart(barChartCanvas, {
            type: 'bar',
            data: barChartData,
            options: barChartOptions
        })

    })
</script> --}}

    <!-- Untuk Data Pangkalan Yang Aktif -->
@endsection
