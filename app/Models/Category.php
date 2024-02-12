<?php

namespace App\Models;


class Category extends Model
{


    public function products()
    {
        return $this->hasMany(Product::class);
    }

}