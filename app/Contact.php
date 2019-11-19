<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Contact extends Model
{
    public function wholeSellers()
    {
        return $this->belongsTo(WholeSeller::class);
    }
    public function contactTypes()
    {
        return $this->belongsTo(ContactType::class);
    }
}
