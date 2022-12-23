<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Post;
use Livewire\WithFileUploads;

class CreatePost extends Component
{
    use WithFileUploads;

    public $open = false;
    public $title , $content, $image, $identificador;

    public function mount(){
        $this->identificador = rand();
    }

    protected $rules = ['title' => 'required' , 'content' => 'required', 'image' => 'required|image' ];

    public function updated($proper){
        $this->validateOnly($proper);
        // target loading.flex
    }
    public function save(){

        $this->validate();
        $image = $this->image->store('public/posts');
        Post::create([
            'title' => $this->title,
            'content' => $this->content,
            'image' => $image
        ]);

        $this->reset(['title' , 'open' ,  'content', 'image']);

        $this->identificador = rand();

        $this->emit('alert', 'el post se creo correctemente');
        $this->emitTo('show-posts','render');

    }
    public function render()
    {
        return view('livewire.create-post');
    }
}
