<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;
use App\Models\Product;
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
     * @return array<string, mixed>
     */
    public function rules()
    {
        return [
            'name'=> ['required', Rule::unique('product')->ignore($this->product)],
            'category' => 'required',
            'brand' => 'required',
            'stock' => 'required',
            'cprice' => 'required',
            'sprice' => 'required',
            'weight' => 'required',
            'description' => 'required',
        ];
    }
    public function messages(){
        return [
            'name.required' => 'The product name field is required.',
        ];
    }
}
