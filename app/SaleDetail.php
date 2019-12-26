<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class SaleDetail extends Model
{
    protected $fillable = ['sale_id','clothe_id','sale_price','status'];
    public function clothe()
    {
        return $this->belongsTo(Clothe::class);
    }
    public function sale()
    {
        return $this->belongsTo(Sale::class);
    }
}
