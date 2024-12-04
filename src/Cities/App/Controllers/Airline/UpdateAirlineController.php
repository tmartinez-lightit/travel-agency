<?php

declare(strict_types=1);

namespace Lightit\Cities\App\Controllers\Airline;

use Illuminate\Http\JsonResponse;
use Lightit\Cities\App\Request\UpdateAirlineRequest;
use Lightit\Cities\App\Transformers\AirlineTransformer;
use Lightit\Cities\Domain\Actions\UpdateAirlineAction;
use Lightit\Cities\Domain\Models\Airline;

class UpdateAirlineController
{
    public function __invoke(Airline $airline, UpdateAirlineRequest $request, UpdateAirlineAction $action): JsonResponse
    {
        $airline = $action->execute($airline, $request->toDto());

        return responder()
            ->success($airline, AirlineTransformer::class)
            ->respond();
    }
}
