@if (isset($lista))
    <div class="row">
        @foreach ($lista as $produto)
            <div class="col-3 mb-3 d-flex align-items-stretch">
                <div class="card">
                    <img src="{{asset( $produto->foto )}}" class="card-img-top">
                    <div class="card-body text-center">
                        <h6 class="card-title">{{$produto->name}} - {{ $produto->valor }}</h6>
                        <a href="{{route('add_carrinho', ['id_produto' => $produto->id])}}" class="btn btn-sm btn-success border border-dark">Adicionar Item</a>
                    </div>
                </div>
            </div>
        @endforeach
    </div>
@endif
