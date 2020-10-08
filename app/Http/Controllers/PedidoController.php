<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use\App\Http\Requests\pedidoGuardarRequest;
use App\Pedido;
use App\Domicilio;
use App\Mesa;
use App\Cliente;
use App\Empleado;
class PedidoController extends Controller
{
    //
    public function index(){
        $pedidos = Pedido::join('domicilios','pedidos.id_domicilio','domicilios.id')
        ->join('mesas','pedidos.id_mesa','mesas.id')
        ->join('clientes','pedidos.id_cliente','clientes.id')
        ->join('empleados','pedidos.id_empleado','empleados.id')
        ->select('pedidos.id','pedidos.fecha_hora','domicilios.nom_empresa','mesas.n_mesa',
        'clientes.nombre','empleados.nombre as nomEmp')
        ->paginate(6);        
        return view ('pedido', compact('pedidos'));
    }
    public function indexx(){
        $pedidos = Pedido::all();
        $domicilios = Domicilio::all();
        $mesas = Mesa::all();
        $clientes = Cliente::all();
        $empleados = Empleado::all();
        return view ('pppedido', compact('pedidos', 'domicilios', 'mesas', 'clientes', 'empleados'));
    }
    public function guardar(pedidoGuardarRequest $request){
        $pedidos = new Pedido;
        $pedidos->fecha_hora=$request->fecha_hora;
        $pedidos->id_domicilio=$request->id_domicilio;
        $pedidos->id_mesa=$request->id_mesa;
        $pedidos->id_cliente=$request->id_cliente;
        $pedidos->id_empleado=$request->id_empleado;

        $pedidos->save();

        return back()->with('estado', 'El registro ' . $request->fecha_hora . ' se guardo exitosamente!');
    }
    public function editar(pedidoGuardarRequest $request,$id){        
        $pedidos = Pedido::findOrFail($id);

        $pedidos->fecha_hora=$request->fecha_hora;
        $pedidos->id_domicilio=$request->id_domicilio;
        $pedidos->id_mesa=$request->id_mesa;
        $pedidos->id_cliente=$request->id_cliente;
        $pedidos->id_empleado=$request->id_empleado;

        $pedidos->save();

        return back()->with('estado', 'El registro  ' . $request->fecha_hora . ' se actualizo exitosamente!');
    }
    public function eliminar($id){
        $pedidos = Pedido::findOrFail($id);
        $pedidos->delete();
        return back()->with('estado', 'El registro se elimino correctamente!!');
    }

    public function listar($id){
        $pedidos = Pedido::findOrFail($id);

        return view('ppedido',compact('pedidos'));
    }
}
