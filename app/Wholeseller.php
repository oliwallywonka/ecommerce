<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Wholeseller extends Model
{
    public function contact()
    {
        return $this->hasMany(Contact::class);
    }

    public function purchase()
    {
        return $this->hasMany(Purchase::class);
    }
}
