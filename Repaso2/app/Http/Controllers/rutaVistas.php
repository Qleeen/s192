<?php

namespace App\Http\Controllers;
use App\Http\Request\validadorLibros;

use Illuminate\Http\Request;


class rutaVistas extends Controller
{
    public function inicio(){
        return view('inicio');
    }
    
    public function registroLibro(){
        return view('registroLibro');
    }

    public function registro(validadorLibros $peticion)
    {

        $usuario= $peticion->input('txtisbn');
        session()->flash('exito', 'Se guardo el libro con isbn' .$usuario);
        return redirect()->route('rutaregistro');

    }


}
