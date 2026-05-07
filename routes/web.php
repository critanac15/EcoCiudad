<?php

use App\Http\Controllers\ReportController;
use App\Http\Controllers\TaskController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('inicio',function(){
    return view('inicio');
})->name('inicio');

Route::get('/reportes',function(){
    return view('reportes');
})->name('reportes');

Route::get('/reportes', [ReportController::class, 'index'])->name('reportes');

Route::get('soporteAyuda',function(){
    return view('soporteAyuda');
})->name('soporteAyuda');

Route::get('login',function(){
    return view('login');
})->name('login');