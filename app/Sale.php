<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Sale extends Model
{
    protected $fillable = ['customer_id','sale_status_id','employee_id','total_sale','status'];
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
