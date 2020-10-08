@extends('layouts.app')

@section('titulo')
    <img src="../../img/comida.png" width="30" height="30" class="d-inline-block align-top" alt="">
    <label class="mx-sm-2">Gestión detalle factura</label>
@endsection

@section('migracion')
    <div class="d-flex flex-row-reverse bd-highlight">
        <a href="{{route ('detfactura.nuevo')}}"  class="btn btn-primary btn-sm">NUEVO</a>
    </div>
        <table class="table">        
            <thead class="thead-dark">
                <tr>
                    <th scope="col">Id</th>
                    <th scope="col">Cantidad</th>
                    <th scope="col">Valor Unitario</th>
                    <th scope="col">Fecha Factura</th>                              
                    <th scope="col">Fecha Pedido</th>
                    <th scope="col">Opciones</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($detfacturas as $objeto)
            
                    <tr>
                        <th scope="row">{{$objeto->id}}</th>
                        <th scope="row">{{$objeto->cantidad}}</th>  
                        <th scope="row">{{$objeto->valor_unitario}}</th>
                        <th scope="row">{{$objeto->fecha_hora}}</th>
                        <th scope="row">{{$objeto->fec_hora}}</th>
                        <th> <a href="{{route('detfactura.listar',$objeto->id)}}" class="btn btn-info bt-sm"> <i class="material-icons md-18">edit </i> </a>
                            <form class="d-inline" action="{{route ('detfactura.eliminar',$objeto->id)}}" method="post">
                              @method('delete')
                              @csrf
                              <button type="submit" class="btn btn-danger btn-sm"> <i class="material-icons md-18">delete </i></button>
                            </form>
                        </th>                                                                                                                                                               
                    </tr>
                @endforeach        
            </tbody>
        </table>
    {{$detfacturas->links()}}
@endsection
    
<script>
    function mostrar(){
        document.getElementById('tabla').style.display="flex";
    }
    function ocultar(){
        document.getElementById('tabla').style.display="none";
    }
</script>