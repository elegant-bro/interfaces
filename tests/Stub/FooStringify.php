<?php

declare(strict_types=1);

namespace ElegantBro\Interfaces\Tests\Stub;

use ElegantBro\Interfaces\Stringify;
use Exception;

final class FooStringify implements Stringify
{
    /**
     * @return string
     * @throws Exception
     */
    public function asString(): string
    {
        return 'foo';
    }
}
