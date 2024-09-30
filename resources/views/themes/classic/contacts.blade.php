@extends('themes.layout')

@section('title', 'Контакты (Classic)')

@section('content')
<h1>Контакты (Classic)</h1>
<p>Контакты темы Classic.</p>
<nav>
    <a href="{{ route('home') }}">Главная</a>
    <a href="{{ route('contacts') }}">Контакты</a>
</nav>

<x-custom-text text="Это уникальный текст для страницы контактов в теме Classic." />
@endsection
