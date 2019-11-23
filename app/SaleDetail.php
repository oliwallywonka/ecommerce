<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class SaleDetail extends Model
{
    public function clothe()
    {
        return $this->belongsTo(Clothe::class);
    }
    public function sale()
    {
        return $this->belongsTo(Sale::class);
    }
}
