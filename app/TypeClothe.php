<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class TypeClothe extends Model
{
    protected $fillable = ['type','status'];
    public function clothe_model()
    {
        return $this->hasMany(ClotheModel::class);
    }
}
