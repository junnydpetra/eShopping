<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\{Produto, Categoria, Pedido, Usuario};
use App\Services\VendasService;

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

    public function deleteCarrinho($indice, Request $request)
    {
        $carrinho = session('cart', []);
        if (isset($carrinho[$indice])) {
            unset($carrinho[$indice]);
        }
        session(['cart' => $carrinho]);
        return redirect()->route('ver_carrinho');
    }

    public function finalizarCompra(Request $request)
    {
        $produtos = session('cart', []);
        $vendaService = new VendasService();
        $result = $vendaService->finalizarCompra($produtos, Auth::user());

        if ($result['status'] == "ok") {
            $request->session()->forget('cart');
        }

        $request->session()->flash($result['status'], $result['message']);
        return redirect()->route('ver_carrinho');
    }

    public function historico(Request $request)
    {
        $data = [];
        $idUsuario = Auth::user()->id;
        $listaPedidos = Pedido::where('usuario_id', $idUsuario)
                            ->orderBy('data_pedido', 'desc')
                            ->get();

        $data['lista_pedidos'] = $listaPedidos;

        return view('compra.historico', $data);
    }

    public function detalhes(Request $request)
    {
        $id_pedido = $request->input('id_pedido');
        echo "Detalhes de pedido: " . $id_pedido;
    }
}
