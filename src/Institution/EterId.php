<?php

declare(strict_types=1);

namespace ITB\DeqarApiContracts\Institution;

final class EterId
{
    public function __construct(private string $id)
    {
        if ('' === $this->id) {
            throw EterIdInvalid::empty();
        }
    }

    public function get(): string
    {
        return $this->id;
    }
}
