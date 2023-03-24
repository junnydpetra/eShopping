@extends('layout')
@section('scriptjs')
    <script>
        $(function(){
            $(".historico_compra").on('click', function(){
                let id = $(this).attr("data-value")
                $.post('{{ route("detalhes_pedido") }}', { id_pedido : id }, (result) => {
                    $("#detalhes_pedido").html(result)
                })
            })
        });
    </script>
@endsection
@section('content')

    <div class="col-12">
        <h2>Histórico de Pedidos</h2>
    </div>

    <div class="col-12">
        <table class="table table-bordered border border-dark">
            <tr class="text-center">
                <th>Data de Pedido</th>
                <th>Status</th>
                <th>Detalhes</th>
            </tr>

            @foreach ($lista_pedidos as $pedido)
                <tr class="text-center">
                    <td>{{ $pedido->data_pedido->format('d/m/Y H:i') }}</td>
                    <td>{{ $pedido->statusDesc() }}</td>
                    <td class="text-center">
                        <a href="#" class="btn btn-sm btn-primary border border-dark historico_compra" data-value="{{ $pedido->id }}" data-bs-toggle="modal" data-bs-target="#modalPedidos">
                            <i class="fas fa-shopping-basket"></i>
                        </a>
                    </td>
                </tr>
            @endforeach
        </table>
    </div>

    <div class="modal fade" id="modalPedidos">
        <div class="modal-dialog">

            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Detalhes do Pedido</h5>
                </div>

                <div class="modal-body">
                    <div id="detalhes_pedido"></div>
                </div>

                <div class="modal-footer">
                    <button class="btn btn-sm btn-danger border border-dark" data-bs-dismiss="modal">Fechar</button>
                </div>
            </div>

        </div>
    </div>

@endsection
