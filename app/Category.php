<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    public function clotheModels()
    {
        return $this->hasMany(ClhoteModel::class);
    }
}
