@extends('layouts.layout')

@section('style')
    <link rel="stylesheet" href="{{ asset('css/index.css') }}">
    <link rel="stylesheet" href="{{ asset('css/messages.css') }}">
@endsection

@section('title') Mordechko - messages page @endsection

@section('main_content')
    <main>
        <section class="main">
            <div class="users__container">
                <div class="scroll__content">
                    @foreach($messages as $line)
                        <a class="user__block" id="" href="{{ url('profile/messages') . "/" . $line['user_id'] }}">
                            <div class="image"></div>
                            <div class="user__info">
                                <h5 class="title">{{ $line['login'] }}</h5>
                                <h5 class="subtitle">text</h5>
                            </div>
                            @if ($line['status'] == 1)
                                <span id="online_status">online</span>
                                @else
                                <span id="offline_status">offline</span>
                            @endif
                        </a>
                    @endforeach
                </div>
                <!-- SEARCH -->
                <div class="search__container">
                    <input class="search__input" placeholder="Search..." autocomplete="off" spellcheck="false">
                    <a class="search__button" href="#">
                        <svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 14 14" fill="none">
                            <path
                                d="M6.33333 3C8.17427 3 9.66667 4.49239 9.66667 6.33333M10.1059 10.1033L13 13M11.6667 6.33333C11.6667 9.27887 9.27887 11.6667 6.33333 11.6667C3.38781 11.6667 1 9.27887 1 6.33333C1 3.38781 3.38781 1 6.33333 1C9.27887 1 11.6667 3.38781 11.6667 6.33333Z"
                                stroke="white" stroke-linecap="round" stroke-linejoin="round" />
                        </svg>
                    </a>
                </div>
            </div>
            <div class="content__container">
                <div class="title__container">
                    <h4 class="title">Chat list</h4>
{{--                    <h5 class="subtitle">был в сети 5 минут назад</h5>--}}
                </div>
                <div class="messages__container">
                    <div class="scroll__content">
                        <div class="message__block">
                            <div class="content__container">
{{--                                <h4 class="title">Chat list</h4>--}}
                                <h5 class="subtitle">Select a chat room to start chatting</h5>
                            </div>
{{--                            <div id="unread">--}}
{{--                                <svg xmlns="http://www.w3.org/2000/svg" width="20" height="12" viewBox="0 0 20 12"--}}
{{--                                     fill="none">--}}
{{--                                    <path d="M1 4.63636L8 11L19 1" stroke="white" stroke-linecap="round" />--}}
{{--                                </svg>--}}
{{--                            </div>--}}
                        </div>
                    </div>
                </div>
                <div class="new__message__container">
                    <form action="#" method="post">
                        <input class="input__message" placeholder="Message" autocomplete="off" spellcheck="false">
                        <div class="action__container">
                            <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 20 20"
                                 fill="none">
                                <g clip-path="url(#clip0_130_296)">
                                    <path
                                        d="M4.875 7.17188C4.875 7.875 5.45313 8.45312 6.15625 8.45312C6.85938 8.45312 7.4375 7.875 7.4375 7.17188C7.4375 6.46875 6.85938 5.89062 6.15625 5.89062C5.45313 5.89062 4.875 6.46875 4.875 7.17188ZM10 15.4375C14.1875 15.4375 15.0625 11.6406 15.0625 11.6406H4.9375C4.9375 11.6406 5.8125 15.4375 10 15.4375Z"
                                        fill="white" />
                                    <path
                                        d="M10 19.7344C4.64062 19.7344 0.28125 15.3594 0.28125 10C0.28125 4.64062 4.64062 0.28125 10 0.28125C15.3594 0.28125 19.7344 4.64062 19.7344 10.0156C19.7344 15.3906 15.3594 19.7344 10 19.7344ZM10 1.32812C5.21875 1.32812 1.32812 5.21875 1.32812 10C1.32812 14.7812 5.21875 18.6719 10 18.6719C14.7812 18.6719 18.6719 14.7812 18.6719 10C18.6719 5.21875 14.7812 1.32812 10 1.32812Z"
                                        fill="white" />
                                    <path
                                        d="M12.5625 7.17188C12.5625 7.875 13.1406 8.45312 13.8437 8.45312C14.5469 8.45312 15.125 7.875 15.125 7.17188C15.125 6.46875 14.5469 5.89062 13.8437 5.89062C13.1406 5.89062 12.5625 6.46875 12.5625 7.17188Z"
                                        fill="white" />
                                </g>
                                <defs>
                                    <clipPath id="clip0_130_296">
                                        <rect width="20" height="20" fill="white" />
                                    </clipPath>
                                </defs>
                            </svg>
                            <button type="submit">
                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="20" viewBox="0 0 16 20"
                                     fill="none">
                                    <path d="M0 20V0L16 9.54545L0 20Z" fill="#D9D9D9" />
                                </svg>
                            </button>
                        </div>
                    </form>
                </div>
            </div>
{{--            <div class="ad__container">--}}

{{--            </div>--}}
        </section>
    </main>
@endsection
