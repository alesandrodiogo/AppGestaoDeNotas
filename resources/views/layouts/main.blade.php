<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>CEPM - @yield('title')</title>
    <link rel="stylesheet" href="/bootstrap-5.3.3-dist/css/bootstrap.min.css">
    <script src="/bootstrap-5.3.3-dist/js/bootstrap.bundle.min.js"></script>
</head>

<body class="antialiased"> 

    @yield('content')

</body>
</html>