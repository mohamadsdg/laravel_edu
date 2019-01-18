<?php

namespace App;

use Illuminate\Database\Eloquent\Model;


class Card extends Model
{
    public function notes() // name table that want relation to card
    {
//        return $this->hasMany('App\Note');
        return $this->hasMany(Note::class);
    }
}
