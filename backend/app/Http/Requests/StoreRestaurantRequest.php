<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreRestaurantRequest extends FormRequest
{
    public function authorize(): bool
    {
        return true;
    }

    public function rules(): array
    {
        return [
            'restaurant_name' => 'required|string|max:100',
            'country' => 'required|string|max:50',
            'city' => 'required|string|max:50',
            'sales_executive' => 'required|string|max:50',
            'email' => 'email',
            'phone' => 'numeric|max_digits:13|nullable',
        ];
    }
}
