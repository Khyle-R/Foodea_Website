<?php

namespace App\Http\Requests\V1;

use Illuminate\Foundation\Http\FormRequest;

class StoreFoodRequest extends FormRequest
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
            'merchant_id' => ['required', 'numeric'],
            'category_id' => ['required', 'numeric'],
            'product_name' => ['required'],
            'price' => ['required', 'numeric'],
            'calories' => ['required', 'numeric'],
            'product_image' => ['required'],
            'stock' => ['required', 'numeric'],
            'status' => ['required'],
            'description' => ['required'],
        ];
    }
}
