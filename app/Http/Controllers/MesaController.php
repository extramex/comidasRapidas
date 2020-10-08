<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use\App\Http\Requests\mesaGuardarRequest;
use App\Mesa;
class MesaController extends Controller
{
    //
    public function index(){
        $mesas = Mesa::paginate(6);
        return view ('mesas', compact('mesas'));
    }
    public function indexx(){
        $mesas = Mesa::all();
        return view ('mmmesa', compact('mesas'));
    }

    public function guardar(mesaGuardarRequest $request){
        $mesas = new Mesa;
        $mesas->n_mesa=$request->n_mesa;        

        $mesas->save();

        return back()->with('estado', 'El registro ' . $request->n_mesa . ' se guardo exitosamente!');
    }
    public function editar(mesaGuardarRequest $request,$id){        
        $mesas = Mesa::findOrFail($id);

        $mesas->n_mesa=$request->n_mesa;        

        $mesas->save();

        return back()->with('estado', 'El registro  ' . $request->n_mesa . ' se actualizo exitosamente!');
    }
    public function eliminar($id){
        $mesas = Mesa::findOrFail($id);
        $mesas->delete();
        return back()->with('estado', 'El registro se elimino correctamente!!');
    }

    public function listar($id){
        $mesas = Mesa::findOrFail($id);

        return view('mmesa',compact('mesas'));
    }
}
