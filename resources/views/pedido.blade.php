@extends('layouts.app')

@section('titulo')
    <img src="../../img/comida.png" width="30" height="30" class="d-inline-block align-top" alt="">
    <label class="mx-sm-2">Gestión de pedidos</label>
@endsection

@section('migracion')
    <div class="d-flex flex-row-reverse bd-highlight">
        <a href="{{route ('pedidos.nuevo')}}"  class="btn btn-primary btn-sm">NUEVO</a>
    </div>
        <table class="table">        
            <thead class="thead-dark">
                <tr>
                    <th scope="col">Id</th>
                    <th scope="col">Fecha y Hora</th>
                    <th scope="col">Domicilio</th>
                    <th scope="col">Número de Mesa</th>                              
                    <th scope="col">Nombre de Cliente</th>
                    <th scope="col">Nombre de Empleado</th>
                    <th scope="col">Opciones</th>                                                                                                                                                                                                                                                                                      
                </tr>
            </thead>
            <tbody>
                @foreach ($pedidos as $objeto)
             
                    <tr>
                        <th scope="row">{{$objeto->id}}</th>
                        <th scope="row">{{$objeto->fecha_hora}}</th>  
                        <th scope="row">{{$objeto->nom_empresa}}</th>
                        <th scope="row">{{$objeto->n_mesa}}</th> 
                        <th scope="row">{{$objeto->nombre}}</th>
                        <th scope="row">{{$objeto->nomEmp}}</th>
                        <th>
                            <a href="{{route ('pedidos.listar',$objeto->id)}}" class="btn btn-info bt-sm mx-sm-1"> <i class="material-icons md-18">edit</i></a>
                            <form class="d-inline" action="{{route ('pedidos.eliminar',$objeto->id)}}" method="POST">
                              @method('delete')
                              @csrf
                              <button type="submit" class="btn btn-danger btn-sm"> <i class="material-icons md-24">delete</i></button>
                            </form>
                        </th>                                                                                                                                              
                    </tr>
                @endforeach        
            </tbody>
        </table>
        {{$pedidos->links()}}
@endsection
    
<script>
    function mostrar(){
        document.getElementById('tabla').style.display="flex";
    }
    function ocultar(){
        document.getElementById('tabla').style.display="none";
    }
</script>