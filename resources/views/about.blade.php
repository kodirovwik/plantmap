@extends('layouts.suggest')
@section('content')
<section id="about" class="about">
    <link href="{{ asset('css/modal.css') }}" rel="stylesheet">
    <div class="container">
            <div class="description">
                <div class="opisanie">
                    <a>&nbsp Я Павлуша, мамин разработчик. Живу в Воронеже, пиво не пью, шампунь сыплю, порошок наливаю. Поля ниже только для меня, чтоб я мог смотреть с кайфом что вы понакидали. Если подберете мои аутентификационные данные, то можете собой гордиться ибо мне похую, я новый такой сайт сделаю если что)</a>
                </div>
                @if (\Illuminate\Support\Facades\Auth::check())@else
                <div class="login">
                    @if ($errors->any())
                        <div class="alert alert-danger">
                            <ul>
                                @foreach ($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        </div>
                    @endif
                    <input id="name" type="text" name="name" class="name" placeholder="Имя пользователя">
                    <input id="password" type="password" name="password" class="name" placeholder="Пароль">
                </div>
                <div class="knopka">
                    <button id="button" class="button" style="background-color:transparent">Отправить</button>
                </div>
                @endif
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
<script src="{{asset('js/validation/modal.js')}}"></script>
<script src="{{asset('js/validation/bundle.js')}}"></script>
@endsection
