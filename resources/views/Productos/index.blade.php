@extends('referencias.cabecera.layout')
@section('content')
<div class="row">
  <section class="content">
    <div class="col-md-8 col-md-offset-2">
      <div class="panel panel-default">
          @if(Session::has('success'))
			<div class="alert alert-info">
				{{Session::get('success')}}
			</div>
			@endif
        <div class="panel-body">
          <div class="pull-left"><h3>Lista Productos</h3></div>
          <div class="pull-right">
            <div class="btn-group">
              <a href="{{ route('Productos.create') }}" class="btn btn-info" >Añadir Producto</a>
            </div>
          </div>
          <div class="table-container">
            <table id="mytable" class="table table-bordred table-striped">
             <thead>
               <th>Nombre</th>
               <th>Descripcion</th>
               <th>Stock</th>
               <th>Precio</th>
               <th>Creada</th>
               <th>Actualizada</th>
             </thead>
             <tbody>
              @if($productos->count())  
              @foreach($productos as $pro)  
              <tr>
                 <td>{{ $productos->codigo }}</td>
                            <td>{{ $pro->nombre }}</td>
                            <td>{{ $pro->descripcion }}</td>
                            <td>{{ $pro->stock }}</td>
                            <td>{{ $pro->precio }}</td>
                            <td>{{ $pro->created_at }}</td>
                            <td>{{ $pro->update_at }}</td>
                <td><a class="btn btn-primary btn-xs" href="{{action('productosController@edit', $pro->id)}}" ><span class="glyphicon glyphicon-pencil"></span></a></td>
                <td>
                  <form action="{{action('productosController@destroy', $usuario->id)}}" method="post">
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
      {{ $productos->links() }}
    </div>
  </div>
</section>
 
@endsection
