<?php

namespace App\Http\Controllers;

use App\post;

use Illuminate\Http\Request;

class PostController extends Controller
{

    public function index()
    {
        $posts = Post::all();

        return view('index', compact('posts'));
    }
    public function show($id)
    {
        if ($post = Post::find($id)) {
            return view('posts.show', compact('post'));
        }
        abort(404);
    }
    public function create()
    {
        return view('posts.create');
    }
    public function store()
    {
        $this -> validate(request(), [
            'title' => 'required',
            'content' => 'required'
        ]);

        Post::create([
            'title'=> request('title'),
            'link'=> request('link'),
            'content' =>request('content'),
            'user_id' => auth()->id()
        ]);

        return redirect('/');
    }
}
