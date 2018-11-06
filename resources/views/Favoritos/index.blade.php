@extends('referencias.cabecera.cabecera')
@section('content')

<div class="row">
  <section class="content">
    <div class="col-md-12 col-md-offset-2">
      <div class="panel panel-default">
        <div class="panel-body">
          <div class="pull-left"><h3>Lista Favoritos</h3></div>
          <div class="pull-right">
            <div class="btn-group">
              <a href="{{ route('favoritos.create') }}" class="btn btn-info" >Añadir Favoritos</a>
            </div>
          </div>
          <div class="table-container">
            <table id="mytable" class="table table-bordred table-striped">
             <thead>
               <th>Usuario</th>
               <th>Producto</th>
             </thead>
             <tbody>
              @if($favoritos->count())  
              @foreach($favoritos as $favorito)  
              <tr>
                <td>{{$favorito->email_usuario}}</td>
                <td>{{$favorito->producto}}</td>
               
                <td><a class="btn btn-primary btn-xs" href="{{action('FavoritosController@edit', $favorito->id)}}" ><span class="glyphicon glyphicon-pencil"></span></a></td>
                <td>
                  <form action="{{action('FavoritosController@destroy', $favorito->id)}}" method="post">
                   {{csrf_field()}}
                   <input name="_method" type="hidden" value="DELETE">
 
                   <button class="btn btn-danger btn-xs" type="submit"><span class="glyphicon glyphicon-trash"></span></button>
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
      {{ $favoritos->links() }}
    </div>
  </div>
</section>
 
@endsection
