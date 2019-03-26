<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use App\User;

class PerfilController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function edit() {
        $usuario = Auth::user();

        $argumentos = array();
        $argumentos['usuario'] = $usuario;

        return view('perfil.edit', $argumentos);
    }

    public function update(Request $request, $id) 
    {
        $cadena = "Somos o no somos";

        $separar = explode(" ", strtolower($cadena));

        foreach($separar as $palabra)
        {
            trim($palabra);
            $nuevo .= $palabra; 
        }

        if($nuevo == strrev($nuevo))
        {
            echo "Si";
        }
        else {
            echo "No";
        }
    }
}
