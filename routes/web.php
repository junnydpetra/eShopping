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
Route::get('/logout', [UsuarioController::class, 'logout'])->name('logout');

Route::match(['get', 'post'], '/{id_produto}/carrinho/add', [ProdutoController::class, 'addCarrinho'])->name('add_carrinho');
Route::match(['get', 'post'], '/carrinho_add', [ProdutoController::class, 'verCarrinho'])->name('ver_carrinho');
Route::match(['get', 'post'], '/{indice}/carrinho_delete', [ProdutoController::class, 'deleteCarrinho'])->name('delete_carrinho');
Route::post('/carrinho/finalizar', [ProdutoController::class, 'finalizarCompra'])->name('finalizar_carrinho');

Route::match(['get', 'post'],'/compras/historico', [ProdutoController::class, 'historico'])->name('compras_historico');
Route::post('/compras/detalhes', [ProdutoController::class, 'detalhes'])->name('detalhes_pedido');

Route::match(['get', 'post'],'/compras/pagamento', [ProdutoController::class, 'pagamento'])->name('pagamento');
