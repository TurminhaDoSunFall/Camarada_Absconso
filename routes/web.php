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

Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('/Criarsala', function () {
    return view('Criarsala');
});
Route::get('/PerfilPessoal', function () {
    return view('PerfilPessoal');
});
Route::get('/SalaAdm', function () {
    return view('SalaAdm');
});
Route::get('/SalaParticipante', function () {
    return view('SalaParticipante');
});
Route::get('/Visualizarperfil', function () {
    return view('Visualizarperfil');
});
