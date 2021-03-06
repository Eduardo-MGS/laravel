@extends('layout')

@section('title', 'Contacto')

@section('content')
    <h3>Contacto</h3>
    <h3>{{ __('Contact') }}</h3>

    <form method="POST" action="{{ route('messages.store') }}">
        @csrf
        <input type="text" name="name" placeholder="Nombre" value="{{old('name')}}"><br>
        {!! $errors->first('name', '<small>:message</small>') !!}<br>

        <input type="text" name="email" placeholder="Email" value="{{old('email')}}"><br>
        {!! $errors->first('email', '<small>:message</small>') !!}<br>

        <input type="text" name="subject" placeholder="Asunto" value="{{old('subject')}}"><br>
        {!! $errors->first('subject', '<small>:message</small>') !!}<br>

        <textarea name="content" placeholder="Escriba su mensaje">{{old('content')}}</textarea><br>
        {!! $errors->first('content', '<small>:message</small>') !!}<br>

        <button>Enviar</button>
    </form>
@endsection