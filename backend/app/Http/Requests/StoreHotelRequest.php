<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreHotelRequest extends FormRequest
{
    public function authorize(): bool
    {
        return true;
    }

    public function rules(): array
    {
        return [
            'name' => 'required|string|max:100',
            'country' => 'required|string|max:50',
            'city' => 'required|string|max:50',
            'category' => 'required',
            'sales_executive' => 'required|string|max:50',
            'email' => 'required|email',
            'phone' => 'required|numeric|max_digits:13',
        ];
    }
}
