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
                <nav class="mobile__messages">
                    <div class="scroll__content" id="message__mobile">
                        <div class="message__block">
                            <div class="content__container">
                                <h4 class="title">Chat</h4>
                                <h5 class="subtitle">Loading...</h5>
                            </div>
                            <div id="read">
                                <svg xmlns="http://www.w3.org/2000/svg" width="20" height="16" viewBox="0 0 20 16"
                                     fill="none">
                                    <path d="M1 8.63636L8 15L19 5" stroke="white" stroke-linecap="round" />
                                    <path d="M1 4.63636L8 11L19 1" stroke="white" stroke-linecap="round" />
                                </svg>
                            </div>
                        </div>
                    </div> <!-- scroll content -->
                    <div class="new__message__container">
                        <form action="{{ $user->user_id }}" method="post" enctype="multipart/form-data" id="add_post_mobile">
                            @csrf
                            <input name="from_user" value="{{ $user->user_id }}" type="hidden">
                            <input name="to_user" value="{{ $id->user_id }}" type="hidden">
                            <input class="input__message" name="message" placeholder="Message" autocomplete="off" spellcheck="false">
                            <div class="action__container">
                                <button type="submit">
                                    <img src="{{ asset("img/send-message.png") }}">
{{--                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="20" viewBox="0 0 16 20"--}}
{{--                                         fill="none">--}}
{{--                                        <path d="M0 20V0L16 9.54545L0 20Z" fill="#D9D9D9" />--}}
{{--                                    </svg>--}}
                                </button>
                            </div>
                        </form>
                    </div>
                </nav>
                <div class="scroll__content" id="pc">
                    <a class="user__block" id="selected">
                        <div class="image"></div>
                        <div class="user__info">
                            <h5 class="title">{{ $id['login'] }}</h5>
                            <h5 class="subtitle">write...</h5>
                        </div>
                        <span id="online_status">online</span>
                    </a>
                    <a class="user__block" href="{{ url('/profile/messages') }}">
{{--                        <div class="image"></div>--}}
                        <div class="user__info">
                            <h5 class="title">&#8592; Back to the chats</h5>
                        </div>
                    </a>
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
                    <h4 class="title">{{ $id->login }}</h4>
                    <h5 class="subtitle" style="font-family: 'Arial', 'sans-serif';">If there's no messages, you haven't written anything</h5>
                </div>
                <div class="messages__container">
                    <div class="scroll__content" id="message">
                        @foreach($messages as $line)
                            <div class="message__block">
                                <div class="content__container">
                                    <h4 class="title">{{ $line->to_user }}</h4>
                                    <h5 class="subtitle">{{ $line->message }}</h5>
                                </div>
                                <div id="read">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="20" height="16" viewBox="0 0 20 16"
                                         fill="none">
                                        <path d="M1 8.63636L8 15L19 5" stroke="white" stroke-linecap="round" />
                                        <path d="M1 4.63636L8 11L19 1" stroke="white" stroke-linecap="round" />
                                    </svg>
                                </div>
                            </div>
                        @endforeach
                        <!-- here messages is load -->
                    </div>
                </div>
                <div class="new__message__container">
                    <form action="{{ $user->user_id }}" method="post" enctype="multipart/form-data" id="add_post">
                        @csrf
                        <input name="from_user" value="{{ $user->user_id }}" type="hidden">
                        <input name="to_user" value="{{ $id->user_id }}" type="hidden">
                        <input class="input__message" name="message" placeholder="Message" autocomplete="off" spellcheck="false">
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
    <script src="https://code.jquery.com/jquery-3.7.1.js" integrity="sha256-eKhayi8LEQwp4NKxN+CfCh+3qOVUtJn3QNZ0TciWLP4=" crossorigin="anonymous"></script>

    <script type="text/javascript">
        $(document).ready(function (){


            {{--var user_login = JSON.parse("{{ json_encode($user->login) }}");--}}


            {{--var user_id = "{{ $id->user_id }}";--}}



            var user_login = "{{ $user->user_id }}";
            var user_nickname = "{{ $user->login }}";
            var target_user = JSON.parse("{{ json_encode($id->user_id) }}");
            var target_user_nickname = "{{ $id->login }}";

            {{--// var pc_messages = document.getElementById('message');--}}
            {{--// var mobile_messages = document.getElementsByClassName('mobile__messages');--}}

            var chat = document.getElementById('message');
            {{--var chat_mobile = document.getElementById('message__mobile');--}}

            {{--// console.log(user_login);--}}
            {{--// console.log(target_user);--}}


            {{--setInterval(function (){--}}
            {{--    $.ajax({--}}
            {{--        url: target_user + `/get`,--}}
            {{--        data: $('#add_post').serialize(),--}}
            {{--        type: 'get',--}}

            {{--        success:function(result){--}}
            {{--            // console.log('get is done');--}}
            {{--            var line = [];--}}
            {{--            for (var i = 0; i < result.messages.length; i++){--}}
            {{--                // line.push("<h4 class='title'>" + result.messages[i]['from_user'] + "</h4>" +--}}
            {{--                //             "   <h5 class='subtitle'>" + result.messages[i]['message'] + "</h5>"--}}
            {{--                //             );--}}
            {{--                if (result.messages[i]['from_user'] == user_login){--}}
            {{--                    line.push(--}}
            {{--                        "<div class='message__block'>" +--}}
            {{--                        "   <div class='content__container'>" +--}}
            {{--                        "       <h4 class='title'>" + user_nickname + "</h4>" +--}}
            {{--                        "       <h5 class='subtitle'>" + result.messages[i]['message'] + "</h5>" +--}}
            {{--                        "  </div>" +--}}
            {{--                        "   <div id='unread'>" +--}}
            {{--                        "       <svg xmlns='http://www.w3.org/2000/svg' width='20' height='12' viewBox='0 0 20 12' fill='none'>" +--}}
            {{--                        "           <path d='M1 4.63636L8 11L19 1' stroke='white' stroke-linecap='round' />" +--}}
            {{--                        "       </svg>" +--}}
            {{--                        "   </div>" +--}}
            {{--                        "</div>");--}}
            {{--                } else {--}}
            {{--                    line.push(--}}
            {{--                        "<div class='message__block'>" +--}}
            {{--                        "   <div class='content__container'>" +--}}
            {{--                        // "       <h4 class='title'>" + result.messages[i]['from_user'] + "</h4>" +--}}
            {{--                        "       <h4 class='title'>" + target_user_nickname + "</h4>" +--}}
            {{--                        "       <h5 class='subtitle'>" + result.messages[i]['message'] + "</h5>" +--}}
            {{--                        "  </div>" +--}}
            {{--                        "   <div id='unread'>" +--}}
            {{--                        "       <svg xmlns='http://www.w3.org/2000/svg' width='20' height='12' viewBox='0 0 20 12' fill='none'>" +--}}
            {{--                        "           <path d='M1 4.63636L8 11L19 1' stroke='white' stroke-linecap='round' />" +--}}
            {{--                        "       </svg>" +--}}
            {{--                        "   </div>" +--}}
            {{--                        "</div>");--}}
            {{--                }--}}
            {{--                // $("#message").append("<p>Пишет: " + result.messages[i]['from_user'] + " с текстом " + result.messages[i]['message'] + "</p>")--}}
            {{--                // console.log(result.messages[i]['message']);--}}
            {{--                // $("#message").html.append(result.messages[i]['message']);--}}
            {{--            }--}}
            {{--            // console.log(line);--}}

            {{--            $('#message').html(line);--}}

            {{--            // $('#message__mobile').html(line);--}}

            {{--            // $(chat).scrollTop($(chat)[0].scrollHeight);--}}

            {{--            // $(chat_mobile).scrollTop($(chat_mobile)[0].scrollHeight);--}}
            {{--        }--}}


            {{--    });--}}



            {{--    $.ajax({--}}
            {{--        url: target_user + `/get`,--}}
            {{--        data: $('#add_post_mobile').serialize(),--}}
            {{--        type: 'get',--}}

            {{--        success:function(result){--}}
            {{--            // console.log('get is done');--}}
            {{--            var line = [];--}}
            {{--            for (var i = 0; i < result.messages.length; i++){--}}
            {{--                // line.push("<h4 class='title'>" + result.messages[i]['from_user'] + "</h4>" +--}}
            {{--                //             "   <h5 class='subtitle'>" + result.messages[i]['message'] + "</h5>"--}}
            {{--                //             );--}}
            {{--                if (result.messages[i]['from_user'] == user_login){--}}
            {{--                    line.push(--}}
            {{--                        "<div class='message__block'>" +--}}
            {{--                        "   <div class='content__container'>" +--}}
            {{--                        "       <h4 class='title'>" + user_nickname + "</h4>" +--}}
            {{--                        "       <h5 class='subtitle'>" + result.messages[i]['message'] + "</h5>" +--}}
            {{--                        "  </div>" +--}}
            {{--                        "   <div id='unread'>" +--}}
            {{--                        "       <svg xmlns='http://www.w3.org/2000/svg' width='20' height='12' viewBox='0 0 20 12' fill='none'>" +--}}
            {{--                        "           <path d='M1 4.63636L8 11L19 1' stroke='white' stroke-linecap='round' />" +--}}
            {{--                        "       </svg>" +--}}
            {{--                        "   </div>" +--}}
            {{--                        "</div>");--}}
            {{--                } else {--}}
            {{--                    line.push(--}}
            {{--                        "<div class='message__block'>" +--}}
            {{--                        "   <div class='content__container'>" +--}}
            {{--                        // "       <h4 class='title'>" + result.messages[i]['from_user'] + "</h4>" +--}}
            {{--                        "       <h4 class='title'>" + target_user_nickname + "</h4>" +--}}
            {{--                        "       <h5 class='subtitle'>" + result.messages[i]['message'] + "</h5>" +--}}
            {{--                        "  </div>" +--}}
            {{--                        "   <div id='unread'>" +--}}
            {{--                        "       <svg xmlns='http://www.w3.org/2000/svg' width='20' height='12' viewBox='0 0 20 12' fill='none'>" +--}}
            {{--                        "           <path d='M1 4.63636L8 11L19 1' stroke='white' stroke-linecap='round' />" +--}}
            {{--                        "       </svg>" +--}}
            {{--                        "   </div>" +--}}
            {{--                        "</div>");--}}
            {{--                }--}}
            {{--                // $("#message").append("<p>Пишет: " + result.messages[i]['from_user'] + " с текстом " + result.messages[i]['message'] + "</p>")--}}
            {{--                // console.log(result.messages[i]['message']);--}}
            {{--                // $("#message").html.append(result.messages[i]['message']);--}}
            {{--            }--}}
            {{--            // console.log(line);--}}

            {{--            // $('#message').html(line);--}}
            {{--            $('#message__mobile').html(line);--}}

            {{--            // $(chat).scrollTop($(chat)[0].scrollHeight);--}}
            {{--            $(chat_mobile).scrollTop($(chat_mobile)[0].scrollHeight);--}}
            {{--        }--}}


            {{--    });--}}


            {{--}, 1000);--}}

            $(chat).scrollTop($(chat)[0].scrollHeight);
            // $("#add_post")[0].reset();


            $("#add_post").on('submit', function (event){

                event.preventDefault();

                var user_id = JSON.parse("{{ json_encode($user->user_id) }}");
                // console.log(user_id);

                $.ajax({
                    url: user_id,
                    data: $('#add_post').serialize(),
                    type: 'post',

                    success:function(result){
                        // console.log('get is done');
                        var line = [];
                        for (var i = 0; i < result.messages.length; i++){
                            // line.push("<h4 class='title'>" + result.messages[i]['from_user'] + "</h4>" +
                            //             "   <h5 class='subtitle'>" + result.messages[i]['message'] + "</h5>"
                            //             );
                            if (result.messages[i]['from_user'] == user_login){
                                line.push(
                                    "<div class='message__block'>" +
                                    "   <div class='content__container'>" +
                                    "       <h4 class='title'>" + user_nickname + "</h4>" +
                                    "       <h5 class='subtitle'>" + result.messages[i]['message'] + "</h5>" +
                                    "  </div>" +
                                    "   <div id='unread'>" +
                                    "       <svg xmlns='http://www.w3.org/2000/svg' width='20' height='12' viewBox='0 0 20 12' fill='none'>" +
                                    "           <path d='M1 4.63636L8 11L19 1' stroke='white' stroke-linecap='round' />" +
                                    "       </svg>" +
                                    "   </div>" +
                                    "</div>");
                            } else {
                                line.push(
                                    "<div class='message__block'>" +
                                    "   <div class='content__container'>" +
                                    // "       <h4 class='title'>" + result.messages[i]['from_user'] + "</h4>" +
                                    "       <h4 class='title'>" + target_user_nickname + "</h4>" +
                                    "       <h5 class='subtitle'>" + result.messages[i]['message'] + "</h5>" +
                                    "  </div>" +
                                    "   <div id='unread'>" +
                                    "       <svg xmlns='http://www.w3.org/2000/svg' width='20' height='12' viewBox='0 0 20 12' fill='none'>" +
                                    "           <path d='M1 4.63636L8 11L19 1' stroke='white' stroke-linecap='round' />" +
                                    "       </svg>" +
                                    "   </div>" +
                                    "</div>");
                            }
                            // $("#message").append("<p>Пишет: " + result.messages[i]['from_user'] + " с текстом " + result.messages[i]['message'] + "</p>")
                            // console.log(result.messages[i]['message']);
                            // $("#message").html.append(result.messages[i]['message']);
                        }
                        // console.log(line);

                        $('#message').html(line);

                        // $('#message__mobile').html(line);

                        $("#add_post")[0].reset();

                        $(chat).scrollTop($(chat)[0].scrollHeight);
                        // $(chat_mobile).scrollTop($(chat_mobile)[0].scrollHeight);
                    }
                });
            });



            $("#add_post_mobile").on('submit', function (event){

                event.preventDefault();

                var user_id = JSON.parse("{{ json_encode($user->user_id) }}");
                // console.log(user_id);

                $.ajax({
                    url: user_id,
                    data: $('#add_post_mobile').serialize(),
                    type: 'post',

                    success:function(result){
                        // console.log('get is done');
                        var line = [];
                        for (var i = 0; i < result.messages.length; i++){
                            // line.push("<h4 class='title'>" + result.messages[i]['from_user'] + "</h4>" +
                            //             "   <h5 class='subtitle'>" + result.messages[i]['message'] + "</h5>"
                            //             );
                            if (result.messages[i]['from_user'] == user_login){
                                line.push(
                                    "<div class='message__block'>" +
                                    "   <div class='content__container'>" +
                                    "       <h4 class='title'>" + user_nickname + "</h4>" +
                                    "       <h5 class='subtitle'>" + result.messages[i]['message'] + "</h5>" +
                                    "  </div>" +
                                    "   <div id='unread'>" +
                                    "       <svg xmlns='http://www.w3.org/2000/svg' width='20' height='12' viewBox='0 0 20 12' fill='none'>" +
                                    "           <path d='M1 4.63636L8 11L19 1' stroke='white' stroke-linecap='round' />" +
                                    "       </svg>" +
                                    "   </div>" +
                                    "</div>");
                            } else {
                                line.push(
                                    "<div class='message__block'>" +
                                    "   <div class='content__container'>" +
                                    // "       <h4 class='title'>" + result.messages[i]['from_user'] + "</h4>" +
                                    "       <h4 class='title'>" + target_user_nickname + "</h4>" +
                                    "       <h5 class='subtitle'>" + result.messages[i]['message'] + "</h5>" +
                                    "  </div>" +
                                    "   <div id='unread'>" +
                                    "       <svg xmlns='http://www.w3.org/2000/svg' width='20' height='12' viewBox='0 0 20 12' fill='none'>" +
                                    "           <path d='M1 4.63636L8 11L19 1' stroke='white' stroke-linecap='round' />" +
                                    "       </svg>" +
                                    "   </div>" +
                                    "</div>");
                            }
                            // $("#message").append("<p>Пишет: " + result.messages[i]['from_user'] + " с текстом " + result.messages[i]['message'] + "</p>")
                            // console.log(result.messages[i]['message']);
                            // $("#message").html.append(result.messages[i]['message']);
                        }
                        // console.log(line);

                        // $('#message').html(line);
                        $('#message__mobile').html(line);

                        $("#add_post_mobile")[0].reset();

                        // $(chat).scrollTop($(chat)[0].scrollHeight);
                        $(chat_mobile).scrollTop($(chat_mobile)[0].scrollHeight);
                    }
                });
            });



        });
    </script>
@endsection
