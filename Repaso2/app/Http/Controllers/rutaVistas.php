<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class rutaVistas extends Controller
{
    public function inicio(){
        return view('inicio');
    }
    
    public function registroLibro(){
        return view('registroLibro');
    }

    public function registro(Request $peticion)
    {

        $usuario= $peticion->input('txtisbn');
        session()->flash('exito', 'Se guardo el libro con isbn' .$usuario);
        return redirect()->route('rutaregistro');

    }

    public function procesarLibro(Request $peticion){

        $validated=$peticion->validate([

            'txtisbn' => 'required|min:13',
            'txttitulo' => 'required|string|max:150',
            'txtautor' => 'required|min:3',
            'txtpaginas' => 'required|integer|min:2',
            'txtanio' => 'required|integer|digits:4|between:1000,$currentYear"',
            'txteditorial' => 'required|',
            'txtemail' => 'required|email:rfc,dns',
      

        ]);
    }
}
