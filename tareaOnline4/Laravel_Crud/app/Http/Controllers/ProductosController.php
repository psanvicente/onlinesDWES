<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Producto;
use App\Http\Requests\CreateProductosRequest;

class ProductosController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $productos = Producto::all();
        return view("/productos.index", compact("productos"));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view("productos.create");
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    // public function store(Request $request
    //indicamos el archivo que hemos creado con php artisan make:request
    //Además debemos añadir la ruta use App\Http\Requests\CreateProductosRequest;

    public function store(CreateProductosRequest $request)
    {

        // $this->validate($request,['seccion'=>'required','paisOrigen'=>'required','nombreArticulo'=>'required']);
        /*
        $producto= new Producto;
        $producto->nombreArticulo = $request->nombreArticulo;
        $producto->seccion = $request->seccion;
        $producto->precio = $request->precio;
        $producto->fecha = $request->fecha;
        $producto->paisOrigen = $request->paisOrigen;
        $producto->save();
        */
        $entrada = $request->all();
        if($archivo=$request->file('file')){
            $nombre=$archivo->getClientOriginalName();//almacena el nombre de la imagen
            $archivo->move('images',$nombre);//mueve el archivo a la carpeta imagenes(si no la tenemos, la crea automáticamente)
            $entrada['ruta']=$nombre;
        }
        Producto::create($entrada);
        //debemos añadir "ruta" a los permisos en Producto.php del fillable
        return redirect("/productos");
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $producto = Producto::findOrFail($id);
        return view("productos.show",compact("producto"));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        {
            $producto = Producto::findOrFail($id);
            return view("productos.edit",compact("producto"));
        }
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(CreateProductosRequest $request, $id)
    {
        $producto = Producto::findOrFail($id);
        $producto->update($request->all());
            if($request->hasFile('file')){
                $file= $request->file('file');
                $filename = $file->getClientOriginalName();
                $file->move('images',$filename);
                $producto->ruta=$filename;
        }
        $producto->save();
        return redirect("/productos");
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $producto = Producto::findOrFail($id);
        $producto->delete();
        return redirect("/productos");
    }
}
