<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="utf-8">
	<meta name="viewport"
	content="width=device-width, initial-scale=1, user-scalable=yes">
	<link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" rel="stylesheet">
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
	<link rel="icon" type="image/png" href="..\resources\assets\img\favicon.ico">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />

    <link href="{{asset('css/menuprueba.css')}}" rel="stylesheet" />
    <link href="{{asset('css/pe-icon-7-stroke.css')}}" rel="stylesheet" />
      <link rel="stylesheet" type="text/css" href="{{ asset('css/fontawesome/fontawesome.css') }}">
     <link href="{{asset('css/light-bootstrap-dashboard.css?v=1.4.0')}}" rel="stylesheet"/>

  

</head>
<body>
 
	<div class="container-fluid" style="margin-top: 100px">
 
		@yield('content')
	</div>
	<style type="text/css">
	.table {
		border-top: 2px solid #ccc;
 
	}
</style>
</body>
</html>