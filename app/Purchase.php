<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Purchase extends Model
{
    public function travels()
    {
        return $this->belongsTo(Travel::class);
    }
    public function purchaseDetails()
    {
        return $this->hasMany(PurchaseDetail::class);
    }
    public function wholesellers()
    {
        return $this->belongsTo(Wholeseller::class);
    }
    public function employees()
    {
        return $this->belongsTo(Employee::class);
    }
}
