@extends('referencias.cabecera.cabecera')

@section('content')     
<style >
 .d{
  width:500px;
  float:right; 
  text-align:right;
 }
</style>
<div class="panel panel-default d" >

@if($categorias->count())  
        <label class="form-control input-sm" for="">Seleccione una categoria</label>
       	<form method="GET" action="catalogoproducto"  role="form">
        <select class="form-control input-sm" name="categoria">
    
     <option value="todos" selected>Todos</option>
 @foreach($categorias as $usuario)  
        									
    	<option class="form-control input-sm" value="{{$usuario->id}}">{{$usuario->nombre}} </option>
         @endforeach 
         </select>
    @endif	
      <input type="submit"  value="Consultar por categoria" class="btn btn-success btn-block">								
    </div>
     </form>
 </div>    
@endsection