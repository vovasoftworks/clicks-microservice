<?php

namespace App\Http\Controllers\Click;

use Illuminate\Http\Response;
use App\Http\Controllers\Controller;
use App\Services\DTO\Click\ForwardClicksDTO;
use App\Http\Requests\Click\ForwardClicksRequest;
use App\Services\Action\Click\ForwardClicksAction;

class ForwardClicksController extends Controller
{
    /**
     * @param ForwardClicksRequest $request
     * @param ForwardClicksAction $action
     *
     * @return Response
     */
    public function __invoke(
        ForwardClicksRequest $request,
        ForwardClicksAction  $action
    ): Response {
        $dto = ForwardClicksDTO::fromRequest($request);
        $action->run($dto);

        return response()->noContent();
    }
}
