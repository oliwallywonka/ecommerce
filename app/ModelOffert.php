<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ModelOffert extends Model
{
    protected $fillable = ['clothe_model_id','offert_porcent','offert_days','status'];
    public function clothe_model()
    {
        return $this->belongsTo(ClotheModel::class);
    }
}
