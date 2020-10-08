@extends('layouts.app')

@section('titulo')
    <img src="../../img/comida.png" width="30" height="30" class="d-inline-block align-top" alt="">
    <label class="mx-sm-2">Gestión detalle receta</label>
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

    <form action="{{route ('detrecetas.guardar')}}" method="POST" class="form-horizontal">
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
                <label>Unidad de Medida</label>
                <input type="text" name="unidad_medida" class="form-control" placeholder="ingrese unidad de medida" value="{{old('unidad_medida')}}">
                @if ($errors->has('unidad_medida'))
                    <small class="form-text text-danger">{{$errors->first('unidad_medida')}}</small>
                @endif
            </div>
            <div class="form-group col-md-3">
                <label>Tipo Ingrediente</label>
                <select class="form-control" name="id_ingredientes">
                    <option>Seleccione una opción</option>
                    @foreach ($ingredientes as $objeto)
                    <option value="{{$objeto->id}}">{{$objeto->nombre}}</option>
                    @endforeach
                </select>
                @if ($errors->has('id_ingredientes'))
                    <small class="form-text text-danger">{{$errors->first('id_ingredientes')}}</small>
                @endif
            </div> 
            <div class="form-group col-md-3">
                <label>Tipo Receta</label>
                <select class="form-control" name="id_receta">
                    <option>Seleccione una opción</option>
                    @foreach ($recetas as $objeto)
                    <option value="{{$objeto->id}}">{{$objeto->nombre}}</option>
                    @endforeach
                </select>
                @if ($errors->has('id_receta'))
                    <small class="form-text text-danger">{{$errors->first('id_receta')}}</small>
                @endif
            </div>            
        </div>
        <div class="modal-footer">
            <button type="submit" class="btn btn-primary">Guardar</button>
            <a href="{{route('detrecetas')}}" class="btn btn-secondary" data-dismiss="modal">Atrás</a>
        </div>
    </form>
@endsection