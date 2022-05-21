<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::resource('choferes', App\Http\Controllers\ChofereController::class);
Route::resource('multas', App\Http\Controllers\MultaController::class);
Route::resource('rutas', App\Http\Controllers\RutaController::class);

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
