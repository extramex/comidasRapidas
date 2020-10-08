<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use\App\Http\Requests\productoGuardarRequest;
use App\Producto;
use App\Receta;
class ProductoController extends Controller
{
    //
    public function index(){
        $productos = Producto::join('recetas','productos.id_receta','recetas.id')
        ->select('productos.id','productos.nombre','productos.descripcion','productos.bebidas','recetas.nombre')
        ->paginate(6);
        return view ('producto', compact('productos'));
    }
    public function indexx(){
        $productos = Producto::all();
        $recetas = Receta::all();
        return view ('ppproducto', compact('productos', 'recetas'));
    }
    public function guardar(productoGuardarRequest $request){
        $productos = new Producto;
        $productos->nombre=$request->nombre;
        $productos->descripcion=$request->descripcion;
        $productos->bebidas=$request->bebidas;
        $productos->id_receta=$request->id_receta;

        $productos->save();

        return back()->with('estado', 'El registro ' . $request->nombre . ' se guardo exitosamente!');
    }
    public function editar(productoGuardarRequest $request,$id){        
        $productos = Producto::findOrFail($id);

        $productos->nombre=$request->nombre;
        $productos->descripcion=$request->descripcion;
        $productos->bebidas=$request->bebidas;
        $productos->id_receta=$request->id_receta;

        $productos->save();

        return back()->with('estado', 'El registro  ' . $request->fecha . ' se actualizo exitosamente!');
    }
    public function eliminar($id){
        $productos = Producto::findOrFail($id);
        $productos->delete();
        return back()->with('estado', 'El registro se elimino correctamente!!');
    }

    public function listar($id){
        $productos = Producto::findOrFail($id);

        return view('pproducto',compact('productos'));
    }
}
