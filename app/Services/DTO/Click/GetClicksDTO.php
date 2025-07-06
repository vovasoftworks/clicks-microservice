<?php

namespace App\Services\DTO\Click;

use Spatie\LaravelData\Data;
use App\Http\Requests\Click\GetClicksRequest;

class GetClicksDTO extends Data
{
    public string $dateFrom;
    public string $dateTo;
    public ?string $sortBy;
    public string $direction;

    public static function fromRequest(GetClicksRequest $request): self
    {
        return self::from([
            'dateFrom' => $request->getDateFrom(),
            'dateTo' => $request->getDateTo(),
            'sortBy' => $request->getSortBy(),
            'direction' => $request->getDirection()
        ]);
    }
}
