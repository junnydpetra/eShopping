@extends('layout')

@section('content')
    <div class="col-2">
        @if(isset($listaCategorias) && count($listaCategorias))
            <div class="list-group">
                <a href="{{route('categoria')}}" class="list-group-item list-group-item-action
                    @if($id_categoria == 0) active @endif">Todas
                </a>
                @foreach ($listaCategorias as $categoria)
                    <a class="list-group-item list-group-item-action
                        @if($categoria->id == $id_categoria) active @endif" href="{{route('categoria_id', ['id_categoria' => $categoria->id])}}">{{$categoria->categoria}}
                    </a>
                @endforeach
            </div>
        @endif
    </div>

    <div class="col-10">
        @include('_produtos', ['lista' => $lista])
    </div>
@endsection
