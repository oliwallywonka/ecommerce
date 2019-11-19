<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Banner extends Model
{
    public function users(){
        return $this->BelongsTo(User::class);
    }
}
