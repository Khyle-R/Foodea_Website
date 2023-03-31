<?php

namespace App\Http\Requests\V1;

use Illuminate\Foundation\Http\FormRequest;

class StoreOrderRequest extends FormRequest
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
            'customer_id' => ['required', 'numeric'],
            'product_id' => ['required', 'numeric'],
            'order_key' => ['required'],
            'restaurant_id'  => ['required', 'numeric'],
            'quantity'  => ['required', 'numeric'],
            'total'  => ['required', 'numeric'],
            'status' => ['required'],
            'payment_type' => ['required'],
            'latitude' => ['required', 'numeric'],
            'longitude' => ['required', 'numeric'],
            'date' => ['date']
        ];
    }
}
