<!DOCTYPE html>
<html lang="en">


<!-- Mirrored from coderthemes.com/hyper_2/saas/index.blade.php by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 03 May 2023 10:24:28 GMT -->
<head>
    <meta charset="utf-8" />
    <title>@yield('title','Dashboard | Hyper - Responsive Bootstrap 5 Admin Dashboard')</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta content="A fully featured admin theme which can be used to build CRM, CMS, etc." name="description" />
    <meta content="Coderthemes" name="author" />

    <!-- App favicon -->
    <link rel="shortcut icon" href="{{asset('/')}}assets/images/favicon.ico">

    <!-- Daterangepicker css -->
    <link rel="stylesheet" href="{{asset('/')}}assets/vendor/daterangepicker/daterangepicker.css">

    <!-- Vector Map css -->
    <link rel="stylesheet" href="{{asset('/')}}assets/vendor/admin-resources/jquery.vectormap/jquery-jvectormap-1.2.2.css">

    <!-- Theme Config Js -->
    <script src="{{asset('/')}}assets/js/hyper-config.js"></script>

    <!-- App css -->
    <link href="{{asset('/')}}assets/css/app-saas.min.css" rel="stylesheet" type="text/css" id="app-style" />

    <!-- Icons css -->
    <link href="{{asset('/')}}assets/css/icons.min.css" rel="stylesheet" type="text/css" />

    <link href="{{asset('/')}}assets/vendor/datatables.net-bs5/css/dataTables.bootstrap5.min.css" rel="stylesheet" type="text/css" />
    <style>
        /*.loader {*/
        /*    border: 16px solid #f3f3f3;*/
        /*    border-top: 16px solid #3498db;*/
        /*    border-radius: 50%;*/
        /*    width: 120px;*/
        /*    height: 120px;*/
        /*    animation: spin 2s linear infinite;*/
        /*    margin: auto;*/
        /*}*/

        /*@keyframes spin {*/
        /*    0% { transform: rotate(0deg); }*/
        /*    100% { transform: rotate(360deg); }*/
        /*}*/
    </style>
</head>

<body>

<div class="loader"></div>
<div class="wrapper">

    @include('admin.layouts.header')
    @include('admin.layouts.sidebar')

    <div class="content-page">

        @yield('content')

    </div>

    @include('admin.layouts.footer')

</div>

@include('admin.layouts.setting')

<script src="{{asset('/')}}assets/js/vendor.min.js"></script>

<script src="{{asset('/')}}assets/vendor/daterangepicker/moment.min.js"></script>
<script src="{{asset('/')}}assets/vendor/daterangepicker/daterangepicker.js"></script>

<script src="{{asset('/')}}assets/vendor/apexcharts/apexcharts.min.js"></script>

<script src="{{asset('/')}}assets/vendor/admin-resources/jquery.vectormap/jquery-jvectormap-1.2.2.min.js"></script>
<script src="{{asset('/')}}assets/vendor/admin-resources/jquery.vectormap/maps/jquery-jvectormap-world-mill-en.js"></script>

<script src="{{asset('/')}}assets/js/pages/demo.dashboard.js"></script>

<script src="{{asset('/')}}assets/js/app.min.js"></script>

<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>



<!-- Datatables js -->
<script src="{{asset('/')}}assets/vendor/datatables.net/js/jquery.dataTables.min.js"></script>
<script src="{{asset('/')}}assets/vendor/datatables.net-bs5/js/dataTables.bootstrap5.min.js"></script>

<!-- Datatable Demo Aapp js -->
<script src="{{asset('/')}}assets/js/pages/demo.datatable-init.js"></script>

@include('admin.layouts.js')

@yield('script')

</body>
</html>
