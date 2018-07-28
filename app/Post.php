<?php

namespace App;


use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    protected $fillable = [
        'title', 'link', 'content',
    ];
    public function author()
    {
        return $this->belongsTo(User::class);
    }
}
