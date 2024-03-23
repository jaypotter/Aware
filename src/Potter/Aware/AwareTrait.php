<?php

declare(strict_types=1);

namespace Potter\Aware;

trait AwareTrait 
{
    public function has(string $id): bool
    {
        return property_exists($this, $id);
    }
}