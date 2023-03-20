@extends('layout')

@section('content')
    <h3>Carrinho</h3>

    @if(isset($cart) && count($cart) > 0)
        <table class="table">
            <thead>
                <tr>
                    <th>Nome</th>
                    <th>Foto</th>
                    <th>Valor</th>
                    <th>Descrição</th>
                </tr>
            </thead>
            @foreach ($cart as $produto)
                <tbody>
                    <tr>
                        <td>
                            <a href="#" class="btn btn-sm btn-danger border border-dark">
                                <i class="fa fa-trash"></i>
                            </a>
                        </td>
                        <td>{{$produto->name}}</td>
                        <td><img src="{{asset($produto->foto)}}" height="50"></td>
                        <td>{{$produto->valor}}</td>
                        <td>{{$produto->descricao}}</td>
                    </tr>
                </tbody>
            @endforeach
        </table>
    @else
        <p>Carrinho vazio!</p>
    @endif

@endsection
