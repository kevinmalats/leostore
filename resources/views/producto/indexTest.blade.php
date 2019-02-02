@extends('referencias.cabecera.layout')



@section('content')





<div class="content">
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="header">

                    <p class="category">Test</p>
                </div>


                <div class="content table-responsive table-full-width">
                   
                    <div class="panel-body">

                      <h1>Consulte API</h1>
                      	<form method="GET" action="{{ url('api/v1/ec') }}"  role="form">
                      <button>Consultar</button>
                      </form>
                    </div>





                </div>






            </div>
        </div>

















</div>



</div>










@endsection