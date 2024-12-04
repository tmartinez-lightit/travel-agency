<?php

declare(strict_types=1);

namespace Lightit\Cities\Domain\DataTransferObjects;

class AirlineDto
{
    public function __construct(
        private readonly string $name,
        private readonly string|null $description,
    ) {
    }

    public function getName(): string
    {
        return $this->name;
    }

    public function getDescription(): string|null
    {
        return $this->description;
    }
}
