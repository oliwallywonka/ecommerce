<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Travel extends Model
{
    public function purchases()
    {
        return $this->hasMany(Purchase::class);
    }
}
