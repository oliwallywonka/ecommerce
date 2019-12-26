<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Travel extends Model
{
    protected $fillable = ['destiny','food_cost','ticket_cost','others','description','status'];
    
    public function purchase()
    {
        return $this->hasMany(Purchase::class);
    }
}
