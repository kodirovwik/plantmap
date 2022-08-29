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
            <ul class="menu">
                <li>
                    <a href="{{ route('main.index') }}">Главная</a>
                </li>
                <li>
                    <a href="{{ route('map.index') }}">Карта</a>
                <li>
                    <a href="{{ route('login') }}">Хто я?</a>
                </li>
            </ul>
        </div>
    </div>
</header>
    @yield('content')
</body>
</html>
