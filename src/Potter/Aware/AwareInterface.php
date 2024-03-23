<?php

declare(strict_types=1);

namespace Potter\Aware;

interface AwareInterface
{
    public function has(string $id): bool;
}