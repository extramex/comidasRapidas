<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use\App\Http\Requests\domicilioGuardarRequest;
use App\Domicilio;
class DomicilioController extends Controller
{
    //
    public function index(){
        $domicilios = Domicilio::paginate(6);
        return view ('domicilio', compact('domicilios'));
    }
    public function indexx(){
        $domicilios = Domicilio::all();
        return view ('dddomicilio', compact('domicilios'));
    }

    public function guardar(domicilioGuardarRequest $request){
        $domicilios = new Domicilio;
        $domicilios->nom_empresa=$request->nom_empresa;
        $domicilios->dir_domicilio=$request->dir_domicilio;
        $domicilios->fecha=$request->fecha;
        $domicilios->estado=$request->estado;

        $domicilios->save();

        return back()->with('estado', 'El registro ' . $request->nom_empresa . ' se guardo exitosamente!');
    }
    public function editar(domicilioGuardarRequest $request,$id){        
        $domicilios = Domicilio::findOrFail($id);

        $domicilios->nom_empresa=$request->nom_empresa;
        $domicilios->dir_domicilio=$request->dir_domicilio;
        $domicilios->fecha=$request->fecha;
        $domicilios->estado=$request->estado;

        $domicilios->save();

        return back()->with('estado', 'El registro  ' . $request->nom_empresa . ' se actualizo exitosamente!');
    }
    public function eliminar($id){
        $domicilios = Domicilio::findOrFail($id);
        $domicilios->delete();
        return back()->with('estado', 'El registro se elimino correctamente!!');
    }

    public function listar($id){
        $domicilios = Domicilio::findOrFail($id);

        return view('ddomicilio',compact('domicilios'));
    }
}
