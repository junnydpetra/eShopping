@extends('layout')

@section('content')
@section('scriptjs')
    <script src="https://code.jquery.com/jquery-3.6.4.min.js" integrity="sha256-oP6HI9z1XaZNBrJURtCoUT5SUnxFr8s3BzRl+cbzUq8=" crossorigin="anonymous"></script>
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery.mask/1.14.0/jquery.mask.js"></script>
    <script>
        $(function(){
            $("#login").mask("000.000.000-00");
        })
    </script>
@endsection
    <div class="col-12">
        <h2>Login</h2>

        <form action="{{ route('login') }}" method="post">
            @csrf
            <div class="form-group">
                Login: <input type="text" name="login" id="login" class="form-control">
            </div>

            <div class="form-group">
                Password: <input type="password" name="senha" class="form-control">
            </div>

            <input type="submit" value="Login" class="btn btn-sm btn-primary border border-dark mt-1">
        </form>

    </div>

@endsection
