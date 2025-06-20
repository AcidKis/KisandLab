<nav class="navbar">
    <div class="navbar-content">
        <div class="navbar-left">
            <div class="logo">
                <a href="{{ route('home') }}"><i class="fab fa-php"></i> KisandLab</a>
            </div>
            <div class="nav-links">
                <a href="{{ route('home') }}" class="nav-link {{ request()->is('/') ? 'active' : '' }}">Главная</a>
                <a href="{{ route('forum') }}" class="nav-link {{ request()->is('forum') ? 'active' : '' }}">Форум</a>
            </div>
        </div>
        <div class="auth-links">
            <a href="{{ route('profile') }}" class="nav-link {{ request()->is('profile') ? 'active' : '' }}">Профиль</a>
            <a href="#" class="auth-link">Выйти</a>

            <a href="{{ route('login') }}" class="auth-link">Войти</a>
            <a href="{{ route('register') }}" class="auth-link register">Зарегистрироваться</a>

        </div>
    </div>
</nav>