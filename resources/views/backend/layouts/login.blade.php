<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>@yield('title')</title>
    <meta content='width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no' name='viewport'>
    <link href="{!! asset("/bower/admin-lte/bootstrap/css/bootstrap.min.css") !!}" rel="stylesheet" type="text/css" />
    <link href="{!! asset("/css/font-awesome.min.css") !!}" rel="stylesheet" type="text/css" />
    <link href="{!! asset("/css/ionicons.min.css") !!}" rel="stylesheet" type="text/css" />
    <link href="{!! asset("/bower/admin-lte/dist/css/AdminLTE.min.css") !!}" rel="stylesheet" type="text/css" />
    <link href="{!! asset("/bower/admin-lte/dist/css/skins/skin-blue.min.css") !!}" rel="stylesheet" type="text/css" />
</head>
<body class="hold-transition login-page">
@yield('content')
<script src="{!! asset("/bower/admin-lte/plugins/jQuery/jQuery-2.1.3.min.js") !!}"></script>
<script src="{!! asset("/bower/admin-lte/bootstrap/js/bootstrap.min.js") !!}" type="text/javascript"></script>
<script src="{!! asset("/bower/admin-lte/dist/js/app.min.js") !!}" type="text/javascript"></script>
</body>
</html>