<?php

namespace App\Http\Requests\V1;

use Illuminate\Foundation\Http\FormRequest;

class StoreRiderRequest extends FormRequest
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
            'age' => ['required', 'numeric'],
            'gender' => ['required'],
            'birthdate' => ['required'],
            'email' => ['required', 'email'],
            'mobile_number' => ['required'],
            'address' => ['required'],
            'city' => ['required'],
            'barangay' => ['required'],
            'zip_code' => ['required','numeric']
        ];
    }
}
