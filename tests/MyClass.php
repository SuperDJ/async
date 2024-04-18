<?php

namespace Spatie\Async\Tests;

class MyClass
{
    public $property = null;

    public function throwException(): void
    {
        throw new MyException('test');
    }
}
