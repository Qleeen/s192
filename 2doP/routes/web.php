<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\controladorPeticiones;

Route::get('/', [controladorPeticiones::class, 'formUsuarios'])->name('rutainicio');

Route::post('/enviarInfo', [controladorPeticiones::class, 'procesarInfo'])->name('rutaEnviar');
