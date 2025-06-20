<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Оптимизация запросов MySQL</title>
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
</head>
<body>
    @include('layouts.header')

    <div class="container">
        <div class="card topic-detail">
            <div class="topic-header">
                <h1>Оптимизация запросов MySQL</h1>
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
            
            <div class="topic-content">
                <p>Оптимизация запросов MySQL - критически важный навык для любого backend-разработчика, работающего с базами данных. В этой статье мы рассмотрим основные методы оптимизации SQL-запросов, которые помогут значительно повысить производительность вашего приложения.</p>
                
                <h2>Использование индексов</h2>
                <p>Индексы - это первое, на что следует обратить внимание при оптимизации запросов. Правильно созданные индексы могут ускорить выполнение запросов в сотни раз. Основные типы индексов в MySQL:</p>
                <ul>
                    <li>PRIMARY KEY - первичный ключ таблицы</li>
                    <li>UNIQUE - обеспечивает уникальность значений</li>
                    <li>INDEX - обычный индекс</li>
                    <li>FULLTEXT - для полнотекстового поиска</li>
                </ul>
                
                <h2>Анализ выполнения запросов</h2>
                <p>Команда EXPLAIN - ваш лучший друг при оптимизации запросов. Она показывает, как MySQL выполняет запрос, какие индексы использует и в каком порядке обрабатывает таблицы.</p>
                
                <h2>Оптимизация структуры таблиц</h2>
                <p>Правильная нормализация данных, выбор оптимальных типов данных для колонок и использование правильных движков хранения (InnoDB vs MyISAM) также играют важную роль в производительности.</p>
            </div>
            
            <div class="topic-author">
                <div class="profile-header">
                    <div class="photo-placeholder small">
                        <i class="fas fa-user"></i>
                    </div>
                    <div>
                        <h3>Алексей Смирнов</h3>
                        <p>Database Architect, эксперт MySQL</p>
                    </div>
                </div>
            </div>
        </div>
        
        <div class="card comments-section">
            <h2 class="section-title">Комментарии (24)</h2>
            
            <div class="comment-form">
                <h3>Оставить комментарий</h3>
                <form>
                    <div class="form-group">
                        <textarea class="form-control" placeholder="Ваш комментарий..."></textarea>
                    </div>
                    <button type="submit" class="btn">Отправить</button>
                </form>
            </div>
            
            <div class="comment-list">
                <div class="comment">
                    <div class="comment-header">
                        <div class="comment-avatar">
                            <i class="fas fa-user"></i>
                        </div>
                        <div>
                            <span class="comment-author">Иван Петров</span>
                            <span class="comment-date">2 часа назад</span>
                        </div>
                    </div>
                    <div class="comment-content">
                        <p>Отличная статья! Особенно полезной оказалась информация про использование EXPLAIN. Не знал, что можно анализировать запросы таким образом.</p>
                    </div>
                    <div class="comment-actions">
                        <a href="#" class="btn btn-secondary">Ответить</a>
                        <a href="#" class="btn btn-secondary"><i class="fas fa-thumbs-up"></i> 12</a>
                    </div>
                    
                    <div class="comment-reply">
                        <div class="comment-header">
                            <div class="comment-avatar">
                                <i class="fas fa-user"></i>
                            </div>
                            <div>
                                <span class="comment-author">Алексей Смирнов</span>
                                <span class="comment-date">1 час назад</span>
                            </div>
                        </div>
                        <div class="comment-content">
                            <p>Рад, что было полезно! EXPLAIN действительно мощный инструмент, рекомендую освоить его в первую очередь.</p>
                        </div>
                    </div>
                </div>
                
                <div class="comment">
                    <div class="comment-header">
                        <div class="comment-avatar">
                            <i class="fas fa-user"></i>
                        </div>
                        <div>
                            <span class="comment-author">Мария Иванова</span>
                            <span class="comment-date">5 часов назад</span>
                        </div>
                    </div>
                    <div class="comment-content">
                        <p>Спасибо за статью! Хотелось бы больше информации про оптимизацию JOIN-запросов. Может быть, в следующей статье?</p>
                    </div>
                    <div class="comment-actions">
                        <a href="#" class="btn btn-secondary">Ответить</a>
                        <a href="#" class="btn btn-secondary"><i class="fas fa-thumbs-up"></i> 8</a>
                    </div>
                </div>
            </div>
        </div>
    </div>

    @include('layouts.footer')
    <script src="{{ asset('js/scripts.js') }}"></script>
</body>
</html>