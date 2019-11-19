<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ModelOffert extends Model
{
    public function clotheModels()
    {
        return $this->belongsTo(ClotheModel::class);
    }
}
