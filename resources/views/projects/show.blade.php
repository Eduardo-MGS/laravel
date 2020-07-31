@extends('layout')

@section('title', 'Proyectos |' . $project['title'])

@section('content')
    <h3>Proyecto</h3>

    <ul>
        <h1>{{ $project['id'] }} - {{ $project['title'] }}</h1>

        <p><strong>Descripcion: </strong> {{ $project['description'] }} </p>
        <p><strong>Creado: </strong> {{ $project['created_at']->diffForHumans() }} </p>

    </ul>
@endsection