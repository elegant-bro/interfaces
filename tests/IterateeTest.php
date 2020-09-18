<?php

declare(strict_types=1);

namespace ElegantBro\Interfaces\Tests;

use ElegantBro\Interfaces\Tests\Stub\FooBarIteratee;
use Exception;
use PHPUnit\Framework\TestCase;

final class IterateeTest extends TestCase
{
    /**
     * @throws Exception
     */
    public function testAsArray(): void
    {
        foreach ((new FooBarIteratee())->asIterator() as $item) {
            self::assertRegExp('/^(foo|bar)$/', $item);
        }
    }
}
