<?php

namespace App\Services\Action\Click;

use App\Services\Export\FinanceExporter;
use App\Services\DTO\Click\ForwardClicksDTO;
use App\Repositories\Read\Click\ClickReadRepositoryInterface;

readonly class ForwardClicksAction
{
    /**
     * @param FinanceExporter $exporter
     * @param ClickReadRepositoryInterface $clickReadRepository
     */
    public function __construct(
        private FinanceExporter $exporter,
        private ClickReadRepositoryInterface $clickReadRepository
    ) {
    }

    public function run(ForwardClicksDTO $dto): void
    {
        $clicks = $this->clickReadRepository->getByDate($dto->date);
        $this->exporter->send($clicks->toArray());
    }
}
