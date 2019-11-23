<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Sale extends Model
{
    public function sale_status()
    {
        return $this->belongsTo(SaleStatus::class);
    }
    public function sale_detail()
    {
        return $this->hasMany(SaleDetail::class);
    }
    public function customer()
    {
        return $this->belongsTo(Customer::class);
    }
    public function employee()
    {
        return $this->belongsTo(Employee::class);
    }
}
