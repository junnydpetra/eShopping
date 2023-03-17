<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.min.css" integrity="sha512-SzlrxWUlpfuzQ+pcUCosxcglQRNAq/DZjVsC0lE40xsADsfeQoEypE+enwcOiGjk/bSuGGKHEyjSoQ1zVisanQ==" crossorigin="anonymous" referrerpolicy="no-referrer" />
        <title>eShopping</title>
    </head>

    <body>
        <nav class="navbar navbar-light navbar-expand-md bg-light pl-5 pr-5 mb-5">
            <a href="#" class="navbar-brand">eShopping</a>
            <div class="collapse navbar-collapse">
                <div class="navbar-nav">
                    <a class="nav-link" href="#">Home</a>
                    <a class="nav-link" href="#">Categorias</a>
                    <a class="nav-link" href="#">Cadastro</a>
                </div>
            </div>
            <a href="#" class="btn btn-sm"><i class="fa fa-shopping-cart"></i></a>
        </nav>

        <div class="container">
            <div class="row">

                <div class="col-3 mb-3">
                    <div class="card">
                        <img src="{{asset('images/produto1.png')}}" class="card-img-top">
                        <div class="card-body text-center">
                            <h6 class="card-title">Armas, Germes e Aço</h6>
                            <a href="#" class="btn btn-sm btn-secondary">Adicionar Item</a>
                        </div>
                    </div>
                </div>
                <div class="col-3 mb-3">
                    <div class="card">
                        <img src="{{asset('images/produto2.png')}}" class="card-img-top">
                        <div class="card-body text-center">
                            <h6 class="card-title">O Terceiro Chimpanzé</h6>
                            <a href="#" class="btn btn-sm btn-secondary">Adicionar Item</a>
                        </div>
                    </div>
                </div>
                <div class="col-3 mb-3">
                    <div class="card">
                        <img src="{{asset('images/produto3.png')}}" class="card-img-top">
                        <div class="card-body text-center">
                            <h6 class="card-title">Primatas e Filósofos</h6>
                            <a href="#" class="btn btn-sm btn-secondary">Adicionar Item</a>
                        </div>
                    </div>
                </div>
                <div class="col-3 mb-3">
                    <div class="card">
                        <img src="{{asset('images/produto4.png')}}" class="card-img-top">
                        <div class="card-body text-center">
                            <h6 class="card-title">Tênis New Balance</h6>
                            <a href="#" class="btn btn-sm btn-secondary">Adicionar Item</a>
                        </div>
                    </div>
                </div>
                <div class="col-3 mb-3">
                    <div class="card">
                        <img src="{{asset('images/produto5.png')}}" class="card-img-top">
                        <div class="card-body text-center">
                            <h6 class="card-title">Tênis New Balance</h6>
                            <a href="#" class="btn btn-sm btn-secondary">Adicionar Item</a>
                        </div>
                    </div>
                </div>
                <div class="col-3 mb-3">
                    <div class="card">
                        <img src="{{asset('images/produto6.png')}}" class="card-img-top">
                        <div class="card-body text-center">
                            <h6 class="card-title">Tênis New Balance</h6>
                            <a href="#" class="btn btn-sm btn-secondary">Adicionar Item</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </body>
</html>
