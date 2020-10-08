@extends('plantilla')

@section('titulo')
<img src="../../img/comida.png" width="30" height="30" class="d-inline-block align-top" alt="">
 <label class="mx-sm-3">Editar Factura</label>
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

    <form action="{{route ('factura.editar',$facturas->id)}}" method="post" class="form-horizontal">
        @method('PUT')
        @csrf    
        <div class="form-row">
            <div class="form-group col-md-3">
                <label>Fecha Hora</label>
                <input type="text" name="fecha_hora" class="form-control" placeholder="ingrese fecha y hora" value="{{$facturas->fecha_hora}}">
                @if ($errors->has('fecha_hora'))
                    <small class="form-text text-danger">{{$errors->first('fecha_hora')}}</small>
                @endif
            </div>            
            <div class="form-group col-md-3">
                <label>Valor Domicilio</label>
                <input type="text" name="valor_domicilio" class="form-control" placeholder="ingrese valor domicilio" value="{{$facturas->valor_domicilio}}">
                @if ($errors->has('valor_domicilio'))
                    <small class="form-text text-danger">{{$errors->first('valor_domicilio')}}</small>
                @endif
            </div>
            <div class="form-group col-md-3">
                <label>Total</label>
                <input type="text" name="total" class="form-control" placeholder="ingrese total" value="{{$facturas->total}}">
                @if ($errors->has('total'))
                    <small class="form-text text-danger">{{$errors->first('total')}}</small>
                @endif
            </div>
            <div class="form-group col-md-3">
                <label>Domicilio</label>
                <select class="form-control" name="id_domicilio">
                    <option value="{{$facturas->id_domicilio}}">{{$facturas->id_domicilio}}</option>
                </select>
            </div>                      
        </div>
        <div class="modal-footer">
            <a href="{{route('factura')}}" class="btn btn-secondary" data-dismiss="modal">Atrás</a>
            <button type="submit" class="btn btn-primary">Editar</button>
        </div>
    </form>

@endsection