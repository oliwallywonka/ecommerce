<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Like extends Model
{
    public function clothes()
    {
        return $this->belongsTo(Clothe::class);
    }
    public function customers()
    {
        return $this->belongsTo(Customer::class);
    }
}
