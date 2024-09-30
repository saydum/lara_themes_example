@extends('themes.layout')

@section('title', 'Контакты (Cuba)')

@section('content')
<h1>Контакты (Cuba)</h1>
<p>Контакты темы Cuba.</p>
<nav>
    <a href="{{ route('home') }}">Главная</a>
    <a href="{{ route('contacts') }}">Контакты</a>
</nav>

<x-custom-text text="Это уникальный текст для страницы контактов в теме Cuba." />
@endsection
