<!DOCTYPE html>
<html lang="ru">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Разработчик - Форум</title>
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
</head>

<body>
    @include('layouts.header')
    <div class="container">
        <h1 class="forum-title">Форум изученных тем</h1>
        
        <div class="forum-container">
            <!-- Карточка темы 1 -->
            <div class="card topic-card">
                <div class="topic-header">
                    <h2>Продвинутое ООП в PHP</h2>
                    <div class="comments-count">
                        <i class="fas fa-comment"></i>
                        <span>24</span>
                    </div>
                </div>
                <div class="topic-meta">
                    <div class="rating">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="far fa-star"></i>
                        <span>4.0</span>
                    </div>
                    <div class="views">
                        <i class="fas fa-eye"></i>
                        <span>156</span>
                    </div>
                </div>
                <p class="topic-excerpt">Изучение продвинутых концепций объектно-ориентированного программирования в PHP: трейты, магические методы, пространства имен.</p>
                <button class="btn-details">Подробнее</button>
            </div>
            
            <!-- Карточка темы 2 -->
            <div class="card topic-card">
                <div class="topic-header">
                    <h2>Laravel: Архитектура приложений</h2>
                    <div class="comments-count">
                        <i class="fas fa-comment"></i>
                        <span>42</span>
                    </div>
                </div>
                <div class="topic-meta">
                    <div class="rating">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star-half-alt"></i>
                        <span>4.5</span>
                    </div>
                    <div class="views">
                        <i class="fas fa-eye"></i>
                        <span>287</span>
                    </div>
                </div>
                <p class="topic-excerpt">Построение масштабируемых приложений с использованием паттерна MVC, сервис-контейнера и Dependency Injection в Laravel.</p>
                <button class="btn-details">Подробнее</button>
            </div>
            
            <!-- Карточка темы 3 -->
            <div class="card topic-card">
                <div class="topic-header">
                    <h2>Тестирование PHP кода</h2>
                    <div class="comments-count">
                        <i class="fas fa-comment"></i>
                        <span>18</span>
                    </div>
                </div>
                <div class="topic-meta">
                    <div class="rating">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <span>5.0</span>
                    </div>
                    <div class="views">
                        <i class="fas fa-eye"></i>
                        <span>132</span>
                    </div>
                </div>
                <p class="topic-excerpt">PHPUnit, TDD, Mocking: практики написания тестов для надежных и поддерживаемых приложений.</p>
                <button class="btn-details">Подробнее</button>
            </div>
            
            <!-- Карточка темы 4 -->
            <div class="card topic-card">
                <div class="topic-header">
                    <h2>Оптимизация MySQL</h2>
                    <div class="comments-count">
                        <i class="fas fa-comment"></i>
                        <span>31</span>
                    </div>
                </div>
                <div class="topic-meta">
                    <div class="rating">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="far fa-star"></i>
                        <i class="far fa-star"></i>
                        <span>3.0</span>
                    </div>
                    <div class="views">
                        <i class="fas fa-eye"></i>
                        <span>204</span>
                    </div>
                </div>
                <p class="topic-excerpt">Индексы, партицирование, оптимизация запросов и стратегии кэширования для высоконагруженных баз данных.</p>
                <button class="btn-details">Подробнее</button>
            </div>
            
            <!-- Карточка темы 5 -->
            <div class="card topic-card">
                <div class="topic-header">
                    <h2>REST API: Best Practices</h2>
                    <div class="comments-count">
                        <i class="fas fa-comment"></i>
                        <span>29</span>
                    </div>
                </div>
                <div class="topic-meta">
                    <div class="rating">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="far fa-star"></i>
                        <span>4.0</span>
                    </div>
                    <div class="views">
                        <i class="fas fa-eye"></i>
                        <span>178</span>
                    </div>
                </div>
                <p class="topic-excerpt">Проектирование RESTful API: версионирование, аутентификация, документация и обработка ошибок.</p>
                <button class="btn-details">Подробнее</button>
            </div>
            
            <!-- Карточка темы 6 -->
            <div class="card topic-card">
                <div class="topic-header">
                    <h2>Docker для PHP разработчиков</h2>
                    <div class="comments-count">
                        <i class="fas fa-comment"></i>
                        <span>22</span>
                    </div>
                </div>
                <div class="topic-meta">
                    <div class="rating">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star-half-alt"></i>
                        <i class="far fa-star"></i>
                        <span>3.5</span>
                    </div>
                    <div class="views">
                        <i class="fas fa-eye"></i>
                        <span>163</span>
                    </div>
                </div>
                <p class="topic-excerpt">Создание и управление Docker-контейнерами для локальной разработки и production окружений.</p>
                <button class="btn-details">Подробнее</button>
            </div>
        </div>
    </div>
    @include('layouts.footer')
    <script src="{{ asset('js/scripts.js') }}"></script>
</body>

</html>