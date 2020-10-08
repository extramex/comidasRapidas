@extends('plantilla')

@section('titulo')
    <img src="../../img/comida.png" width="30" height="30" class="d-inline-block align-top" alt="">
    <label class="mx-sm-2">Gestión detalle factura</label>
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

    <form action="{{route ('detfactura.guardar')}}" method="POST" class="form-horizontal">
        @csrf
        <div class="form-row">
            <div class="form-group col-md-3">
                <label>Cantidad</label>
                <input type="text" name="cantidad" class="form-control" placeholder="ingrese cantidad" value="{{old('cantidad')}}">
                @if ($errors->has('cantidad'))
                    <small class="form-text text-danger">{{$errors->first('cantidad')}}</small>
                @endif
            </div> 
            <div class="form-group col-md-3">
                <label>Valor Unitario</label>
                <input type="number" name="valor_unitario" class="form-control" placeholder="ingrese valor unitario" value="{{old('valor_unitario')}}">
                @if ($errors->has('valor_unitario'))
                    <small class="form-text text-danger">{{$errors->first('valor_unitario')}}</small>
                @endif
            </div>                  
            <div class="form-group col-md-3">
                <label>Fecha factura</label>
                <select class="form-control" name="id_factura">
                    <option>Seleccione una opción</option>
                    @foreach ($facturas as $objeto)
                    <option value="{{$objeto->id}}">{{$objeto->fecha_hora}}</option>
                    @endforeach
                </select>
                @if ($errors->has('id_factura'))
                    <small class="form-text text-danger">{{$errors->first('id_factura')}}</small>
                @endif
            </div>
            <div class="form-group col-md-3">
                <label>Fecha pedido</label>
                <select class="form-control" name="id_pedido">
                    <option>Seleccione una opción</option>
                    @foreach ($pedidos as $objeto)
                    <option value="{{$objeto->id}}">{{$objeto->fecha_hora}}</option>
                    @endforeach
                </select>
                @if ($errors->has('id_pedido'))
                    <small class="form-text text-danger">{{$errors->first('id_pedido')}}</small>
                @endif
            </div>       
        </div>
        <div class="modal-footer">
           <button type="submit" class="btn btn-primary">Guardar</button>
           <a href="{{route('detfactura')}}" class="btn btn-secondary" data-dismiss="modal">Atrás</a>
        </div>
    </form>
@endsection