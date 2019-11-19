<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class TypeClothe extends Model
{
    public function clotheModels()
    {
        return $this->hasMany(ClotheModel::class);
    }
}
