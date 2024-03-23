<?php

declare(strict_types=1);

namespace Potter\Aware;

abstract class AbstractAware implements AwareInterface
{
    abstract public function has(string $id): bool;
}