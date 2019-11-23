<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Brand extends Model
{
    public function clothe_model()
    {
        return $this->hasMany(ClotheModel::class);
    }
}
