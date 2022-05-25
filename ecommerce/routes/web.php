<?php

use App\Http\Controllers\CategoriaController;
use App\Http\Controllers\FornecedorController;
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

Route::resources([
    'categoria' => CategoriaController::class,
    'produto' => \App\Http\Controllers\ProdutoController::class
]);

Route::resources([
    'fornecedor' => FornecedorController::class
]);

Route::get("/", [\App\Http\Controllers\HomeController::class, 'index']);

Route::get("/detalhe/{id}", [\App\Http\Controllers\HomeController::class, 'detalhe']);

Route::get('/dashboard', [\App\Http\Controllers\DashboardController::class, 'dashboard'])->name('dashboard');

Route::get('/carrinho',
    [\App\Http\Controllers\CompraController::class, 'compras'])->name('carrinho');

require __DIR__.'/auth.php';
