<?php

declare(strict_types=1);

namespace ITB\DeqarApiContracts\Institution;

final class DeqarId
{
    public function __construct(private string $id)
    {
        if ('' === $this->id) {
            throw DeqarIdInvalid::empty();
        }

        if (!str_starts_with('DEQARINST', $this->id)) {
            throw DeqarIdInvalid::invalid($this->id);
        }
    }

    public function get(): string
    {
        return $this->id;
    }
}
