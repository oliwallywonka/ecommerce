<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Sale extends Model
{
    public function saleStatuses()
    {
        return $this->belongsTo(SaleStatus::class);
    }
    public function saleDetails()
    {
        return $this->hasMany(SaleDetail::class);
    }
    public function customers()
    {
        return $this->belongsTo(Customer::class);
    }
    public function employee()
    {
        return $this->belongsTo(Employee::class);
    }
}
