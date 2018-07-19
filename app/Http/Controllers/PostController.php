<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PostController extends Controller
{
    public function index()
    {
        return view('posts.index');
    }

    public function create()
    {
        //Create New Post
    }
    public function update($id)
    {
        //Update Posts
    }
    public function delete($id)
    {
        //Delete Specific Post
    }
}
