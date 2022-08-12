@extends('layouts.suggest')
@section('content')
<section id="about" class="about">
    <link href="{{ asset('css/modal.css') }}" rel="stylesheet">
    <div class="container">
        <script src="{{ asset('js/validation_error.js') }}"></script>

            <div class="description">
                <div class="opisanie">
                    <a>&nbsp Я Павлуша, мамин разработчик. Живу в Воронеже, пиво не пью, шампунь сыплю, порошок наливаю. Поля ниже только для меня, чтоб я мог смотреть с кайфом что вы понакидали. Если подберете мои аутентификационные данные, то можете собой гордиться ибо мне похую, я новый такой сайт сделаю если что)</a>
                </div>
                <div class="login">
                    <input id="name" type="text" name="name" class="name" placeholder="Имя пользователя">
                    <input id="password" type="password" name="password" class="name" placeholder="Пароль">
                </div>
                <div class="knopka">
                    <button id="button" class="button" style="background-color:transparent">Отправить</button>
                </div>
            </div>
    </div>
</section>
    <style>
        .opisanie {
            font-size: 30px;
            text-align: center;
            padding-top: 30px;
            line-height: 50px;
            padding-bottom: 30px;
        }
        .knopka {
            display: flex;
            justify-content: center;
        }
    </style>
<script src="{{ asset('js/validation/index.js') }}"></script>
@endsection
