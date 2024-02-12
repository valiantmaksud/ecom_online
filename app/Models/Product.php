<?php

namespace App\Models;

use App\Traits\AutoCreatedUpdatedWithSlug;
use Illuminate\Support\Arr;

class Product extends Model
{
    use AutoCreatedUpdatedWithSlug;


    public function scopeCategoryFiltering()
    {
        if (request()->filled('category')) {
            $category = Category::with('childCategories:id,parent_id')->where('slug', request('category'))->select('id', 'parent_id')->first();
            $categoryIds = $category->childCategories()->pluck('id');
            $categoryIds = $categoryIds->merge($category->id);
            return self::whereHas('category', fn($q)=> $q->whereIn('id',$categoryIds) );
        }
    }

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

    public function seo()
    {
        return $this->morphOne(MetaBox::class, 'reference');
    }



    public function images()
    {
        return $this->morphMany(Image::class, 'source');
    }



    public function product_sizes()
    {
        return $this->belongsToMany(Size::class, 'product_sizes', 'product_id', 'size_id');
    }





    public function getSizes()
    {
        return optional(optional($this->product_sizes)->pluck('id'))->toArray() ?? [];
    }

    // public function getImageAttribute()
    // {
    //     if (file_exists(public_path($this->attributes['image'] ?? ''))) {
    //         return $this->attributes['image'];
    //     }
    //     return asset('assets/frontend/image/default.png');
    // }
}
