<?php

namespace App\Http\Livewire\Post;

use App\Models\Post;
use Livewire\Component;

class Index extends Component
{
    public function render()
    {
        return view('livewire.post.index', [
            'posts' => Post::orderBy('created_at', 'desc')->get()
        ]);
    }
}
