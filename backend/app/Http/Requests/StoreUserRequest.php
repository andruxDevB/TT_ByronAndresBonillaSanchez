<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreUserRequest extends FormRequest
{
    public function authorize(): bool
    {
        return true;
    }

    public function rules(): array
    {
        return [
            'type' => 'required',
            'first_name' => 'required|string|min:1|max:25',
            'last_name' => 'required|string|min:1|max:25',
            'email' => 'required|email|unique:users',
            'phone' => 'required|numeric|digits_between:10,15',
            'DOB' => 'required',
            'country' => 'required|string|min:1|max:50',
            'id_card_number' => 'required|unique:profiles',
            'nationality' => 'required|string|min:1|max:30',
            'password' => 'required'
        ];
    }
}
