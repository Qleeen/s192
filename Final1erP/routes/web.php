<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('principal');
});

Route::view('/formularioContacto', 'formularioContacto')->name('rutaform');
Route::view('/principal', 'principal')->name('rutaprincipal');
Route::view('/listadoCOntactos', 'listadoCOntactos')->name('listadoCOntactos');



