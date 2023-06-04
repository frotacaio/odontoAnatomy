<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\ListaController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\OdontoController;
use Illuminate\Support\Facades\Route;
use Inertia\Inertia;

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

Route::get('/', [OdontoController::class, 'index'])->name('odonto.login');
Route::get('/Registro', [LoginController::class, 'index'])->name('odonto.registro');
Route::get('/Home', [HomeController::class, 'index'])->name('odonto.home');
Route::get('/Teste', [HomeController::class, 'index2'])->name('odonto.teste');
Route::get('/Lista', [ListaController::class, 'index'])->name('odonto.lista');


Route::post('/RegistroPost', [LoginController::class, 'post'])->name('odonto.registroPost');
Route::post('/auth', [OdontoController::class, 'auth'])->name('odonto.auth');
Route::post('/ListaPost', [ListaController::class, 'post'])->name('odonto.listaPost');


