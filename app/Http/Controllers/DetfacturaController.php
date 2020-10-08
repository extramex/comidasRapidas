<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use\App\Http\Requests\DetfacturaGuardarRequest;
use App\Detfactura;
use App\Factura;
use App\Pedido;
class DetfacturaController extends Controller
{
    //
    public function index(){
        $detfacturas = Detfactura::join('facturas','detfacturas.id_factura','facturas.id')
        ->join('pedidos','detfacturas.id_pedido','pedidos.id')
        ->select('detfacturas.id','detfacturas.cantidad','detfacturas.valor_unitario','facturas.fecha_hora','pedidos.fecha_hora as fec_hora')
        ->paginate(6);        
        return view ('detfactura', compact('detfacturas'));
    }
    public function indexx(){
        $detfacturas = Detfactura::all();
        $facturas = Factura::all();
        $pedidos = Pedido::all();
        return view ('dddetfactura', compact('detfacturas', 'facturas', 'pedidos'));
    }
    public function guardar(DetfacturaGuardarRequest $request){
        $detfacturas = new Detfactura;
        $detfacturas->cantidad=$request->cantidad;
        $detfacturas->valor_unitario=$request->valor_unitario;
        $detfacturas->id_factura=$request->id_factura;
        $detfacturas->id_pedido=$request->id_pedido;

        $detfacturas->save();

        return back()->with('estado', 'El registro ' . $request->cantidad . ' se guardo exitosamente!');
    }
    public function editar(DetfacturaGuardarRequest $request,$id){
        $detfacturas = Detfactura::findOrFail($id);
        $detfacturas->cantidad=$request->cantidad;
        $detfacturas->valor_unitario=$request->valor_unitario;
        $detfacturas->id_factura=$request->id_factura;
        $detfacturas->id_pedido=$request->id_pedido;

        $detfacturas->save();
        
        return back()->with('estado', 'El registro ' . $request->cantidad . ' se guardo exitosamente!');
    }
    public function eliminar($id){
        $detfacturas = Detfactura::findOrFail($id);
        $detfacturas->delete();
        return back()->with('estado', 'El registro se elimino exitosamente!');
    }

    public function listar($id){
        $detfacturas = Detfactura::findOrFail($id);
        return view('ddetfactura',compact('detfacturas'));
    }
}
