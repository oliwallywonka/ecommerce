<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Purchase extends Model
{
    public function travel()
    {
        return $this->belongsTo(Travel::class);
    }
    public function purchase_detail()
    {
        return $this->hasMany(PurchaseDetail::class);
    }
    public function wholeseller()
    {
        return $this->belongsTo(Wholeseller::class);
    }
    public function employee()
    {
        return $this->belongsTo(Employee::class);
    }
}
