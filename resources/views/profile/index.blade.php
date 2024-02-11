@extends('layouts.layout')

@section('style')
    <link rel="stylesheet" href="{{ asset('css/index.css') }}">
    <link rel="stylesheet" href="{{ asset('css/profile.css') }}">
@endsection

@section('title') Mordechko - profile page @endsection

@section('main_content')
    <main>
        <section class="main">
            <div class="user__container">
                <div class="avatar__container">
                    <img style="height: 252px; width: 252px; border-radius: 5px;" src="{{ asset($user->avatar_url) }}">
{{--                    <svg xmlns="http://www.w3.org/2000/svg" width="252" height="252" viewBox="0 0 252 252" fill="none">--}}
{{--                        <circle cx="126" cy="126" r="126" fill="#2A2B2D" />--}}
{{--                    </svg>--}}
                    <a class="edit__button">Edit Profile</a>
                </div>
                <div class="manage__container">
                    <form method="post" enctype="multipart/form-data">
                        @csrf
                        <div class="title__container">
                            <div class="user__info">
                                @if (!empty($success))
                                    {{ $success }}
                                @endif
                                <h3 class="title">{{ $user->login }}</h3>
                                <a class="manage__button"><svg xmlns="http://www.w3.org/2000/svg" width="17" height="18"
                                                               viewBox="0 0 17 18" fill="none">
                                        <path
                                            d="M16.3436 4.55823C16.7007 4.20114 16.7007 3.60599 16.3436 3.26722L14.2011 1.12469C13.8623 0.767601 13.2672 0.767601 12.9101 1.12469L11.2254 2.80025L14.6589 6.23379M0.128174 13.9066V17.3401H3.56171L13.6884 7.20434L10.2548 3.7708L0.128174 13.9066Z"
                                            fill="white" />
                                    </svg></a>
                            </div>
{{--                            <div class="user__info">--}}
{{--                                <h3 class="title">Anonymous</h3>--}}
{{--                                <a class="manage__button"><svg xmlns="http://www.w3.org/2000/svg" width="73" height="28"--}}
{{--                                                               viewBox="0 0 73 28" fill="none">--}}
{{--                                        <rect x="0.0720215" y="0.430817" width="72.9101" height="26.8616" rx="13.4308"--}}
{{--                                              fill="#D9D9D9" />--}}
{{--                                        <circle cx="58.592" cy="13.8616" r="11.5121" fill="#303C54" />--}}
{{--                                    </svg></a>--}}
{{--                            </div>--}}
                        </div>
                        <div class="settings__container">
                            <div class="input__container">
                                <h5 class="title">Password</h5>
                                <input class="profile__input" name="password" type="password" placeholder="New password"
                                       autocomplete="off" spellcheck="false">
                            </div>
{{--                            <div class="input__container">--}}
{{--                                <h5 class="title">Number</h5>--}}
{{--                                <input class="profile__input" name="phone" type="tel" placeholder="New number" autocomplete="off"--}}
{{--                                       spellcheck="false">--}}
{{--                            </div>--}}
                            <div class="input__container">
                                <h5 class="title">Repeat Password</h5>
                                <input class="profile__input" name="repeat_password" type="password" placeholder="Repeat password"
                                       autocomplete="off" spellcheck="false">
                            </div>
{{--                            <div class="input__container">--}}
{{--                                <h5 class="title">Code</h5>--}}
{{--                                <input class="profile__input" name="code" type="text" placeholder="Code" autocomplete="off"--}}
{{--                                       spellcheck="false">--}}
{{--                            </div>--}}
{{--                            <div class="input__container">--}}
{{--                                <h5 class="title">Mail</h5>--}}
{{--                                <input class="profile__input" name="email" type="email" placeholder="New email" autocomplete="off"--}}
{{--                                       spellcheck="false">--}}
{{--                            </div>--}}
                            <div class="input__container">
                                <h5 class="title">Name</h5>
                                <input class="profile__input" name="name" type="text" placeholder="New name" autocomplete="off"
                                       spellcheck="false">
                            </div>
                        </div>
                        <button type="submit" class="save__button">Save</button>
                        <a class="save__button mobile" href="{{ url('/logout')  }}">Logout</a>
                    </form>
                </div>
            </div>
        </section>
    </main>
@endsection
