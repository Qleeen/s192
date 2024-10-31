<?php

use App\Http\Controllers\rutaVistas;
use Illuminate\Support\Facades\Route;

// route::view('/', 'inicio')->name('rutainicio');
// route::view('/registrolibro', 'registrolibro')->name('rutaregistro');

Route::get ('/', [rutaVistas::class, 'inicio'])->name('rutainicio');
Route::get ('/registroLibro', [rutaVistas::class, 'registroLibro'])->name('rutaregistro');
Route::post('/registrarLibro', [rutaVistas::class, 'registroLibro'])->name('registrarLibro');


