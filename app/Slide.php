<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Slide extends Model
{
    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
