<?php

declare(strict_types=1);

namespace Potter\Aware;

abstract class AbstractAware implements AwareInterface
{
    abstract public function clone(): static;
    abstract public function get(string $var): mixed;
    abstract public function getType(string $var): string;
    abstract public function has(string $var): bool;
    abstract protected function set(string $var, mixed $val): mixed;
    abstract protected function unset(string $var): void;
    abstract public function with(string $var, mixed $val): static;
    abstract public function without(string $var): static;
}
