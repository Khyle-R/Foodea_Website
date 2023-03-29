<?php

namespace App\Http\Requests\V1;

use Illuminate\Foundation\Http\FormRequest;

class UpdateOrderRequest extends FormRequest
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
                'customer_id' => ['required', 'numeric'],
                'product_id' => ['required', 'numeric'],
                'order_key' => ['required'],
                'restaurant_id'  => ['required', 'numeric'],
                'quantity'  => ['required', 'numeric'],
                'total'  => ['required', 'numeric'],
                'status' => ['required'],
                'payment_type' => ['required'],
                'date' => ['date']
            ];
        } else {
            return [
                'customer_id' => ['sometimes', 'required', 'numeric'],
                'product_id' => ['sometimes', 'required', 'numeric'],
                'order_key' => ['sometimes', 'required'],
                'restaurant_id'  => ['sometimes', 'required', 'numeric'],
                'quantity'  => ['sometimes', 'required', 'numeric'],
                'total'  => ['sometimes', 'required', 'numeric'],
                'status' => ['sometimes', 'required'],
                'payment_type' => ['sometimes', 'required'],
                'date' => ['sometimes', 'date']
            ];
        }
    }
}
