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
            <div class="col-sm-3">
                <div class="card">
                    <div class="card-body">
                        <h2>
                            1440
                        </h2>
                        <h5>
                            total petani
                        </h5>
                    </div>
                </div>
            </div>
            <div class="col-sm-3">
                <div class="card">
                    <div class="card-body">
                        <h2>
                            1440
                        </h2>
                        <h5>
                            total petani
                        </h5>
                    </div>
                </div>
            </div>
            <div class="col-sm-3">
                <div class="card">
                    <div class="card-body">
                        <h2>
                            1440
                        </h2>
                        <h5>
                            total petani
                        </h5>
                    </div>
                </div>
            </div>
            <div class="col-sm-3">
                <div class="card">
                    <div class="card-body">
                        <h2>
                            1440
                        </h2>
                        <h5>
                            total petani
                        </h5>
                    </div>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-lg-12">
                <div class="card text-center">
                    <div class="card-body">
                        <img src="/img/logohead.png" alt="">
                        <h5>chart full size</h5>
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
                            <button class="btn btn-secondary">Top 5 Donatur</button>
                            <button class="btn btn-secondary">Top 5 Active Donatur</button>
                        </div>
                        <table class="table table-striped">
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
                                <tr>
                                    <td>1</td>
                                    <td>random</td>
                                    <td>10000</td>
                                    <td>2</td>
                                </tr>
                                <tr>
                                    <td>2</td>
                                    <td>random</td>
                                    <td>14000</td>
                                    <td>1</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
            <div class="col-lg-6">
                <div class="card">
                    <div class="card-body">
                        <div class="filter">
                            <button class="btn btn-secondary">5 Recent Completed Project</button>
                            <button class="btn btn-secondary">Bottom 5 Project</button>
                        </div>
                        <table class="table table-striped">
                            <thead>
                                <th scope="col">No.</th>
                                <th scope="col">Nama</th>
                                <th scope="col">Total Amount</th>
                                <th scope="col">Percent Amount</th>
                                <th scope="col">Status</th>
                            </thead>
                            <tbody>
                                {{-- <tr>
                                    <th scope="row">1</th>
                                </tr> --}}
                                <tr>
                                    <td>1</td>
                                    <td>random</td>
                                    <td>10000</td>
                                    <td>100</td>
                                    <td>done</td>
                                </tr>
                                <tr>
                                    <td>2</td>
                                    <td>random</td>
                                    <td>14000</td>
                                    <td>100</td>
                                    <td>done</td>
                                </tr>
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
@endsection
