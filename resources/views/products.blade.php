@extends('layouts.main')
@section('title', 'Página de Produtos')
@section('content')
    <h1>Tela de Produtos</h1>
    @if($busca != '')
        <p>O usuário esta buscando por: {{ $busca }}</p>
    @endif
@endsection