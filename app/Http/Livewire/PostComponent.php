<?php

namespace App\Http\Livewire;

use App\Models\Post;
use Livewire\Component;


class PostComponent extends Component
{
    public $name, $body, $post_id;

    public $accion = 'store';

    protected $rules = [
        'name' => 'required|min:6',
        'body' => 'required|min:10'
    ];

    protected $messages = [
        'name.required' => 'nombre requerido',
        'name.min' => 'minimo 6',
        'body.required' => 'body requerido',
        'body.min' => 'minimo 10',

    ];

    public function render()
    {
        $posts = Post::latest('id')->get();

        return view('livewire.post-component', compact('posts'));
    }

    public function store(){

        $this->validate();

        Post::create([

            'name' => $this->name,
            'body' => $this->body
        ]);

        $this->reset(['name', 'body']);
    }

    public function edit(Post $post){
        $this->name = $post->name;
        $this->body = $post->body;
        $this->post_id = $post->id;

        $this->accion = "update";

    }

    public function update(){
        $post = Post::find($this->post_id);

        $post->update([
            'name' => $this->name,
            'body' => $this->body
        ]);

        $this->reset(['name', 'body', 'accion', 'post_id']);

    }

    public function defaul(){
        $this->reset(['name', 'body', 'accion', 'post_id']);

    }

    public function destroy(Post $post){
        $post->delete();
    }
}
