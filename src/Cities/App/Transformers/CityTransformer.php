<?php

declare(strict_types=1);

namespace Lightit\Cities\App\Transformers;

use Flugg\Responder\Transformers\Transformer;
use Lightit\Cities\Domain\Models\City;

class CityTransformer extends Transformer
{
    /**
     * @return array{id: int, name: string}
     */
    public function transform(City $city): array
    {
        return [
            'id' => (int) $city->id,
            'name' => (string) $city->name,
        ];
    }
}
