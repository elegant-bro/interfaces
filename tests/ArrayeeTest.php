<?php declare(strict_types=1);


namespace ElegantBro\Interfaces\Tests;


use ElegantBro\Interfaces\Tests\Stub\FooBarArrayee;
use Exception;
use PHPUnit\Framework\TestCase;

final class ArrayeeTest extends TestCase
{
    /**
     * @throws Exception
     */
    public function testAsArray(): void
    {
        $this->assertEquals(
            ['foo' => 'bar'],
            (new FooBarArrayee())->asArray()
        );
    }
}