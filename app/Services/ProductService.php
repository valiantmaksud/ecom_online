<?php
namespace App\Services;

use App\Models\Product;
use App\Traits\FileSaver;

class ProductService{
    
    use FileSaver;
    public $product;
    public $request;


    public function __construct() {
        $this->request = request();
    }


    public function saveProduct($id = null){

        $this->product = Product::updateOrCreate([
            'id'            => $id,
        ],[
            'name'          => $this->request->name,
            'sku'           => $this->request->sku,
            'price'         => $this->request->price,
            'category_id'   => $this->request->category_id,
            'brand_id'      => $this->request->brand_id,
            'description'   => $this->request->description,
            'summary'       => $this->request->summary,
            'offer_price'   => $this->request->offer_price,
            'featured'      => $this->request->featured ?? 0,
            'status'        => $this->request->status ?? 1,
        ]);

        $this->upload_file($this->request->feature_image, $this->product, 'image', 'products', 'webp');
        
        return $this->product;
    }

    public function saveProductImages(){

        foreach ($this->request->images ?? [] as $key => $image) {

           $image =  $this->product->images()->create([
                'title'             => $this->request->name,
            ]);
            $this->upload_file($this->request->images[$key], $image, 'image', 'products/images', 'webp');
        }
        
    }

    
    public function saveProductAttributes($product){

        $attributes = request('attributes');
        foreach($attributes as $attribute){
            $product->attributes()->attach($attribute);
        }
    }

    public function saveProductSize(){

        $sizes = request('sizes');

        $this->product->product_sizes()->sync($sizes ?? []);
    }

    public function seo(){

        $key = $this->request->seo_tiitle ?? $this->request->name;
        $value = $this->request->seo_description ?? $this->request->description;
        
        (new SEOService())->save($key, $value, $this->product);
    }
}