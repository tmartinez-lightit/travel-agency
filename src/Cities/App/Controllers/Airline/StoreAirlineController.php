<?php

declare(strict_types=1);

namespace Lightit\Cities\App\Controllers\Airline;

use Illuminate\Http\JsonResponse;
use Lightit\Cities\App\Request\StoreAirlineRequest;
use Lightit\Cities\App\Transformers\AirlineTransformer;
use Lightit\Cities\Domain\Actions\StoreAirlineAction;

class StoreAirlineController
{
    public function __invoke(
        StoreAirlineRequest $request,
        StoreAirlineAction $action,
    ): JsonResponse {
        $airline = $action->execute($request->toDto());

        return responder()
            ->success($airline, AirlineTransformer::class)
            ->respond();
    }
}
