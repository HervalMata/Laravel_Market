<!DOCTYPE HTML>
<html lang="pt_BR">
<head>
    <meta charset="utf-8">
    <meta http-equiv="pragma" content="no-cache" />
    <meta http-equiv="cache-control" content="max-age=604800" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <title>Laços da Cris</title>

    <link href="{{ asset('lib/bootstrap-ecommerce-uikit/ui-ecommerce/images/favicon.ico') }}" rel="shortcut icon" type="image/x-icon">

    <!-- jQuery -->
    <script src="{{ asset('lib/jquery3.3.1/jquery-3.3.1.min.js') }}" type="text/javascript"></script>

    <!-- Bootstrap4 files-->
    <script src="{{ asset('lib/bootstrap-4.2.1-dist/js/bootstrap.bundle.min.js') }}" type="text/javascript"></script>
    <link href="{{ asset('lib/bootstrap-4.2.1-dist/css/bootstrap.css') }}" rel="stylesheet" type="text/css"/>

    <!-- Font awesome 5 -->
    <link href="{{ asset('lib/bootstrap-ecommerce-uikit/ui-ecommerce/fonts/fontawesome/css/fontawesome-all.min.css') }}" type="text/css" rel="stylesheet">

    <!-- custom style -->
    <link href="{{ asset('lib/bootstrap-4.2.1-dist/css/ui.css') }}" rel="stylesheet" type="text/css"/>
    <link href="{{ asset('lib/bootstrap-4.2.1-dist/css/responsive.css') }}" rel="stylesheet" media="only screen and (max-width: 1200px)" />

    <!-- custom javascript -->
    <script src="{{ asset('lib/bootstrap-ecommerce-uikit/js/script.js') }}" type="text/javascript"></script>

    <script type="text/javascript">
        /// some script

        // jquery ready start
        $(document).ready(function() {
            // jQuery code

        });
        // jquery end
    </script>

</head>
<body>
@include('layouts.partials.header')
@yield('content')
@include('layouts.partials.footer')
</body>
</html>
