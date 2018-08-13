<?php

namespace App\Http\Controllers;

use App\post;
use App\vote;

use Illuminate\Http\Request;

class PostController extends Controller
{

    public function index()
    {
        $posts = Post::all();

        foreach ($posts as $post)
        {
            $votes = Vote::where('post_id', '=', $post->id)->get();
            $post->vote_count = $votes->sum('vote_count');
        }

        return view('index', compact('posts'));
    }
    public function show($id)
    {
        if ($post = Post::find($id))
        {
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
        $this -> validate(request(),
        [
            'title' => 'required',
            'content' => 'required'
        ]);

        auth()->user()->publish(
            new Post(request(['title','link', 'content']))
        );

        session()->flash('message', 'Your Post has now been published.');

        return redirect('/');
    }

    public function edit($id)
    {
        if ($post = Post::find($id))
        {
            return view('posts.edit', compact('post'));
        }
        abort(404);
    }

    public function update($id)
    {
        $post = Post::find($id);

        if (!$post)
        {
            abort(404);
        }
        $this -> validate(request(), [
            'title' => 'required',
            'content' => 'required'
        ]);

        $post->update(
            [
            'title' => request('title'),
            'link' => request('link'),
            'content' => request('content'),
            ]);

            session()->flash('message', 'Your post is now updated');
        return redirect('');
    }
    public function delete($id)
    {
        $post = Post::find($id);

        $post->delete();

        session()->flash('message', 'Your post is now deleted');


        return back();
    }
}
