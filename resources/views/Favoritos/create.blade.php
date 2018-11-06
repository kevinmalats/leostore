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
					<h3 class="panel-title">Nuevo favoritos</h3>
				</div>
				<div class="panel-body">					
					<div class="table-container">
						<form method="POST" action="{{ route('favoritos.store') }}"  role="form">
							{{ csrf_field() }}
							<div class="row">
								<div class="col-xs-6 col-sm-6 col-md-6">
									<div class="form-group">
										@if($usuarios->count())  
										<label class="form-control input-sm" for="">Usuario</label>
									<select class="form-control input-sm" name="email_usuario">
										<option disabled selected>Elija el usuario</option>
									         @foreach($usuarios as $usuario)  
									
											<option class="form-control input-sm" value="{{$usuario->email}}">{{$usuario->email}} </option>
											 @endforeach 
									</select>
									@endif	
									</div>
								</div>
							<div class="col-xs-6 col-sm-6 col-md-6">
									<div class="form-group">
										@if($productos->count())  
										<label class="form-control input-sm" for="">Producto</label>
									<select class="form-control input-sm" name="producto">
										<option disabled selected>Elija el usuario</option>
									         @foreach($productos as $usuario)  
									
											<option class="form-control input-sm" value="{{$usuario->id}}">{{$usuario->nombre}} </option>
											 @endforeach 
									</select>
									@endif	
									</div>
								</div>
							<div class="row">
 
								<div class="col-xs-12 col-sm-12 col-md-12">
									<input type="submit"  value="Guardar" class="btn btn-success btn-block">
									<a href="{{ route('favoritos.index') }}" class="btn btn-info btn-block" >Atrás</a>
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
