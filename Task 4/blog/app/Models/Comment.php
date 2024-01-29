<?php
// app/Models/Comment.php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
    protected $fillable = ['post_id', 'commenter_name', 'comment'];

    public function blogPost()
    {
        return $this->belongsTo(BlogPost::class);
    }
}
