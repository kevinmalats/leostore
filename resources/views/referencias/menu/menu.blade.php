
<div class="menu-principal">
    <div class="brand">MENU PRINCIPAL</div>
    <i class="fa fa-bars fa-2x toggle-btn" data-toggle="collapse" data-target="#menu-content"></i>

    <div class="menu-list">

        <ul id="menu-content" class="menu-content collapse out">
            <li>
                <a href="inicio">
                    <i class="fa fa-home fa-lg" class="collapsed active"></i> Inicio
                </a>
            </li>
    
            <ul>
               
                <li  data-toggle="collapse" data-target="">
                    <a href="#"><i class="fa fa-user fa-lg"></i> Usuarios <span class="arrow"></span></a>
                </li>
                <ul class="sub-menu collapse" id="user">
                    <li class="active"><a href="{{ route('usuario.index') }}"> Listar Usuarios</a></li>
                </ul>
               
            </ul>
            <ul>
                 <li  data-toggle="collapsee" data-target="#">
                    <a href="#"><i class=""></i>Tabla Roles <span class=""></span></a>
                </li>
                <ul class="sub-menu collapse" id="roles">
                    <li class="active"><a href="{{ route('Roles.index') }}"> Listar Roles</a></li>
                </ul>
                
            </ul>
              <ul>
                 <li  data-toggle="collapsee" data-target="">
                    <a href="#"><i class=""></i>Tabla Categorias <span class=""></span></a>
                </li>
                <ul class="sub-menu collapse" id="categorias">
                    <li class="active"><a href="{{ route('Categorias.index') }}"> Listar Categorias</a></li>
                </ul>
                
            </ul>
            <ul>
                <li data-toggle="collapse" data-target="#service" class="collapsed">
                    <a href="#"><i class="fa fa-barcode fa-lg"></i> Productos <span class="arrow"></span></a>
                </li>
                <ul class="sub-menu collapse" id="service">
                    <li class="active" id="" ><a href="producto"> Ingreso de Productos</a></li>
                    <li id=""><a href="listaproducto"> Lista de Productos</a></li>

                </ul>

            </ul>
        <ul>
                 <li  data-toggle="collapsee" data-target="">
                    <a href="#"><i class=""></i>Tabla Favoritos <span class=""></span></a>
                </li>
                <ul class="sub-menu collapse" id="favoritos">
                    <li class="active"><a href="{{ route('favoritos.index') }}"> Listar Favoritos</a></li>
                </ul>
                
            </ul>
            <ul>
                <li data-toggle="collapse" data-target="#new" class="collapsed">
                    <a href="#"><i class="fa fa-newspaper-o fa-lg"></i> Reportes<span class="arrow"></span></a>
                </li>
                <ul class="sub-menu collapse" id="new">
                    <li> Log</li>
                    <li> Tendencias</li>
                    <li><a href="princi"> Catalogo</a></li>
                </ul>

            </ul>


        </ul>



    </div>


    </div>
     @yield('contente')