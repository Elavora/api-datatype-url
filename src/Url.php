<?php

declare(strict_types=1);

namespace Elavora\Api\DataTypes;

use Elavora\Api\Framework\Contracts\DescribesType;

final readonly class Url extends AbstractDataType implements DescribesType
{
    /**
     * Descreve o tipo para a documentacao publica (OPTIONS).
     *
     * @return array<string, mixed>
     */
    public static function documentedType(): array
    {
        return [
            'type' => 'string',
            'format' => 'url',
            'description' => 'URL absoluta valida, com esquema (ex.: https://).',
            'example' => 'https://example.com/docs',
        ];
    }

    /**
     * Verifica se o valor e uma URL valida.
     */
    public static function isValid(mixed $value): bool
    {
        return is_string($value) && filter_var($value, FILTER_VALIDATE_URL) !== false;
    }
}
