<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PaginasController extends Controller
{
    //
    public function inicio(){
        return view ("welcome");
        
    }
    //Una vez creada la función en nuestro controlador debemos apuntar a ella desde
    //el archivo web.php
    public function quienesSomos(){
        return view ("quienesSomos");
        
    }
    public function dondeEstamos(){
        return view ("dondeEstamos");
        
    }
    public function foro(){
        return view ("foro");
        
    }
}
