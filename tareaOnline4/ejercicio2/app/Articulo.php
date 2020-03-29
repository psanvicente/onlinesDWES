<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
//use App\Cliente;

class Articulo extends Model
{
    //
    /*
    protected $fillable=[
        "Nombre_Articulo",
        "Precio",
        "Pais_origen",
        "observaciones",
        "seccion"
    ];
    */
    /*
    Comentado por relaciones polimorficas
    use SoftDeletes;

    protected $dates = ['deleted_at'];
    public function cliente(){
        return $this->belongsTo("App\Cliente");
    }
    */
    public function calificaciones()
    {
        return $this->morphMany('App\Calificaciones', 'calificacion');
    }
}
