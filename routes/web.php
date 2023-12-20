<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\ProdutoController;
use App\Http\Controllers\ServicoController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/



Route::get('/', function () {
    return redirect()->route('login');
});

Route::get('/login', [LoginController::class, 'login'])->name('login');
Route::post('/logar', [LoginController::class, 'entrar'])->name('logar');

Route::middleware(['auth'])->group(function () {

    Route::get('/inicio', [LoginController::class,'index'])->name('inicio');

    Route::get('/produtos',[ProdutoController::class,'listar'])->name('produtos.listar');
    Route::get('/produto/cadastrar',[ProdutoController::class,'cadastrar'])->name('produto.cadastrar');
    Route::post('/produto/salvar',[ProdutoController::class,'salvar'])->name('produto.salvar');
    Route::get('/produto/editar/{id}',[ProdutoController::class,'editar'])->name('produto.editar');
    Route::post('/produto/atualizar',[ProdutoController::class,'atualizar'])->name('produto.atualizar');


    Route::get('/logout', [LoginController::class, 'sair'])->name('logout');

});