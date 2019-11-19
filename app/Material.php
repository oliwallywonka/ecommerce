<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Material extends Model
{
    public function clotheMaterials()
    {
        return $this->hasMany(ClotheMaterial::class);
    }
}
