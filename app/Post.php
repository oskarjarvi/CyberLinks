<?php

namespace App;


use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    protected $fillable = [
        'title', 'link', 'content'
    ];
    public function user()
    {
        return $this->belongsTo(User::class);
    }
    public function comments()
    {
        return $this->hasMany(Comments::class);
    }
    public function votes()
    {
        return $this->hasMany(Vote::class);
    }
    public function addComment($body)
    {
        $this->comments()->create(['body' => $body,'user_id' => auth()->id()]);
    }
    public function addVote($vote)
    {
        $this->votes()->create(['vote_count' => $vote,'user_id' => auth()->id()]);
    }
}
