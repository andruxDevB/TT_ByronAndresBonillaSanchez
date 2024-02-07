<?php

namespace App\Http\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class CruiseResource extends JsonResource
{
    public function toArray(Request $request): array
    {
        return [
            'id' => $this->id,
            'cruise_name' => $this->name,
            'cruise_category' => $this->category,
            'sales_executive' => $this->sales_executive,
            'contact_email' => $this->email,
            'contact_phone' => $this->phone,
            'cabins' => new CabinResourceCollection($this->cabins),
        ];
    }
}
