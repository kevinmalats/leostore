@extends('referencias.cabecera.cabecera')
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
					<h3 class="panel-title">Nuevo Usuario</h3>
				</div>
				<div class="panel-body">					
					<div class="table-container">
						<form method="POST" action="{{ route('usuario.store') }}"  role="form">
							{{ csrf_field() }}
							<div class="row">
								<div class="col-xs-6 col-sm-6 col-md-6">
									<div class="form-group">
										<input type="text" name="nombre" id="nombre" class="form-control input-sm" placeholder="Nombre">
									</div>
								</div>
								<div class="col-xs-6 col-sm-6 col-md-6">
									<div class="form-group">
										<input type="text" name="apellido" id="apellido" class="form-control input-sm" placeholder="Apellido ">
									</div>
								</div>
								<div class="col-xs-6 col-sm-6 col-md-6">
									<div class="form-group">
										<input type="text" name="login" id="login" class="form-control input-sm" placeholder="Login">
									</div>
								</div>
								<div class="col-xs-6 col-sm-6 col-md-6">
									<div class="form-group">
										<input type="text" name="direccion" id="direccion" class="form-control input-sm" placeholder="Direccion">
									</div>
								</div>
								<div class="col-xs-6 col-sm-6 col-md-6">
									<div class="form-group">
										<input type="text" name="telefono" id="telefono" class="form-control input-sm" placeholder="Número de telefono">
									</div>
								</div>
								<div class="col-xs-6 col-sm-6 col-md-6">
									<div class="form-group">
										<input type="text" name="email" id="email" class="form-control input-sm" placeholder="Correo">
									</div>
								</div>
								<div class="col-xs-6 col-sm-6 col-md-6">
									<div class="form-group">
										<input type="password" name="password" id="passord" class="form-control input-sm" placeholder="Password">
									</div>
								</div>
								
								<div class="col-xs-6 col-sm-6 col-md-6">
									<div class="form-group">
										@if($roles->count())  
										<label class="form-control input-sm" for="">Usuario</label>
									<select class="form-control input-sm" name="rol">
										<option disabled selected>Elija el rol</option>
									         @foreach($roles as $rol)  
									
											<option selected class="form-control input-sm" value="{{$rol->id}}">{{$rol-> descripcion}} </option>
											 @endforeach 
									</select>
									@endif	
									</div>
								</div>
							
							<div class="row">
 
								<div class="col-xs-12 col-sm-12 col-md-12">
									<input type="submit"  value="Guardar" class="btn btn-success btn-block">
									<a href="{{ route('usuario.index') }}" class="btn btn-info btn-block" >Atrás</a>
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
