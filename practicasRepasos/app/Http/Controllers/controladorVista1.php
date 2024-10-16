<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;


class controladorVista1 extends Controller
{

    public function vista1(){
        return view('vista1');
    }

    public function portada(){
        return view('portada');
    }
}
