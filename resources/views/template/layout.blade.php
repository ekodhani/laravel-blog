<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>@yield('title')</title>
    <!-- plugins:css -->
    <link rel="stylesheet" href="{{ url('assets/css/materialdesignicons.min.css') }}">
    <link rel="stylesheet" href="{{ url('assets/css/vendor.bundle.base.css') }}">
    <!-- endinject -->
    <!-- Plugin css for this page -->
    <!-- End plugin css for this page -->
    <!-- inject:css -->
    <!-- endinject -->
    <!-- Layout styles -->
    <link rel="stylesheet" href="{{ url('assets/css/login.css') }}">
    <!-- End layout styles -->
    <link rel="shortcut icon" href="{{ url('assets/favicon.png') }}">
</head>

<body>
    @yield('container')

    <!-- plugins:js -->
    <script src="{{ url('assets/js/vendor.bundle.base.js') }}"></script>
    <!-- endinject -->
    <!-- Plugin js for this page -->
    <!-- End plugin js for this page -->
    <!-- inject:js -->
    <script src="{{ url('assets/js/jquery.min.js') }}"></script>
    <script src="{{ url('assets/js/off-canvas.js') }}"></script>
    <script src="{{ url('assets/js/hoverable-collapse.js') }}"></script>
    <script src="{{ url('assets/js/sweetalert2.all.min.js') }}"></script>
    <script src="{{ url('assets/js/myscript.js') }}"></script>
    <!-- endinject -->
    </body>
    
    </html>