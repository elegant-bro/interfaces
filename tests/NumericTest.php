<?php

declare(strict_types=1);

namespace ElegantBro\Interfaces\Tests;

use ElegantBro\Interfaces\Tests\Stub\NumberFive;
use Exception;
use PHPUnit\Framework\TestCase;

final class NumericTest extends TestCase
{
    /**
     * @throws Exception
     */
    public function testAsNumber(): void
    {
        $this->assertEquals(
            5,
            (new NumberFive())->asNumber()
        );
    }
}
