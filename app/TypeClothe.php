<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class TypeClothe extends Model
{
    public function clothe_model()
    {
        return $this->hasMany(ClotheModel::class);
    }
}
