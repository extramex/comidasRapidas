@extends('plantilla')

@section('titulo')
<img src="../../img/comida.png" width="30" height="30" class="d-inline-block align-top" alt="">
 <label class="mx-sm-3">Editar Ingredientes</label>
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

    <form action="{{route ('ingrediente.editar',$ingredientes->id)}}" method="post" class="form-horizontal">
        @method('PUT')
        @csrf    
        <div class="form-row">
            <div class="form-group col-md-4">
                <label>Nombre</label>
                <input type="text" name="nombre" class="form-control" placeholder="ingrese nombre" value="{{$ingredientes->nombre}}">
                @if ($errors->has('nombre'))
                    <small class="form-text text-danger">{{$errors->first('nombre')}}</small>
                @endif
            </div>            
            <div class="form-group col-md-4">
                <label>Unidad de Medida</label>
                <input type="text" name="unidad_medida" class="form-control" placeholder="ingrese unidad de medida" value="{{$ingredientes->unidad_medida}}">
                @if ($errors->has('unidad_medida'))
                    <small class="form-text text-danger">{{$errors->first('unidad_medida')}}</small>
                @endif
            </div>
            <div class="form-group col-md-4">
                <label>Cantidad Total</label>
                <input type="text" name="cantidad_total" class="form-control" placeholder="ingrese cantidad total" value="{{$ingredientes->cantidad_total}}">
                @if ($errors->has('cantidad_total'))
                    <small class="form-text text-danger">{{$errors->first('cantidad_total')}}</small>
                @endif
            </div>            
        </div>
        <div class="modal-footer">
            <a href="{{route('ingrediente')}}" class="btn btn-secondary" data-dismiss="modal">Atrás</a>
            <button type="submit" class="btn btn-primary">Editar</button>
        </div>
    </form>

@endsection