<div class="social-comment">

    @foreach ($comments as $comment)
    <div class="social-comment mx-4">
        <a href="#" class="pull-left">
            <img alt="image"
                src="{{ Auth::id() === $comment->user_id ? asset('assets/images/user.png') : $comment->user->profile_photo}}">
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
    <a href="" class="pull-left">
        <img alt="image" src={{asset('assets/images/user.png') }}>
    </a>
    <div class="media-body">
        <textarea wire:model="description" class="form-control" placeholder="Escribe un comentario..."></textarea>

        {{-- error --}}
        @error('description') <span class="text-danger">{{ $message }}</span> @enderror

        <x-form.input type="submit" class="btn btn-theme" style="background-color: #1e7a5d; color: white;"
            value="Comentar" wire:click="store" />
    </div>
</div>
