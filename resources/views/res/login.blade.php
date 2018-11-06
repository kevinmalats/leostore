@extends('plantillas.app')

@section('title','Login')

@section('content')

<div class="row">

    <div class="col-md-4 col-md-offset-4">


        <div class="panel panel-default">

            <div class="panel-heading">

                <h1 class="panel-title">Proyecto SysPromo</h1>

            </div>

            <div class="panel-body">

                <form method="post" action="{{ route('login') }}">
                    {{ csrf_field()}}

                    <div class="form-group {{ $errors->has('email')?'has-error':'' }}">
                        <label for="email">Usuario</label>
                        <input class="form-control fa fa-user" type="email" name="email" value="{{old('email')}}" placeholder="Ingrese su usuario">

                        {!! $errors->first('email','<span class="help-block">:message</span>') !!}

                    </div>

                    <div class="form-group {{ $errors->has('password')?'has-error':'' }}" >
                        <label for="password">Contraseña</label>
                        <input class="form-control" type="password" name="password" placeholder="Ingrese su contraseña">
                        {!! $errors->first('password','<span class="help-block">:message</span>') !!}


                    </div>

                    <button class="btn btn-primary btn-block">Aceptar</button>


                </form>


            </div>

        </div>


    </div>

</div>


@endsection
