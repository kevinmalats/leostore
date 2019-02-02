@extends('referencias.cabecera.cabecera')
@section('content')
<div class="content">
                <div class="row">
                    <div class="col-md-12">
                        <div class="card">
                            <div class="header">
@if (count($errors) > 0)
			<div class="alert alert-danger">
				<strong>Error!</strong> Revise los campos obligatorios.<br><br>
				<ul>
					@foreach ($errors->all() as $error)
					<li>{{ $error }}</li>
					@endforeach
				</ul>
			</div>
			@endif
			@if(Session::has('success'))
			<div class="alert alert-info">
				{{Session::get('success')}}
			</div>
			@endif
                                <p class="category">Actualizar Productos</p>
                            </div>
                            <div class="content table-responsive table-full-width">

                                <div class="panel-body">

                           <form method="POST" action="{{ route('producto.update',$productos->id) }}"  role="form" autocomplete="off" enctype = "multipart/form-data">
                                         
                                 	{{ csrf_field() }}
						<input name="_method" type="hidden" value="PATCH">
                                       




                                        <div class="form-group">

                                            {!! Form::label('nombre','Nombre') !!}
                                           <input type="text" name="nombre" value="{{$productos->nombre}}" class="form-cpntrol input-sm"  required/>
                                           
                                        </div>

                                        <div class="form-group">

                                            {!! Form::label('descripcion','Descripción') !!}
                                           <input type="text" name="descripcion" value="{{$productos->descripcion}}" class="form-cpntrol input-sm"  required/>
                                           
                                        </div>



                                        <div class="form-group">

                                            {!! Form::label('precio','Precio') !!}
                                            <input type="number" name="precio" value="{{$productos->precio}}" class="form-cpntrol input-sm"  required/>
                                           
                                        </div>
                                           <div class="form-group">

                                            {!! Form::label('categoria','Categoria') !!}
                                            <input type="text"  value="{{$productos->model_categoria->nombre}}" class="form-cpntrol input-sm" disabled  />
                                           
                                        </div>


                                        <div class="form-group">
        
                                        
        										@if($categorias->count())  
        										<label class="" for="">Cambiar Categoria</label>
        									<select class="form-control input-sm" name="categoria">
        										<option disabled selected>Elija la categoria</option>
        									         @foreach($categorias as $usuario)  
        									
        											<option class="form-control input-sm" value="{{$usuario->id}}">{{$usuario->nombre}} </option>
        											 @endforeach 
        									</select>
        									@endif	
        								
                                        </div>

                                        <div class="form-group">
                                          <img src="{{asset($productos->pathimage)}}">
                                        </div>

                                        <div class="form-group"  method="post" enctype = "multipart/form-data" >
                                            <label>Cambiar Imagen Producto</label>
                                            <input type="file" name="imagepath" id="imagepath" >

                                        </div>


                                        <div class="form-group" method="POST" autocomplete="off" enctype = "multipart/form-data" >

                                            {!! Form::submit('Editar',['class'=>'btn btn-primary']) !!}
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