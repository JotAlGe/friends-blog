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
                <img alt="image" src="{{$post->user->profile_photo}}">
            </a>
            <div class="media-body">
                <a href="{{ route('users.show', [
                    'user' => $post->user
                ])}}">
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
            @if ($post->photo != null)
            <img src="{{$post->post_picture_url}}" class="img-responsive">
            @endif

            <div class="btn-group d-flex justify-content-between">
                <div>
                    @livewire('like.create', [
                    'post' => $post->id,
                    'user' => auth()->user()->id
                    ])

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
                    <img alt="image" src="{{$comment->user->profile_photo}}">
                </a>
                <div class="media-body text-secondary">
                    <a href="{{ route('users.show', [
                        'user' => $comment->user
                    ])}}">
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
                    <img alt="image" src="{{asset('assets/images/'.auth()->user()->profile_photo)}}">
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
