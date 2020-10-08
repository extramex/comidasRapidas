@extends('plantilla')

@section('titulo')
    <img src="../../img/comida.png" width="30" height="30" class="d-inline-block align-top" alt="">
    <label class="mx-sm-2">Editar detalle receta</label>
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
    <form action="{{route ('detrecetas.editar',$detrecetas->id)}}" method="POST" class="form-horizontal">
        @method('PUT')
        @csrf
        <div class="form-row">
            <div class="form-group col-md-3">
                <label><nav>Cantidad</nav></label>
                <input type="text" name="cantidad" class="form-control" placeholder="ingrese cantidad" value="{{$detrecetas->cantidad}}">
                @if ($errors->has('cantidad'))
                    <small class="form-text text-danger">{{$errors->first('cantidad')}}</small>
                @endif
            </div>
            <div class="form-group col-md-3">
                <label><nav>Unidad de Medida</nav></label>
                <input type="text" name="unidad_medida" class="form-control" placeholder="ingrese unidad de medida" value="{{$detrecetas->unidad_medida}}">
                @if ($errors->has('unidad_medida'))
                    <small class="form-text text-danger">{{$errors->first('unidad_medida')}}</small>
                @endif
            </div>
            <div class="form-group col-md-3">
                <label>Tipo Ingrediente</label>
                <select class="form-control" name="id_ingredientes">
                    <option value="{{$detrecetas->id_ingredientes}}">{{$detrecetas->id_ingredientes}}</option>
                </select>                
            </div> 
            <div class="form-group col-md-3">
                <label>Tipo Receta</label>
                <select class="form-control" name="id_receta">
                    <option value="{{$detrecetas->id_receta}}">{{$detrecetas->id_receta}}</option>
                </select>                
            </div>            
        </div>
        <div class="modal-footer">
            <a href="{{route('detrecetas')}}" class="btn btn-secondary" data-dismiss="modal">Atrás</a>
            <button type="submit" class="btn btn-primary">Editar</button>
        </div>
    </form>
@endsection