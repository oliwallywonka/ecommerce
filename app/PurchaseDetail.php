<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class PurchaseDetail extends Model
{
    protected $fillable = ['purchase_id','clothe_id','quantity','purchase_price','status'];
    public function clothe()
    {
        return $this->belongsTo(Clothe::class);
    }
    public function purchase()
    {
        return $this->belongsTo(Purchase::class);
    }
}
