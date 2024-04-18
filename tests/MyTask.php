<?php

namespace Spatie\Async\Tests;

use Spatie\Async\Task;

class MyTask extends Task
{
    protected int $i = 0;

    public function configure(): void
    {
        $this->i = 2;
    }

    public function run(): int
    {
        return $this->i;
    }
}
