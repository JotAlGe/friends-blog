<?php

namespace App\Http\Livewire\Post;

use App\Models\Post;
use Illuminate\Support\Facades\Storage;
use Livewire\WithFileUploads;
use Livewire\Component;

class Create extends Component
{
    use WithFileUploads;
    public $description;
    public $photo;

    protected $rules = [
        'description' => ['required', 'max:1000'],
        'photo' => ['nullable', 'image']
    ];

    protected $messages = [
        'description.required' => 'Escribe algo...',
        'description.max' => 'Debes escribir menos de 1000 caracteres...',
        'photo.image' => 'Formato de imagen no válido...'
    ];

    public function store()
    {
        $this->validate();
        Post::create([
            'description' => $this->description,
            'photo' => $this->photo->store('posts', 'public'),
            'user_id' => auth()->user()->id,
            'category_id' => 1
        ]);
    }

    public function render()
    {
        return view('livewire.post.create');
    }
}
