@extends('referencias.cabecera.cabecera')

@section('title','Productos')

@section('content')







       

<div class="container">
    <div class="row">
        <div class="col-md-12">
            <div class="card">
            <div class="panel panel-default">
                <div class="panel-heading">

                    {{ $productos->render() }}

                </div>
     
    
     <div class="panel-body">

                    <div class="row">
                        @foreach($productos as $producto)
                        <div class="item col-xs-4 col-lg-4">
                            <div class="thumbnail">
                                <img class="group list-group-image" src="{{ asset($producto->pathimage) }}" alt="" />
                                <div class="caption">
                                    <h4 class="group inner list-group-item-heading">
                                        {{$producto->nombre}}</h4>
                                    <p class="group inner list-group-item-text">
                                        {{$producto->descripcion}}</p>
                                    <div class="row">
                                        <div class="col-xs-12 col-md-6">
                                            <p class="lead">
                                                ${{$producto->precio}}</p>
                                        </div>
                                       
                                    </div>
                                </div>
                            </div>
                        </div>
                        @endforeach



                    </div>

                    <p>
                        {{ $productos->links() }} registros |
                        página {{ $productos->currentPage() }}
                        de {{ $productos->lastPage() }}
                    </p>


                </div>
            </div>
            </div>
        </div>
    </div>
</div>

 











@endsection
