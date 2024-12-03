<?php

declare(strict_types=1);

namespace Lightit\Cities\Domain\Actions;

use Lightit\Cities\Domain\Models\City;

class DeleteCityAction
{
    public function execute(City $city): void
    {
        $city->delete();
    }
}
