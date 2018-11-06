<!doctype html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>@yield('title','default') | Acceso al Sistema  </title>
    <link rel="stylesheet" type = "text/css"   href="{{ asset('css/login.css') }}"   >

    <!-- href="{{ asset('css/login.css') }}"         href="{{ asset('plugins/bootstrap/bootstrap.min.css') }}  -->
</head>
<body>
<div class="container">

    <hr>

    @if (session()->has('messageException'))

    <div class="alert alert-info" >{{session('messageException')}}</div>

    @endif

    @yield('content')

</div>

</body>
</html>