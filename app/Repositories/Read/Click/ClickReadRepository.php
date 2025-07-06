<?php

namespace App\Repositories\Read\Click;

use App\Models\Click;
use App\Services\DTO\Click\GetClicksDTO;
use Tinderbox\Clickhouse\Exceptions\ClientException;
use Bavix\LaravelClickHouse\Database\Eloquent\Builder;
use Bavix\LaravelClickHouse\Database\Eloquent\Collection;

class ClickReadRepository implements ClickReadRepositoryInterface
{
    private function query(): Builder
    {
        return Click::query();
    }

    /**
     * @throws ClientException
     */
    public function index(GetClicksDTO $dto): Collection
    {
        return $this->query()
            ->whereBetween('timestamp', [$dto->dateFrom, $dto->dateTo])
            ->when(isset($dto->sortBy), function ($query) use ($dto) {
                $query->orderBy($dto->sortBy, $dto->direction);
            })
            ->get();
    }

    /**
     * @throws ClientException
     */
    public function getByDate(string $date): Collection
    {
        return $this->query()
            ->where('timestamp', $date)
            ->get();
    }
}
