<?php

namespace App\Http\Requests\Products;

use Illuminate\Foundation\Http\FormRequest;

class StoreProductRequest extends FormRequest
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
            'code'              => 'required|unique_with:products,supplier_id|max:255',
            'unit_id'           => 'nullable',
            'description'       => 'nullable',
            'category_name'     => 'nullable',
            'purchase_price'    => 'nullable|numeric',
            'sale_price'        => 'nullable|numeric',
            'opening_qty'       => 'nullable|numeric',
            'free_qty'          => 'nullable|numeric',
            'current_stock'     => 'nullable|numeric',
        ];
    }
}
