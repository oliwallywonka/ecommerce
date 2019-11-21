<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ClotheModel extends Model
{
    public function brands()
    {
        return $this->belongsTo(Brand::class);
    }

    public function categories()
    {
        return $this->belongsTo(Category::class);
    }

    public function clotheMaterials()
    {
        return $this->hasMany(ClotheMaterial::class);
    }

    public function clothes()
    {
        return $this->hasMany(Clothe::class);
    }

    public function modelOfferts()
    {
        return $this->hasMany(ModelOffert::class);
    }

    public function typeClothes()
    {
        return $this->belongsTo(TypeClothe::class);
    }
    
    public function modelPictures()
    {
        return $this->hasMany(ModelPicture::class);
    }
}
