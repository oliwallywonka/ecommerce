<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Clothe extends Model
{
    public function clotheModels()
    {
        return $this->belongsTo(ClotheModel::class);
    }

    public function sizes()
    {
        return $this->belongsTo(Size::class);
    }

    public function colors()
    {
        return $this->belongsTo(Color::class);
    }

    public function clothePictures()
    {
        return $this->hasMany(ClothePicture::class);
    }
    public function purchaseDetails()
    {
        return $this->hasMany(PurchaseDetail::class);
    }
    public function likes()
    {
        return $this->hasMany(Like::class);
    }
    public function saleDetails()
    {
        return $this->hasMany(SaleDetail::class);
    }
}
