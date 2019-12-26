<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Like extends Model
{
    protected $fillable = ['clothe_id','customer_id','like','status'];

    public function clothe()
    {
        return $this->belongsTo(Clothe::class);
    }
    public function customer()
    {
        return $this->belongsTo(Customer::class);
    }
}
