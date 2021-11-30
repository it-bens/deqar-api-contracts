<?php

declare(strict_types=1);

namespace ITB\DeqarApiContracts\Activity;

final class Description
{
    public function __construct(private string $description)
    {
        if ('' === $this->description) {
            throw DescriptionInvalid::empty();
        }
    }

    public function get(): string
    {
        return $this->description;
    }
}
