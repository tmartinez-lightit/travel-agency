<?php

declare(strict_types=1);

namespace Lightit\Cities\App\Request;

use Illuminate\Foundation\Http\FormRequest;
use Lightit\Cities\Domain\DataTransferObjects\CityDto;

class UpdateCityRequest extends FormRequest
{
    public const NAME = 'name';

    /**
     * @return array<string, mixed>
     */
    public function rules(): array
    {
        return [
            self::NAME => ['required', 'string', 'max:100', 'unique:cities,name'],
        ];
    }

    public function toDto(): CityDto
    {
        return new CityDto(
            name: $this->string(self::NAME)->toString(),
        );
    }
}
