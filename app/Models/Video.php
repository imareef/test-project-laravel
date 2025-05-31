<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Video extends Model
{
    use HasFactory;

    public function tags()
    {
        return $this->morphToMany(Tag::class, 'taggable');
        // return $this->morphToMany(Tag::class, 'taggable', 'taggables', 'tag_id', 'taggable_id', 'id', 'id', false);
    }
}
