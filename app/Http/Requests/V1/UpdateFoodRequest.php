<?php

namespace App\Http\Requests\V1;

use Illuminate\Foundation\Http\FormRequest;

class UpdateFoodRequest extends FormRequest
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
                'merchant_id' => ['required', 'numeric'],
                'category_id' => ['required', 'numeric'],
                'category_name' => ['required'],
                'ingredients'  => ['required'],
                'product_name'  => ['required'],
                'price'  => ['required', 'numeric'],
                'calories'  => ['required', 'numeric'],
                'product_image'  => ['required'],
                'stock' => ['required', 'numeric'],
                'status'  => ['required'],
                'description' => ['required'],
                'date' => ['date']
            ];
        } else {
            return [
                'merchant_id' => ['sometimes','required', 'numeric'],
                'category_id' => ['sometimes', 'required', 'numeric'],
                'category_name' => ['sometimes', 'required'],
                'ingredients'  => ['sometimes', 'required'],
                'product_name'  => ['sometimes', 'required'],
                'price'  => ['sometimes', 'required', 'numeric'],
                'calories'  => ['sometimes', 'required', 'numeric'],
                'product_image'  => ['sometimes', 'required'],
                'stock' => ['sometimes', 'required', 'numeric'],
                'status'  => ['sometimes', 'required'],
                'description' => ['sometimes', 'required'],
                'date' => ['sometimes', 'date']
            ];
        }
    }
}
