<?php

declare(strict_types=1);

namespace ITB\DeqarApiContracts\Report;

final class LocalId
{
    public function __construct(private string $id)
    {
        if ('' === $this->id) {
            throw LocalIdInvalid::empty();
        }
    }

    public function get(): string
    {
        return $this->id;
    }
}
