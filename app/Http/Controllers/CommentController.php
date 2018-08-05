<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\post;

class CommentController extends Controller
{
    public function store(Post $post)
    {
        $post->addComment(request('body'));

        return back();
    }
    public function update()
    {

    }
    public function delete()
    {

    }
}
