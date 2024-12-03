<?php

declare(strict_types=1);

namespace Lightit\Cities\App\Controllers;

use Illuminate\Http\JsonResponse;
use Lightit\Cities\Domain\Actions\DeleteCityAction;
use Lightit\Cities\Domain\Models\City;

class DeleteCityController
{
    public function __invoke(City $city, DeleteCityAction $action): JsonResponse
    {
        $action->execute($city);

        return responder()
            ->success()
            ->respond();
    }
}
