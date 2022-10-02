<?php

namespace App\Http\Livewire\Like;

use App\Models\Like;
use Livewire\Component;

class Create extends Component
{
    public $post;
    public $user;

    protected $listeners = ['likeAdded' => '$refresh'];

    public function store()
    {
        $like = Like::where('post_id', $this->post)
            ->where('user_id', $this->user)->first();

        if ($like == null) {
            Like::create([
                'post_id' => $this->post,
                'user_id' => $this->user
            ]);
        } else {
            Like::find($like->id)->delete();
        }

        $this->emit('likeAdded');
    }


    public function render()
    {
        return view('livewire.like.create', [
            'like' => Like::where('post_id', $this->post)->get()->count()
        ]);
    }
}
