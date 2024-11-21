<?php

// use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\controladorVistas;
use App\Http\Controllers\clienteController;

Route::get('/', [controladorVistas::class, 'home'])->name('rutainicio');



Route::get('/clientes', [clienteController::class, 'index'])->name('rutaclientes');

Route::view('/component', 'componentes')->name('componente');

Route::post('/enviarCliente', [controladorVistas::class, 'procesarClientes'])->name('rutaEnviar');



//controlador cliente

Route::get('/cliente/create', [clienteController::class, 'create'])->name('rutaform');
Route::get('/cliente/update/{id}', [clienteController::class, 'edit'])->name('rutaeditaCliente');
Route::put('/cliente/{id}/update', [clienteController::class, 'update'])->name('rutaActualizarCliente');

route::post('/cliente',[clienteController::class, 'store'])->name('enviaCliente');








// Route::get('/dashboard', function () {
//     return view('dashboard');
// })->middleware(['auth', 'verified'])->name('dashboard');

// Route::middleware('auth')->group(function () {
//     Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
//     Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
//     Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
// });

// Ruta de tipo GET
// Route::get('/', function () {
//     return view('welcome');
// });

// Ruta de tipo vista


// Route::view('/', 'inicio')->name('rutainicio');

// Route::view('/formulario', 'formulario')->name('rutaform');

// Route::view('/clientes', 'clientes')->name('rutaclientes');

// Route::view('/component', 'componentes')->name('componente');


require __DIR__.'/auth.php';
