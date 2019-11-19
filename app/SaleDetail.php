<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class SaleDetail extends Model
{
    public function clothes()
    {
        return $this->belongsTo(Clothes::class);
    }
    public function sales()
    {
        return $this->belongsTo(Sale::class);
    }
}
