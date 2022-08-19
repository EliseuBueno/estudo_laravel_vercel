@extends('layouts.main')
@section('title', 'Estudo Laravel')
@section('content')

<div id="search-container" class="col-md-12">
    <h1>Busque um evento</h1>
    <form action="">
        <input type="text" id="search" name="search" class="form-control" placeholder="Procurar...">
    </form>
    <div id="events-container" class="col-md-12">
        <h2>Próximos Eventos</h2>
        <p class="subtitle">Veja os eventos dos próximos dias</p>
        <div id="cards-container" class="row">
            @foreach($events as $event)
                <div class="card col-md-3">
                    <img src="/img/drum.jpg" alt="{{ $event->title }}">
                    <div class="card-body">
                        <p class="card-date">16/08/2022</p>
                        <h5 class="card-title">{{ $event->title }}</h5>
                        <p class="card-participants">X Participantes</p>
                        <a href="#" class="btn btn-primary">Saber mais</a>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
</div>
@foreach($events as $event)
    <ul>
        <li>{{ $event->title }}</li>
        <li>{{ $event->description }}</li>
        <li>{{ $event->city }}</li>
        <li>{{ $event->title }}</li>
    </ul>
@endforeach

@endsection