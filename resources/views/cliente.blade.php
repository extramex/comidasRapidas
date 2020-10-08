@extends('layouts.app')

@section('titulo')
<img src="../../img/comida.png" width="30" height="30" class="d-inline-block align-top" alt="">
<label class="mx-sm-2">Gestión de clientes</label>

@endsection

@section('migracion')

<div class="d-flex flex-row-reverse bd-highlight">
  <a href="{{route ('clientes.nuevo')}}"  class="btn btn-primary btn-sm">NUEVO</a>
</div>
<table class="table">        
  <thead class="thead-dark">
    <tr>
      <th scope="col">Id</th>
      <th scope="col">Nombre</th>
      <th scope="col">Teléfono</th> 
      <th scope="col">Email</th>
      <th scope="col">Opciones</th>                              
                             
    </tr>
  </thead>
  <tbody>
        @foreach ($clientes as $objeto)
            <tr>
                <th scope="row">{{$objeto->id}}</th>
                <th scope="row">{{$objeto->nombre}}</th>  
                <th scope="row">{{$objeto->telefono}}</th>                   
                <th scope="row">{{$objeto->email}}</th>
                <th> <a href="{{route('clientes.listar',$objeto->id)}}" class="btn btn-info bt-sm"> <i class="material-icons md-18">edit </i> </a>
                  <form class="d-inline" action="{{route ('clientes.eliminar',$objeto->id)}}" method="post">
                    @method('delete')
                    @csrf
                    <button type="submit" class="btn btn-danger btn-sm"> <i class="material-icons md-18">delete </i></button>
                  </form>
                </th>                                      
            </tr>
        @endforeach        
  </tbody>
</table>
{{$clientes->links()}}
{{-- </div> --}}

 
@endsection

<script>
  function mostrar(){
    document.getElementById('tabla').style.display="flex";
  }
  function ocultar(){
    document.getElementById('tabla').style.display="none";
  }
</script>