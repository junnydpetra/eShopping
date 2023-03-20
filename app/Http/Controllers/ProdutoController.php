<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\{Produto,
                Categoria};

class ProdutoController extends Controller
{
    public function index(Request $request)
    {
        $data=[];

        $listaProdutos = Produto::all();
        $data['lista'] = $listaProdutos;

        return view('home', $data);
    }

    public function categoria($id_categoria = 0, Request $request)
    {
        $data=[];

        $listaProdutos = Produto::all();
        $listaCategorias = Categoria::all();
        $queryProduto = Produto::limit(4);

        if ($id_categoria != 0) {
            $queryProduto->where("categoria_id", $id_categoria);
        }

        $listaProdutos = $queryProduto->get();

        $data['listaCategorias'] = $listaCategorias;
        $data['lista'] = $listaProdutos;
        $data['id_categoria'] = $id_categoria;

        return view('categoria', $data);
    }

    public function addCarrinho($id_produto = 0, Request $request)
    {
        $produto = Produto::find($id_produto);

        if ($produto) {

            $carrinho = session('cart', []);

            array_push($carrinho, $produto);
            session(['cart' => $carrinho]);
        }

        return redirect()->route('home');
    }

    public function verCarrinho (Request $request)
    {
        $carrinho = session('cart', []);
        $data = ['cart' => $carrinho]   ;

        return view('carrinho', $data);
    }
}
