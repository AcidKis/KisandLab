<!DOCTYPE html>
<html lang="ru">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Разработчик - Главная</title>
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
</head>

<body>
    @include('layouts.header')

    <div class="container">
        <!-- Шапка с фото и навыками -->
        <div class="card">
            <div class="profile-section">
                <div class="profile-photo">
                    <div class="photo-container avatar-sm">
                        <img src="{{ asset('img/andrey.jpeg') }}" alt="User Avatar">
                    </div>
                </div>
                <div class="skills-section">
                    <h1>Андрюха Киселев</h1>
                    <p class="position">Senior PHP Developer</p>
                    <div class="skills-list">
                        <div class="skill">PHP 8+</div>
                        <div class="skill">Laravel</div>
                        <div class="skill">MySQL</div>
                        <div class="skill">API REST</div>
                        <div class="skill">Git</div>
                        <div class="skill">Docker</div>
                        <div class="skill">JavaScript</div>
                        <div class="skill">SOLID</div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Информация обо мне -->
        <div class="card about-section">
            <h2 class="section-title">Обо мне</h2>
            <p>Я профессиональный PHP разработчик с более чем 10000-летним опытом работы над высоконагруженными веб-приложениями. Специализируюсь на создании масштабируемых бэкенд-решений с использованием современного стека технологий.</p>
            <p>Мой подход сочетает глубокое понимание принципов ООП, паттернов проектирования и архитектурных решений. Я ценю чистый, поддерживаемый код и постоянно совершенствую свои навыки.</p>

            <div class="experience">
                <div class="exp-item">
                    <h3>Опыт работы</h3>
                    <p>Ведущий разработчик в TechSolutions (2020-настоящее время)</p>
                    <p>Backend разработчик в WebInnovate (2018-2020)</p>
                </div>
                <div class="exp-item">
                    <h3>Образование</h3>
                    <p>Магистр компьютерных наук, Университет ИТ</p>
                    <p>Сертификация Zend PHP Engineer</p>
                </div>
            </div>
        </div>

        <!-- Контакты -->
        <div class="card contact-section">
            <h2 class="section-title">Свяжитесь со мной</h2>
            <div class="contact-methods">
                <a href="mailto:kisand.work@mail.ru" class="footer-link">
                    <i class="fas fa-envelope"></i> kisand.work@mail.ru
                </a>
                <a href="https://t.me/Immortal_Ankh" class="footer-link">
                    <i class="fab fa-telegram"></i> @Immortal_Ankh
                </a>
                <a href="https://github.com/AcidKis" class="footer-link">
                    <i class="fab fa-github"></i> github.com/AcidKis
                </a>
            </div>
        </div>
    </div>

    @include('layouts.footer')
    <script src="{{ asset('js/scripts.js') }}"></script>
</body>

</html>