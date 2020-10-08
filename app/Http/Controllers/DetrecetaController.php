<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use\App\Http\Requests\DetrecetaGuardarRequest;
use App\Detreceta;
use App\Ingrediente;
use App\Receta;
class DetrecetaController extends Controller
{
    //
    public function index(){
        $detrecetas = Detreceta::join('ingredientes','detrecetas.id_ingredientes','ingredientes.id')
        ->join('recetas','detrecetas.id_receta','recetas.id')
        ->select('detrecetas.id','detrecetas.cantidad','detrecetas.unidad_medida','ingredientes.nombre','recetas.nombre as nomRec')
        ->paginate(6);        
        return view ('detreceta', compact('detrecetas'));
    }
    public function indexx(){
        $detrecetas = Detreceta::all();
        $ingredientes = Ingrediente::all();
        $recetas = Receta::all();
        return view ('dddetreceta', compact('detrecetas', 'ingredientes', 'recetas'));
    }
    
    public function guardar(DetrecetaGuardarRequest $request){
        $detrecetas = new Detreceta;
        $detrecetas->cantidad=$request->cantidad;
        $detrecetas->unidad_medida=$request->unidad_medida;
        $detrecetas->id_ingredientes=$request->id_ingredientes;
        $detrecetas->id_receta=$request->id_receta;

        $detrecetas->save();

        return back()->with('estado', 'El registro ' . $request->cantidad . ' se guardo exitosamente!');
    }
    public function editar(DetrecetaGuardarRequest $request,$id){
        $detrecetas = Detreceta::findOrFail($id);

        $detrecetas->cantidad=$request->cantidad;
        $detrecetas->unidad_medida=$request->unidad_medida;
        $detrecetas->id_ingredientes=$request->id_ingredientes;
        $detrecetas->id_receta=$request->id_receta;

        $detrecetas->save();

        return back()->with('estado', 'El registro ' . $request->cantidad . ' se actualizo exitosamente!');
    }
    public function eliminar($id){
        $detrecetas = Detreceta::findOrFail($id);
        $detrecetas->delete();
        return back()->with('estado', 'El registro se elimino exitosamente!');
    }
    public function listar($id){
        $detrecetas = Detreceta::findOrFail($id);

        return view('ddetreceta',compact('detrecetas'));
    }
}
