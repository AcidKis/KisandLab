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
            @foreach($posts as $post)
            <div class="card topic-card">
                <div class="topic-header">
                    <h2>{{ $post->name }}</h2>
                    <div class="comments-count">
                        <i class="fas fa-comment"></i>
                        <span>{{ $post->comments_count }}</span>
                    </div>
                </div>
                <div class="topic-meta">
                    <div class="rating">
                        @php
                        $fullStars = floor($post->rating);
                        $halfStar = ceil($post->rating - $fullStars);
                        $emptyStars = 5 - $fullStars - $halfStar;
                        @endphp

                        @for ($i = 0; $i < $fullStars; $i++)
                            <i class="fas fa-star"></i>
                            @endfor

                            @if ($halfStar)
                            <i class="fas fa-star-half-alt"></i>
                            @endif

                            @for ($i = 0; $i < $emptyStars; $i++)
                                <i class="far fa-star"></i>
                                @endfor

                                <span>{{ number_format($post->rating, 1) }}</span>
                    </div>
                    <div class="views">
                        <i class="fas fa-eye"></i>
                        <span>{{ $post->views }}</span>
                    </div>
                </div>
                <p class="topic-excerpt">{{ $post->short_description }}</p>
                <a href="{{ route('forumDetail', $post->id) }}" class="btn-details">Подробнее</a>
            </div>
            @endforeach
        </div>
    </div>
    @include('layouts.footer')
    <script src="{{ asset('js/scripts.js') }}"></script>
</body>

</html>