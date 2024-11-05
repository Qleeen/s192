<?php

namespace App\Http\Controllers;
use App\Http\Requests\validadorPeticiones;

use Illuminate\Http\Request;

class controladorPeticiones extends Controller
{
    public function formUsuarios(){
        return view('formUsuarios');
    }

    public function procesarInfo(validadorPeticiones $peticionValidada){



        //redireccion con valores en session
        $usuario= $peticionValidada->input('txtcorreo');

        session()->flash('exito','se guardo el usuario'.$usuario);
        return to_route('rutainicio');

    }
}
