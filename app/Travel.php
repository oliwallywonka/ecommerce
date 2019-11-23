<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Travel extends Model
{
    public function purchase()
    {
        return $this->hasMany(Purchase::class);
    }
}
