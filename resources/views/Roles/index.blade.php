@extends('referencias.cabecera.cabecera')
@section('content')


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
          <div class="pull-left"><h3>Lista Roles</h3></div>
          <div class="pull-right">
            <div class="btn-group">
              <a href="{{ route('Roles.create') }}" class="btn btn-info" >Añadir Rol</a>
            </div>
          </div>
          <div class="table-container">
            <table id="mytable" class="table table-bordred table-striped">
             <thead>
               <th>Descripcion</th>
               <th>Creada</th>
               <th>Actualizada</th>
             </thead>
             <tbody>
              @if($roles->count())  
              @foreach($roles as $usuario)  
              <tr>
                <td>{{$usuario->descripcion}}</td>
                <td>{{$usuario->created_at}}</td>
                <td>{{$usuario->updated_at}}</td>
                <td><a class="btn btn-warning" href="{{action('RolController@edit', $usuario->id)}}" ><span class="fa fa-upload"></span></a></td>
                <td>
                  <form action="{{action('RolController@destroy', $usuario->id)}}" method="post">
                   {{csrf_field()}}
                   <input name="_method" type="hidden" value="DELETE">
 
                   <a class="btn btn-danger"><button type="submit"><span class="fa fa-recycle"></span></button></a>
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
      </div>
      {{ $roles->links() }}
</div>
  
  </div>
</section>
 
@endsection
