@extends('plantilla')

@section('titulo')
<img src="../../img/comida.png" width="30" height="30" class="d-inline-block align-top" alt="">
 <label class="mx-sm-3">Editar pedidos</label>
@endsection

@section('migracion')

    {{-- envia un alerta de que se guardo exitosamente --}}
    @if (session('estado'))    
        <div class="alert alert-success alert-dismissible fade show" role="alert">
            <strong>{{session ('estado')}}</strong>:D
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
            </button>
        </div>
    @endif

    <form action="{{route ('pedidos.editar',$pedidos->id)}}" method="post" class="form-horizontal">
        @method('PUT')
        @csrf    
        <div class="form-row">
            <div class="form-group col-md-3">
                <label>Fecha Hora</label>
                <input type="text" name="fecha_hora" class="form-control" placeholder="ingrese fecha y hora" value="{{$pedidos->fecha_hora}}">
                @if ($errors->has('fecha_hora'))
                    <small class="form-text text-danger">{{$errors->first('fecha_hora')}}</small>
                @endif
            </div>
            <div class="form-group col-md-3">
                <label>Domicilio</label>
                <select class="form-control" name="id_domicilio">
                    <option value="{{$pedidos->id_domicilio}}">{{$pedidos->id_domicilio}}</option>
                </select>
            </div>
            <div class="form-group col-md-3">
                <label>Número mesa</label>
                <select class="form-control" name="id_mesa">
                    <option value="{{$pedidos->id_mesa}}">{{$pedidos->id_mesa}}</option>
                </select>
            </div>
            <div class="form-group col-md-3">
                <label>Cliente</label>
                <select class="form-control" name="id_cliente">
                    <option value="{{$pedidos->id_cliente}}">{{$pedidos->id_cliente}}</option>
                </select>
            </div>
            <div class="form-group col-md-3">
                <label>Empleado</label>
                <select class="form-control" name="id_empleado">
                    <option value="{{$pedidos->id_empleado}}">{{$pedidos->id_empleado}}</option>
                </select>
            </div>                                                         
        </div>
        <div class="modal-footer">
            <a href="{{route('pedidos')}}" class="btn btn-secondary" data-dismiss="modal">Atrás</a>
            <button type="submit" class="btn btn-primary">Editar</button>
        </div>
    </form>

@endsection