@extends('plantilla')

@section('titulo')
<img src="../../img/comida.png" width="30" height="30" class="d-inline-block align-top" alt="">
<label class="mx-sm-2">Editar clientes</label>

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

<form action="{{route ('clientes.editar',$clientes->id)}}" method="POST" class="form-horizontal">
    @method('PUT')
    @csrf
    <div class="form-row">
        <div class="form-group col-md-6">
            <label><Nav>Nombre</Nav></label>
            <input type="text" name="nombre" class="form-control" placeholder="ingrese nombre" value="{{$clientes->nombre}}">
            @if ($errors->has('nombre'))
                <small class="form-text text-danger">{{$errors->first('nombre')}}</small>
            @endif
        </div>
        <div class="form-group col-md-6">
            <label><nav>Teléfono</nav></label>
            <input type="text" name="telefono" class="form-control" placeholder="ingrese teléfono" value="{{$clientes->telefono}}">
            @if ($errors->has('telefono'))
            <small class="form-text text-danger">{{$errors->first('telefono')}}</small>
            @endif
        </div>
        <div class="form-group col-md-6">
            <label>Email</label>
            <input type="text" name="email" class="form-control" placeholder="ingrese email" value="{{$clientes->email}}">
            @if ($errors->has('email'))
                <small class="form-text text-danger">{{$errors->first('email')}}</small>
            @endif
        </div>
    </div> 
    <div class="modal-footer">
    <a href="{{route ('clientes')}}" class="btn btn-secondary" data-dismiss="modal" >Atrás</button></a>
      <button type="submit" class="btn btn-primary">Actualizar</button>
    </div>
  </form>
@endsection