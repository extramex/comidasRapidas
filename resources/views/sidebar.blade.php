<div class="d-flex" id="wrapper">
    {{-- aqui creamos nuestro sidebar --}}
    <div class="bg-ligth border-right" id="sidebar-wrapper">
      <div class="sidebar-heading"><strong>GESTIONES</strong></div>
      <div class="list-group list-group-flush">
        <a href="{{route('clientes')}}" class="list-group-item list-group-item-action"><i class="material-icons md-18 align-top">supervisor_account</i>Clientes</a>
        <a href="{{route('empleados')}}" class="list-group-item list-group-item-action"><i class="material-icons md-18 align-top">supervisor_account</i>Empleados</a>
        <a href="{{route('recetas')}}" class="list-group-item list-group-item-action"><i class="material-icons md-18 align-top">fact_check</i>Recetas</a>
        <a href="{{route('ingrediente')}}" class="list-group-item list-group-item-action"><i class="material-icons md-18 align-top">fastfood</i>Ingrediente</a>
        <a href="{{route('detrecetas')}}" class="list-group-item list-group-item-action"><i class="material-icons md-18 align-top">fact_check</i>Detalle Receta</a>
        <a href="{{route('domicilios')}}" class="list-group-item list-group-item-action"><i class="material-icons md-18 align-top">phone</i>Domicilios</a>
        <a href="{{route('mesas')}}" class="list-group-item list-group-item-action"><i class="material-icons md-18 align-top">crop_16_9</i>Mesas</a>
        <a href="{{route('productos')}}" class="list-group-item list-group-item-action"><i class="material-icons md-18 align-top">fastfood</i>Productos</a>
        <a href="{{route('pedidos')}}" class="list-group-item list-group-item-action"><i class="material-icons md-18 align-top">work</i>Pedidos</a>
        <a href="{{route('detpedidos')}}" class="list-group-item list-group-item-action"><i class="material-icons md-18 align-top">work</i>Detalle Pedido</a>
        <a href="{{route('factura')}}" class="list-group-item list-group-item-action"><i class="material-icons md-18 align-top">list_alt</i>Factura</a>
        <a href="{{route('detfactura')}}" class="list-group-item list-group-item-action"><i class="material-icons md-18 align-top">list_alt</i>Detalle Factura</a>
      </div>
    </div>

    {{-- contenido de la paguina --}}
    <div id="page-content-wrapper">
      <nav class="navbar navbar-light navbar-expand-lg bg-light border-bottom">
        <a class="navbar-brand" href="#">
          <button class="btn btn-primary" id="menu-toggle"><i class="material-icons md-18 align-top">close_fullscreen</i></button>
          @yield('titulo')
        </a>
      </nav>
    <div class="container">
      @yield('migracion')
    </div>
  </div>

  <script>
    $('#menu-toggle').click(function(e){
      e.preventDefault();
      $("#wrapper").toggleClass("toggled");
    });
  </script>