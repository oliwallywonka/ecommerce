<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Color extends Model
{
    public function clothes()
    {
        return $this->hasMany(Clothe::class);
    }
}
