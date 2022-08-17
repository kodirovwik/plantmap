<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Plantmap</title>
    <link href="https://fonts.googleapis.com/css2?family=Jost:wght@400;500;900&display=swap" rel="stylesheet">
    <link href="{{ asset('css/main.css') }}" rel="stylesheet" type="text/css">
</head>
<body>
<header id="header" class="header">
    <div class="container">
        <div class="nav">
            <a href="https://www.youtube.com/watch?v=HEXWRTEbj1I&ab_channel=CoconutMusicGermany">
                <img class="logo" src="{{ asset('images/logo.png') }}" alt="Love">
            </a>
            <ul class="menu" style="width: 600px">
                <li>
                    <a href="{{ route('main.index') }}">Главная</a>
                </li>
                <li>
                    <a href="{{ route('map.index') }}">Карта</a>
                </li>
                <li>
                    <a href="{{ route('about.index') }}">Хто я?</a>
                </li>
                <li>
                    <a href="{{ route('fake_suggest.index') }}">Тут какули)</a>
                </li>
                <li>
                    <a href="{{ route('auth.logout') }}">Выход</a>
                </li>
            </ul>
        </div>
    </div>
</header>
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
<section id="about" class="about">
    <form>
        <div class="container">
            <div class="description">
                <table class="table table-dark table-striped" >
                    <thead>
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">Название</th>
                        <th scope="col">Описание</th>
                        <th scope="col">Координаты</th>
                        <th scope="col">Фото</th>
                        <th scope="col">Опубликовано</th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($suggestions as $suggest)
                    <tr>
                        <th scope="row">{{ $suggest->id }}</th>
                        <td>{{ $suggest->name }}</td>
                        <td>{{ $suggest->description }}</td>
                        <td>{{ $suggest->lat }}, {{ $suggest->lng }}</td>
                        <td><a href="/storage/{{ ($suggest->file_url) }}">
                            <img src="/storage/{{ ($suggest->file_url) }}" style="width: 100px;" title="{{ $suggest->file_name }}">
                            </a>
                        </td>
                        <td>@if ($suggest->is_published != 0) Да @else Нет @endif</td>
                    </tr>
                    @endforeach
                    </tbody>
                </table>
                </link>
            </div>
        </div>
    </form>
</section>
    <style>
        .container {
            padding-bottom: 50px;
        }
    </style>
</body>
</html>
