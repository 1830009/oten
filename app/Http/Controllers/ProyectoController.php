<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProyectoController extends Controller
{
    public function index(){
        return "estas en la pag prinncipal de los proyectos";
        }
    
        public function show($proyecto){
            return "El proyecto a ver es: ".$proyecto;
        }

}
