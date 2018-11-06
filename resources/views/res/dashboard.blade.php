@extends('plantillas.app')


@section('content');

<div class="col-md-4 col-md-offset-4">


    <div class="panel panel-default">

        <div class="panel-heading">

            <h1 class="panel-title">Bienvenido {{auth()->user()->apellido}} {{auth()->user()->nombre}}</h1>

        </div>

        <div class="panel-body">

            <form method="post" action="{{ route('logout') }}">
                {{ csrf_field()}}

               <button class="btn btn-danger btn-xs btn-block" >Salir</button>

            </form>


        </div>

     </div>

   </div>


@endsection

