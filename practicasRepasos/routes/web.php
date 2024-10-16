<?php

// use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\controladorVista1;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});




// route::view('/portada', 'portada')->name('rutaportada');

// route::view('/vista1', 'vista1')->name('rutavista1');


Route::get ('/vista1', [controladorVista1::class, 'vista1'])->name('rutavista1');
Route::post('/calculadora', [controladorVista1::class, 'calculadora'])->name('rutaconvertir');
Route::get ('/portada', [controladorVista1::class, 'portada'])->name('rutaportada');



require __DIR__.'/auth.php';
