<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ModelPicture extends Model
{
    public function clothe_model()
    {
        return $this->belongsTo(ClotheModel::class);
    }
}
