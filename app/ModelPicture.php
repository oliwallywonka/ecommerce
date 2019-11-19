<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ModelPicture extends Model
{
    public function clotheModels()
    {
        return $this->belongsTo(ClotheModel::class);
    }
}
