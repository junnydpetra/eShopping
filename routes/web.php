<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\{ProdutoController,
                          ClienteController,
                          UsuarioController
                         };

Route::match(['get', 'post'], '/', [ProdutoController::class, 'index'])->name('home');
Route::match(['get', 'post'], '/categoria', [ProdutoController::class, 'categoria'])->name('categoria');
Route::match(['get', 'post'], '/{id_categoria}/categoria', [ProdutoController::class, 'categoria'])->name('categoria_id');
Route::match(['get', 'post'], '/cadastrar', [ClienteController::class, 'cadastrar'])->name('cadastrar');
Route::match(['get', 'post'], '/cliente/cadastrar', [ClienteController::class, 'cadastrarCliente'])->name('cadastrar_cliente');
Route::match(['get', 'post'], '/login', [UsuarioController::class, 'login'])->name('login');
Route::match(['get', 'post'], '/{id_produto}/carrinho/add', [ProdutoController::class, 'addCarrinho'])->name('add_carrinho');
Route::match(['get', 'post'], '/carrinho_add', [ProdutoController::class, 'verCarrinho'])->name('ver_carrinho');
Route::match(['get', 'post'], '/{indice}/carrinho_delete', [ProdutoController::class, 'deleteCarrinho'])->name('delete_carrinho');

