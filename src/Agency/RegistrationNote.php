<?php

declare(strict_types=1);

namespace ITB\DeqarApiContracts\Agency;

final class RegistrationNote
{
    public function __construct(private string $note)
    {
        if ('' === $this->note) {
        }
    }

    public function get(): string
    {
        return $this->note;
    }
}
