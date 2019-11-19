<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ClothePicture extends Model
{
    public function clothes()
    {
        return $this->belongsTo(Clothe::class);
    }
}
