<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ModelPicture extends Model
{
    protected $fillable = ['clothe_model_id','picture','status'];
    public function clothe_model()
    {
        return $this->belongsTo(ClotheModel::class);
    }
}
