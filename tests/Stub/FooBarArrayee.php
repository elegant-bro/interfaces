<?php declare(strict_types=1);


namespace ElegantBro\Interfaces\Tests\Stub;


use ElegantBro\Interfaces\Arrayee;
use Exception;

final class FooBarArrayee implements Arrayee
{

    /**
     * @return array
     * @throws Exception
     */
    public function asArray(): array
    {
        return ['foo' => 'bar'];
    }
}