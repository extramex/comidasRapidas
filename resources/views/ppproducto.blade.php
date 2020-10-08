@extends('plantilla')

@section('titulo')
    <img src="../../img/comida.png" width="30" height="30" class="d-inline-block align-top" alt="">
    <label class="mx-sm-2">Gestión de Productos</label>
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

    <form action="{{route ('productos.guardar')}}" method="POST" class="form-horizontal">
        @csrf
        <div class="form-row">
            <div class="form-group col-md-3">
                <label>Nombre</label>
                <input type="text" name="nombre" class="form-control" placeholder="ingrese nombre" value="{{old('nombre')}}">
                @if ($errors->has('nombre'))
                    <small class="form-text text-danger">{{$errors->first('nombre')}}</small>
                @endif
            </div>
            <div class="form-group col-md-3">
                <label>Descripción</label>
                <input type="text" name="descripcion" class="form-control" placeholder="ingrese la descripción" value="{{old('descripcion')}}">
                @if ($errors->has('descripcion'))
                    <small class="form-text text-danger">{{$errors->first('descripcion')}}</small>
                @endif
            </div>
            <div class="form-group col-md-3">
                <label>Bebidas</label>
                <input type="text" name="bebidas" class="form-control" placeholder="ingrese bebida" value="{{old('bebidas')}}">
                @if ($errors->has('bebidas'))
                    <small class="form-text text-danger">{{$errors->first('bebidas')}}</small>
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
            <a href="{{route('productos')}}" class="btn btn-secondary" data-dismiss="modal">Atrás</a>
        </div>
    </form>
@endsection