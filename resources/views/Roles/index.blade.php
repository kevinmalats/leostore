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
    <div class="col-md-8 col-md-offset-2">
      <div class="panel panel-default d">
        <div class="panel-body">
          <div class="pull-left"><h3>Lista Categorias</h3></div>
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
                <td><a class="btn btn-primary btn-xs" href="{{action('RolController@edit', $usuario->id)}}" ><span class="fa fa-upload"></span></a></td>
                <td>
                  <form action="{{action('RolController@destroy', $usuario->id)}}" method="post">
                   {{csrf_field()}}
                   <input name="_method" type="hidden" value="DELETE">
 
                   <button class="btn btn-danger btn-xs" type="submit"><span class="fa fa-recycle"></span></button>
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
      {{ $roles->links() }}
    </div>
  </div>
</section>
 
@endsection
