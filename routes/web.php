<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/index', function () {
    return view('index');
});
Route::get('/', function () {
    return view('welcome');
});

Route::get("plantilla", function(){
    return view("plantilla");
});

Route::get('clientes', 'ClienteController@index')->name('clientes');
Route::get('clientess', 'ClienteController@indexx')->name('clientes.nuevo');
Route::get('clientes/{id}', 'ClienteController@listar')->name('clientes.listar');
Route::put('clientes/{id}', 'ClienteController@editar')->name('clientes.editar');
Route::delete('clientes/{id}', 'ClienteController@eliminar')->name('clientes.eliminar');
Route::post('clientes', 'ClienteController@guardar')->name('clientes.guardar');

Route::get('empleados', 'EmpleadoController@index')->name('empleados');
Route::get('empleadoss', 'EmpleadoController@indexx')->name('empleados.nuevo');
Route::get('empleados/{id}', 'EmpleadoController@listar')->name('empleados.listar');
Route::put('empleados/{id}', 'EmpleadoController@editar')->name('empleados.editar');
Route::delete('empleados/{id}', 'EmpleadoController@eliminar')->name('empleados.eliminar');
Route::post('empleados', 'EmpleadoController@guardar')->name('empleados.guardar');

Route::get('recetas', 'RecetaController@index')->name('recetas');
Route::get('recetass', 'RecetaController@indexx')->name('recetas.nuevo');
Route::get('recetas/{id}', 'RecetaController@listar')->name('recetas.listar');
Route::put('recetas/{id}', 'RecetaController@editar')->name('recetas.editar');
Route::delete('recetas/{id}', 'RecetaController@eliminar')->name('recetas.eliminar');
Route::post('recetas', 'RecetaController@guardar')->name('recetas.guardar');

Route::get('ingrediente', 'ingredienteController@index')->name('ingrediente');
Route::get('ingredientes', 'ingredienteController@indexx')->name('ingrediente.nuevo');
Route::get('ingrediente/{id}', 'ingredienteController@listar')->name('ingrediente.listar');
Route::put('ingrediente/{id}', 'ingredienteController@editar')->name('ingrediente.editar');
Route::delete('ingrediente/{id}', 'ingredienteController@eliminar')->name('ingrediente.eliminar');
Route::post('ingrediente', 'ingredienteController@guardar')->name('ingrediente.guardar');

Route::get('domicilios', 'DomicilioController@index')->name('domicilios');
Route::get('domicilio', 'DomicilioController@indexx')->name('domicilios.nuevo');
Route::get('domicilios/{id}', 'DomicilioController@listar')->name('domicilios.listar');
Route::put('domicilios/{id}', 'DomicilioController@editar')->name('domicilios.editar');
Route::delete('domicilios/{id}', 'DomicilioController@eliminar')->name('domicilios.eliminar');
Route::post('domicilios', 'DomicilioController@guardar')->name('domicilios.guardar');

Route::get('mesas', 'MesaController@index')->name('mesas');
Route::get('mesa', 'MesaController@indexx')->name('mesas.nuevo');
Route::get('mesas/{id}', 'MesaController@listar')->name('mesas.listar');
Route::put('mesas/{id}', 'MesaController@editar')->name('mesas.editar');
Route::delete('mesas/{id}', 'MesaController@eliminar')->name('mesas.eliminar');
Route::post('mesas', 'MesaController@guardar')->name('mesas.guardar');

Route::get('detrecetas', 'DetrecetaController@index')->name('detrecetas');
Route::get('detreceta', 'DetrecetaController@indexx')->name('detrecetas.nuevo');
Route::get('detrecetas/{id}', 'DetrecetaController@listar')->name('detrecetas.listar');
Route::put('detrecetas/{id}', 'DetrecetaController@editar')->name('detrecetas.editar');
Route::delete('detrecetas/{id}', 'DetrecetaController@eliminar')->name('detrecetas.eliminar');
Route::post('detrecetas', 'DetrecetaController@guardar')->name('detrecetas.guardar');

Route::get('productos', 'ProductoController@index')->name('productos');
Route::get('producto', 'ProductoController@indexx')->name('productos.nuevo');
Route::get('productos/{id}', 'ProductoController@listar')->name('productos.listar');
Route::put('productos/{id}', 'ProductoController@editar')->name('productos.editar');
Route::delete('productos/{id}', 'ProductoController@eliminar')->name('productos.eliminar');
Route::post('productos', 'ProductoController@guardar')->name('productos.guardar');

Route::get('pedidos', 'PedidoController@index')->name('pedidos');
Route::get('pedido', 'PedidoController@indexx')->name('pedidos.nuevo');
Route::get('pedidos/{id}', 'PedidoController@listar')->name('pedidos.listar');
Route::put('pedidos/{id}', 'PedidoController@editar')->name('pedidos.editar');
Route::delete('pedidos/{id}', 'PedidoController@eliminar')->name('pedidos.eliminar');
Route::post('pedidos', 'PedidoController@guardar')->name('pedidos.guardar');

Route::get('detpedidos', 'DetpedidoController@index')->name('detpedidos');
Route::get('detpedidoss', 'DetpedidoController@indexx')->name('detpedidos.nuevo');
Route::get('detpedidos/{id}', 'DetpedidoController@listar')->name('detpedidos.listar');
Route::put('detpedidos/{id}', 'DetpedidoController@editar')->name('detpedidos.editar');
Route::delete('detpedidos/{id}', 'DetpedidoController@eliminar')->name('detpedidos.eliminar');
Route::post('detpedidos', 'DetpedidoController@guardar')->name('detpedidos.guardar');

Route::get('factura', 'FacturaController@index')->name('factura');
Route::get('facturas', 'FacturaController@indexx')->name('factura.nuevo');
Route::get('factura/{id}', 'FacturaController@listar')->name('factura.listar');
Route::put('factura/{id}', 'FacturaController@editar')->name('factura.editar');
Route::delete('factura/{id}', 'FacturaController@eliminar')->name('factura.eliminar');
Route::post('factura', 'FacturaController@guardar')->name('factura.guardar');

Route::get('detfactura', 'DetfacturaController@index')->name('detfactura');
Route::get('detfacturas', 'DetfacturaController@indexx')->name('detfactura.nuevo');
Route::get('detfactura/{id}', 'DetfacturaController@listar')->name('detfactura.listar');
Route::put('detfactura/{id}', 'DetfacturaController@editar')->name('detfactura.editar');
Route::delete('detfactura/{id}', 'DetfacturaController@eliminar')->name('detfactura.eliminar');
Route::post('detfactura', 'DetfacturaController@guardar')->name('detfactura.guardar');


Auth::routes();
Route::get('/home', 'HomeController@index')->name('home');
