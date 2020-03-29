<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProductosController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $productos = Productos::all();

        return view('productos.index', compact('productos'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('productos.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'título'=>'required',
            'descripción'=>'required',
            'precio'=>'required'
        ]);
    
        $producto = new Productos([
            'título' => $request->get('título'),
            'descripción' => $request->get('descripción'),
            'precio' => $request->get('precio')
        ]);
    
        $producto->save();
    
        return redirect('/productos')->with('success', '¡Producto guardado!');
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
        $producto = Productos::find($id);
        return view('productos.edit', compact('producto'));
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
        $request->validate([
            'título'=>'required',
            'descripción'=>'required',
            'precio'=>'required'
        ]);
        
        $producto = Productos::find($id);
        $producto->título =  $request->get('título');
        $producto->descripción = $request->get('descripción');
        $producto->precio = $request->get('precio');
        $producto->save();
        
        return redirect('/productos')->with('success', '¡Producto actualizado!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {      
        $producto = Productos::find($id);
        $producto->delete();
        return redirect('/productos')->with('success', '¡Producto borrado!');
    }
}
