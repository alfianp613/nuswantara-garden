@extends('admin.layouts.admin-dash-layout')

@section('container')

<!-- Content Header (Page header) -->
<div class="content-header">
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6">
                <h1 class="m-0">Dashboard</h1>
            </div>
            <!-- /.col -->
            <div class="col-sm-6">
                <ol class="breadcrumb float-sm-right">
                    <li class="breadcrumb-item">
                        <a href="#">Home</a>
                    </li>
                    <li class="breadcrumb-item active">
                        Dashboard 
                    </li>
                </ol>
            </div>
            <!-- /.col -->
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
            <div class="col-sm-6">
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
            <div class="col-sm-6">
                <div class="card">
                    <div class="card-body">
                        <h2>
                            {{$user->jumlah_user}}
                        </h2>
                        <h5>
                            Total Petani
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
                            title: 'Line Chart',
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
                <div class="card text-center">
                    <div class="card-body">
                        <img src="/img/logohead.png" alt="">
                        <h5>chart 1/2</h5>
                    </div>
                </div>
            </div>
            <div class="col-lg-6">
                <div class="card text-center">
                    <div class="card-body">
                        <img src="/img/logohead.png" alt="">
                        <h5>chart 2/2</h5>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-6">
                <div class="card">
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
                <div class="card">
                    <div class="card-body">
                        <div class="filter">
                            <button class="btn btn-secondary" onclick="projecttop()">5 Recent Completed Project</button>
                            <button class="btn btn-secondary" onclick="projectbot()">Bottom 5 Project</button>
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
        <div class="row">
            <div class="col-lg-6">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">Card title</h5>

                        <p class="card-text">
                            Some quick example text to build on
                            the card title and make up the bulk
                            of the card's content.
                        </p>

                        <a href="#" class="card-link"
                            >Card link</a
                        >
                        <a href="#" class="card-link"
                            >Another link</a
                        >
                    </div>
                </div>

                <!-- /.card -->
            </div>
            <!-- /.col-sm-6 -->
            <div class="col-lg-6">
                <div class="card card-primary card-outline">
                    <div class="card-header">
                        <h5 class="m-0">Featured</h5>
                    </div>
                    <div class="card-body">
                        <h6 class="card-title">
                            Special title treatment
                        </h6>

                        <p class="card-text">
                            With supporting text below as a
                            natural lead-in to additional
                            content.
                        </p>
                        <a href="#" class="btn btn-primary"
                            >Go somewhere</a
                        >
                    </div>
                </div>
            </div>
            <!-- /.col-sm-6 -->
        </div>
        <!-- /.row -->
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
</script>

@endsection
