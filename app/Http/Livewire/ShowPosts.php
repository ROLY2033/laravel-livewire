<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Post;

class ShowPosts extends Component
{

    public $search;
    public $sort = 'id';
    public $direction = 'asc';

    // protected $listeners = ['render' => 'render'];
    protected $listeners = ['render'];
    public function render(){

        $posts = Post::where('title', 'LIKE', '%' . $this->search . '%')
            ->orderBy($this->sort, $this->direction)
            ->orWhere('content', 'like', '%' . $this->search . '%')->get();

        return view('livewire.show-posts', compact('posts'));
    }
    public function order($sort, $direction){

        if ($this->sort ==  $sort) {
            if ($this->direction == 'desc') {
                $this->direction = 'asc';
            } else {
                $this->direction = 'desc';
            }
        }else{
            $this->sort = $sort;
        }
    }
}
