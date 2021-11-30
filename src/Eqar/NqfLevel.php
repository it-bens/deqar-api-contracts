<?php

declare(strict_types=1);

namespace ITB\DeqarApiContracts\Eqar;

final class NqfLevel
{
    public function __construct(private int $level, private bool $isEqfLevel)
    {
        if (0 > $this->level) {
            throw NqfLevelInvalid::negative($this->level);
        }
    }

    public function getLevel(): int
    {
        return $this->level;
    }

    public function isEqfLevel(): bool
    {
        return $this->isEqfLevel;
    }
}
