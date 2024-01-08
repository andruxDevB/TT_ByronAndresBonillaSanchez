<?php

namespace App\Http\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class DriverResource extends JsonResource
{
    public function toArray(Request $request): array
    {
        return [
            'id' => $this->id,
            'company' => $this->company,
            'transport_type' => $this->transport_type,
            'profileDriver' => new GuideDriverProfileResource($this->profile)
        ];
    }
}
