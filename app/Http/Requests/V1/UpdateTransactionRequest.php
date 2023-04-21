<?php

namespace App\Http\Requests\V1;

use Illuminate\Foundation\Http\FormRequest;

class UpdateTransactionRequest extends FormRequest
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
                'order_key' => ['required'],
                'merchant_id' => ['required', 'numeric'],
                'customer_id' => ['required', 'numeric'],
                'rider_id' => ['required', 'numeric'],
                'product_id' => ['required', 'numeric'],
                'order_status' => ['required']
            ];
        } else {
            return [
                'order_key' => ['sometimes', 'required'],
                'merchant_id' => ['sometimes', 'required', 'numeric'],
                'customer_id' => ['sometimes', 'required', 'numeric'],
                'rider_id' => ['sometimes', 'required', 'numeric'],
                'product_id' => ['sometimes', 'required', 'numeric'],
                'order_status' => ['sometimes', 'required'],
            ];
        }
    }
}
