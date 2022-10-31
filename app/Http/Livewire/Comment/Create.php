<?php

namespace App\Http\Livewire\Comment;

use App\Models\Comment;
use Livewire\Component;

class Create extends Component
{
    public $description;
    public $post;

    protected $listeners = ['ref' => '$refresh'];

    protected $rules = [
        'description' => ['required', 'max:500', 'min:3'],
    ];

    public function updated($propertyName)
    {
        $this->validateOnly($propertyName);
    }

    protected $messages = [
        'description.required' => 'Debe escribir un comentario.',
        'description.max' => 'Puede escribir hasta 500 caracteres.',
        'description.min' => 'Debe escribir, al menos, 3 caracteres.',
    ];

    public function store()
    {
        $this->validate();

        Comment::create([
            'description' => $this->description,
            'post_id' => $this->post,
            'user_id' => auth()->user()->id,
        ]);

        $this->reset('description');
        $this->emit('ref');
    }

    public function render()
    {
        return view('livewire.comment.create', [
            'comments' => Comment::where('post_id', $this->post)->get(),
        ]);
    }
}
