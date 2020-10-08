@extends('plantilla')

@section('titulo')
<img src="../../img/comida.png" width="30" height="30" class="d-inline-block align-top" alt="">
 <label class="mx-sm-3">Editar empleado</label>
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

    <form action="{{route ('empleados.editar',$empleados->id)}}" method="post" class="form-horizontal">
        @method('PUT')
        @csrf    
        <div class="form-row">
            <div class="form-group col-md-3">
                <label>Nombre</label>
                <input type="text" name="nombre" class="form-control" placeholder="ingrese nombre" value="{{$empleados->nombre}}">
                @if ($errors->has('nombre'))
                    <small class="form-text text-danger">{{$errors->first('nombre')}}</small>
                @endif
            </div>
            <div class="form-group col-md-3">
                <label>Apellidos</label>
                <input type="text" name="apellidos" class="form-control" placeholder="ingrese apellidos" value="{{$empleados->apellidos}}">
                @if ($errors->has('apellidos'))
                    <small class="form-text text-danger">{{$errors->first('apellidos')}}</small>
                @endif
            </div>
            <div class="form-group col-md-3">
                <label>Teléfono</label>
                <input type="number" name="telefono" class="form-control" placeholder="ingrese teléfono" value="{{$empleados->telefono}}">
                @if ($errors->has('telefono'))
                    <small class="form-text text-danger">{{$errors->first('telefono')}}</small>
                @endif
            </div>
            <div class="form-group col-md-3">
                <label>Dirección</label>
                <input type="text" name="direccion" class="form-control" placeholder="ingrese dirección" value="{{$empleados->direccion}}">
                @if ($errors->has('direccion'))
                    <small class="form-text text-danger">{{$errors->first('direccion')}}</small>
                @endif
            </div>
            <div class="form-group col-md-3">
                <label>Edad</label>
                <input type="text" name="edad" class="form-control" placeholder="ingrese edad" value="{{$empleados->edad}}">
                @if ($errors->has('edad'))
                    <small class="form-text text-danger">{{$errors->first('edad')}}</small>
                @endif
            </div>                                                                     
        </div>
        <div class="modal-footer">
            <a href="{{route('empleados')}}" class="btn btn-secondary" data-dismiss="modal">Atrás</a>
            <button type="submit" class="btn btn-primary">Editar</button>
        </div>
    </form>

@endsection