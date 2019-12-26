<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ClotheMaterial extends Model
{
    protected $fillable = ['material_id','clothe_model_id','porcent','status'];
    public function material()
    {
        return $this->belongsTo(Material::class);
    }
    public function clothe_model()
    {
        return $this->belongsTo(ClotheModel::class);
    }
}
