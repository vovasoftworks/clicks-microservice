<?php

namespace App\Http\Controllers\Click;

use App\Http\Controllers\Controller;
use App\Services\DTO\Click\GetClicksDTO;
use App\Http\Resources\Click\ClickResource;
use App\Http\Requests\Click\GetClicksRequest;
use App\Services\Action\Click\GetClicksAction;
use Illuminate\Http\Resources\Json\AnonymousResourceCollection;

class GetClicksController extends Controller
{
    /**
     * @param GetClicksRequest $request
     * @param GetClicksAction $action
     *
     * @return AnonymousResourceCollection
     */
    public function __invoke(
        GetClicksRequest $request,
        GetClicksAction $action
    ): AnonymousResourceCollection {
        $dto = GetClicksDTO::fromRequest($request);

        return ClickResource::collection($action->run($dto));
    }
}
