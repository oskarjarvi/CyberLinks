<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Vote extends Model
{
    protected $fillable = [
        'vote_count', 'user_id', 'post_id',
    ];

    public function post()
    {
        return$this->belongsTo(Post::class);
    }
    public function user()
    {
        return$this->belongsTo(User::class);
    }
}
