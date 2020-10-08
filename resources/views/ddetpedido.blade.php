@extends('plantilla')

@section('titulo')
    <img src="../../img/comida.png" width="30" height="30" class="d-inline-block align-top" alt="">
    <label class="mx-sm-2">Editar detalle pedidos</label>
@endsection

@section('migracion')
  
    @if (session('estado'))    
        <div class="alert alert-success alert-dismissible fade show" role="alert">
            <strong>{{session ('estado')}}</strong>:D
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
            </button>
        </div>
    @endif

    <form action="{{route ('detpedidos.editar',$detpedidos->id)}}" method="POST" class="form-horizontal">
        @method('PUT')
        @csrf
        <div class="form-row">
            <div class="form-group col-md-3">
                <label><nav>Cantidad</nav></label>
                <input type="text" name="cantidad" class="form-control" placeholder="ingrese cantidad" value="{{$detpedidos->cantidad}}">
                @if ($errors->has('cantidad'))
                    <small class="form-text text-danger">{{$errors->first('cantidad')}}</small>
                @endif
            </div>
            <div class="form-group col-md-3">
                <label>Valor Unitario</label>
                <input type="number" name="valor_unitario" class="form-control" placeholder="ingrese valor unitario" value="{{$detpedidos->valor_unitario}}">
                @if ($errors->has('valor_unitario'))
                    <small class="form-text text-danger">{{$errors->first('valor_unitario')}}</small>
                @endif
            </div>            
            <div class="form-group col-md-3">
                <label>Fecha Pedido</label>
                <select class="form-control" name="id_pedido">
                    <option value="{{$detpedidos->id_pedido}}">{{$detpedidos->id_pedido}}</option>
                </select>                
            </div> 
            <div class="form-group col-md-3">
                <label> Nombre Producto</label>
                <select class="form-control" name="id_producto">
                    <option value="{{$detpedidos->id_producto}}">{{$detpedidos->id_producto}}</option>
                </select>                
            </div>                                  
        </div>
        <div class="modal-footer">
            <a href="{{route ('detpedidos')}}" class="btn btn-secondary" data-dismiss="modal" >Atrás</button></a>
            <button type="submit" class="btn btn-primary">Actualizar</button>
        </div>
    </form>
@endsection 