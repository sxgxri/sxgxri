<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <link rel="stylesheet" href="styles/startStyle.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Russo+One&display=swap" rel="stylesheet">
    <title>Главная</title>
</head>
<body>
    <header>
    <div class="header">
        <div class=log>
        <a class="logo" href="{{ url('/') }}">GameJuice</a>
        <img src="images/juicelogo.png" style="max-width: 7%">
        </div>
        <div class="headerBtns">
        <a href="{{ url('/log') }}">Авторизация</a>
        <a href="{{ url('/reg') }}">Регистрация</a>
        </div>
    </div>
    <div class="menu">
            <a href="{{url('/top')}}">TOP 2022</a>
            <a href="{{url('/news')}}">Новости</a>
            <a href="{{url('/genres')}}">По жанрам</a>
            <a href="{{url('/newprod')}}">Новинки</a>
        </div>
    </header>
    <main>
    <div class="main-container">
        
    </div>
    </main>

    <footer>
    <div class="footer-container">
        <a id="footerText1">ВСЕ ПРАВА ЗАЩИЩЕНЫ</a>
        <a id="footerText2">КАЛУГА 2022</a>
        </div>
    </footer>
</body>
</html>