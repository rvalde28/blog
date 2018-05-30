<?php

namespace App;

class Posts extends Model
{
    //
    public function comments()
    {
      return $this->hasMany(Comment::class);
    }
}
