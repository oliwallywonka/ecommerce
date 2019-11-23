<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Contact extends Model
{
    public function wholeseller()
    {
        return $this->belongsTo(WholeSeller::class);
    }
    public function contact_type()
    {
        return $this->belongsTo(ContactType::class);
    }
}
