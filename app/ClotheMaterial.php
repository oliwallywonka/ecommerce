<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ClotheMaterial extends Model
{
    public function materials()
    {
        return $this->belongsTo(Material::class);
    }
    public function clotheModels()
    {
        return $this->belongsTo(ClotheModel::class);
    }
}
