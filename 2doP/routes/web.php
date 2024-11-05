<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\controladorPeticiones;

Route::get('/formUsuarios', [controladorPeticiones::class, 'formUsuarios'])->name('rutainicio');
