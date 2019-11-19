<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ContactType extends Model
{
    public function contacts()
    {
        return $this->hasMany(Contact::class);
    }
}
