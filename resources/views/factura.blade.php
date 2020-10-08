@extends('layouts.app')

@section('titulo')
    <img src="../../img/comida.png" width="30" height="30" class="d-inline-block align-top" alt="">
    <label class="mx-sm-2">Gestión de factura</label>
@endsection

@section('migracion') 
    <div class="d-flex flex-row-reverse bd-highlight">
        <a href="{{route ('factura.nuevo')}}"  class="btn btn-primary btn-sm">NUEVO</a>
    </div>
        <table class="table">        
            <thead class="thead-dark">
                <tr>
                    <th scope="col">Id</th>
                    <th scope="col">Fecha y Hora</th>
                    <th scope="col">Valor Domicilio</th>
                    <th scope="col">Total</th>                              
                    <th scope="col">Nombre empresa Domicilio</th>
                    <th scope="col">Opciones</th>                                                                                                                                                                
                </tr>
            </thead>
            <tbody>
                @foreach ($facturas as $objeto)
            
                    <tr>
                        <th scope="row">{{$objeto->id}}</th>
                        <th scope="row">{{$objeto->fecha_hora}}</th>  
                        <th scope="row">{{$objeto->valor_domicilio}}</th>
                        <th scope="row">{{$objeto->total}}</th>
                        <th scope="row">{{$objeto->id_domicilio}}</th>
                        <th>
                            <a href="{{route ('factura.listar',$objeto->id)}}" class="btn btn-info bt-sm mx-sm-1"> <i class="material-icons md-18">edit</i></a>
                            <form class="d-inline" action="{{route ('factura.eliminar',$objeto->id)}}" method="POST">
                              @method('delete')
                              @csrf
                              <button type="submit" class="btn btn-danger btn-sm"> <i class="material-icons md-24">delete</i></button>
                            </form>
                        </th>                                                                                                                                                               
                    </tr>
                @endforeach        
            </tbody>
        </table>
    {{$facturas->links()}}
@endsection
    
<script>
    function mostrar(){
        document.getElementById('tabla').style.display="flex";
    }
    function ocultar(){
        document.getElementById('tabla').style.display="none";
    }
</script>