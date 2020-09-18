<?php

declare(strict_types=1);

namespace ElegantBro\Interfaces\Tests\Stub;

use ElegantBro\Interfaces\Iteratee;
use Iterator;

final class FooBarIteratee implements Iteratee
{
    public function asIterator(): Iterator
    {
        yield 'foo';
        yield 'bar';
    }
}
