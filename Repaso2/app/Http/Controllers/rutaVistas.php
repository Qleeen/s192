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
}
