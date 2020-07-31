@extends('layout')

@section('title', 'Inicio')

@section('content')
    <h1>Bienvenido {{$nombre ?? 'Invitado'}}</h1>
@endsection