@extends('referencias.cabecera.cabecera')

@section('title','Productos')

@section('content')







 

            <div class="content">
                <div class="row">
                    <div class="col-md-12">
                        <div class="card">
                            <div class="header">

                                <p class="category">Registro de Productos</p>
                            </div>
                            <div class="content table-responsive table-full-width">

                                <div class="panel-body">


                                    <form action="{{route('producto.store')}}"  method="POST" autocomplete="off" enctype = "multipart/form-data" role="form">
                                        @csrf

                                        <input type="hidden" value="{{ csrf_token() }}" name="_token" />



                                        <div class="form-group">

@include('flash::message')
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
        
                                        
        										@if($categorias->count())  
        										<label class="" for="">Categoria</label>
        									<select class="form-control input-sm" name="categoria">
        										<option disabled selected>Elija la categoria</option>
        									         @foreach($categorias as $usuario)  
        									
        											<option class="form-control input-sm" value="{{$usuario->id}}">{{$usuario->nombre}} </option>
        											 @endforeach 
        									</select>
        									@endif	
        								
                                        </div>

                                        

                                        <div class="form-group"  method="post" enctype = "multipart/form-data" >
                                            <label>Imagen Producto</label>
                                            <input type="file" name="imagepath" src="" >

                                        </div>

                                        <div class="form-group" method="POST" autocomplete="off" enctype = "multipart/form-data" >

                                            {!! Form::submit('REGISTRAR',['class'=>'btn btn-primary']) !!}
                                            <!--@include('flash::message')-->
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








@endsection