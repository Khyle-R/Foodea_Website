<?php

namespace App\Http\Requests\V1;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

class UpdateAppUserRequest extends FormRequest
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

        if ($method == 'PUT'){
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
                'latitude' => ['required', 'numeric'],
                'longitude' => ['required', 'numeric'],
            ];
        } else {
            return [
                'firstname' => ['sometimes', 'required'],
                'middlename' => ['sometimes', 'required'],
                'lastname' => ['sometimes', 'required'],
                'height' => ['sometimes', 'required', 'numeric'],
                'weight' => ['sometimes', 'required', 'numeric'],
                'gender' => ['sometimes', 'required', Rule::in(['M','F'])],
                'address' => ['sometimes', 'required'],
                'age' => ['sometimes', 'required', 'numeric'],
                'contact_number' => ['sometimes', 'required', 'numeric'],
                'bmi' => ['sometimes', 'required', 'numeric'],
                'email' => ['sometimes', 'required', 'email'],
                'password' => ['sometimes', 'required'],
                'lifestyle' => ['sometimes','required'],
                'preferences' => ['sometimes','required'],
                'latitude' => ['sometimes', 'required', 'numeric'],
                'longitude' => ['sometimes', 'required', 'numeric'],
            ];
        }
    }
}
