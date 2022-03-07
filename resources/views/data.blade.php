@extends('layout.template')
@section('title')

@section('content')
    <!-- Main content -->
    <section class="content">
        <!-- Small boxes (Stat box) -->
        <div class="row">
            <div class="col-lg-3 col-xs-6">
                <!-- small box -->
                <div class="small-box bg-aqua">
                    <div class="inner">
                        <h3>150</h3>

                        <p>PINJAMAN</p>
                    </div>
                    <div class="icon">
                        <i class="ion ion-stats-bars"></i>
                    </div>
                    <a href="/pinjaman" class="small-box-footer">info <i class="fa fa-arrow-circle-right"></i></a>
                </div>
            </div>
            <!-- ./col -->
            <div class="col-lg-3 col-xs-6">
                <!-- small box -->
                <div class="small-box bg-green">
                    <div class="inner">
                        <h3>53<sup style="font-size: 20px"></sup></h3>

                        <p>SIMPANAN</p>
                    </div>
                    <div class="icon">
                        <i class="ion ion-stats-bars"></i>
                    </div>
                    <a href="/simpanan" class="small-box-footer">info <i class="fa fa-arrow-circle-right"></i></a>
                </div>
            </div>
            <!-- ./col -->
            <div class="col-lg-3 col-xs-6">
                <!-- small box -->
                <div class="small-box bg-yellow">
                    <div class="inner">
                        <h3>44</h3>

                        <p>NASABAH</p>
                    </div>
                    <div class="icon">
                        <i class="ion ion-person-add"></i>
                    </div>
                    <a href="/nasabah" class="small-box-footer">info <i class="fa fa-arrow-circle-right"></i></a>
                </div>
            </div>
            <!-- ./col -->
            <div class="col-lg-3 col-xs-6">
                <!-- small box -->
                <div class="small-box bg-red">
                    <div class="inner">
                        <h3>65</h3>

                        <p>PENARIKAN</p>
                    </div>

                    <div class="icon">
                        <i class="ion ion-pie-graph"></i>
                    </div>
                    <a href="/penarikan" class="small-box-footer">info <i class="fa fa-arrow-circle-right"></i></a>
                </div>
            </div>
            
            <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.5.0/Chart.min.js"></script>

            <body>
                <canvas id="myChart" style="width:100%;max-width:500px"></canvas>

                <script>
                    var xValues = [100, 200, 300, 400, 500, 600, 700, 800, 900, 1000];

                    new Chart("myChart", {
                        type: "line",
                        data: {
                            labels: xValues,
                            datasets: [{
                                data: [860, 1134, 1046, 1206, 1407, 1510, 1310, 2310, 7840, 4700],
                                borderColor: "red",
                                fill: false
                            }, {
                                data: [1600, 1700, 1700, 1900, 2000, 2700, 4000, 5000, 6000, 3000],
                                borderColor: "green",
                                fill: false
                            }, {
                                data: [300, 700, 2000, 5000, 6000, 4000, 2000, 1000, 200, 100],
                                borderColor: "blue",
                                fill: false
                            }, {
                                data: [300, 100, 200, 500, 600, 400, 000, 100, 200, 100],
                                borderColor: "yellow",
                                fill: false
                            }]
                        },
                        options: {
                            legend: {
                                display: false
                            }
                        }
                    });
                </script>
                <div class="col-sm-6">
                    <p class="text-center">
                        <strong>DATA KOPERASI</strong>
                    </p>

                    <div class="progress-group">
                        <span class="progress-text">PINJAMAN</span>
                        <span class="progress-number"><b>200</b>/500</span>

                        <div class="progress sm">
                            <div class="progress-bar progress-bar-aqua" style="width: 150%"></div>
                        </div>
                    </div>
                    <!-- /.progress-group -->
                    <div class="progress-group">
                        <span class="progress-text">PENARIKAN</span>
                        <span class="progress-number"><b>310</b>/400</span>

                        <div class="progress sm">
                            <div class="progress-bar progress-bar-red" style="width: 65%"></div>
                        </div>
                    </div>
                    <!-- /.progress-group -->
                    <div class="progress-group">
                        <span class="progress-text">SIMPANAN</span>
                        <span class="progress-number"><b>480</b>/800</span>

                        <div class="progress sm">
                            <div class="progress-bar progress-bar-green" style="width: 53%"></div>
                        </div>
                    </div>
                    <!-- /.progress-group -->
                    <div class="progress-group">
                        <span class="progress-text">NASABAH</span>
                        <span class="progress-number"><b>250</b>/500</span>

                        <div class="progress sm">
                            <div class="progress-bar progress-bar-yellow" style="width: 44%"></div>
                        </div>
                        @endsection