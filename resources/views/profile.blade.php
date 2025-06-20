<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Профиль пользователя</title>
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
</head>
<body>
    @include('layouts.header')

    <div class="container">
        <div class="card">
            <div class="profile-header">
                <div class="photo-placeholder">
                    <i class="fas fa-user"></i>
                </div>
                <div class="profile-info">
                    <h1>Иван Петров</h1>
                    <p class="position">Senior PHP Developer</p>
                    <p>Зарегистрирован: 15 марта 2020 г.</p>
                    
                    <div class="user-stats">
                        <div class="stat-item">
                            <div class="stat-value">24</div>
                            <div class="stat-label">Темы</div>
                        </div>
                        <div class="stat-item">
                            <div class="stat-value">142</div>
                            <div class="stat-label">Комментарии</div>
                        </div>
                        <div class="stat-item">
                            <div class="stat-value">4.8</div>
                            <div class="stat-label">Рейтинг</div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="section-title">Навыки</div>
            <div class="skills-list">
                <div class="skill">PHP 8+</div>
                <div class="skill">Laravel</div>
                <div class="skill">MySQL</div>
                <div class="skill">API REST</div>
                <div class="skill">Git</div>
                <div class="skill">Docker</div>
            </div>
            
            <div class="section-title">Биография</div>
            <p>Я профессиональный PHP разработчик с более чем 5-летним опытом работы над высоконагруженными веб-приложениями. Специализируюсь на создании масштабируемых бэкенд-решений с использованием современного стека технологий.</p>
        </div>

        <div class="card">
            <div class="section-title">Активность на форуме</div>
            
            <div class="user-topics">
                <div class="topic-item">
                    <div class="topic-title">Оптимизация запросов MySQL</div>
                    <div class="topic-date">12 комментариев · 3 дня назад</div>
                </div>
                
                <div class="topic-item">
                    <div class="topic-title">Laravel: Архитектура приложений</div>
                    <div class="topic-date">8 комментариев · 1 неделю назад</div>
                </div>
                
                <div class="topic-item">
                    <div class="topic-title">Тестирование PHP кода с PHPUnit</div>
                    <div class="topic-date">5 комментариев · 2 недели назад</div>
                </div>
                
                <div class="topic-item">
                    <div class="topic-title">REST API: Best Practices</div>
                    <div class="topic-date">17 комментариев · 3 недели назад</div>
                </div>
                
                <div class="topic-item">
                    <div class="topic-title">Docker для PHP разработчиков</div>
                    <div class="topic-date">9 комментариев · 1 месяц назад</div>
                </div>
            </div>
        </div>
    </div>

    @include('layouts.footer')
    <script src="{{ asset('js/scripts.js') }}"></script>
</body>
</html>