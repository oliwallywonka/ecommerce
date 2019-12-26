<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class SaleStatus extends Model
{
    protected $fillable = ['sale_status','status'];
    
    public function sale()
    {
        return $this->hasMany(Sale::class);
    }
}
