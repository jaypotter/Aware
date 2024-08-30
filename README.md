# Aware
PHP Aware Interface

```php
public function clone(): static;
public function get(string $var): mixed;
public function getType(string $var): string;
public function has(string $var): bool;
protected function set(string $var, mixed $val): mixed;
protected function unset(string $var): void;
public function with(string $var, mixed $val): static;
public function without(string $var): static;
