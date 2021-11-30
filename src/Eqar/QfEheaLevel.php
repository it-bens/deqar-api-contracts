<?php

declare(strict_types=1);

namespace ITB\DeqarApiContracts\Eqar;

final class QfEheaLevel
{
    public const SHORT_CYCLE = 'short cycle';
    public const FIRST_CYCLE = 'first cycle';
    public const SECOND_CYCLE = 'second cycle';
    public const THIRD_CYCLE = 'third cycle';
    public const ALLOWED_LEVELS = [
        self::SHORT_CYCLE,
        self::FIRST_CYCLE,
        self::SECOND_CYCLE,
        self::THIRD_CYCLE
    ];

    public function __construct(private string $level)
    {
        if ('' === $this->level) {
            QfEheaLevelInvalid::empty();
        }

        if (!in_array($this->level, self::ALLOWED_LEVELS, true)) {
            QfEheaLevelInvalid::unknown($this->level, self::ALLOWED_LEVELS);
        }
    }

    public function get(): string
    {
        return $this->level;
    }
}
