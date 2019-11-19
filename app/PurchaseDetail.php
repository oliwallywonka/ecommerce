<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class PurchaseDetail extends Model
{
    public function clothes()
    {
        return $this->belongsTo(Clothe::class);
    }
    public function purchases()
    {
        return $this->belongsTo(Purchase::class);
    }
}
