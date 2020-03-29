<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdministradorController extends Controller
{
    public function __construct(){
        $this->middleware('EsAdmin');//nombre del middleware
    }

    public function index(){//es la puerta de entrada para los administradores.
        return "Si has llegado aquí, tienes rol de administrador";

    }
}
