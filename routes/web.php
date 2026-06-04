<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});
//Rutas para la pagina de inicio
Route::get('inicio',function(){
    return view('inicio');
})->name('inicio');

//Rutas para la pagina de reportes
Route::get('/reportes',function(){
    return view('reportes');
})->name('reportes');

Route::get('/contacto',function(){
    return view('contacto');
})->name('contacto');

//Rutas para soporte y ayuda
Route::get('soporteAyuda',function(){
    return view('soporteAyuda');
})->name('soporteAyuda');

//Rutas para login y registro
Route::get('loginUser',function(){
    return view('loginUser');
})->name('loginUser');
Route::get('registro',function(){
    return view('registro');
})->name('registro');
Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
