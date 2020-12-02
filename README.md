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

final class MyClass implements Stringify
{
    /**
     * @return string
     */
    public function asString(): string
    {
        return $this->domain;
    }
}
```