<?php

namespace App\Http\Controllers;

use App\post;

use Illuminate\Http\Request;

class PostController extends Controller
{

    public function index()
    {
        return view('posts.index');
    }
    public function show()
    {
        return view('posts.show');
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

        post::create(request(['title', 'link', 'content']));

        return redirect('/');
    }
}
