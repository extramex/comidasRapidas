<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use\App\Http\Requests\empleadoGuardarRequest;
use App\Empleado;
class EmpleadoController extends Controller
{
    //
    public function index(){
        $empleados = Empleado::paginate(6);
        return view ('empleado', compact('empleados'));
    }
    public function indexx(){
        $empleados = Empleado::all();
        return view ('eeempleado', compact('empleados'));
    }

    public function guardar(empleadoGuardarRequest $request){
        $empleados = new Empleado;
        $empleados->nombre=$request->nombre;
        $empleados->apellidos=$request->apellidos;
        $empleados->telefono=$request->telefono;
        $empleados->direccion=$request->direccion;
        $empleados->edad=$request->edad;

        $empleados->save();

        return back()->with('estado', 'El registro ' . $request->nombre . ' se guardo exitosamente!');
    }
    public function editar(empleadoGuardarRequest $request,$id){        
        $empleados = Empleado::findOrFail($id);

        $empleados->nombre=$request->nombre;
        $empleados->apellidos=$request->apellidos;
        $empleados->telefono=$request->telefono;
        $empleados->direccion=$request->direccion;
        $empleados->edad=$request->edad;

        $empleados->save();

        return back()->with('estado', 'El registro  ' . $request->nombre . ' se actualizo exitosamente!');
    }
    public function eliminar($id){
        $empleados = Empleado::findOrFail($id);
        $empleados->delete();
        return back()->with('estado', 'El registro se elimino correctamente!!');
    }

    public function listar($id){
        $empleados = Empleado::findOrFail($id);

        return view('eempleado',compact('empleados'));
    }
}
