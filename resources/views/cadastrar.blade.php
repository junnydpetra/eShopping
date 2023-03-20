@extends('layout')
@section('content')
    <div class="col-12">
        <h2>Cadastrar Cliente</h2>
    </div>

    <form action="" method="post">
        <div class="col-6">
            <div class="form-group">
                Nome: <input type="text" name="nome" class="form-control">
            </div>
        </div>

        <div class="col-6">
            <div class="form-group">
                E-mail: <input type="email" name="email" class="form-control">
            </div>
        </div>

        <div class="col-6">
            <div class="form-group">
                CPF: <input type="text" name="cpf" class="form-control">
            </div>
        </div>

        <div class="col-6">
            <div class="form-group">
                Senha: <input type="password" name="password" class="form-control">
            </div>
        </div>

        <div class="col-12">
            <div class="form-group">
                Endereço: <input type="text" name="endereco" class="form-control">
            </div>
        </div>

        <div class="col-4">
            <div class="form-group">
                Cidade: <input type="text" name="cidade" class="form-control">
            </div>
        </div>

        <div class="col-4">
            <div class="form-group">
                CEP: <input type="text" name="cep" class="form-control">
            </div>
        </div>

        <div class="col-4">
            <div class="form-group">
                Estado: <input type="text" name="estado" class="form-control">
            </div>
        </div>

        <input type="submit" value="Cadastrar" class="btn btn-success btn-sm border border-dark">
    </form>

@endsection