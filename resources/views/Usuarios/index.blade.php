@extends('referencias.cabecera.cabecera')
@section('content')
<style >
 .d{
  
  float:right; 
  text-align:right;
 }
</style>
<div class="row">
  <section class="content">
    <div class="col-md-12">
       
     
 	@if(Session::has('success'))
			<div class="alert alert-info">
				{{Session::get('success')}}
			</div>
			@endif
			   <div class="card">
        <div class="header">
      <div class="content table-responsive table-full-width">
        <div class="panel-body">
          <div class="pull-left"><h3>Lista Usuarios</h3></div>
          <div class="pull-right">
            <div class="btn-group">
              <a href="{{ route('usuario.create') }}" class="btn btn-info" >Añadir Usuarios</a>
            </div>
          </div>
          <div class="table-container">
            <table id="mytable" class="table table-bordred table-striped">
             <thead>
               <th>Correo</th>
               <th>Password</th>
               <th>Usuario</th>
               <th>Direccion</th>
               <th>Telefono</th>
               <th>Nombre</th>
               <th>Apellido</th>
               <th>Rol</th>
               <th>Creada</th>
               <th>Actualizada</th>
             </thead>
             <tbody>
              @if($usuarios->count())  
              @foreach($usuarios as $usuario)  
              <tr>
                <td>{{$usuario->email}}</td>
                <td>{{$usuario->password}}</td>
                <td>{{$usuario->login}}</td>
                <td>{{$usuario->direccion}}</td>
                <td>{{$usuario->telefono}}</td>
                <td>{{$usuario->nombre}}</td>
                <td>{{$usuario->apellido}}</td>
                <td>{{$usuario->model_rol->descripcion}}</td>
                <td>{{$usuario->created_at}}</td>
                <td>{{$usuario->updated_at}}</td>
                <td><a class="btn btn-warning" href="{{action('usuarioController@edit', $usuario->id)}}" ><span class="fa fa-upload"></span></a></td>
                <td>
                  <form action="{{action('usuarioController@destroy', $usuario->id)}}" method="post">
                   {{csrf_field()}}
                   <input name="_method" type="hidden" value="DELETE">
 
                    <a class="btn btn-danger"><button  type="submit"><span class="fa fa-recycle"></span></button></a>
                 </td>
               </tr>
               @endforeach 
               @else
               <tr>
                <td colspan="8">No hay registro !!</td>
              </tr>
              @endif
            </tbody>
 
          </table>
          </div>
         </div>
        
      {{ $usuarios->links() }}
    </div>
  </div>
  </div>
  </div>
</section>
 </div>
 
@endsection
