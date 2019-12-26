<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    protected $fillable = ['category'];
    public function clothe_model()
    {
        return $this->hasMany(ClotheModel::class);
    }
}
