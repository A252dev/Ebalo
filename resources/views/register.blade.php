@extends('layouts.layout')

@section('style')
    <link rel="stylesheet" href="{{ asset('css/index.css') }}">
    <link rel="stylesheet" href="{{ asset('css/log_reg.css') }}">
@endsection

@section('title') Ebalo - register page @endsection

@section('main_content')
    <main>
        <section class="main">
            <form method="post">
                @csrf
                <h2 class="title">Registration</h2>
{{--                <h5 class="input__title">Mail</h5>--}}
{{--                <input class="input__value" name="email" type="email" autocomplete="off" spellcheck="false" placeholder="Email">--}}
                <h5 class="input__title">Name</h5>
                <input class="input__value" name="login" type="text" autocomplete="off" spellcheck="false" placeholder="Name">
                <h5 class="input__title">Password</h5>
                <input class="input__value" name="password" type="password" autocomplete="off" spellcheck="false"
                       placeholder="Password">
{{--                <h5 class="input__title">Number</h5>--}}
{{--                <input class="input__value" name="phone" type="tel" autocomplete="off" spellcheck="false" placeholder="Number">--}}
{{--                <h5 class="input__title">Code</h5>--}}
{{--                <input class="input__value" name="code" type="text" autocomplete="off" spellcheck="false"--}}
{{--                       placeholder="Security code">--}}
                <button class="log__button" type="submit">Register</button>
                <a class="log__button bg" href="{{ url("/login") }}">Login</a>
                @if (!empty($error))
                    <p class="log__button" style="background: red;">{{ $error }}</p>
                @endif
            </form>
        </section>
    </main>
@endsection
