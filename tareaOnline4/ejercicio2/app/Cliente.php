<?php

namespace App;
use App\Articulo;

use Illuminate\Database\Eloquent\Model;

class Cliente extends Model
{
    //
    /*
    Comentdo por la parte de polimorfia relacinonal
    public function articulo(){
        return $this->hasOne("Articulo");

    }
    public function articulos()
    {
        return $this->hasMany('App\Articulo');
    }
    public function perfils(){
        return $this->belongsToMany("App\Perfil");
    }
    */
    public function calificaciones()
    {
        return $this->morphMany('App\Calificaciones', 'calificacion');
    }
    protected $fillable = ["nombre","apellidos"];
}
