<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="CoreUI Bootstrap 4 Admin Template">
    <meta name="author" content="Lukasz Holeczek">
    <meta name="keyword" content="CoreUI Bootstrap 4 Admin Template">
    <link rel="shortcut icon" href="img/favicon.png">
    <title>CoreUI Bootstrap 4 Admin Template</title>

    <link href="{{ asset("themes/t1/css/font-awesome.min.css") }}" rel="stylesheet">
    <link href="{{ asset("themes/t1/css/simple-line-icons.css") }}" rel="stylesheet">
    <link href="{{ asset("themes/t1/css/style.css") }}" rel="stylesheet">

    <link href="{{ asset("themes/t1/css/custom.css") }}" rel="stylesheet">


</head>
@yield('body')
<script src="{{ asset("themes/t1/js/libs/jquery.min.js") }}" type="text/javascript"></script>
<script src="{{ asset("themes/t1/js/libs/tether.min.js") }}" type="text/javascript"></script>
<script src="{{ asset("themes/t1/js/libs/bootstrap.min.js") }}" type="text/javascript"></script>
<script src="{{ asset("themes/t1/js/libs/pace.min.js") }}" type="text/javascript"></script>
<script src="{{ asset("themes/t1/js/libs/Chart.min.js") }}" type="text/javascript"></script>
<script src="{{ asset("themes/t1/js/app.js") }}" type="text/javascript"></script>
@yield('js')
</body>
</html>
