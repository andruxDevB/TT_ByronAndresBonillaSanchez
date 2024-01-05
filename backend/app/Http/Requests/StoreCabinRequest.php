<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreCabinRequest extends FormRequest
{
    public function authorize(): bool
    {
        return true;
    }

    public function rules(): array
    {
        return [
            'idc' => 'required',
            'cabin_name' => 'required|string',
            'deck' => 'required'
        ];
    }
}
