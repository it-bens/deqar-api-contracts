<?php

declare(strict_types=1);

namespace ITB\DeqarApiContracts\Agency;

final class DeqarId
{
    public function __construct(private int $id)
    {
        if (0 < $this->id) {
            throw DeqarIdInvalid::negative($this->id);
        }
    }

    public function get(): int
    {
        return $this->id;
    }
}
