<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Author extends Model
{

    public function stories()
    {
        return $this->belongsToMany(Story::class, 'story_authors', 'author_id', 'story_id');
    }
}
