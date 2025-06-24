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
            @auth
            <a href="{{ route('profile') }}" class="nav-link {{ request()->is('profile') ? 'active' : '' }}">Профиль</a>
            <form action="{{ route('logout') }}" method="POST" style="display:inline;" class="nav-link">
                @csrf
                <button type="submit" class="nav-link">Выйти</button>
            </form>
            @else
            <a href="{{ route('login') }}" class="nav-link">Войти</a>
            <a href="{{ route('register') }}" class="nav-link register">Зарегистрироваться</a>
            @endauth
        </div>
    </div>
</nav>