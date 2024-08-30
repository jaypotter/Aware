<?php

declare(strict_types=1);

namespace Potter\Aware;

interface AwareInterface
{
    public function clone(): static;
    public function get(string $var): mixed;
    public function getType(string $var): string;
    public function has(string $var): bool;
    public function with(string $var, mixed $val): static;
    public function without(string $var): static;
}
