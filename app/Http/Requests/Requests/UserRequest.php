<?php

namespace App\Http\Requests\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UserRequest extends FormRequest
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
            'name' => 'required|unique:users,name',
            'email'=> 'required|unique:users,email',
            
        ];
    }
    public function messages()
    {
        return [
            'name.required' => 'Name Field is Required.',
            'name.unique' => 'Name Is Already Taken.',
            'email.required' => 'Email Field is Required.',
            'email.unique' => 'This Email Has Already Registered.',
            
        ];
    }
}
