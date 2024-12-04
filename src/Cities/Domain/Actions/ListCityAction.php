<?php

declare(strict_types=1);

namespace Lightit\Cities\Domain\Actions;

use Illuminate\Pagination\LengthAwarePaginator;
use Lightit\Cities\Domain\Models\City;
use Spatie\QueryBuilder\QueryBuilder;

class ListCityAction
{
    /**
     * @return LengthAwarePaginator<City>
     */
    public function execute(): LengthAwarePaginator
    {
        /** @var LengthAwarePaginator<City> */
        return QueryBuilder::for(City::class)
            ->allowedFilters(['name'])
            ->allowedSorts('name')
            ->paginate();
    }
}
