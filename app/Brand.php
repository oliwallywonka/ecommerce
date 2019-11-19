<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Brand extends Model
{
    public function clotheModels()
    {
        return $this->hasMany(ClhoteModel::class);
    }
}
