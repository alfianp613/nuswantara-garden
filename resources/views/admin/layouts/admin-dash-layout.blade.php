<!DOCTYPE html>

<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1" />
        <link rel="icon" href="/img/logohead.png">
        <title>Nuswantara | Admin</title>
        <!-- <title>AdminLTE 3 | Starter</title> -->

        <!-- Google Font: Source Sans Pro -->
        <link
            rel="stylesheet"
            href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback"
        />
        <!-- Font Awesome Icons -->
        <link
            rel="stylesheet"
            href="/plugins/fontawesome-free/css/all.min.css"
        />
        <!-- Theme style -->
        <link rel="stylesheet" href="/dist/css/adminlte.min.css" />
        <!-- Load plotly.js into the DOM -->
        <script src='https://cdn.plot.ly/plotly-2.16.1.min.js'></script>
    </head>

    {{-- STYLE --}}
    <style>
        .content-wrapper,body{
            background-color: #e9e9e9
        }
    </style>
    {{-- ENDSTYLE --}}

    <body class="hold-transition sidebar-mini">
        <div class="wrapper">
            @include("admin.layouts.admin-navbar")
            {{-- @include('partials.navbar') --}}
            @include("admin.layouts.admin-sidebar")

            <!-- Content Wrapper. Contains page content -->
            <div class="content-wrapper">
                @yield('container')
            </div>
            @include("partials/footer")
            <!-- /.content-wrapper -->

            {{-- <!-- Main Footer -->
            <footer class="main-footer">
                <!-- To the right -->
                <div class="float-right d-none d-sm-inline">
                    Anything you want
                </div>
                <!-- Default to the left -->
                <strong
                    >Copyright &copy; 2014-2021
                    <a href="https://adminlte.io">AdminLTE.io</a>.</strong
                >
                All rights reserved.
            </footer> --}}
        </div>
        <!-- ./wrapper -->

        <!-- REQUIRED SCRIPTS -->

        <!-- jQuery -->
        <script src="/plugins/jquery/jquery.min.js"></script>
        <!-- Bootstrap 4 -->
        <script src="/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
        <!-- AdminLTE App -->
        <script src="/dist/js/adminlte.min.js"></script>
    </body>
</html>
