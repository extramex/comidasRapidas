<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use\App\Http\Requests\DetpedidoGuardarRequest;
use App\Detpedido;
use App\Pedido;
use App\Producto;
class DetpedidoController extends Controller
{
    //
    public function index(){
        $detpedidos = Detpedido::join('pedidos','detpedidos.id_pedido','pedidos.id')
        ->join('productos','detpedidos.id_producto','productos.id')
        ->select('detpedidos.id','detpedidos.cantidad','detpedidos.valor_unitario','pedidos.fecha_hora',
        'productos.nombre')
        ->paginate(6);        
        return view ('detpedido', compact('detpedidos'));
    }
    public function indexx(){
        $detpedidos = Detpedido::all();
        $pedidos = Pedido::all();
        $productos = Producto::all();
        return view ('dddetpedido', compact('detpedidos','pedidos','productos'));
    }
    public function guardar(DetpedidoGuardarRequest $request){
        $detpedidos = new Detpedido;
        $detpedidos->cantidad=$request->cantidad;
        $detpedidos->valor_unitario=$request->valor_unitario;
        $detpedidos->id_pedido=$request->id_pedido;
        $detpedidos->id_producto=$request->id_producto;

        $detpedidos->save();

        return back()->with('estado', 'El registro ' . $request->cantidad . ' se guardo exitosamente!');
    }
    public function editar(DetpedidoGuardarRequest $request,$id){
        $detpedidos = Detpedido::findOrFail($id);

        $detpedidos->cantidad=$request->cantidad;
        $detpedidos->valor_unitario=$request->valor_unitario;
        $detpedidos->id_pedido=$request->id_pedido;
        $detpedidos->id_producto=$request->id_producto;

        $detpedidos->save();

        return back()->with('estado', 'El registro ' . $request->cantidad . ' se guardo exitosamente!');
    }
    public function eliminar($id){
        $detpedidos = Detpedido::findOrFail($id);
        $detpedidos->delete();
        return back()->with('estado', 'El registro se elimino exitosamente!');
    }

    public function listar($id){
        $detpedidos = Detpedido::findOrFail($id);
        return view('ddetpedido',compact('detpedidos'));
    }
}
