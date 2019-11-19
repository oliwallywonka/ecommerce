<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Employee extends Model
{
    public function users()
    {
        return $this->hasOne(User::class);
    }
    public function sales()
    {
        return $this->hasMany(Sale::class);
    }
}
