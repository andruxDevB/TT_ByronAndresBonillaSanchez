<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreInternationalFlightRequest extends FormRequest
{
    public function authorize(): bool
    {
        return true;
    }

    public function rules(): array
    {
        return [
            'idp' => 'required',
            'route' => 'required',
            'date_flight' => 'required|date',
            'airline' => 'required',
            'flight_number' => 'required|max:6',
            'departure_time' => 'required',
            'arrival_time' => 'required',
        ];
    }
}
