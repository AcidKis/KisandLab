<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Регистрация</title>
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
</head>
<body>
    @include('layouts.header')

    <div class="container">
        <div class="auth-container card">
            <div class="auth-header">
                <h1>Создать аккаунт</h1>
                <p>Присоединяйтесь к нашему сообществу разработчиков</p>
            </div>
            
            <form>
                <div class="form-group">
                    <label for="name">Имя</label>
                    <input type="text" id="name" class="form-control" placeholder="Введите ваше имя">
                </div>
                
                <div class="form-group">
                    <label for="email">Email</label>
                    <input type="email" id="email" class="form-control" placeholder="Введите ваш email">
                </div>
                
                <div class="form-group">
                    <label for="password">Пароль</label>
                    <input type="password" id="password" class="form-control" placeholder="Создайте пароль">
                </div>
                
                <div class="form-group">
                    <label for="password_confirmation">Подтвердите пароль</label>
                    <input type="password" id="password_confirmation" class="form-control" placeholder="Повторите пароль">
                </div>
                
                <button type="submit" class="btn">Зарегистрироваться</button>
            </form>
            
            <div class="form-footer">
                <p>Уже есть аккаунт? <a href="{{ route('login') }}">Войти</a></p>
            </div>
        </div>
    </div>

    @include('layouts.footer')
    <script src="{{ asset('js/scripts.js') }}"></script>
</body>
</html>