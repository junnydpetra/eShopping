<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.min.css" integrity="sha512-SzlrxWUlpfuzQ+pcUCosxcglQRNAq/DZjVsC0lE40xsADsfeQoEypE+enwcOiGjk/bSuGGKHEyjSoQ1zVisanQ==" crossorigin="anonymous" referrerpolicy="no-referrer" />
        <script src="https://code.jquery.com/jquery-3.6.4.min.js"
        integrity="sha256-oP6HI9z1XaZNBrJURtCoUT5SUnxFr8s3BzRl+cbzUq8="
        crossorigin="anonymous"></script>
        <title>eShopping</title>
        @yield('scriptjs')
    </head>

    <body>

        <nav class="navbar navbar-light navbar-expand-md bg-light container-fluid mb-5">
            <a href="#" class="navbar-brand">&nbsp;eShopping</a>
            <div class="collapse navbar-collapse">
                <div class="navbar-nav">
                    <a class="nav-link" href="{{ route('home') }}">Home</a>
                    <a class="nav-link" href="{{ route('categoria') }}">Categorias</a>
                    <a class="nav-link" href="{{ route('cadastrar') }}">Cadastro</a>
                    @if (!Auth::user())
                        <a class="nav-link" href="{{ route('login') }}">Login</a>
                    @else
                        <a class="nav-link" href="{{ route('compras_historico') }}">Minhas Compras</a>
                        <a class="nav-link" href="{{ route('logout') }}">Logout</a>
                    @endif
                </div>
            </div>
            <a href="{{ route('ver_carrinho') }}" class="btn btn-sm"><i class="fa fa-shopping-cart"></i></a>
        </nav>

        <div class="container">
            <div class="row">

                @if(Auth::user())
                    <div class="col-12">
                        <p class="float-end">Olá, {{ Auth::user()->nome }}! <a href="{{ route('logout') }}">Sair</a></p>
                    </div>
                @endif

                @if($message = Session::get('err'))
                    <div class="col-12">
                        <div class="alert alert-danger">{{ $message }}</div>
                    </div>
                @endif

                @if ($message = Session::get('ok'))
                    <div class="col-12">
                        <div class="alert alert-success">{{ $message }}</div>
                    </div>
                @endif

                @yield('content')
            </div>
        </div>

    </body>
</html>
