<?php

namespace App\Http\Requests;

use App\Services\ProductService;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Support\Facades\DB;

class ProductRequest extends FormRequest
{

    public $service;

    public function __construct(ProductService $productService) {
        $this->service = $productService;
    }
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        if ($this->method() == 'PATCH' || $this->method() == 'PUT') {
            return [];
        }

        return [
            'name'          => 'required',
            'description'   => 'nullable',
            'price'         => 'required',
            'status'        => 'required',
            'category_id'   => 'required',
        ];
    }



    public function store()
    {
        DB::transaction(function () {
            $this->service->saveProduct();
            $this->service->saveProductSize();
            $this->service->saveProductImages();
            // $this->service->saveProductAttributes($product);
            $this->service->seo();
        });
        return $this->service->product;
    }



    public function update($id)
    {
        DB::transaction(function () use($id){
            $this->service->saveProduct($id);
            $this->service->saveProductSize();
            $this->service->saveProductImages();
            // $this->service->saveProductAttributes($product);
            $this->service->seo();
        });
        return $this->service->product;
    }
}
