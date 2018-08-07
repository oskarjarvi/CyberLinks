<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Vote;
use App\post;


class VoteController extends Controller
{
    public function store(Post $post)
    {
        $vote = 0;

        if(request()->has('upvote'))
        {
            $vote = 1;
        }
        else if(request()->has('downvote'))
        {
            $vote = -1;
        }
        $post->addVote($vote);

        return back();
    }
}
