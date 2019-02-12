<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Tag extends Model
{
    public function Notes()
    {
        return $this->belongsToMany(Note::class);
    }
}