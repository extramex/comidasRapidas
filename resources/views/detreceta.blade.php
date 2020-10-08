@extends('layouts.app')

@section('titulo')
    <img src="../../img/comida.png" width="30" height="30" class="d-inline-block align-top" alt="">
    <label class="mx-sm-2">Gestión detalle receta</label>
@endsection

@section('migracion')
    <div class="d-flex flex-row-reverse bd-highlight">
        <a href="{{route ('detrecetas.nuevo')}}"  class="btn btn-primary btn-sm">NUEVO</a>
    </div>
        <table class="table">        
            <thead class="thead-dark">
                <tr>
                    <th scope="col">Id</th>
                    <th scope="col">Cantidad</th>
                    <th scope="col">Unidad Medida</th>
                    <th scope="col">Tipo ingrediente</th>                              
                    <th scope="col">Tipo receta</th> 
                    <th scope="col">Opciones</th>                                                           
                </tr>
            </thead>
            <tbody>
                @foreach ($detrecetas as $objeto)
            
                    <tr>
                        <th scope="row">{{$objeto->id}}</th>
                        <th scope="row">{{$objeto->cantidad}}</th>  
                        <th scope="row">{{$objeto->unidad_medida}}</th>
                        <th scope="row">{{$objeto->nombre}}</th> 
                        <th scope="row">{{$objeto->nomRec}}</th>
                        <th> <a href="{{route('detrecetas.listar',$objeto->id)}}" class="btn btn-info bt-sm"> <i class="material-icons md-18">edit </i> </a>
                            <form class="d-inline" action="{{route ('detrecetas.eliminar',$objeto->id)}}" method="post">
                              @method('delete')
                              @csrf
                              <button type="submit" class="btn btn-danger btn-sm"> <i class="material-icons md-18">delete </i></button>
                            </form>
                        </th>                                                                       
                    </tr>
                @endforeach        
            </tbody>
        </table>
    {{$detrecetas->links()}}
@endsection
    
<script>
    function mostrar(){
        document.getElementById('tabla').style.display="flex";
    }
    function ocultar(){
        document.getElementById('tabla').style.display="none";
    }
</script>