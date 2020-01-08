<?php

declare(strict_types=1);

namespace ElegantBro\Interfaces\Tests\Stub;

use ElegantBro\Interfaces\Numeric;
use Exception;

final class NumberFive implements Numeric
{
    /**
     * @return string Number
     * @throws Exception
     */
    public function asNumber(): string
    {
        return '5';
    }
}
