@extends('referencias.cabecera.layout')
@section('content')

<div class="row">
	
	<section class="content">
		<div class="col-md-8 col-md-offset-2">
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
 
			<div class="panel panel-default">
				<div class="panel-heading">
					<h3 class="panel-title">Nuevo Producto</h3>
				</div>
				<div class="panel-body">					
					<div class="table-container">
						<form method="POST" action="{{ route('Productos.store') }}"  role="form">
							{{ csrf_field() }}
							<div class="row">
							    <div class="col-xs-6 col-sm-6 col-md-6">
									<div class="form-group">
										<input type="text" name="codigo" id="codigo" class="form-control input-sm" placeholder="Codigo">
									</div>
								</div>
									<div class="col-xs-6 col-sm-6 col-md-6">
									<div class="form-group">
										<input type="text" name="nombre" id="nombre" class="form-control input-sm" placeholder="Nombre">
									</div>
								</div>
								<div class="col-xs-6 col-sm-6 col-md-6">
									<div class="form-group">
										<input type="text" name="descripcion" id="descripcion" class="form-control input-sm" placeholder="Descripcion">
									</div>
								</div>
							    <div class="col-xs-6 col-sm-6 col-md-6">
									<div class="form-group">
										<input type="text" name="precio" id="precio" class="form-control input-sm" placeholder="Precio">
									</div>
								</div>
							
								<div class="col-xs-6 col-sm-6 col-md-6">
									<div class="form-group">
										@if($categorias->count())  
										<label class="form-control input-sm" for="">Usuario</label>
									<select class="form-control input-sm" name="categoria">
										<option disabled selected>Elija el usuario</option>
									         @foreach($categorias as $usuario)  
									
											<option class="form-control input-sm" value="{{$usuario->id}}">{{$usuario->nombre}} </option>
											 @endforeach 
									</select>
									@endif	
									</div>
								</div>
					
							<div class="row">
 
								<div class="col-xs-12 col-sm-12 col-md-12">
									<input type="submit"  value="Guardar" class="btn btn-success btn-block">
									<a href="{{ route('Productos.index') }}" class="btn btn-info btn-block" >Atrás</a>
								</div>	
 
							</div>
							</div>
						</form>
					</div>
				</div>
             
			</div>
		</div>
	</section>
	</div>
	@endsection






