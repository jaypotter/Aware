<?php

declare(strict_types=1);

namespace Potter\Aware;

trait AwareTrait 
{    
    final public function clone(): static
    {
        return clone $this;
    }
    
    final public function get(string $var): mixed
    {
        return $this->$var;
    }
    
    final public function getType(string $var): string
    {
        return gettype($var);
    }
    
    final public function has(string $var): bool
    {
        return property_exists($this, $var) && isset($this->$var);
    }
    
    final protected function set(string $var, mixed $val): mixed
    {
        return $this->$var = $val;
    }
    
    final protected function unset(string $var): void
    {
        unset($this->$var);
    }
    
    final public function with(string $var, mixed $val): static
    {
        $clone = $this->clone();
        $clone->set($var, $val);
        return $clone;
    }
    
    final public function without(string $var): static
    {
        $clone = $this->clone();
        $clone->unset($var);
        return $clone;
    }
}
