<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <link rel="stylesheet" href="styles/registrationStyle.css">
    <title>Главная</title>
</head>
<body>
    <header>
    <div class="header">
        <h1>GameJuice</h1>
        <div class="headerBtns">
        <a href="{{ url('/log') }}">Авторизация</a>
        <a href="{{ url('/reg') }}">Регистрация</a>
        </div>
    </div>
    <div class="menu">
            <a href="">TOP 2022</a>
            <a href="">Новости</a>
            <a href="">По жанрам</a>
            <a href="">Новинки</a>
        </div>
    </header>
    <main>
    <div class="main-container">
        <div class="form">
        <form method="POST" action='{{route("reg")}}'>
        <h1>Регистрация</h1>
@csrf
        <p><input type="text" name="name" placeholder="Введите логин" id="name"></p>
        <p><input type="password" name="password" placeholder="Введите пароль" id="password"></p>
        <p><input type="email" name="email" placeholder="Введите E-mail" id="mail"></p>
        <p><input id="bt"type="submit" name="submit" value="Зарегистрироваться"></p>
    </form>
        </div>
    </div>
    </main>

    <footer>

    </footer>
</body>
</html>