@extends('layout')
@section('scriptjs')
@endsection
@section('content')

    <form action="">
        <div class="row">
            <div class="col-4">
                Cartão de Crédito: <input type="text" name="card_credito" id="card_credito" class="form-control">
            </div>
            <div class="col-4">
                CVV: <input type="text" name="cvv" class="cvv form-control">
            </div>
            <div class="col-4">
                Mês de Validade: <input type="text" name="mes_validade" id="mes_validade" class="form-control">
            </div>
            <div class="col-4">
                Ano de Validade: <input type="text" name="ano_validade" id="ano_validade" class="form-control">
            </div>
            <div class="col-4">
                Nome no Cartão: <input type="text" name="card_name" id="card_name" class="form-control">
            </div>
            <div class="col-4">
                Parcelas: <input type="text" name="parcelas" id="parcelas" class="form-control">
            </div>
            <div class="col-4">
                Total: <input type="text" name="total" id="total" class="form-control">
            </div>
            <div class="col-4">
                Valor de Parcela: <input type="text" name="total_parcela" id="total_parcela" class="form-control">
            </div>
            @csrf
        </div>
        <input type="button" value="Pagar" id="pagamento" class="btn btn-sm btn-success border border-dark mt-2">
    </form>

@endsection
