<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use\App\Http\Requests\ingredienteGuardarRequest;
use App\Ingrediente;
class ingredienteController extends Controller
{
    //
    public function index(){
        $ingredientes = Ingrediente::paginate(6);
        return view ('ingrediente', compact('ingredientes'));
    }
    public function indexx(){
        $ingredientes = Ingrediente::all();
        return view ('iiingrediente', compact('ingredientes'));
    }

    public function guardar(ingredienteGuardarRequest $request){
        $ingredientes = new Ingrediente;
        $ingredientes->nombre=$request->nombre;
        $ingredientes->unidad_medida=$request->unidad_medida;
        $ingredientes->cantidad_total=$request->cantidad_total;

        $ingredientes->save();

        return back()->with('estado', 'El registro ' . $request->nombre . ' se guardo exitosamente!');
    }
    public function editar(ingredienteGuardarRequest $request,$id){        
        $ingredientes = Ingrediente::findOrFail($id);

        $ingredientes->nombre=$request->nombre;
        $ingredientes->unidad_medida=$request->unidad_medida;
        $ingredientes->cantidad_total=$request->cantidad_total;

        $ingredientes->save();

        return back()->with('estado', 'El registro  ' . $request->nombre . ' se actualizo exitosamente!');
    }
    public function eliminar($id){
        $ingredientes = Ingrediente::findOrFail($id);
        $ingredientes->delete();
        return back()->with('estado', 'El registro se elimino correctamente!!');
    }

    public function listar($id){
        $ingredientes = Ingrediente::findOrFail($id);

        return view('iingrediente',compact('ingredientes'));
    }
}
