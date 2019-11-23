<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Clothe extends Model
{
    public function clothe_model()
    {
        return $this->belongsTo(ClotheModel::class);
    }

    public function size()
    {
        return $this->belongsTo(Size::class);
    }

    public function color()
    {
        return $this->belongsTo(Color::class);
    }

    public function clothe_picture()
    {
        return $this->hasMany(ClothePicture::class );
    }
    public function purchase_detail()
    {
        return $this->hasMany(PurchaseDetail::class);
    }
    public function like()
    {
        return $this->hasMany(Like::class);
    }
    public function sale_detail()
    {
        return $this->hasMany(SaleDetail::class);
    }
}
