<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ClotheModel extends Model
{
    protected $fillable = ['category_id','brand_id','type_clothe_id','ref_price','description','weight','gender','care_instructions','status'];
    public function brand()
    {
        return $this->belongsTo(Brand::class);
    }

    public function category()
    {
        return $this->belongsTo(Category::class);
    }

    public function clothe_material()
    {
        return $this->hasMany(ClotheMaterial::class);
    }

    public function clothe()
    {
        return $this->hasMany(Clothe::class);
    }

    public function model_offert()
    {
        return $this->hasMany(ModelOffert::class);
    }

    public function type_clothe()
    {
        return $this->belongsTo(TypeClothe::class);
    }

    public function model_picture()
    {
        return $this->hasMany(ModelPicture::class);
    }
}
