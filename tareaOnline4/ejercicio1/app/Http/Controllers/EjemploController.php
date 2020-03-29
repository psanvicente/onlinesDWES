<?php

namespace App\Http\Controllers;
//el primer ejemplo será capaz de enrutar nuestra apliación.(el ejercicio anterior, pero de otra manera) 
class EjemploController extends Controller{//
    
    public function inicio(){
        return "Estás en el inicio del sitio";
        //debemos enlazarlo en web.php
    }
}