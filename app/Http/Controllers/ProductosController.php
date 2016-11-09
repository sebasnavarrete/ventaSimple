<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\Productos;

class ProductosController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = Productos::all();
        //var_dump($data);
        return $data;
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $producto = new Productos;
        $producto->nombre = $request->nombre;
        ($request->imagen !="")? $producto->imagen = $request->imagen : null;
        $producto->descripcion = $request->descripcion;
        $producto->capacidad = $request->capacidad;
        $producto->precio_venta = $request->venta;
        $producto->precio_compra = $request->compra;
        $producto->categoria = 1;
        $producto->cantidad = 1;
        $producto->tienda = $request->tienda;
        if(!$producto->save()){
            die("Error de almacenamiento");
        };
        print ("Guardado Correctamente");

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        if(!Productos::destroy($id)){
            die("Error eliminando el producto");
        };
        print ("Producto Eliminado");
    }
}
