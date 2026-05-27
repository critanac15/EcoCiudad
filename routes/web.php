<?php

use App\Http\Controllers\ReportController;
use App\Http\Controllers\TaskController;
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
Route::get('/reportes', [ReportController::class, 'index'])->name('reportes');

//Rutas para soporte y ayuda
Route::get('soporteAyuda',function(){
    return view('soporteAyuda');
})->name('soporteAyuda');

//Rutas para login y registro
Route::get('login',function(){
    return view('login');
})->name('login');
Route::get('registro',function(){
    return view('registro');
})->name('registro');