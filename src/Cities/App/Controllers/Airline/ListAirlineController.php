<?php

declare(strict_types=1);

namespace Lightit\Cities\App\Controllers\Airline;

use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;
use Lightit\Cities\App\Transformers\AirlineTransformer;
use Lightit\Cities\Domain\Actions\ListAirlineAction;

class ListAirlineController
{
    public function __invoke(
        Request $request,
        ListAirlineAction $action,
    ): JsonResponse {
        $airlines = $action->execute();

        return responder()
            ->success($airlines, AirlineTransformer::class)
            ->respond();
    }
}
