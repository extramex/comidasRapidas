<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use\App\Http\Requests\recetaGuardarRequest;
use App\Receta;
class recetaController extends Controller
{
    //
    public function index(){
        $recetas = Receta::paginate(6);
        return view ('receta', compact('recetas'));
    }
    public function indexx(){
        $recetas = Receta::all();
        return view ('rrreceta', compact('recetas'));
    }


    public function guardar(recetaGuardarRequest $request){
        $recetas = new Receta;
        $recetas->nombre=$request->nombre;
        $recetas->descripcion=$request->descripcion;

        $recetas->save();

        return back()->with('estado', 'El registro ' . $request->nombre . ' se guardo exitosamente!');
    }
    public function editar(recetaGuardarRequest $request,$id){        
        $recetas = Receta::findOrFail($id);

        $recetas->nombre=$request->nombre;
        $recetas->descripcion=$request->descripcion;

        $recetas->save();

        return back()->with('estado', 'El registro  ' . $request->nombre . ' se actualizo exitosamente!');
    }
    public function eliminar($id){
        $recetas = Receta::findOrFail($id);
        $recetas->delete();
        return back()->with('estado', 'El registro se elimino correctamente!!');
    }

    public function listar($id){
        $recetas = Receta::findOrFail($id);

        return view('rreceta',compact('recetas'));
    }
}
