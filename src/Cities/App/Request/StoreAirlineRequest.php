<?php

declare(strict_types=1);

namespace Lightit\Cities\App\Request;

use Illuminate\Foundation\Http\FormRequest;
use Lightit\Cities\Domain\DataTransferObjects\AirlineDto;

class StoreAirlineRequest extends FormRequest
{
    public const NAME = 'name';

    public const DESCRIPTION = 'description';

    /**
     * @return array<string, mixed>
     */
    public function rules(): array
    {
        return [
            self::NAME => ['required', 'string', 'max:100', 'unique:airlines,name'],
            self::DESCRIPTION => ['nullable', 'string'],
        ];
    }

    public function toDto(): AirlineDto
    {
        return new AirlineDto(
            name: $this->string(self::NAME)->toString(),
            description: $this->string(self::DESCRIPTION)->toString(),
        );
    }
}
