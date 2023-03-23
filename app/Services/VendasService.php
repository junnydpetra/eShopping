<?php

namespace App\Services;

use Illuminate\Support\Facades\DB;
use App\Models\{Usuario, Endereco, Pedido, ItensPedido};
use Illuminate\Support\Facades\Log;
use Nette\Utils\DateTime;

class VendasService
{
    public function finalizarCompra($produtos = [], Usuario $user)
    {
        try {
            DB::beginTransaction();

            $dataHoje = new DateTime();

            $pedido = new Pedido();

            $pedido->data_pedido = $dataHoje->format('Y-m-d H:i:s');
            $pedido->status = "PEN";
            $pedido->usuario_id = $user->id;

            $pedido->save();

            foreach ($produtos as $produto)
            {
                $itens = new ItensPedido();

                $itens->quantidade = 1;
                $itens->valor = $produto->valor;
                $itens->dt_item = $dataHoje->format('Y-m-d H:i:s');;
                $itens->produto_id = $produto->id;
                $itens->pedido_id = $pedido->id;

                $itens->save();
            }

            DB::commit();
            return ['status' => 'ok', 'message' => 'Compra finalizada com sucesso!'];
        } catch (\Exception $e) {
            DB::rollback();
            Log::error("ERRO:VENDA SERVICE", ['message' => $e->getMessage()]);
            return ['status' => 'err', 'message' => 'Erro, venda não efetivada!'];
        }
    }
}
