<?php

namespace App\Http\Resources\Click;

use Illuminate\Http\Resources\Json\JsonResource;

class ClickResource extends JsonResource
{
    public function toArray($request): array
    {
        return [
            'id' => $this->resource->id,
            'click_id' => $this->resource->click_id,
            'offer_id' => $this->resource->offer_id,
            'source' => $this->resource->source,
            'ip' => $this->resource->ip,
            'user_agent' => $this->resource->user_agent,
            'timestamp' => $this->resource->timestamp
        ];
    }
}
