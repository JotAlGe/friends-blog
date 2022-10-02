<div>
    @if ($like > 0)
    <div>
        <a href="#" class="small"><i class="fa fa-thumbs-up"></i>
            {{$like}}
        </a>
    </div>

    @endif

    <button class="btn btn-white btn-xs" wire:click="store"><i class="fa fa-thumbs-up"></i>Like </button>
    <button class="btn btn-white btn-xs"><i class="fa fa-comments"></i> Comment</button>
    <button class="btn btn-white btn-xs"><i class="fa fa-share"></i> Share</button>
</div>
