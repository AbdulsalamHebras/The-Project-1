<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class PublishingHome extends Model
{
    protected $table = 'publishing_homes';
    public function stories()
    {
        return $this->belongsToMany(Story::class, 'story_publishing_homes', 'publishing_home_id', 'story_id');
    }
}