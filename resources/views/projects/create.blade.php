@extends('layout')

@section('title', 'Crear proyecto')

@section('content')
    <h3>Registrar proyecto</h3>
    <form method="POST" action="{{ route('projects.store') }}">
        @csrf
        <label>
            Título: 
            <input type="text" name="title">
        </label>
        <br><br>
        <label>
            URL:  
            <input type="text" name="url">
        </label>
        <br><br>
        <label>
            Descripción:  
            <textarea name="description"></textarea>
        </label>
        <br><br>
        <button>Guardar</button>
    </form>
@endsection