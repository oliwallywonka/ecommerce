<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ClotheMaterial extends Model
{
    public function material()
    {
        return $this->belongsTo(Material::class);
    }
    public function clothe_model()
    {
        return $this->belongsTo(ClotheModel::class);
    }
}
