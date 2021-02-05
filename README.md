[![Build Status](https://travis-ci.com/elegant-bro/interfaces.svg?branch=master)](https://travis-ci.com/elegant-bro/interfaces)
# Make your objects elegant

## Installation

```
composer require elegant-bro/interfaces
```

## Basic usage 

```php
<?php

declare(strict_types=1);

use ElegantBro\Interfaces\Stringify;

final class MyStringify implements Stringify
{
    /**
     * @return string
     * @throws Exception
     */
    public function asString(): string
    {
        return "Hello World";
    }
}
```

```php
<?php

declare(strict_types=1);

use ElegantBro\Interfaces\Numeric;

final class MyNumeric implements Numeric
{
    /**
     * @return string
     * @throws Exception
     */
    public function asNumber(): string
    {
        return "5";
    }
}
```

```php
<?php

declare(strict_types=1);

use ElegantBro\Interfaces\Iteratee;

final class MyIteratee implements Iteratee
{
    /**
     * @return Iterator
     * @throws Exception
     */
    public function asIterator(): Iterator
    {
        yield 'foo';
        yield 'bar';
    }
}
```

```php
<?php

declare(strict_types=1);

use ElegantBro\Interfaces\Arrayee;

final class MyArrayee implements Arrayee
{
    /**
     * @return array
     * @throws Exception
     */
    public function asArray(): array
    {
        return [1, 2, 3];
    }
}
```

```php
<?php

declare(strict_types=1);

use ElegantBro\Interfaces\Predicate;

final class Odd implements Predicate
{
    /**
     * @var int
     */
    private $val;
 
    public function __construct(int $val) 
    {
        $this->val = $val;
    }
    
    public function asBool() : bool
    {
        return 0 !== $this->val % 2;
    }
}
```