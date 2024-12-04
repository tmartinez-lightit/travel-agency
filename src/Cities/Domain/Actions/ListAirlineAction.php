<?php

declare(strict_types=1);

namespace Lightit\Cities\Domain\Actions;

use Illuminate\Pagination\LengthAwarePaginator;
use Lightit\Cities\Domain\Models\Airline;
use Spatie\QueryBuilder\QueryBuilder;

class ListAirlineAction
{
    /**
     * @return LengthAwarePaginator<Airline>
     */
    public function execute(): LengthAwarePaginator
    {
        /** @var LengthAwarePaginator<Airline> */
        return QueryBuilder::for(Airline::class)
            ->allowedFilters(['name'])
            ->allowedSorts('name')
            ->paginate();
    }
}
