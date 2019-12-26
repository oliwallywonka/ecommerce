<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Material extends Model
{
    protected $fillable = ['material','status'];
    public function clothe_material()
    {
        return $this->hasMany(ClotheMaterial::class);
    }
}
