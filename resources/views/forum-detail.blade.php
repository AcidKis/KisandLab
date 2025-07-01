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
                <h1>{{ $post->name }}</h1>
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

            <div class="topic-content">
                {!! $post->content !!}
            </div>

            @if($post->user_id)
            <div class="topic-author">
                <div class="profile-header">
                    <div class="photo-container avatar-sm">
                        <div class="photo-placeholder">
                            <i class="fas fa-user"></i>
                        </div>
                    </div>
                    <div>
                        <h3>{{ $post->user->name }}</h3>
                        <p>Автор поста</p>
                    </div>
                </div>
            </div>
            @endif
        </div>

        <div class="card comments-section">
            <h2 class="section-title">Комментарии ({{ $post->comments_count }})</h2>

            <div class="comment-form">
                <h3>Оставить комментарий</h3>
                <form action="{{ route('comment', $post) }}" method="POST">
                    @csrf
                    <div class="form-group">
                        <textarea name="content" class="form-control" placeholder="Ваш комментарий..."></textarea>
                    </div>
                    <button type="submit" class="btn">Отправить</button>
                </form>
            </div>

            <div class="comment-list">
                @foreach($post->comments as $comment)
                @include('partials.comment', ['comment' => $comment])
                @endforeach
            </div>
        </div>
    </div>

    @include('layouts.footer')
    <script src="{{ asset('js/scripts.js') }}"></script>
</body>

</html>