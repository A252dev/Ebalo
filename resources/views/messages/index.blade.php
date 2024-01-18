@extends('layouts.layout')

@section('title') Ebalo - твои переписки @endsection

@section('style') <link rel="stylesheet" href="{{ asset('/css/index.css') }}"> @endsection

@section('main_content')
    <div class="container">
        <a href="{{ url('/logout') }}">Выйти в окно нахуй</a><br><br>
        <h5>Твой логин: {{ $user->login }}</h5>
        <h5>Твой пароль (да мне похуй, я его знаю): {{ $user->password }}</h5><br>
        <h4>Сообщения: (чтобы написать хую надо ставить в url /messages/{id хуя}</h4><br>
        @foreach($messages as $line)
            <a href="{{ url('/messages') . '/' . $line['login'] }}">Написать пидару с id: {{ $line['login'] }}</a><br><br>
        @endforeach
    </div>

@endsection
