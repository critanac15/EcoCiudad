<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\ReporteController;
use Illuminate\Support\Facades\Route;

// "Route::get" es como decirle al sistema: "Cuando alguien escriba la dirección '/' (la página principal),
// muéstrale la vista llamada 'inicio'."
Route::get('/', function () 
{
    return view('inicio');
});

//Rutas para la pagina de inicio
Route::get('/inicio',function()
{
    return view('inicio');
})->name('inicio');

//Rutas para la pagina de reportes
Route::get('/reportes',function()
{
    return view('reportes');
})->name('reportes');

Route::get('/reportes',[ ReporteController::class, 'index' ])->name('reportes');

// Route::post se usa cuando enviamos información desde un formulario (para que no se vea en la barra de direcciones).
// Aquí dice: cuando envíen datos a '/reportes', llévalos a la función 'store' del controlador ReporteController.
// Esta es la ruta que recibe la información del nuevo reporte para guardarlo.
Route::post('/reportes',[ ReporteController::class, 'store' ])->name('reportes.store');



Route::get('/contacto',function()
{
    return view('contacto');
})->name('contacto');

//Rutas para soporte y ayuda
Route::get('soporteAyuda',function()
{
    return view('soporteAyuda');
})->name('soporteAyuda');

//Rutas para login y registro
Route::get('loginUser',function()
{
    return view('loginUser');
})->name('loginUser');

Route::get('registro',function()
{
    return view('registro');
})->name('registro');

Route::get('/dashboard', function ()
{
    return view('dashboard');
// El "middleware" es como un guardia de seguridad.
// 'auth' significa que tienes que estar autenticado (haber iniciado sesión) para entrar a esta ruta.
// Si no iniciaste sesión, te mandará de regreso a la pantalla de login.
})->middleware( ['auth', 'verified'] )->name('dashboard');

Route::middleware('auth')->group(function ()
{
    Route::get('/profile', [ ProfileController::class, 'edit' ])->name('profile.edit');
    Route::patch('/profile', [ ProfileController::class, 'update' ])->name('profile.update');
    Route::delete('/profile', [ ProfileController::class, 'destroy' ])->name('profile.destroy');
});

require __DIR__.'/auth.php';
