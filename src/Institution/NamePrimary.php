<?php

declare(strict_types=1);

namespace ITB\DeqarApiContracts\Institution;

final class NamePrimary
{
    public function __construct(private string $name)
    {
        if ('' === $this->name) {
            throw NamePrimaryInvalid::empty();
        }
    }

    public function get(): string
    {
        return $this->name;
    }
}
