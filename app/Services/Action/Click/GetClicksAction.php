<?php

namespace App\Services\Action\Click;

use App\Services\DTO\Click\GetClicksDTO;
use Bavix\LaravelClickHouse\Database\Eloquent\Collection;
use App\Repositories\Read\Click\ClickReadRepositoryInterface;

readonly class GetClicksAction
{
    /**
     * @param ClickReadRepositoryInterface $clickReadRepository
     */
    public function __construct(
        private ClickReadRepositoryInterface $clickReadRepository
    ) {
    }

    public function run(GetClicksDTO $dto): Collection
    {
        return $this->clickReadRepository->index($dto);
    }
}
