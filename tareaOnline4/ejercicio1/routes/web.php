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
// http://localhost/PHP/tareasOnline/tareaOnline4/ejercicio1/public/ es donde está el index
/*
Route::get('/', function () { 
    return view('welcome');
});

/* Comentado debido al punto b del ejercicio 1

Route::get('/sobrenosotros', function () { 
    return "Bienvenido a la página <b>Sobre nosotros </b>";
});

Route::get('/contacto', function () { 
    return "Bienvenido a la página <b>Contacto</b>";
});
Route::get('/foro', function () { 
    return "Bienvenido al <b>Foro</b>";
});

Route::get('/post/{id}/{nombre}', function ($id,$nombre) { 
    return "Este es el post número <b>".$id."</b> escrito por ".$nombre;
});

//con expresión regular
Route::get('/postRegex/{id}/{nombre}', function ($id,$nombre) { 
    return "Este es el post número <b>".$id."</b> escrito por ".$nombre;
})->where('nombre','[a-zA-Z]+');
*/
//Punto B del ejercicio 1
/*
Route::get('/inicio/{id}','Ejemplo3Controller@index');//en el siguiente punto ésto lo haremos con php artisan
*/
 /*
Route::get('/', 'PaginasController@inicio');
Route::get('/inicio', 'PaginasController@inicio');//es comun que dos lleven al mismo sitio
Route::get('/quienesSomos', 'PaginasController@quienesSomos');
Route::get('/dondeEstamos', 'PaginasController@dondeEstamos');
Route::get('/foro', 'PaginasController@foro');
*/
Route::resource("posts","Ejemplo3Controller");
