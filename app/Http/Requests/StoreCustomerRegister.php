<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreCustomerRegister extends FormRequest
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
            'name' => 'required|max:255',
            'email'=>'required|max:255|email|unique:customers,email',
            'phone'=>'required|numeric',
            'birthday' => 'required',
            'gender' => 'required|max:255',
            'password' => 'required|min:8|max:255|confirmed'
        ];
    }
}
