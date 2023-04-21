<?php

namespace App\Http\Requests\V1;

use Illuminate\Foundation\Http\FormRequest;

class UpdateRiderRequest extends FormRequest
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

        $method = $this->method();

        if($method == 'PUT'){
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
                'zip_code' => ['required','numeric'],
                'latitude' => ['required', 'numeric'],
                'longitude' => ['required', 'numeric'],
            ];
        } else {
            return [
                'firstname' => ['sometimes', 'required'],
                'middlename' => ['sometimes', 'required'],
                'lastname' => ['sometimes', 'required'],
                'age' => ['sometimes', 'required', 'numeric'],
                'gender' => ['sometimes', 'required'],
                'birthdate' => ['sometimes', 'required'],
                'email' => ['sometimes', 'required', 'email'],
                'mobile_number' => ['sometimes', 'required'],
                'address' => ['sometimes', 'required'],
                'city' => ['sometimes', 'required'],
                'barangay' => ['sometimes', 'required'],
                'zip_code' => ['sometimes', 'required','numeric'],
                'latitude' => ['sometimes','required', 'numeric'],
                'longitude' => ['sometimes','required', 'numeric'],
            ];
        }
    }
}
