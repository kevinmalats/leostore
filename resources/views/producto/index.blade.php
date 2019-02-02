@extends('referencias.cabecera.cabecera')

@section('title','Productos')

@section('content')





<div class="content">
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="header">

                    <p class="category">Lista de Productos</p>
                </div>


                <div class="content table-responsive table-full-width">
                    {{ $productos->render() }}
                    <div class="panel-body">


                        <table class="table table-hover table-striped">
                            <thead>
                            <th>CÓDIGO</th>
                            <th>NOMBRE</th>
                            <th>DESCRIPCIÓN</th>
                            <th>STOCK</th>
                            <th>PRECIO</th>
                            <th>CATEGORÍA</th>

                            </thead>
                            <tbody>

                            @foreach($productos as $producto)
                            <tr>
                                <td class="mayusculas">{{ $producto->codigo }}</td>
                                <td class="mayusculas">{{ $producto->nombre }}</td>
                                <td class="mayusculas">{{ $producto->descripcion }}</td>
                                <td class="mayusculas">{{ $producto->stock }}</td>
                                <td class="mayusculas">{{ $producto->precio }}</td>
                                <td class="mayusculas"><span class="label label-success">{{ $producto->model_categoria->nombre}}</span></td>
                                   


                                <td class="d-md-table-row"> <a href="{{action('productoController@edit', $producto->id)}}"  class="btn btn-warning ">
                                <span class="fa fa-upload"></span>
                                    </a>
                                    <a href="{{action('productoController@destroy', $producto->id)}}" onclick="return confirm('Seguro elimina el producto?')" class="btn btn-danger"><span class="fa fa-recycle"></span></a></td>
                                <!-- -->

                            </tr>
                            @endforeach


                            </tbody>

                        </table>
                        @include('flash::message')
                    </div>





                </div>






            </div>
        </div>

















</div>



</div>










@endsection