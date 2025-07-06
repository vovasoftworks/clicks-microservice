<?php

namespace App\Services\Action\Click;

use App\Models\Click;
use App\Services\DTO\Click\StoreClickDTO;
use App\Repositories\Write\Click\ClickWriteRepositoryInterface;

readonly class StoreClickAction
{
    /**
     * @param ClickWriteRepositoryInterface $clickWriteRepository
     */
    public function __construct(
        private ClickWriteRepositoryInterface $clickWriteRepository
    ) {
    }

    public function run(StoreClickDTO $dto): Click
    {
        return $this->clickWriteRepository->store(array_keys_to_snake_case($dto->toArray()));
    }
}
