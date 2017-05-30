<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <meta content='width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no' name='viewport'>
        <link href="{!! asset('/bower/admin-lte/bootstrap/css/bootstrap.min.css') !!}" rel="stylesheet" type="text/css" />
        <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css" rel="stylesheet" type="text/css" />
        <link href="http://code.ionicframework.com/ionicons/2.0.0/css/ionicons.min.css" rel="stylesheet" type="text/css" />
        <link href="{!! asset('/bower/admin-lte/dist/css/AdminLTE.min.css') !!}" rel="stylesheet" type="text/css" />
        <link href="{!! asset('/bower/admin-lte/dist/css/skins/skin-blue.min.css') !!}" rel="stylesheet" type="text/css" />
        <link href="{{ asset('/css/backend/style.css') }}" rel="stylesheet" type="text/css">

        <title>Hd Filme Download | Download Filme &amp; Filme kostenlos downloaden</title>
    </head>
    <body class="skin-blue">
        <div class="wrapper">
            @include('backend.layouts.header')
            @include('backend.layouts.sidebar')

            <div class="content-wrapper">
                <section class="content-header">
                    <h1>
                        <small>{!! $pageDescription or null !!}</small>
                    </h1>
                </section>

                <section class="content">
                    @yield('content')
                </section>
            </div>

            @include('backend.layouts.footer')
            <!-- jQuery 2.1.3 -->
            <script src="{!! asset ('/bower/admin-lte/plugins/jQuery/jQuery-2.1.3.min.js') !!}"></script>
            <!-- Bootstrap 3.3.2 JS -->
            <script src="{!! asset ('/bower/admin-lte/bootstrap/js/bootstrap.min.js') !!}" type="text/javascript"></script>
            <!-- AdminLTE App -->
            <script src="{!! asset ('/bower/admin-lte/dist/js/app.min.js') !!}" type="text/javascript"></script>
            <!-- Common js -->
            <script src="{!! asset ('/js/common.js') !!}" type="text/javascript"></script>
            <!-- Tinymce -->
            <script src="{!! asset ('/backend/js/tinymce/tinymce.min.js') !!}"></script>
        </div>
    </body>
</html>