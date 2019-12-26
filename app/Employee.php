<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Employee extends Model
{
    protected $fillable = ['user_id','ci','gender','status'];

    public function user()
    {
        return $this->belongsTo(User::class);
    }
    public function sale()
    {
        return $this->hasMany(Sale::class);
    }
}
