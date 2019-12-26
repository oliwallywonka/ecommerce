<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Size extends Model
{
    protected $fillable = ['size','status'];
    
    public function size()
    {
        return $this->hasMany(Clothe::class);
    }
}
