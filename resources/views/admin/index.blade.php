
@extends('admin.layouts.admin-dash-layout')

@section('container')

<!-- Content Header (Page header) -->
<div class="content-header">
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6">
                <h1 class="m-0">Dashboard</h1>
            </div>
        </div>
        <!-- /.row -->
    </div>
    <!-- /.container-fluid -->
</div>
<!-- /.content-header -->

<!-- Main content -->
<div class="content">
    <div class="container-fluid">
        <div class="row text-center">
            <div class="col-sm-3">
                <div class="card">
                    <div class="card-body">
                        <h2>
                            {{$user->jumlah_user}}
                        </h2>
                        <h5>
                            Total Donatur
                        </h5>
                    </div>
                </div>
            </div>
            <div class="col-sm-3">
                <div class="card">
                    <div class="card-body">
                        <h2>
                            {{$petani->jumlah_petani}}
                        </h2>
                        <h5>
                            Total Petani
                        </h5>
                    </div>
                </div>
            </div>
            <div class="col-sm-3">
                <div class="card">
                    <div class="card-body">
                        <h2>
                            {{$project->jumlah_project}}
                        </h2>
                        <h5>
                            Total Project
                        </h5>
                    </div>
                </div>
            </div>
            <div class="col-sm-3">
                <div class="card">
                    <div class="card-body">
                        <h2>
                            Rp {{$transaksi->total_nominal}}
                        </h2>
                        <h5>
                            Total Donasi
                        </h5>
                    </div>
                </div>
            </div>
            
        </div>

        <div class="row">
            <div class="col-lg-12">
                <div class="card text-center">
                    <div class="card-body">
                        <div id='myDiv'></div>
                        <script>
                            var selectorOptions = {
                            buttons: [{
                                step: 'month',
                                stepmode: 'backward',
                                count: 3,
                                label: '3m'
                            }, {
                                step: 'month',
                                stepmode: 'backward',
                                count: 6,
                                label: '6m'
                            }, {
                                step: 'year',
                                stepmode: 'todate',
                                count: 1,
                                label: 'YTD'
                            }, {
                                step: 'all',
                            }],
                        };
                            var trace1 = {
                            type: "scatter",
                            mode: 'lines+markers',
                            name: 'Total Donasi',
                            x: {{ Js::from($tanggal1) }},
                            y: {{ Js::from($nominal1) }},
                            line: {color: '#0000FF'},
                            hovertemplate: 'Nominal: Rp %{y:.2f}' +
                                            '<br>Bulan: %{x}'
                            }

                            var trace2 = {
                            type: "scatter",
                            mode: 'lines+markers',
                            name: 'Total Pencairan',
                            x: {{ Js::from($tanggal2) }},
                            y: {{ Js::from($nominal2) }},
                            line: {color: '#FF4500'},
                            hovertemplate: 'Nominal: Rp %{y:.2f}' +
                                            '<br>Bulan: %{x}'
                            }

                            var trace3 = {
                            type: "scatter",
                            mode: 'lines+markers',
                            name: 'Total Target',
                            x: {{ Js::from($tanggal3) }},
                            y: {{ Js::from($nominal3) }},
                            line: {color: '#ADFF2F'},
                            hovertemplate:  'Nominal: Rp %{y:.2f}' +
                                            '<br>Bulan: %{x}'
                            }

                            var data = [trace1,trace2,trace3];

                            var layout = {
                            title: 'Trend Transaksi',
                            xaxis: {
                                rangeselector: selectorOptions,
                                rangeslider: {}
                            },
                            yaxis: {
                                fixedrange: true
                            }
                            };

                            Plotly.newPlot('myDiv', data, layout);
                        </script>
                    </div>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-lg-6">
                <div class="card card-primary card-outline">
                    <div class="card-header">
                        <h5 class="m-0">Bar Chart Propinsi</h5>
                    </div>
                    <div class="card-body">
                        <div class="filter">
                            <button class="btn btn-primary" onclick="provdonasi()">Total Donasi</button>
                            <button class="btn btn-primary" onclick="provtrans() ">Total Transaksi</button>
                        </div>
                        <div id="barchartprov" style="display: flex;"></div>
                        <div id="barchartprov2" style="display: none;"></div>
                        <script>
                            var data3 = [{
                            type: 'bar',
                            x: {{ Js::from($prov) }},
                            y: {{ Js::from($total) }},
                            marker: {
                                color: '#bcff6a',
                                opacity: 0.6,
                                line: {
                                color: '#00acba',
                                width: 1.5
                                }
                            },
                            hovertemplate:  'Nominal: Rp %{y:.2f}'
                            }];
                            var layout2 = {
                            autosize: false,
                            width: 575,
                            height: 500,
                            title: '5 Propinsi dengan Total Donasi Terbanyak',
                            hovermode: "closest",
                            legend:false
                            };
                            Plotly.newPlot('barchartprov', data3, layout2);

                            var data4 = [{
                            type: 'bar',
                            x: {{ Js::from($prov2) }},
                            y: {{ Js::from($total2) }},
                            marker: {
                                color: '#bcff6a',
                                opacity: 0.6,
                                line: {
                                color: '#00acba',
                                width: 1.5
                                }
                            },
                            hovertemplate:  'Transaksi: %{y}'
                            }];
                            var layout4 = {
                            autosize: false,
                            width: 575,
                            height: 500,
                            title: '5 Propinsi dengan Total Transaksi Terbanyak',
                            hovermode: "closest",
                            legend:false
                            };
                            Plotly.newPlot('barchartprov2', data4, layout4);
                        </script>
                    </div>
                </div>
            </div>
            <div class="col-lg-6">
                <div class="card card-primary card-outline">
                    <div class="card-header">
                        <h5 class="m-0">Bar Chart Komoditas</h5>
                    </div>
                    <div class="card-body">
                        <div class="filter">
                            <button class="btn btn-primary" onclick="komdonasi()">Total Donasi</button>
                            <button class="btn btn-primary" onclick="komtrans() ">Total Transaksi</button>
                        </div>
                        <div id="barchartkom" style="display: flex;"></div>
                        <div id="barchartkom2" style="display: none;"></div>
                        <script>
                            var data3 = [{
                            type: 'bar',
                            x: {{ Js::from($kom2) }},
                            y: {{ Js::from($komt2) }},
                            marker: {
                                color: '#4c4d5c',
                                opacity: 0.6,
                                line: {
                                color: '#00acba',
                                width: 1.5
                                }
                            },
                            hovertemplate:  'Nominal: Rp %{y:.2f}'
                            }];
                            var layout2 = {
                            autosize: false,
                            width: 575,
                            height: 500,
                            title: 'Komoditas dengan Total Donasi Terbanyak',
                            hovermode: "closest",
                            legend:false
                            };
                            Plotly.newPlot('barchartkom', data3, layout2);

                            var data4 = [{
                            type: 'bar',
                            x: {{ Js::from($kom) }},
                            y: {{ Js::from($komt) }},
                            marker: {
                                color: '#4c4d5c',
                                opacity: 0.6,
                                line: {
                                color: '#00acba',
                                width: 1.5
                                }
                            },
                            hovertemplate:  'Transaksi: %{y}'
                            }];
                            var layout4 = {
                            autosize: false,
                            width: 575,
                            height: 500,
                            title: 'Komoditas dengan Total Transaksi Terbanyak',
                            hovermode: "closest",
                            legend:false
                            };
                            Plotly.newPlot('barchartkom2', data4, layout4);
                        </script>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-6">
                <div class="card card-primary card-outline">
                    <div class="card-header">
                        <h5 class="m-0">Tabel Donatur</h5>
                    </div>
                    <div class="card-body">
                        <div class="filter">
                            <button class="btn btn-primary" onclick="amount()">Top 5 Donatur</button>
                            <button class="btn btn-primary" onclick="aktif() ">Top 5 Active Donatur</button>
                        </div>
                        <div class="container" id="tabel5user" style="display: flex;">
                            <table class="table table-striped" >
                                <thead>
                                    <th scope="col">No.</th>
                                    <th scope="col">Nama</th>
                                    <th scope="col">Total Amount</th>
                                    <th scope="col">Frequence</th>
                                </thead>
                                <tbody>
                                    {{-- <tr>
                                        <th scope="row">1</th>
                                    </tr> --}}
                                    @for ($i = 0;  $i<5 ; $i++)
                                    <tr>
                                        <td>{{$i+1}}</td>
                                        <td>{{$top5user[$i]->nama_donatur}}</td>
                                        <td>Rp {{$top5user[$i]->total_donasi}}</td>
                                        <td>{{$top5user[$i]->frekuensi}}</td>
                                    </tr>
                                    @endfor
                                </tbody>
                            </table>
                        </div>
                        <div class="container" id="tabel5aktif" style="display: none;">
                            <table class="table table-striped" >
                                <thead>
                                    <th scope="col">No.</th>
                                    <th scope="col">Nama</th>
                                    <th scope="col">Total Amount</th>
                                    <th scope="col">Frequence</th>
                                </thead>
                                <tbody>
                                    {{-- <tr>
                                        <th scope="row">1</th>
                                    </tr> --}}
                                    @for ($i = 0;  $i<5 ; $i++)
                                    <tr>
                                        <td>{{$i+1}}</td>
                                        <td>{{$top5active[$i]->nama_donatur}}</td>
                                        <td>Rp {{$top5active[$i]->total_donasi}}</td>
                                        <td>{{$top5active[$i]->frekuensi}}</td>
                                    </tr>
                                    @endfor
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-6">
                <div class="card card-primary card-outline">
                    <div class="card-header">
                        <h5 class="m-0">Tabel Project</h5>
                    </div>
                    <div class="card-body">
                        <div class="filter">
                            <button class="btn btn-primary" onclick="projecttop()">5 Recent Completed Project</button>
                            <button class="btn btn-primary" onclick="projectbot()">Bottom 5 Project</button>
                        </div>
                        <table class="table table-striped" id="topproject" style="display: block;">
                            <thead>
                                <th scope="col">No.</th>
                                <th scope="col">Nama</th>
                                <th scope="col">Total Amount</th>
                                <th scope="col">Percent Amount</th>
                                <th scope="col">Status</th>
                            </thead>
                            <tbody>
                                @for ($i = 0;  $i<5 ; $i++)
                                    <tr>
                                        <td>{{$i+1}}</td>
                                        <td>{{$doneproject[$i]->nama_project}}</td>
                                        <td>Rp {{$doneproject[$i]->dana_terkumpul}}</td>
                                        <td>{{$doneproject[$i]->persentase*100}}%</td>
                                        <td>{{$doneproject[$i]->status_project}}</td>
                                    </tr>
                                @endfor
                            </tbody>
                        </table>
                        <table class="table table-striped" id="bottomproject" style="display: none;">
                            <thead>
                                <th scope="col">No.</th>
                                <th scope="col">Nama</th>
                                <th scope="col">Total Amount</th>
                                <th scope="col">Percent Amount</th>
                                <th scope="col">Status</th>
                            </thead>
                            <tbody>
                                @for ($i = 0;  $i<5 ; $i++)
                                    <tr>
                                        <td>{{$i+1}}</td>
                                        <td>{{$projectbottom[$i]->nama_project}}</td>
                                        <td>Rp {{$projectbottom[$i]->dana_terkumpul}}</td>
                                        <td>{{$projectbottom[$i]->persentase*100}}%</td>
                                        <td>{{$projectbottom[$i]->status_project}}</td>
                                    </tr>
                                @endfor
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- /.container-fluid -->
</div>
<!-- /.content -->

<script>
    function amount() {
            var x = document.getElementById("tabel5user");
            if (x.style.display === "none") {
                x.style.display = "flex";
            }
            var y = document.getElementById("tabel5aktif");
            if (y.style.display === "flex") {
                y.style.display = "none";
        }}
    function aktif() {
        var x = document.getElementById("tabel5user");
        if (x.style.display === "flex") {
            x.style.display = "none";
        }
        var y = document.getElementById("tabel5aktif");
        if (y.style.display === "none") {
            y.style.display = "flex";
    }}

    function projecttop() {
            var x = document.getElementById("topproject");
            if (x.style.display === "none") {
                x.style.display = "block";
            }
            var y = document.getElementById("bottomproject");
            if (y.style.display === "block") {
                y.style.display = "none";
        }}
    function projectbot() {
        var x = document.getElementById("topproject");
        if (x.style.display === "block") {
            x.style.display = "none";
        }
        var y = document.getElementById("bottomproject");
        if (y.style.display === "none") {
            y.style.display = "block";
    }}

    function provdonasi() {
        var x = document.getElementById("barchartprov");
        if (x.style.display === "none") {
            x.style.display = "flex";
        }
        var y = document.getElementById("barchartprov2");
        if (y.style.display === "flex") {
            y.style.display = "none";
    }}

    function provtrans() {
        var x = document.getElementById("barchartprov");
        if (x.style.display === "flex") {
            x.style.display = "none";
        }
        var y = document.getElementById("barchartprov2");
        if (y.style.display === "none") {
            y.style.display = "flex";
    }}

    function komdonasi() {
        var x = document.getElementById("barchartkom");
        if (x.style.display === "none") {
            x.style.display = "flex";
        }
        var y = document.getElementById("barchartkom2");
        if (y.style.display === "flex") {
            y.style.display = "none";
    }}

    function komtrans() {
        var x = document.getElementById("barchartkom");
        if (x.style.display === "flex") {
            x.style.display = "none";
        }
        var y = document.getElementById("barchartkom2");
        if (y.style.display === "none") {
            y.style.display = "flex";
    }}
</script>

@endsection
