<?php

declare(strict_types=1);

namespace ElegantBro\Interfaces\Tests;

use ElegantBro\Interfaces\Tests\Stub\StaticPredicate;
use Exception;
use PHPUnit\Framework\TestCase;

class PredicateTest extends TestCase
{
    /**
     * @throws Exception
     */
    public function testAsBool(): void
    {
        self::assertFalse(
            (new StaticPredicate(false))->asBool()
        );

        self::assertTrue(
            (new StaticPredicate(true))->asBool()
        );
    }
}
