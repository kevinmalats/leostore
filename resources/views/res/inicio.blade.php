<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title>Productos</title>
    <link rel="stylesheet" type="text/css" href="{{ asset('css/producto.css') }}">
</head>
<body>
{{--
@for($i=0;$i<=5;$i++)
{{$i}}
@endfor
--}}
<br>
<h1>{{$variable->nombre}}</h1>
<hr>
{{$variable->descripcion}} | {{$variable->categoriaProducto->nombre}} | {{$variable -> codigo}}
</body>
</html>