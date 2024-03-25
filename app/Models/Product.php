<?php

namespace App\Models;


class Product extends Model
{


    public function scopeNameFiltering()
    {
        if (request()->filled('name')) {
            return self::where('name', 'LIKE', request('name').'%');
        }
    }
    


    public function category()
    {
        return $this->belongsTo(Category::class);
    }

    public function subcategory()
    {
        return $this->belongsTo(SubCategory::class);
    }

}
