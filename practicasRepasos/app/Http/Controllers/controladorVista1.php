<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;


class controladorVista1 extends Controller
{

    public function vista1(){
        return view('vista1');

    
    }

    public function calculadora(Request $request){
        $cantidad = $request->input('cantidad');
        $conversion = $request->input('conversion');
        $resultado = '';

     
        switch ($conversion) {
            case 'mb_gb':
                $resultado = $cantidad . ' MB es igual a ' . $cantidad / 1000 . ' GB';
                break;
            case 'gb_mb':
                $resultado = $cantidad . ' GB es igual a ' . $cantidad * 1000 . ' MB';
                break;
            case 'gb_tb':
                $resultado = $cantidad . ' GB es igual a ' . $cantidad / 1000 . ' TB';
                break;
            case 'tb_gb':
                $resultado = $cantidad . ' TB es igual a ' . $cantidad * 1000 . ' GB';
                break;
            default:
                $resultado = 'Conversión no válida.';
        }

 
        return view('vista1', ['resultado' => $resultado]);
    }
    

    public function portada(){
        return view('portada');
    }
}
