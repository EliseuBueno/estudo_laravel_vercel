@extends('layouts.main')
@section('title', 'Estudo Laravel')
@section('content')

    <h1>Imagens</h1>
        <img src="/img/drum.jpg" alt="Drum"></img>
    <h1>Condição</h1>
    @if($x > $y)
        <p>O resultado de x + y é: {{ $z }}</p>
    @else
        <p>O valor de x é: {{ $x }}</p>
        <p>O valor de y é: {{ $y }}</p>
    @endif
    <br>
    <h1>Laços de Repetição</h1>
    <h2>For</h2>
    @for($i = 0; $i < count($arrDados); $i++)
        <p>{{ $i }} - {{ $arrDados[$i] }}</p>
        @if($i == 2)
            <p>Índice {{ $i }}</p>
        @endif
    @endfor
    <h2>Foreach</h2>
    @foreach($arrDados as $dado)
        <p>{{ $loop->index}}</p>
        <p>{{ $dado }}</p>
    @endforeach
    <br>
    <h1> Diretiva PHP</h1>
    @php
        $name = 'Eliseu';
        echo $name;
    @endphp

@endsection