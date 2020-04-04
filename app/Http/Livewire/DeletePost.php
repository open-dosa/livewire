<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Post;

class DeletePost extends Component
{
    public $post;

    public function mount(Post $post)
    {
        $this->post = $post;
    }

    public function delete()
    {
        $this->post->delete();
    }

    // public function render()
    // {
    //     return view('livewire.delete-post');
    // }

    public function render()
    {
        return <<<'blade'
            <div>
                <button wire:click="delete">Delete Post</button>
            </div>
        blade;
    }    
}
