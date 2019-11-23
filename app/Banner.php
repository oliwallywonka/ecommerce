<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Banner extends Model
{
    public function user(){
        return $this->BelongsTo(User::class);
    }
}
