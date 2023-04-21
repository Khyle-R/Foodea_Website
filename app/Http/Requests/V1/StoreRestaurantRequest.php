<?php

namespace App\Http\Requests\V1;

use Illuminate\Foundation\Http\FormRequest;

class StoreRestaurantRequest extends FormRequest
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
            'business_type' => ['required'],
            'business_name' => ['required'],
            'date_founded' => ['required'],
            'country' => ['required'],
            'address' => ['required'],
            'city' => ['required'],
            'barangay' => ['required'],
            'street' => ['required'],
            'postal_code' => ['required'],
            'store_number' => ['required'],
            'store_email' => ['required'],
            'mission' => ['required'],
            'vision' => ['required'],
        ];
    }
}
