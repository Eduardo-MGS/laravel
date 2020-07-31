@extends('layout')

@section('title', 'Portafolio')

@section('content')
    <h3>Portafolio</h3>

    <ul>
        @forelse ($portfolio as $portafolioItem)
            <li> {{$portafolioItem->title}} <br> <small> {{$portafolioItem->description}} </small> <br> {{ $portafolioItem->created_at->diffForHumans() }}</li>
        @empty
            <li> Fin de los proyectos </li>
        @endforelse
        {{ $portfolio->links() }}
    </ul>
@endsection