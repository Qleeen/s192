<?php

namespace App\Http\Controllers;
use App\Http\Requests\validadorClientes;

use Illuminate\Http\Request;

class controladorVistas extends Controller
{
    public function home(){
        return view('inicio');
    }

    public function formulario(){
        // return view('formulario');
    }

    public function consulta(){
        return view('clientes');
    }

    // public function procesarClientes(){
    //     return 'La informacion del cliente llego al controlador';
    // }

    public function procesarClientes(validadorClientes $peticionValidada){



        //redireccion con valores en session
        $usuario= $peticionValidada->input('txtnombre');

        session()->flash('exito','se guardo el usuario' .$usuario);
        return to_route('rutaform');

    }
}
