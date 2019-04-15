<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class BolsoRequest extends FormRequest
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
            'name'        => 'required | unique:bolsos,name',
            'description' => 'required',
            'price'       => 'required | numeric | min: 0.00',
            'photo'       => 'required | image',
        ];
    }
}
