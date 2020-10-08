@extends('plantilla')

@section('titulo')
    <img src="../../img/comida.png" width="30" height="30" class="d-inline-block align-top" alt="">
    <label class="mx-sm-2">Gestión de ingredientes</label>
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

    <form action="{{route ('ingrediente.guardar')}}" method="POST" class="form-horizontal">
        @csrf
        <div class="form-row">
            <div class="form-group col-md-4">
                <label>Nombre</label>
                <input type="text" name="nombre" class="form-control" placeholder="ingrese nombre" value="{{old('nombre')}}">
                @if ($errors->has('nombre'))
                    <small class="form-text text-danger">{{$errors->first('nombre')}}</small>
                @endif
            </div>
            <div class="form-group col-md-4">
                <label>Unidad de Medida</label>
                <input type="text" name="unidad_medida" class="form-control" placeholder="ingrese unidad de medida" value="{{old('unidad_medida')}}">
                @if ($errors->has('unidad_medida'))
                    <small class="form-text text-danger">{{$errors->first('unidad_medida')}}</small>
                @endif
            </div>
            <div class="form-group col-md-4">
                <label>Cantidad Total</label>
                <input type="number" name="cantidad_total" class="form-control" placeholder="ingrese cantidad total" value="{{old('cantidad_total')}}">
                @if ($errors->has('cantidad_total'))
                <small class="form-text text-danger">{{$errors->first('cantidad_total')}}</small>
                @endif
            </div>
        </div>
        <div class="modal-footer">
            <button type="submit" class="btn btn-primary">Guardar</button>
            <a href="{{route('ingrediente')}}" class="btn btn-secondary" data-dismiss="modal">Atrás</a>
        </div>
    </form>
@endsection