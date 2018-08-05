<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Vote;

class VoteController extends Controller
{
    public function store()
    {
        $votes = 0;

        if(request()->has('upvote'))
        {
            $votes = 1;
        }
        if(request()->has('downvote'))
        {
            $votes = -1;
        }

        Vote::create([
            'vote_count'=> $votes,
            'user_id' => auth()->id(),
            'post_id' => request('post_id')
        ]);
        $votes = Vote::all()->where('post_id', 1)->sum('vote_count');

        return back();
    }
    public function votes()
    {

    }
}
