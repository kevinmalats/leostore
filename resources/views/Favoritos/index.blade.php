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
                <th>Foto</th>
             </thead>
             <tbody>
             
              @if($favoritos->count())  
              @foreach($favoritos as $favorito)  
              <tr>
                <td>{{$favorito->email_usuario}}</td>
                <td>{{$favorito->model_producto->nombre}}</td>
                 <td><img src="{{asset($favorito->model_producto->pathimage)}}"></img></td>
               
                <td><a class="btn btn-warning" href="{{action('FavoritosController@edit', $favorito->id)}}" ><span class="fa fa-upload"></span></a></td>
                <td>
                  <form action="{{action('FavoritosController@destroy', $favorito->id)}}" method="post">
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
      {{ $favoritos->links() }}
    </div>
  </div>
  </div>
  </div>
</section>
 
@endsection
