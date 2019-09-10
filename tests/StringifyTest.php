<?php declare(strict_types=1);


namespace ElegantBro\Interfaces\Tests;


use ElegantBro\Interfaces\Tests\Stub\FooStringify;
use Exception;
use PHPUnit\Framework\TestCase;

final class StringifyTest extends TestCase
{
    /**
     * @throws Exception
     */
    public function testAsString(): void
    {
        $this->assertEquals(
            'foo',
            (new FooStringify())->asString()
        );
    }
}