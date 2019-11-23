<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Customer extends Model
{
    public function sale()
    {
        return $this->hasMany(Sale::class);
    }
    public function user()
    {
        return $this->hasOne(User::class);
    }
    public function like()
    {
        return $this->hasMany(Like::class);
    }
}
