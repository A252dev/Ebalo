@extends('layouts.layout')

@section('title') Ebalo - переписка с {{ $id->login }} @endsection

@section('style') <link rel="stylesheet" href="{{ asset('/css/index.css') }}"> @endsection

@section('main_content')
    <div class="container">
        <a href="{{ url('/messages') }}">Обратно в ебаные сообщения</a><br><br>
        <h5>Твой логин: {{ $user->login }}</h5>
        <h5>Твой пароль (да мне похуй, я его знаю): {{ $user->password }}</h5><br>

        <h4>Сообщения: (чтобы написать хую надо ставить в url /messages/{id хуя}</h4><br>
        <div id="message"></div><br>
{{--        @foreach($messages as $line)--}}
{{--            <p>Пишет: {{ $line['from_user'] }} с текстом {{ $line['message'] }}</p>--}}
{{--        @endforeach--}}
        <br><br>
        <h3>Форма</h3><br>
        <form action="1" enctype="multipart/form-data" method="POST" id="addPost">
            @csrf
            <input name="from_user" value="{{ $user->id }}"><br>
            <input name="to_user" value="{{ $id->login }}"><br><br>

            <input name="message" placeholder="хуярь уже..." autocomplete="off"><br><br>
            <button type="submit">Хать фу</button>
        </form>

        <script src="https://code.jquery.com/jquery-3.7.1.js" integrity="sha256-eKhayi8LEQwp4NKxN+CfCh+3qOVUtJn3QNZ0TciWLP4=" crossorigin="anonymous"></script>

        <script type="text/javascript">
            $(document).ready(function (){

                $.ajax({
                    url: '1/get',
                    data: $('#addPost').serialize(),
                    type: 'get',

                    success:function (result){
                        console.log('get is done');
                        var line = [];
                        for (var i = 0; i < result.messages.length; i++){
                            line.push("<p>Пишет: " + result.messages[i]['from_user'] + " с текстом " + result.messages[i]['message'] + "</p>");
                            // $("#message").append("<p>Пишет: " + result.messages[i]['from_user'] + " с текстом " + result.messages[i]['message'] + "</p>")
                            // console.log(result.messages[i]['message']);
                            // $("#message").html.append(result.messages[i]['message']);
                        }
                        console.log(line);
                        // $('#message').css('display', 'block');
                        $('#message').html(line);

                        $("#addPost")[0].reset();
                    }
                });

                $("#addPost").on('submit', function (event){

                    event.preventDefault();



                    $.ajax({
                        url: '1',
                        data: $('#addPost').serialize(),
                        type: 'post',

                        success:function (result){
                            console.log(result.messages.length);
                            var line = [];
                            for (var i = 0; i < result.messages.length; i++){
                                line.push("<p>Пишет: " + result.messages[i]['from_user'] + " с текстом " + result.messages[i]['message'] + "</p>");
                                // $("#message").append("<p>Пишет: " + result.messages[i]['from_user'] + " с текстом " + result.messages[i]['message'] + "</p>")
                                // console.log(result.messages[i]['message']);
                                // $("#message").html.append(result.messages[i]['message']);
                            }
                            console.log(line);
                            // $('#message').css('display', 'block');
                            $('#message').html(line);

                            $("#addPost")[0].reset();
                        }
                    });
                });

            });
        </script>

    </div>

@endsection

