<?php

declare(strict_types=1);

namespace Potter\Aware;

interface AwareInterface
{
    public function get(string $id): mixed;
    public function has(string $id): bool;
}