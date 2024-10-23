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

        $validated=$peticion->validate([

            'txtnombre'=>'required|min:4|max:25',
            'txtapellido'=>'required|min:4|max:25',
            'txtcorreo'=>'required|email:rfc,dns',
            'txttelefono'=>'required|numeric',
         ]);




        //redireccion con valores en session
        $usuario= $peticion->input('txtnombre');

        session()->flash('exito','se guardo el usuario'.$usuario);
        return to_route('rutaform');

    }
}
