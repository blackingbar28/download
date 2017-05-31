<!DOCTYPE html>
<!--
This is a starter template page. Use this page to start your new project from
scratch. This page gets rid of all links and provides the needed markup only.
-->
<html>
<head>
    <meta charset="UTF-8">
    <title>@yield('title')</title>
    <meta content='width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no' name='viewport'>
    <!-- Bootstrap 3.3.2 -->
    <link href="{!! asset('/bower/admin-lte/bootstrap/css/bootstrap.min.css') !!}" rel="stylesheet" type="text/css" />
    <!-- Font Awesome Icons -->
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css" rel="stylesheet" type="text/css" />
    <!-- Ionicons -->
    <link href="http://code.ionicframework.com/ionicons/2.0.0/css/ionicons.min.css" rel="stylesheet" type="text/css" />
    <!-- Theme style -->
    <link href="{!! asset('/bower/admin-lte/dist/css/AdminLTE.min.css') !!}" rel="stylesheet" type="text/css" />
    <!-- AdminLTE Skins. We have chosen the skin-blue for this starter
          page. However, you can choose any other skin. Make sure you
          apply the skin class to the body tag so the changes take effect.
    -->
    <link href="{!! asset('/bower/admin-lte/dist/css/skins/skin-blue.min.css') !!}" rel="stylesheet" type="text/css" />

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js"></script>
    <![endif]-->
    <link href="{!! asset('/css/backend/style.css') !!}" rel="stylesheet" type="text/css" />
    @yield('styles')

</head>
<body class="skin-blue">
<div class="wrapper">

    <!-- Main Header -->
@include('backend.layouts.header')
<!-- Left side column. contains the logo and sidebar -->
@include('backend.layouts.sidebar')

<!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
            <h1>
                <small>{!! $pageDescription or null !!}</small>
            </h1>
            @yield('breadcrumb')
        </section>

        <!-- Main content -->
        <section class="content">
        @yield('content')
        <!-- Your Page Content Here -->

        </section><!-- /.content -->
    </div><!-- /.content-wrapper -->

    <!-- Main Footer -->
    @include('backend.layouts.footer')

</div><!-- ./wrapper -->

<!-- REQUIRED JS SCRIPTS -->

<!-- jQuery 2.1.3 -->
<script src="{!! asset ('/bower/admin-lte/plugins/jQuery/jQuery-2.1.3.min.js') !!}"></script>
<!-- Bootstrap 3.3.2 JS -->
<script src="{!! asset ('/bower/admin-lte/bootstrap/js/bootstrap.min.js') !!}" type="text/javascript"></script>
<!-- AdminLTE App -->
<script src="{!! asset ('/bower/admin-lte/dist/js/app.min.js') !!}" type="text/javascript"></script>
<!--Bootbox js-->
<script src="{!! asset ('/backend/plugins/bootboxjs/bootbox.min.js') !!}" type="text/javascript"></script>
<!-- Common js -->
<script src="{!! asset ('/js/common.js') !!}" type="text/javascript"></script>
<!-- Tinymce -->
<script src="{!! asset ('/backend/js/tinymce/tinymce.min.js') !!}"></script>
@yield('scripts')
</body>
</html>