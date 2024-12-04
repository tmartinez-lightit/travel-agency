<?php

declare(strict_types=1);

namespace Lightit\Cities\App\Transformers;

use Flugg\Responder\Transformers\Transformer;
use Lightit\Cities\Domain\Models\Airline;

class AirlineTransformer extends Transformer
{
    /**
     * @return array{id: int, name: string}
     */
    public function transform(Airline $airline): array
    {
        return [
            'id' => (int) $airline->id,
            'name' => (string) $airline->name,
            'description' => (string) $airline->description,
        ];
    }
}
