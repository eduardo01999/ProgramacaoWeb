<?php

use App\Http\Controllers\HomeController;
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
Route::get('/', [HomeController::class, 'listaExercicio']);

Route::get('/exercicio1', [HomeController::class, 'exercicio1']);
Route::post('/resultadoex1', [HomeController::class, 'resultadoex1']);

Route::get('/exercicio2', [HomeController::class, 'exercicio2']);
Route::post('/resultadoex2', [HomeController::class, 'resultadoex2']);

Route::get('/exercicio3', [HomeController::class, 'exercicio3']);
Route::post('/resultadoex3', [HomeController::class, 'resultadoex3']);

Route::get('/exercicio4', [HomeController::class, 'exercicio4']);
Route::post('/resultadoex4', [HomeController::class, 'resultadoex4']);

Route::get('/exercicio5', [HomeController::class, 'exercicio5']);
Route::post('/resultadoex5', [HomeController::class, 'resultadoex5']);


