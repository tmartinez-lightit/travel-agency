<?php

declare(strict_types=1);

namespace Lightit\Cities\Domain\Actions;

use Lightit\Cities\Domain\DataTransferObjects\AirlineDto;
use Lightit\Cities\Domain\Models\Airline;

class StoreAirlineAction
{
    public function execute(AirlineDto $dto): Airline
    {
        $airline = new Airline([
            'name' => $dto->getName(),
            'description' => $dto->getDescription(),
        ]);

        $airline->save();

        return $airline;
    }
}
