<?php

namespace App\Http\Requests\Requests;

use Illuminate\Foundation\Http\FormRequest;

class FoodRequest extends FormRequest
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
            'name' => 'required',
            'price' => 'numeric|min:10|max:5000',
            //'photo' => 'required'
            //'photo'=> 'required_without:id|mimes:png,jpg'
        ];
    }
    public function messages()
    {
        return [
            'name.required' => 'Product Name is required.',
            'price.numeric' => 'Product Price must be Numbers Only',
            'price.min' => 'Minimum Price 10 LE',
            'price.max' => 'Maximum Price 5000 LE',
            //'photo.required' => 'Product Photo Is Required'
        ];
    }
}
