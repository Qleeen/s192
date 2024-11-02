<?php

namespace App\Http\Controllers;
use App\Http\Requests\validadorClientes;

use Illuminate\Http\Request;


class rutaVistas extends Controller
{
    public function inicio(){
        return view('inicio');
    }
    
    public function registroLibro(){
        return view('registroLibro');
    }

    public function procesarLibros(validadorCLientes $peticionValidada){



        //redireccion con valores en session
        $usuario= $peticionValidada->input('txttitulo');

        session()->flash('exito','se guardo el usuario'.$usuario);
        return to_route('rutaregistro');

    }


}
