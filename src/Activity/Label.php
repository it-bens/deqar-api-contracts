<?php

declare(strict_types=1);

namespace ITB\DeqarApiContracts\Activity;

final class Label
{
    public function __construct(private string $label)
    {
        if ('' === $this->label) {
            throw LabelInvalid::empty();
        }
    }

    public function get(): string
    {
        return $this->label;
    }
}
