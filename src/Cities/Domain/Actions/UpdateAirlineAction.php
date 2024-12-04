<?php

declare(strict_types=1);

namespace Lightit\Cities\Domain\Actions;

use Lightit\Cities\Domain\DataTransferObjects\AirlineDto;
use Lightit\Cities\Domain\Models\Airline;

class UpdateAirlineAction
{
    public function execute(Airline $airline, AirlineDto $airlineDto): Airline
    {
        $airline->update([
            'name' => $airlineDto->getName(),
            'description' => $airlineDto->getDescription(),
        ]);

        return $airline;
    }
}
