<?php

namespace App\Http\Requests;

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
     * @return array<string, mixed>
     */
    public function rules()
    {
        return [
            'name'=>'required|unique:product,name',
            'category' => 'required',
            'brand' => 'required',
            'stock' => 'required|integer|min:0',
            'w_stock' => 'required|integer|min:0',
            'SKU' => 'required',
            'cprice' => 'required|numeric|min:0',
            'sprice' => 'required|numeric|min:0',
            'weight' => 'required|numeric|min:0',
            'supplier' => 'required',
            'description' => 'required',
            //'images' => 'required',
            'images.*' => 'image|mimes:jpeg,png,jpg,gif,svg|max:2048',


        ];
    }
    public function messages(){
        return [
            'name.required' => 'The product name field is required.',
            'cprice.required' => 'The cost price field is required.',
            'sprice.required' => 'The selling price field is required.',
        ];
    }
}
