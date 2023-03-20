@extends('layout')

@section('content')
    @include('_produtos', ['lista' => $lista])
@endsection
