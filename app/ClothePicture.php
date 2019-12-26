<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ClothePicture extends Model
{
    protected $fillable = ['clothe_id','picture','status'];
    public function clothe()
    {
        return $this->belongsTo(Clothe::class);
    }
}
