<?php

declare(strict_types=1);

namespace Lightit\Cities\App\Controllers;

use Illuminate\Http\JsonResponse;
use Lightit\Cities\App\Request\UpdateCityRequest;
use Lightit\Cities\App\Transformers\CityTransformer;
use Lightit\Cities\Domain\Actions\UpdateCityAction;
use Lightit\Cities\Domain\Models\City;

class UpdateCityController
{
    public function __invoke(City $city, UpdateCityRequest $request, UpdateCityAction $action): JsonResponse
    {
        $city = $action->execute($city, $request->toDto());

        return responder()
            ->success($city, CityTransformer::class)
            ->respond();
    }
}
