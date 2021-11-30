<?php

declare(strict_types=1);

namespace ITB\DeqarApiContracts\Institution;

final class NameSelect
{
    public function __construct(private string $name)
    {
        if ('' === $this->name) {
            throw NameSelectInvalid::empty();
        }
    }

    public function get(): string
    {
        return $this->name;
    }
}
