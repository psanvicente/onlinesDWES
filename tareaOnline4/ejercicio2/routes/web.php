<?php
use App\Articulo;
use App\Cliente;

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
/*
Route::get('/', function () {
    return view('welcome');
});
*/

Route::get("/","MiControlador@index");
Route::get("/crear","MiControlador@create");
Route::get("/articulos","MiControlador@store");
Route::get("/mostrar","MiControlador@show");
Route::get("/contacto","MiControlador@contactar");
Route::get("/galeria","MiControlador@galeria");
/*
Route::get("/insertar",function(){
    DB::insert("INSERT INTO articulos(Nombre_Articulo,Precio,Pais_origen,seccion,observaciones) VALUES (?,?,?,?,?)",
    ["JARRÓN",15.2,"JAPÓN","CERÁMICA","GANGA"]);
});
Route::get("/leer",function(){
    $resultados = DB::select("SELECT * FROM articulos where ID=?", [2]);
    foreach($resultados as $articulo){
        return $articulo->Nombre_Articulo;
    }
});
Route::get("/actualiza",function(){
    DB::insert("UPDATE articulos set seccion ='decoración' where id=?",[2]);
});
Route::get("/borrar",function(){
    DB::insert("DELETE FROM articulos where id=?",[2]);
});
*/

Route::get("/leer",function(){
        // $articulos = Articulo::all();
        // foreach($articulos as $articulo){
        //     echo "Nombre: ".$articulo->Nombre_Articulo.".Precio: ".$articulo->Precio."</br>";
        // }
        /*
        $articulos=Articulo::where("seccion","Deportes")->orderBy("Nombre_Articulo","asc")->get();
        $precio=Articulo::where("seccion","Deportes")->avg("Precio");
        return $precio;
        */
        //$articulo = Articulo::where("id",4)->get();
        /*
        $articulo = Articulo::withTrashed()
                ->where('id', 4)
                ->get();
                */
                $articulo = Articulo::onlyTrashed()->where('id', 4)->get();
        return $articulo;
});
Route::get("/insertar",function(){
    // $articulos = Articulo::all();
    // foreach($articulos as $articulo){
    //     echo "Nombre: ".$articulo->Nombre_Articulo.".Precio: ".$articulo->Precio."</br>";
    // }
    $articulos=new Articulo;
    $articulos->Nombre_Articulo="meyba";
    $articulos->Precio=60;
    $articulos->Pais_origen="Esp";
    $articulos->observaciones="Del mercaillo";
    $articulos->seccion="Futbol";
    $articulos->save();
});
Route::get("/actualizar",function(){
    // $articulos = Articulo::all();
    // foreach($articulos as $articulo){
    //     echo "Nombre: ".$articulo->Nombre_Articulo.".Precio: ".$articulo->Precio."</br>";
    // }
    /*
    $articulos=Articulo::find(5);
    //$articulos->Nombre_Articulo="Jersey";
    $articulos->Precio=39.9;
    $articulos->Pais_origen="China";
    $articulos->observaciones="Lavados a mano";
    $articulos->seccion="Confeccion";
    $articulos->save();
    */
    Articulo::where("id","4")->where("Pais_origen", "Esp")->update(["precio"=>19.95,"observaciones"=>"Spanish Quality"]);
});
Route::get("/borrar",function(){
    /*
   $articulo=Articulo::find(2);
   $articulo->delete();
   */
  Articulo::where("seccion","Confeccion")->delete();
});
Route::get("/insVarios",function(){
    Articulo::create(["Nombre_Articulo"=>"Impresora","Pais_origen"=>"Andorra","Precio"=>230,"observaciones"=>"Nada recalcable","seccion"=>"Electronica"]);
  
});

Route::get("/softDelete",function(){
    Articulo::find(4)->delete();
});
Route::get("/recuperar",function(){
    Articulo::withTrashed()->where('id', 4)->restore();
});
Route::get("/hardDelete",function(){
    Articulo::withTrashed()->where('id', 4)->forceDelete();
});
Route::get("/cliente/{id}/articulo",function($id){
    return Cliente::find($id)->articulo;
});

Route::get("/articulo/{id}/cliente",function($id){
    return Articulo::find($id)->cliente->nombre;
});

Route::get("/articulos",function(){
    $articulos = Cliente::find(1)->articulos->where("Pais_origen","Andorra");
    
    foreach ($articulos as $articulo) {
        echo $articulo->Nombre_Articulo ."</br>";
    }


});

Route::get("/cliente/{id}/perfil",function($id){
        $cliente=Cliente::find($id);
        foreach($cliente->perfils as $perfil){
            echo $perfil->nombre."</br>";
        }

});

Route::get("/calificacion",function(){
        $cliente = Articulo::find(6);
        foreach($cliente->calificaciones as $calificacion){
            return $calificacion->calificacion;
        }
});



