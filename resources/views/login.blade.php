@extends('layouts.layout')

@section('style')
    <link rel="stylesheet" href="{{ asset('css/index.css') }}">
    <link rel="stylesheet" href="{{ asset('css/log_reg.css') }}">
@endsection

@section('title') Mordechko - login page @endsection

@section('main_content')
    <main>
        <section class="main">
            <form method="post">
                @csrf
                <h2 class="title">Login</h2>
                <h5 class="input__title">Name</h5>
                <input class="input__value" name="login" type="text" autocomplete="off" spellcheck="false"
                       placeholder="Name">
                <h5 class="input__title">Password</h5>
                <input class="input__value" name="password" type="password" autocomplete="off" spellcheck="false"
                       placeholder="Password">
                <button class="log__button" type="submit">Login</button><br>
                <a class="log__button bg" href="{{ url('/register') }}">Register</a>
                @if (!empty($error))
                    <p class="log__button" style="background: red;">{{ $error }}</p>
                @endif
            </form>
        </section>
    </main>
@endsection
