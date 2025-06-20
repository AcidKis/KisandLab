<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Вход в систему</title>
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
</head>
<body>
    @include('layouts.header')

    <div class="container">
        <div class="auth-container card">
            <div class="auth-header">
                <h1>Вход в систему</h1>
                <p>Войдите в свой аккаунт, чтобы продолжить</p>
            </div>
            
            <form>
                <div class="form-group">
                    <label for="email">Email</label>
                    <input type="email" id="email" class="form-control" placeholder="Введите ваш email">
                </div>
                
                <div class="form-group">
                    <label for="password">Пароль</label>
                    <input type="password" id="password" class="form-control" placeholder="Введите пароль">
                </div>
                
                <div class="form-group">
                    <div class="remember">
                        <input type="checkbox" id="remember">
                        <label for="remember">Запомнить меня</label>
                    </div>
                    <a href="#" class="forgot-password">Забыли пароль?</a>
                </div>
                
                <button type="submit" class="btn">Войти</button>
            </form>
            
            <div class="form-footer">
                <p>Еще нет аккаунта? <a href="{{ route('register') }}">Зарегистрироваться</a></p>
            </div>
        </div>
    </div>

    @include('layouts.footer')
    <script src="{{ asset('js/scripts.js') }}"></script>
</body>
</html>