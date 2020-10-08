@extends('plantilla')

@section('titulo')
<img src="../../img/comida.png" width="30" height="30" class="d-inline-block align-top" alt="">
 <label class="mx-sm-3">Editar Producto</label>
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

    <form action="{{route ('productos.editar',$productos->id)}}" method="post" class="form-horizontal">
        @method('PUT')
        @csrf    
        <div class="form-row">
            <div class="form-group col-md-3">
                <label>Nombre</label>
                <input type="text" name="nombre" class="form-control" placeholder="ingrese nombre" value="{{$productos->nombre}}">
                @if ($errors->has('nombre'))
                    <small class="form-text text-danger">{{$errors->first('nombre')}}</small>
                @endif
            </div>            
            <div class="form-group col-md-3">
                <label>Descripción</label>
                <input type="text" name="descripcion" class="form-control" placeholder="ingrese descripción" value="{{$productos->descripcion}}">
                @if ($errors->has('descripcion'))
                    <small class="form-text text-danger">{{$errors->first('descripcion')}}</small>
                @endif
            </div>
            <div class="form-group col-md-3">
                <label>Bebidas</label>
                <input type="text" name="bebidas" class="form-control" placeholder="ingrese bebidas" value="{{$productos->bebidas}}">
                @if ($errors->has('bebidas'))
                    <small class="form-text text-danger">{{$errors->first('bebidas')}}</small>
                @endif
            </div>
            <div class="form-group col-md-3">
                <label>Nombre Receta</label>
                <select class="form-control" name="id_receta">
                    <option value="{{$productos->id_receta}}">{{$productos->id_receta}}</option>
                </select>
            </div>                      
        </div>
        <div class="modal-footer">
            <a href="{{route('productos')}}" class="btn btn-secondary" data-dismiss="modal">Atrás</a>
            <button type="submit" class="btn btn-primary">Editar</button>
        </div>
    </form>

@endsection