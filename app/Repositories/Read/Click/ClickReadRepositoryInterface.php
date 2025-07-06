<?php

namespace App\Repositories\Read\Click;

use App\Services\DTO\Click\GetClicksDTO;
use Bavix\LaravelClickHouse\Database\Eloquent\Collection;

interface ClickReadRepositoryInterface
{
    public function index(GetClicksDTO $dto): Collection;
    public function getByDate(string $date): Collection;
}
