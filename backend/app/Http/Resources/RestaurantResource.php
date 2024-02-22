<?php

namespace App\Http\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class RestaurantResource extends JsonResource
{
    public function toArray(Request $request): array
    {
        return [
            'id' => $this->id,
            'restaurant_name' => $this->name,
            'restaurant_country' => $this->country,
            'restaurant_city' => $this->city,
            'sales_executive' => $this->sales_executive,
            'contact_email' => $this->email,
            'contact_phone' => $this->phone,
            'menus' => new MenuResourceCollection($this->menus),
        ];
    }
}
