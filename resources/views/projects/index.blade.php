@extends('layout')

@section('title', 'Portafolio')

@section('content')
    <h3>Portafolio</h3>
    <a href="{{ route('projects.create') }}">Crear proyecto</a>

    <ul>
        @forelse ($portfolio as $portafolioItem)
        <li> <a href="{{ route('projects.show', $portafolioItem) }}">{{$portafolioItem->title}}</a></li>
        @empty
            <li> Fin de los proyectos </li>
        @endforelse
        {{ $portfolio->links() }}
    </ul>
@endsection