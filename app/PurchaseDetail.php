<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class PurchaseDetail extends Model
{
    public function clothe()
    {
        return $this->belongsTo(Clothe::class);
    }
    public function purchase()
    {
        return $this->belongsTo(Purchase::class);
    }
}
