<?php

namespace App\Models;

use App\Traits\AutoCreatedUpdatedWithSlug;
use Illuminate\Support\Arr;

class Product extends Model
{
    use AutoCreatedUpdatedWithSlug;



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

}
