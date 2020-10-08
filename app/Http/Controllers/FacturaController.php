<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use\App\Http\Requests\facturaGuardarRequest;
use App\Factura;
use App\Domicilio;
class FacturaController extends Controller
{
    //
    public function index(){
        $facturas = Factura::paginate(6);
        return view ('factura', compact('facturas'));
    }
    public function indexx(){
        $facturas = Factura::all();
        $domicilios = Domicilio::all();
        return view ('fffactura', compact('facturas', 'domicilios'));
    }

    public function guardar(facturaGuardarRequest $request){
        $facturas = new Factura;
        $facturas->fecha_hora=$request->fecha_hora;
        $facturas->valor_domicilio=$request->valor_domicilio;
        $facturas->total=$request->total;
        $facturas->id_domicilio=$request->id_domicilio;

        $facturas->save();

        return back()->with('estado', 'El registro ' . $request->fecha . ' se guardo exitosamente!');
    }
    public function editar(facturaGuardarRequest $request,$id){        
        $facturas = Factura::findOrFail($id);

        $facturas->fecha_hora=$request->fecha_hora;
        $facturas->valor_domicilio=$request->valor_domicilio;
        $facturas->total=$request->total;
        $facturas->id_domicilio=$request->id_domicilio;

        $facturas->save();

        return back()->with('estado', 'El registro  ' . $request->fecha . ' se actualizo exitosamente!');
    }
    public function eliminar($id){
        $facturas = Factura::findOrFail($id);
        $facturas->delete();
        return back()->with('estado', 'El registro se elimino correctamente!!');
    }

    public function listar($id){
        $facturas = Factura::findOrFail($id);

        return view('ffactura',compact('facturas'));
    }
}
