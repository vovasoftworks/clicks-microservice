<?php

namespace App\Services\DTO\Click;

use Spatie\LaravelData\Data;
use App\Http\Requests\Click\ForwardClicksRequest;

class ForwardClicksDTO extends Data
{
    public string $date;

    public static function fromRequest(ForwardClicksRequest $request): self
    {
        return self::from(['date' => $request->get('date'),]);
    }
}
