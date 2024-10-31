<?php


use Illuminate\Support\Facades\Route;
use App\Http\Controllers\rutaVistas;

// route::view('/', 'inicio')->name('rutainicio');
// route::view('/registrolibro', 'registrolibro')->name('rutaregistro');

Route::get ('/', [rutaVistas::class, 'inicio'])->name('rutainicio');
Route::get ('/registroLibro', [rutaVistas::class, 'registroLibro'])->name('rutaregistro');
Route::post('/enviarLibro', [rutaVistas::class, 'procesarLibros'])->name('rutaenviar');


