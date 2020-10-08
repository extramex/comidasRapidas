<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="/css/bootstrap.min.css">
    <link rel="stylesheet" href="/css/simple-sidebar.css">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">

    <title>JAVIER SPINOZA!</title>
  </head>
  <body>    
    <div class="d-flex" id="wrapper">
      {{-- aqui creamos nuestro sidebar --}}
      <div class="bg-ligth border-right" id="sidebar-wrapper">
        <div class="sidebar-heading"><strong>Comidas rapidas</strong></div>
        <div class="list-group list-group-flush">
          <a href="{{route('clientes')}}" class="list-group-item list-group-item-action">Clientes</a>
          <a href="{{route('empleados')}}" class="list-group-item list-group-item-action">Empleados</a>
          <a href="{{route('recetas')}}" class="list-group-item list-group-item-action">Recetas</a>
          <a href="{{route('ingrediente')}}" class="list-group-item list-group-item-action">Ingrediente</a>
          <a href="{{route('domicilios')}}" class="list-group-item list-group-item-action">Domicilios</a>
          <a href="{{route('mesas')}}" class="list-group-item list-group-item-action">Mesas</a>
          <a href="{{route('detrecetas')}}" class="list-group-item list-group-item-action">Detalle Receta</a>
          <a href="{{route('productos')}}" class="list-group-item list-group-item-action">Productos</a>
          <a href="{{route('pedidos')}}" class="list-group-item list-group-item-action">Pedidos</a>
          <a href="{{route('detpedidos')}}" class="list-group-item list-group-item-action">Detalle Pedido</a>
          <a href="{{route('factura')}}" class="list-group-item list-group-item-action">Factura</a>
          <a href="{{route('detfactura')}}" class="list-group-item list-group-item-action">Detalle Factura</a>
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
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="/js/slim.min.js" ></script>
    <script src="js/popper.min.js" ></script>
    <script src="/js/bootstrap.min.js"></script>

    <script>
      $('#menu-toggle').click(function(e){
        e.preventDefault();
        $("#wrapper").toggleClass("toggled");
      });
    </script>

  </body>
</html>