@extends('plantillas.productoscrear')

@section('title','Productos')

@section('content')


    <div class="panel panel-default">

        <div class="panel-heading">

            <h1 class="panel-title">Registro de Productos</h1>

        </div>

        <div class="panel-body">


            <form action="{{route('productosstore')}}"  method="POST" autocomplete="on">
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
                    {!! Form::number('precio',null,['class'=>'form-control','placeholder'=>'Ingrese precio','required']) !!}

                </div>



                <div class="form-group">

                    {!! Form::label('categoria','Categoría') !!}
                    {!! Form::select('categoria',[''=>'Seleccione un categoría','1'=>'JUGUETES','2'=>'PRENDAS DE VESTIR','1'=>'JUGUETES','3'=>'FERRETERIA'],null,['class'=>'form-control']) !!}

                </div>


                <div class="form-group" action="{{route('productosstore')}}" method="POST" autocomplete="on" >

                    {!! Form::submit('Registrar',['class'=>'btn btn-primary']) !!}

                </div>

            </form>

        </div>




    </div>




@endsection





