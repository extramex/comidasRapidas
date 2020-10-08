@extends('plantilla')

@section('titulo')
    <img src="../../img/comida.png" width="30" height="30" class="d-inline-block align-top" alt="">
    <label class="mx-sm-2">Gestión de pedidos</label>
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
    
    <form action="{{route ('pedidos.guardar')}}" method="POST" class="form-horizontal">
        @csrf
        <div class="form-row">
            <div class="form-group col-md-3">
                <label>Fecha y Hora</label>
                <input type="text" name="fecha_hora" class="form-control" placeholder="ingrese fecha y hora" value="{{old('fecha_hora')}}">
                @if ($errors->has('fecha_hora'))
                    <small class="form-text text-danger">{{$errors->first('fecha_hora')}}</small>
                @endif
            </div>            
            <div class="form-group col-md-3">
                <label>Domicilio</label>
                <select class="form-control" name="id_domicilio">
                    <option>Seleccione una opción</option>
                    @foreach ($domicilios as $objeto)
                    <option value="{{$objeto->id}}">{{$objeto->nom_empresa}}</option>
                    @endforeach
                </select>
                @if ($errors->has('id_domicilio'))
                    <small class="form-text text-danger">{{$errors->first('id_domicilio')}}</small>
                @endif
            </div> 
            <div class="form-group col-md-3">
                <label> Número de Mesa</label>
                <select class="form-control" name="id_mesa">
                    <option>Seleccione una opción</option>
                    @foreach ($mesas as $objeto)
                    <option value="{{$objeto->id}}">{{$objeto->n_mesa}}</option>
                    @endforeach
                </select>
                @if ($errors->has('id_mesa'))
                    <small class="form-text text-danger">{{$errors->first('id_mesa')}}</small>
                @endif
            </div>
            <div class="form-group col-md-3">
                <label> Nombre de Cliente</label>
                <select class="form-control" name="id_cliente">
                    <option>Seleccione una opción</option>
                    @foreach ($clientes as $objeto)
                    <option value="{{$objeto->id}}">{{$objeto->nombre}}</option>
                    @endforeach
                </select>
                @if ($errors->has('id_cliente'))
                    <small class="form-text text-danger">{{$errors->first('id_cliente')}}</small>
                @endif
            </div> 
            <div class="form-group col-md-3">
                <label> Nombre de Empleado</label>
                <select class="form-control" name="id_empleado">
                    <option>Seleccione una opción</option>
                    @foreach ($empleados as $objeto)
                    <option value="{{$objeto->id}}">{{$objeto->nombre}}</option>
                    @endforeach
                </select>
                @if ($errors->has('id_empleado'))
                    <small class="form-text text-danger">{{$errors->first('id_empleado')}}</small>
                @endif
            </div>         
        </div>
        <div class="modal-footer">
            <button type="submit" class="btn btn-primary">Guardar</button>
            <a href="{{route('pedidos')}}" class="btn btn-secondary" data-dismiss="modal">Atrás</a>
        </div>
    </form>
@endsection