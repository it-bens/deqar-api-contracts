<?php

declare(strict_types=1);

namespace ITB\DeqarApiContracts\Agency;

final class Acronym
{
    public function __construct(private string $acronym)
    {
        if ('' === $this->acronym) {
            throw AcronymInvalid::empty();
        }
    }

    public function get(): string
    {
        return $this->acronym;
    }
}
