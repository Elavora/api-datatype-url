<?php

declare(strict_types=1);

namespace Elavora\Api\DataTypes\Url\Tests;

use Elavora\Api\DataTypes\Url;
use Elavora\Api\Framework\Contracts\DescribesType;
use PHPUnit\Framework\TestCase;

/**
 * Documentacao do tipo para o OPTIONS publico.
 *
 * @see docs/USO.md
 */
final class DocumentedTypeTest extends TestCase
{
    private const ALLOWED_KEYS = ['type', 'format', 'mask', 'pattern', 'enum', 'example', 'description'];

    public function testImplementsDescribesType(): void
    {
        self::assertTrue(is_subclass_of(Url::class, DescribesType::class));
    }

    public function testDocumentedTypeUsesOnlyAllowedKeys(): void
    {
        $documented = Url::documentedType();

        self::assertArrayHasKey('type', $documented);
        self::assertSame([], array_diff(array_keys($documented), self::ALLOWED_KEYS));
    }

    public function testExampleIsValid(): void
    {
        $documented = Url::documentedType();

        self::assertArrayHasKey('example', $documented);
        self::assertTrue(Url::isValid($documented['example']));

        if (isset($documented['pattern'])) {
            self::assertSame(1, preg_match('~' . $documented['pattern'] . '~', (string) $documented['example']));
        }
    }
}
