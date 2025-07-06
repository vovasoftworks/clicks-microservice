<?php

namespace App\Http\Controllers\Click;

use App\Http\Controllers\Controller;
use App\Services\DTO\Click\StoreClickDTO;
use App\Http\Resources\Click\ClickResource;
use App\Http\Requests\Click\StoreClickRequest;
use App\Services\Action\Click\StoreClickAction;

class StoreClickController extends Controller
{
    /**
     * @param StoreClickRequest $request
     * @param StoreClickAction $action
     *
     * @return ClickResource
     */
    public function __invoke(
        StoreClickRequest $request,
        StoreClickAction $action
    ): ClickResource {
        $dto = StoreClickDTO::fromRequest($request);

        return new ClickResource($action->run($dto));
    }
}
