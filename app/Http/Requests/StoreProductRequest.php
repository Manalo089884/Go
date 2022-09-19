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
            'stock' => 'required',
            'cprice' => 'required',
            'sprice' => 'required',
            'weight' => 'required',
            'description' => 'required',
            'images' => 'image|mimes:jpeg,png,jpg,gif,svg|max:2048',
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
