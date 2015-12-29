<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Topic extends Model
{
    protected $fillable = [
        'title', 'body'
    ];
    public function tags()
    {
        return $this->morphOne('App\Tags', 'taggable');
    }
}
