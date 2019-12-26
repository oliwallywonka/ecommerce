<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Contact extends Model
{
    protected $fillable = ['wholeseller_id','contact_type_id','data','status'];

    public function wholeseller()
    {
        return $this->belongsTo(WholeSeller::class);
    }
    public function contact_type()
    {
        return $this->belongsTo(ContactType::class);
    }
}
