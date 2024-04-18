<?php

namespace Spatie\Async\Process;

interface Runnable
{
    public function getId(): int;

    public function getPid(): ?int;

    public function start(): void;

    /**
     * @param callable $callback
     *
     * @return static
     */
    public function then(callable $callback): self;

    /**
     * @param callable $callback
     *
     * @return static
     */
    public function catch(callable $callback): self;

    /**
     * @param callable $callback
     *
     * @return static
     */
    public function timeout(callable $callback): self;

    /**
     * @param int|float $timeout The timeout in seconds
     *
     * @return mixed
     */
    public function stop(int|float $timeout = 0): mixed;

    public function getOutput();

    public function getErrorOutput();

    public function triggerSuccess(): mixed;

    public function triggerError(): void;

    public function triggerTimeout(): void;

    public function getCurrentExecutionTime(): float;
}
