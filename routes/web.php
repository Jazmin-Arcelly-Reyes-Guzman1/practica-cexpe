<?php

use Illuminate\Support\Facades\Route;
use app\Http\Controllers\TalleresController;

Route::view('/', 'inicio')->name('inicio');
Route::view('asesoramiento', 'asesoramiento')->name('asesoramiento');
Route::view('contacto', 'contacto')->name('contacto');
// Route::view('inicio', 'inicio')->name('inicio');
Route::view('programas', 'programas')->name('programas');
Route::get('talleres', 'App\Http\Controllers\TalleresController@talleres')->name('talleres');

