<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class User extends Model
{
    public function notes()
    {
        return $this->hasMany(Note::class);
    }
}
