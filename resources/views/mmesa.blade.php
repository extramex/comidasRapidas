@extends('plantilla')

@section('titulo')
<img src="../../img/comida.png" width="30" height="30" class="d-inline-block align-top" alt="">
 <label class="mx-sm-3">Editar Mesas</label>
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

    <form action="{{route ('mesas.editar',$mesas->id)}}" method="post" class="form-horizontal">
        @method('PUT')
        @csrf    
        <div class="form-row">
            <div class="form-group col-md-3">
                <label>Número de mesa</label>
                <input type="text" name="n_mesa" class="form-control" placeholder="ingrese número de mesa" value="{{$mesas->n_mesa}}">
                @if ($errors->has('n_mesa'))
                    <small class="form-text text-danger">{{$errors->first('n_mesa')}}</small>
                @endif
            </div>                                                                     
        </div>
        <div class="modal-footer">
            <a href="{{route('mesas')}}" class="btn btn-secondary" data-dismiss="modal">Atrás</a>
            <button type="submit" class="btn btn-primary">Editar</button>
        </div>
    </form>

@endsection