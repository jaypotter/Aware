<?php

declare(strict_types=1);

namespace Potter\Aware;

abstract class AbstractAware implements AwareInterface
{
    abstract public function get(string $id): mixed;
    abstract public function has(string $id): bool;
    abstract protected function set(string $id, mixed $entry): void;
    abstract protected function unset(string $id): void;
}