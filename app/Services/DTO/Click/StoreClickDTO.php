<?php

namespace app\Services\DTO\Click;

use Illuminate\Support\Str;
use Spatie\LaravelData\Data;
use App\Http\Requests\Click\StoreClickRequest;

class StoreClickDTO extends Data
{
    public string $id;
    public string $clickId;
    public int $offerId;
    public string $source;
    public string $timestamp;
    public string $ip;
    public string $userAgent;

    public static function fromRequest(StoreClickRequest $request): self
    {
        return self::from([
            'id' => Str::uuid()->toString(),
            'clickId' => $request->getClickId(),
            'offerId' => $request->getOfferId(),
            'source' => $request->getSource(),
            'timestamp' => $request->getTimestamp(),
            'ip' => $request->ip(),
            'userAgent' => $request->userAgent(),
        ]);
    }
}
