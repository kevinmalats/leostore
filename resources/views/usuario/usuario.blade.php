@extends('referencias.menu.menu')

@section('title','Productos')

@section('content')



<div class="nav-side-menu">
    <div class="brand">Brand Logo</div>
    <i class="fa fa-bars fa-2x toggle-btn" data-toggle="collapse" data-target="#menu-content"></i>

    <div class="menu-list">

        <ul id="menu-content" class="menu-content collapse out">
            <li>
                <a href="#">
                    <i class="fa fa-home fa-lg" class="collapsed active"></i> Inicio
                </a>
            </li>
<ul>
            <li  data-toggle="collapse" data-target="#products">
                <a href="#"><i class="fa fa-user fa-lg"></i> Usuarios <span class="arrow"></span></a>
            </li>
            <ul class="sub-menu collapse" id="products">
                <li class="active"><a href="#">CSS3 Animation</a></li>
                <li><a href="#">General</a></li>
                <li><a href="#">Buttons</a></li>
                <li><a href="#">Tabs & Accordions</a></li>

            </ul>
</ul>
<ul>
            <li data-toggle="collapse" data-target="#service" class="collapsed">
                <a href="#"><i class="fa fa-barcode fa-lg"></i> Productos <span class="arrow"></span></a>
            </li>
            <ul class="sub-menu collapse" id="service">
                <li>New Service 1</li>
                <li>New Service 2</li>
                <li>New Service 3</li>
            </ul>

</ul>

            <ul>
            <li data-toggle="collapse" data-target="#new" class="collapsed">
                <a href="#"><i class="fa fa-newspaper-o fa-lg"></i>Reportes<span class="arrow"></span></a>
            </li>
            <ul class="sub-menu collapse" id="new">
                <li>New New 1</li>
                <li>New New 2</li>
                <li>New New 3</li>
            </ul>

            </ul>


        </ul>
    </div>
</div>

@endsection















