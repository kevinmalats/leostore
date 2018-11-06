@extends('referencias.cabecera.cabecera')

@section('title','Productos')


@section('scripts')
<script type='text/javascript' src="//ajax.googleapis.com/ajax/libs/jquery/1.8.3/jquery.min.js"></script>

<!-- Acción sobre el botó con id=boton y actualizamos el div con id=capa -->
<script type="text/javascript">
    $(document).ready(function(){
        $('#crearproducto').click(Crear);
        $('#listarproducto').click(listar);


    function Crear(){

        return $.get( "producto", function (data) { $(".hereda-panel").html(data)});

        };
        function listar(){

            return $.get( "listaproducto", function (data) { $(".hereda-panel").html(data)});

        };



    });

</script>

@endsection

@section('content')







        




    </div>

    <div class="content">


                <div class="card">
                    <img  class="bannerimg" src="{{ asset('img/leo.jpg') }}" alt="" />
                </div>







@endsection
