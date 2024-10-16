<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class controladorVistas extends Controller
{
    public function home(){
        return view('inicio');
    }

    public function formulario(){
        return view('formulario');
    }

    public function consulta(){
        return view('clientes');
    }

    // public function procesarClientes(){
    //     return 'La informacion del cliente llego al controlador';
    // }

    public function procesarClientes(Request $peticion){
        // devuelve lo que contiene la

        //ruta donde se hizo la peticion
        //return $peticion->path();

        //devuelve la url completa de la peticion
        //return $peticion->url();
        
        //nos devuelve la ip del local host
        //return $peticion->ip();

        



    }
}
