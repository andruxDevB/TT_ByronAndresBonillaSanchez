<?php

namespace App\Http\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class GuideResource extends JsonResource
{
    public function toArray(Request $request): array
    {
        return [
            'id' => $this->id,
            'languajes' => $this->languajes,
            'profileGuide' => new GuideDriverProfileResource($this->profile)
        ];
    }
}
