<?php

namespace App\Services\Export;

use Illuminate\Support\Facades\Http;

class FinanceExporter
{
    public function send(array $clicks): void
    {
        Http::post(config('services.finance.endpoint'), [
            'clicks' => $clicks,
        ]);
    }
}
