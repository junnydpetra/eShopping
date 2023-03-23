@extends('layout')

@section('content')

    <div class="col-12">
        <h2>Login</h2>

        <form action="{{ route('login') }}" method="post">
            @csrf
            <div class="form-group">
                Login: <input type="text" name="login" class="form-control">
            </div>

            <div class="form-group">
                Password: <input type="password" name="senha" class="form-control">
            </div>

            <input type="submit" value="Login" class="btn btn-lg btn-primary">
        </form>

    </div>

@endsection
