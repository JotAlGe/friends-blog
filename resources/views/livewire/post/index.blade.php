<div>
    @forelse ($posts as $post)
    <div class="social-feed-box">

        <div class="pull-right social-action dropdown">
            <button data-toggle="dropdown" class="dropdown-toggle btn-white">
                <i class="fa fa-angle-down"></i>
            </button>
            <ul class="dropdown-menu m-t-xs">
                <li><a href="#">Config</a></li>
            </ul>
        </div>
        <div class="social-avatar">
            <a href="#" class="pull-left">
                <img alt="image" src="https://bootdey.com/img/Content/avatar/avatar1.png">
            </a>
            <div class="media-body">
                <a href="#">
                    {{ $post->user->name }} {{ $post->user->lastname }}
                </a>
                <small class="text-muted">{{ $post->created_at->diffForHumans() }}</small>
            </div>
        </div>
        <div class="social-body">
            <p>
                {{ $post->description }}
            </p>

            {{-- post with photo --}}
            @if ($post->photo != '')
            <img src="{{$post->photo}}" class="img-responsive">
            @endif

            @if ($post->likes->count() > 0)
            <div>
                <a href="#" class="small"><i class="fa fa-thumbs-up"></i>
                    {{$post->likes->count()}}
                </a>
            </div>

            @endif
            <div class="btn-group d-flex justify-content-between">
                <div>
                    <button class="btn btn-white btn-xs"><i class="fa fa-thumbs-up"></i>Like</button>
                    <button class="btn btn-white btn-xs"><i class="fa fa-comments"></i> Comment</button>
                    <button class="btn btn-white btn-xs"><i class="fa fa-share"></i> Share</button>
                </div>
                <div>
                    <small>
                        @if ($post->comments->count() > 1)
                        {{ $post->comments->count() }} comentarios
                        @elseif ($post->comments->count() == 1)
                        {{ $post->comments->count() }} comentario
                        @endif
                    </small>
                </div>
            </div>
        </div>

        {{----------------- comments list -------------------}}
        <div class="social-footer">
            @foreach ($post->comments as $comment)

            <div class="social-comment mx-4">
                <a href="#" class="pull-left">
                    <img alt="image" src="https://bootdey.com/img/Content/avatar/avatar1.png">
                </a>
                <div class="media-body text-secondary">
                    <a href="#">
                        {{ $comment->user->name }} {{ $comment->user->lastname }}
                    </a>
                    {{ $comment->description }}
                    <br>

                    <small class="text-muted">{{ $comment->created_at->diffForHumans() }}</small>
                </div>
            </div>
            @endforeach

            {{-- ---------------- comment form -------------------- --}}
            <div class="social-comment">
                <a href="" class="pull-left">
                    <img alt="image" src="https://bootdey.com/img/Content/avatar/avatar1.png">
                </a>
                <div class="media-body">
                    <textarea class="form-control" placeholder="Escribe un comentario..."></textarea>
                </div>
            </div>

        </div>

    </div>

    @empty
    <h3>No hay publicaciones todavía...</h3>
    @endforelse
</div>