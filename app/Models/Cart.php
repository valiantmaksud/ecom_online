<?php

namespace App\Models;


class Cart extends Model
{

    public function user()
    {
        return $this->belongsTo(User::class);
    }

  
    public function details()
    {
        return $this->hasMany(CartDetail::class);
    }

}
