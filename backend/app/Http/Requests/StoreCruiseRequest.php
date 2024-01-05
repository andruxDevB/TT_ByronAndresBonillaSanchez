<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreCruiseRequest extends FormRequest
{
    public function authorize(): bool
    {
        return true;
    }

    public function rules(): array
    {
        return [
            'cruise_name' => 'required|string|max:100',
            'category' => 'required',
            'sales_executive' => 'required|string|max:50',
            'email' => 'required|email',
            'phone' => 'required|numeric|max_digits:13',
        ];
    }
}
