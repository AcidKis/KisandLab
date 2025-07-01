<div class="comment" id="comment-{{ $comment->id }}">
    <div class="comment-header">
        <div class="comment-avatar">
            <i class="fas fa-user"></i>
        </div>
        <div>
            <span class="comment-author">{{ $comment->user->name }}</span>
            <span class="comment-date">{{ $comment->created_at->diffForHumans() }}</span>
        </div>
    </div>
    <div class="comment-content">
        <p>{{ $comment->content }}</p>
    </div>
    <div class="comment-actions">
        <a href="#" class="btn btn-secondary reply-btn" data-comment-id="{{ $comment->id }}">Ответить</a>
        
        <!-- Кнопка лайка -->
        <button class="btn btn-secondary like-btn" 
            data-likeable-id="{{ $comment->id }}" 
            data-likeable-type="comment">
            <i class="fas fa-thumbs-up"></i>
            <span class="like-count">{{ $comment->likes->count() }}</span>
        </button>
    </div>

    <!-- Форма ответа (скрыта по умолчанию) -->
    <div class="reply-form" style="display: none;" data-parent-id="{{ $comment->id }}">
        <form action="{{ route('forumDetail', $post) }}" method="POST">
            @csrf
            <input type="hidden" name="parent_id" value="{{ $comment->id }}">
            <div class="form-group">
                <textarea name="content" class="form-control" placeholder="Ваш ответ..."></textarea>
            </div>
            <button type="submit" class="btn">Отправить ответ</button>
        </form>
    </div>

    <!-- Ответы на комментарий -->
    @if($comment->replies->count() > 0)
        <div class="comment-replies">
            @foreach($comment->replies as $reply)
                @include('partials.comment', ['comment' => $reply])
            @endforeach
        </div>
    @endif
</div>