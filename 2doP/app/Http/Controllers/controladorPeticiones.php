<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class controladorPeticiones extends Controller
{
    public function home(){
        return view('formUsuarios');
    }
}
