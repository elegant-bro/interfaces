<?php

declare(strict_types=1);

namespace ElegantBro\Interfaces\Tests\Stub;

use ElegantBro\Interfaces\Predicate;

class StaticPredicate implements Predicate
{
    /**
     * @var bool
     */
    private $val;

    public function __construct(bool $val)
    {
        $this->val = $val;
    }

    /**
     * @inheritDoc
     */
    public function asBool(): bool
    {
        return $this->val;
    }
}
