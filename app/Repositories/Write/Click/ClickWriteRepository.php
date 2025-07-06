<?php

namespace App\Repositories\Write\Click;

use App\Models\Click;
use Bavix\LaravelClickHouse\Database\Eloquent\Builder;

class ClickWriteRepository implements ClickWriteRepositoryInterface
{
    private function query(): Builder
    {
        return Click::query();
    }

    public function store(array $data): Click
    {
        /** @var Click */
        return $this->query()->create($data);
    }
}
