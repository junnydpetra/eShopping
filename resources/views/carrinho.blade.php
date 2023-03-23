@extends('layout')

@section('content')
    <h3>Carrinho</h3>

    @if(isset($cart) && count($cart) > 0)
        <table class="table">
            <thead>
                <tr>
                    <th></th>
                    <th>Nome</th>
                    <th>Foto</th>
                    <th>Valor</th>
                    <th>Descrição</th>
                </tr>
            </thead>
            <tbody>
                @php $total=0; @endphp
                @foreach ($cart as $indice => $produto)
                    <tr>
                        <td>
                            <a href="{{ route('delete_carrinho', ['indice' => $indice]) }}" class="btn btn-sm btn-danger border border-dark">
                                <i class="fa fa-trash"></i>
                            </a>
                        </td>
                        <td>{{ $produto->name }}</td>
                        <td><img src="{{ asset($produto->foto) }}" height="50"></td>
                        <td>{{ $produto->valor }}</td>
                        <td>{{ $produto->descricao }}</td>
                    </tr>
                    @php $total = $total + $produto->valor; @endphp
                @endforeach
            </tbody>
            <tfoot>
                <tr>
                    <td colspan="5">
                        Total: R${{ $total }}
                    </td>
                </tr>
            </tfoot>
        </table>

        <div class="pull-right">
            <form action="{{ route('finalizar_carrinho') }}" method="post">
                @csrf
                <input type="submit" value="Finalizar Compra" class="btn btn-lg btn-success border border-dark">
            </form>
        </div>

    @else
        <p>Carrinho vazio!</p>
    @endif

@endsection
