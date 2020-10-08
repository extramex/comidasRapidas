@extends('plantilla')

@section('titulo')
<img src="../../img/belleza.png" width="30" height="30" class="d-inline-block align-top" alt="">
 <label class="mx-sm-3">Editar Domicilios</label>
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

    <form action="{{route ('domicilios.editar',$domicilios->id)}}" method="post" class="form-horizontal">
        @method('PUT')
        @csrf    
        <div class="form-row">
            <div class="form-group col-md-3">
                <label>Nombre Empresa</label>
                <input type="text" name="nom_empresa" class="form-control" placeholder="ingrese nombre empresa" value="{{$domicilios->nom_empresa}}">
                @if ($errors->has('nom_empresa'))
                    <small class="form-text text-danger">{{$errors->first('nom_empresa')}}</small>
                @endif
            </div>            
            <div class="form-group col-md-3">
                <label>Dirección Domicilio</label>
                <input type="text" name="dir_domicilio" class="form-control" placeholder="ingrese direccion domicilio" value="{{$domicilios->dir_domicilio}}">
                @if ($errors->has('dir_domicilio'))
                    <small class="form-text text-danger">{{$errors->first('dir_domicilio')}}</small>
                @endif
            </div>
            <div class="form-group col-md-3">
                <label>Fecha</label>
                <input type="date" name="fecha" class="form-control" placeholder="ingrese fecha" value="{{$domicilios->fecha}}">
                @if ($errors->has('fecha'))
                    <small class="form-text text-danger">{{$errors->first('fecha')}}</small>
                @endif
            </div>
            <div class="form-group col-md-3">
                <label>Estado</label>
                <input type="text" name="estado" class="form-control" placeholder="ingrese estado" value="{{$domicilios->estado}}">
                @if ($errors->has('estado'))
                    <small class="form-text text-danger">{{$errors->first('estado')}}</small>
                @endif
            </div>                                 
        </div>
        <div class="modal-footer">
            <a href="{{route('domicilios')}}" class="btn btn-secondary" data-dismiss="modal">Atras</a>
            <button type="submit" class="btn btn-primary">Editar</button>
        </div>
    </form>

@endsection