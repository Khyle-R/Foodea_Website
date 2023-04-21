<?php

namespace App\Http\Requests\V1;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

class StoreAppUserRequest extends FormRequest
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
            'firstname' => ['required'],
            'middlename' => ['required'],
            'lastname' => ['required'],
            'height' => ['required', 'numeric'],
            'weight' => ['required', 'numeric'],
            'gender' => ['required', Rule::in(['M','F'])],
            'address' => ['required'],
            'age' => ['required', 'numeric'],
            'contact_number' => ['required', 'numeric'],
            'bmi' => ['required', 'numeric'],
            'email' => ['required', 'email'],
            'password' => ['required'],
            'lifestyle' => ['required'],
            'preferences' => ['required'],
            'latitude' => ['required'],
            'longitude' => ['required']
        ];
    }
}
