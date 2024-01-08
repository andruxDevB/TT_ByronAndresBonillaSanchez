<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreDriverRequest extends FormRequest
{
    public function authorize(): bool
    {
        return true;
    }

    public function rules(): array
    {
        return [
            'first_name' => 'required|string|min:1|max:25',
            'last_name' => 'required|string|min:1|max:25',
            'email' => 'required|email|unique:guide_driver_profiles',
            'phone' => 'required|numeric|digits_between:10,15',
            'id_card_number' => 'required|unique:guide_driver_profiles',
            'company' => 'required|string',
            'transport_type' => 'required|string'
        ];
    }
}
