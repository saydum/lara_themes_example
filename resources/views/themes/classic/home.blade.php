@extends('themes.layout')

@section('title', 'Главная страница (Classic)')

@section('content')
<h1>Главная страница (Classic)</h1>
<form method="POST" action="{{ route('theme.select') }}">
    @csrf
    <label>
        <select name="theme">
            <option value="classic">Classic</option>
            <option value="cuba">Cuba</option>
        </select>
    </label>
    <button type="submit">Выбрать тему</button>
</form>
<nav>
    <a href="{{ route('home') }}">Главная</a>
    <a href="{{ route('contacts') }}">Контакты</a>
</nav>
@endsection
