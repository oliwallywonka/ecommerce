<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ClothePicture extends Model
{
    public function clothe()
    {
        return $this->belongsTo(Clothe::class);
    }
}
