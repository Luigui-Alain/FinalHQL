<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AcercadeController extends Controller
{
    public function index()
    {
        $apellidos_nombres = "Hancco Quispe Luigui"; 
        $carrera = "Desarrollo de Sistemas de Informacion"; 
        $nivel_ciclo = "IV semestre";
        $turno = "Noche";

        return view('acercade', compact('apellidos_nombres', 'carrera', 'nivel_ciclo', 'turno'));
    }
}
