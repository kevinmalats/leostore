@extends('referencias.cabecera.cabecera')

@section('title','Productos')

@section('content')


<div class="menu-principal">
    <div class="brand">.</div>
    <i class="fa fa-bars fa-2x toggle-btn" data-toggle="collapse" data-target="#menu-content"></i>

    <div class="menu-list">

        <ul id="menu-content" class="menu-content collapse out">
            <li>
                <a href="inicio">
                    <i class="fa fa-home fa-lg" class="collapsed active"></i> Inicio
                </a>
            </li>
            <ul>
                <li  data-toggle="collapse" data-target="#products">
                    <a href="#"><i class="fa fa-user fa-lg"></i> Usuarios <span class="arrow"></span></a>
                </li>
                <ul class="sub-menu collapse" id="user">
                    <li class="active"><a href="#"> Ingreso de Usuarios</a></li>
                </ul>
            </ul>
            <ul>
                <li data-toggle="collapse" data-target="#service" class="collapsed">
                    <a href="#"><i class="fa fa-barcode fa-lg"></i> Productos <span class="arrow"></span></a>
                </li>
                <ul class="sub-menu collapse" id="service">
                    <li class="active" id="" ><a href="producto"> Ingreso de Productos</a></li>
                    <li id=""><a href="listaproducto"> Lista de Productos</a></li>

                </ul>

            </ul>

            <ul>
                <li data-toggle="collapse" data-target="#new" class="collapsed">
                    <a href="#"><i class="fa fa-newspaper-o fa-lg"></i> Reportes<span class="arrow"></span></a>
                </li>
                <ul class="sub-menu collapse" id="new">
                    <li> Log</li>
                    <li> Tendencias</li>
                    <li><a href="catalogoproducto"> Catalogo</a></li>
                </ul>

            </ul>


        </ul>



    </div>


</div>



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
            </button>
            <a class="navbar-brand" href="#">Bienvenido, {{auth()->user()->apellido}} {{auth()->user()->nombre}}</a>
        </div>
        <div class="collapse navbar-collapse">
            <ul class="nav navbar-nav navbar-left">
                <li>
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                        <i class="fa fa-dashboard"></i>
                        <p class="hidden-lg hidden-md">Dashboard</p>
                    </a>
                </li>
                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                        <i class="fa fa-globe"></i>
                        <b class="caret hidden-sm hidden-xs"></b>
                        <span class="notification hidden-sm hidden-xs">5</span>
                        <p class="hidden-lg hidden-md">
                            5 Notifications
                            <b class="caret"></b>
                        </p>
                    </a>
                    <ul class="dropdown-menu">
                        <li><a href="#">Notification 1</a></li>
                        <li><a href="#">Notification 2</a></li>
                        <li><a href="#">Notification 3</a></li>
                        <li><a href="#">Notification 4</a></li>
                        <li><a href="#">Another notification</a></li>
                    </ul>
                </li>
                <li>
                    <a href="">
                        <i class="fa fa-search"></i>
                        <p class="hidden-lg hidden-md">Search</p>
                    </a>
                </li>
            </ul>


            <ul class="nav navbar-nav navbar-right">
                <li>
                    <a href="">
                        <p>Cuenta</p>
                    </a>
                </li>
                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                        <p>

                            <b class="caret"></b>
                        </p>

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
                <li>
                    <a href="#">
                        <p>Salir</p>
                    </a>
                </li>
                <li class="separator hidden-lg hidden-md"></li>
            </ul>
        </div>
    </div>
</nav>

            <div class="content">
                <div class="row">
                    <div class="col-md-12">
                        <div class="card">
                            <div class="header">

                                <p class="category">Registro de Productos</p>
                            </div>
                            <div class="content table-responsive table-full-width">

                                <div class="panel-body">


                                    <form action="{{route('productoimage')}}"  method="POST" autocomplete="off" enctype = "multipart/form-data">
                                        @csrf

                                        <input type="hidden" value="{{ csrf_token() }}" name="_token" />



                                        <div class="form-group">


                                            {!! Form::label('codigo','Código') !!}
                                            {!! Form::text('codigo',null,['class'=>'form-control','placeholder'=>'Ingrese código','required']) !!}
                                            {!! $errors->first('codigo','<span class="help-block">:message</span>') !!}

                                        </div>

                                        <div class="form-group">

                                            {!! Form::label('nombre','Nombre') !!}
                                            {!! Form::text('nombre',null,['class'=>'form-control','placeholder'=>'Ingrese nombre','required']) !!}

                                        </div>

                                        <div class="form-group">

                                            {!! Form::label('descripcion','Descripción') !!}
                                            {!! Form::text('descripcion',null,['class'=>'form-control','placeholder'=>'Ingrese descripcón','required']) !!}

                                        </div>



                                        <div class="form-group">

                                            {!! Form::label('precio','Precio') !!}
                                            {!! Form::number('precio',null,['class'=>'form-control','placeholder'=>'Ingrese precio','required', 'step'=>'any' ]) !!}

                                        </div>



                                        <div class="form-group">

                                            {!! Form::label('categoria','Categoría') !!}
                                            {!! Form::select('categoria',[''=>'Seleccione un categoría','1'=>'JUGUETES','2'=>'PRENDAS DE VESTIR','1'=>'JUGUETES','3'=>'FERRETERIA'],null,['class'=>'form-control']) !!}

                                        </div>



                                        <div class="form-group"  method="post" enctype = "multipart/form-data" >
                                            <label>Imagen Producto</label>
                                            <input type="file" name="imagepath" src="" >

                                        </div>

                                        <div class="form-group" method="POST" autocomplete="off" enctype = "multipart/form-data" >

                                            {!! Form::submit('REGISTRAR',['class'=>'btn btn-primary']) !!}
                                            @include('flash::message')
                                        </div>

                                    </form>


                                </div>





                            </div>

                            <div class="content table-responsive table-full-width">

                                <div class="panel-body">













                                </div></div>






                    </div>




                </div>

            </div>












</div>



    </div>


</div>



</div>

</div>

</div>








@endsection