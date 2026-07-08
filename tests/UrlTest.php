<?php

declare(strict_types=1);

namespace Elavora\Api\DataTypes\Url\Tests;

use Elavora\Api\DataTypes\Url;
use PHPUnit\Framework\TestCase;

final class UrlTest extends TestCase
{
    public function testValidatesUrl(): void
    {
        self::assertTrue(Url::isValid('https://example.com/docs'));
        self::assertFalse(Url::isValid('not-url'));
    }
}
