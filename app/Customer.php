<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Customer extends Model
{
    public function sales()
    {
        return $this->hasMany(Sale::class);
    }
    public function users()
    {
        return $this->hasOne(User::class);
    }
    public function likes()
    {
        return $this->hasMany(Like::class);
    }
}
