<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class SaleStatus extends Model
{
    public function sale()
    {
        return $this->hasMany(Sale::class);
    }
}
