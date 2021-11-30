<?php

declare(strict_types=1);

namespace ITB\DeqarApiContracts\Agency;

final class Id
{
    public function __construct(private string $id)
    {
        if ('' === $this->id) {
            throw IdInvalid::empty();
        }
    }

    public function get(): string
    {
        return $this->id;
    }
}
