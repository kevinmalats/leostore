<!doctype html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>@yield('title','default') | Menu </title>

    <title>titulo</title>

    <link rel="icon" type="image/png" href="..\resources\assets\img\favicon.ico">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />

    <link href="{{asset('css/menuprueba.css')}}" rel="stylesheet" />
    <link href="{{asset('css/pe-icon-7-stroke.css')}}" rel="stylesheet" />
    <link href="//maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="{{ asset('css/fontawesome/fontawesome.css') }}">
    <link href="{{asset('css/bootstrap.min.css')}}" rel="stylesheet" />
    <link href="{{asset('css/light-bootstrap-dashboard.css?v=1.4.0')}}" rel="stylesheet"/>

    <meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0' name='viewport' />
    <meta name="viewport" content="width=device-width" />









</head>








<body>


<div class="menu-principal">
    <div class="brand">MENU PRINCIPAL</div>
    <i class="fa fa-bars fa-2x toggle-btn" data-toggle="collapse" data-target="#menu-content"></i>

    <div class="menu-list">

        <ul id="menu-content" class="menu-content collapse out">
            <li>
                <a href="inicio">
                    <i class="fa fa-home fa-lg" class="collapsed active"></i> Inicio
                </a>
            </li>
    
            <ul>
               
                <li  data-toggle="collapse" data-target="">
                    <a href="#"><i class="fa fa-user fa-lg"></i> Usuarios <span class="arrow"></span></a>
                </li>
                <ul class="sub-menu collapse" id="user">
                    <li class="active"><a href="{{ route('usuario.index') }}"> Listar Usuarios</a></li>
                </ul>
               
            </ul>
            <ul>
                 <li  data-toggle="collapsee" data-target="#">
                    <a href="#"><i class="fa fa-camera-retro"></i>Tabla Roles <span class=""></span></a>
                </li>
                <ul class="sub-menu collapse" id="roles">
                    <li class="active"><a href="{{ route('Roles.index') }}"> Listar Roles</a></li>
                </ul>
                
            </ul>
              <ul>
                 <li  data-toggle="collapsee" data-target="">
                    <a href="#"><i class=""></i>Tabla Categorias <span class=""></span></a>
                </li>
                <ul class="sub-menu collapse" id="categorias">
                    <li class="active"><a href="{{ route('Categorias.index') }}"> Listar Categorias</a></li>
                </ul>
                
            </ul>
            <ul>
                <li data-toggle="collapse" data-target="#service" class="collapsed">
                    <a href="#"><i class="fa fa-barcode fa-lg"></i> Productos <span class="arrow"></span></a>
                </li>
                <ul class="sub-menu collapse" id="service">
                    <li class="active" id="" ><a href="{{ route('producto.create') }}"> Ingreso de Productos</a></li>
                    <li id=""><a href="{{ route('producto.index') }}"> Lista de Productos</a></li>

                </ul>

            </ul>
        <ul>
                 <li  data-toggle="collapsee" data-target="">
                    <a href="#"><i class="glyphicon glyphicon-star"></i>Tabla Favoritos <span class=""></span></a>
                </li>
                <ul class="sub-menu collapse" id="favoritos">
                    <li class="active"><a href="{{ route('favoritos.index') }}"> Listar Favoritos</a></li>
                </ul>
                
            </ul>
            <ul>
                <li data-toggle="collapse" data-target="#new" class="collapsed">
                    <a href="#"><i class="fa fa-newspaper-o fa-lg"></i> Reportes<span class="arrow"></span></a>
                </li>
                <ul class="sub-menu collapse" id="new">
                    
                    <li><a href="princi"> Catalogo</a></li>
                </ul>

            </ul>


        </ul>



    </div>


    </div>
    <div>
 <div class="hereda-panel">




<div class="main-panel">


       <nav class="navbar navbar-default navbar-fixed">
            <div class="container-fluid">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navigation-example-2">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>Bienvenido, {{auth()->user()->apellido}} {{auth()->user()->nombre}}
                    <a class="navbar-brand" href="#"></a>
                </div>
                <div class="collapse navbar-collapse">
                    <ul class="nav navbar-nav navbar-left">
                        
                    <ul class="nav navbar-nav navbar-right">
                        
                        <li class="dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                               

                            </a>
                            <ul class="dropdown-menu">
                                <li><a href="#">Action</a></li>
                                <li><a href="#">Another action</a></li>
                                <li><a href="#">Something</a></li>
                                <li><a href="#">Another action</a></li>
                                <li><a href="#">Something</a></li>
                                <li class="divider"></li>
                                <li><a href="#">Separated link</a></li>
                            </ul>
                        </li>
                        <div class="pull-right">
                        <li>
                            <a href="logout">
                                <p>Salir</p>
                            </a>
                        </li>
                        </div>
                        <li class="separator hidden-lg hidden-md"></li>
                    </ul>
                </div>
            </div>
        </nav>

<section id="sectionproducto">


    @yield('content')


</section>
</div>

    </div>

</div>

</body>


</html>