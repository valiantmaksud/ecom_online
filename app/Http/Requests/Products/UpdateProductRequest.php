<?php

namespace App\Http\Requests\Products;

use Illuminate\Foundation\Http\FormRequest;

class UpdateProductRequest extends FormRequest
{
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
        return [
            'name'              => 'required',
            'code'              => 'required|max:255|unique:products,code,' . $this->product->id,
            'image'             => 'nullable|image',
            'description'       => 'nullable',
            'supplier_id'       => 'nullable',
            'unit_id'           => 'nullable',
            'category_name'     => 'nullable',
            'purchase_price'    => 'nullable|numeric',
            'sale_price'        => 'nullable|numeric',
            'opening_qty'       => 'nullable|numeric',
            'current_stock'     => 'nullable|numeric',
        ];
    }
}
