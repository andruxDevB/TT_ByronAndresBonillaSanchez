<?php

namespace App\Http\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class HotelResource extends JsonResource
{
    public function toArray(Request $request): array
    {
        return [
            'id' => $this->id,
            'hotel_name' => $this->name,
            'hotel_country' => $this->country,
            'hotel_city' => $this->city,
            'hotel_category' => $this->category,
            'sales_executive' => $this->sales_executive,
            'contact_email' => $this->email,
            'contact_phone' => $this->phone,
            'rooms' => new RoomResourceCollection($this->rooms),
        ];
    }
}
