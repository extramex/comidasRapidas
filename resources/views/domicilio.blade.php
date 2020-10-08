@extends('layouts.app')

@section('titulo')
    <img src="../../img/comida.png" width="30" height="30" class="d-inline-block align-top" alt="">
    <label class="mx-sm-2">Gestión de domicilios</label>
@endsection

@section('migracion')
    <div class="d-flex flex-row-reverse bd-highlight">
        <a href="{{route ('domicilios.nuevo')}}"  class="btn btn-primary btn-sm">NUEVO</a>
    </div>
        <table class="table">        
            <thead class="thead-dark">
                <tr>
                    <th scope="col">Id</th>
                    <th scope="col">Nombre Empresa</th>
                    <th scope="col">Dirección Domicilio</th>
                    <th scope="col">Fecha</th>
                    <th scope="col">Estado</th>
                    <th scope="col">Opciones</th>                                                                                                                                                                                                                           
                </tr>
            </thead>
            <tbody>
                @foreach ($domicilios as $objeto)            
                    <tr>
                        <th scope="row">{{$objeto->id}}</th>
                        <th scope="row">{{$objeto->nom_empresa}}</th> 
                        <th scope="row">{{$objeto->dir_domicilio}}</th> 
                        <th scope="row">{{$objeto->fecha}}</th>
                        <th scope="row">{{$objeto->estado}}</th>
                        <th>
                            <a href="{{route ('domicilios.listar',$objeto->id)}}" class="btn btn-info bt-sm mx-sm-1"> <i class="material-icons md-18">edit</i></a>
                            <form class="d-inline" action="{{route ('domicilios.eliminar',$objeto->id)}}" method="POST">
                              @method('delete')
                              @csrf
                              <button type="submit" class="btn btn-danger btn-sm"> <i class="material-icons md-24">delete</i></button>
                            </form>
                        </th>                                    
                    </tr>
                @endforeach        
            </tbody>
        </table>
    {{$domicilios->links()}}
@endsection
    
<script>
    function mostrar(){
        document.getElementById('tabla').style.display="flex";
    }
    function ocultar(){
        document.getElementById('tabla').style.display="none";
    }
</script>