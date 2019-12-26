<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ContactType extends Model
{
    protected $fillable = ['contact_type','status'];

    public function contact()
    {
        return $this->hasMany(Contact::class);
    }
}
