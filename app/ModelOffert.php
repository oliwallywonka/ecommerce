<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ModelOffert extends Model
{
    public function clothe_model()
    {
        return $this->belongsTo(ClotheModel::class);
    }
}
