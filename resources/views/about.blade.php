@extends('layouts.suggest')
@section('content')
<section id="about" class="about">
    <div class="container">
        <div class="description">
            <div class="opisanie">
                <a>&nbsp Я Павлуша, мамин разработчик. Живу в Воронеже, пиво не пью, шампунь сыплю, порошок наливаю. Поля ниже только для меня, чтоб я мог смотреть с кайфом что вы понакидали. Если подберете мои аутентификационные данные, то можете собой гордиться ибо мне похую, я новый такой сайт сделаю если что)</a>
            </div>
            <div class="login">
            <input type="text" name="name" class="name" placeholder="Имя пользователя">
            <input type="text" name="password" class="name" placeholder="Пароль">
            </div>
            <div class="knopka">
                <a href="{{ route('suggestions.index') }}" class="button">Залогиниться</a>
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
@endsection
