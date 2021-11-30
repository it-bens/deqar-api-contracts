<?php

declare(strict_types=1);

namespace ITB\DeqarApiContracts\Report;

final class Flag
{
    public const LEVEL_NONE = 'none';
    public const LEVEL_LOW = 'low';
    public const LEVEL_HIGH = 'high';
    public const ALLOWED_LEVEL = [
        self::LEVEL_NONE,
        self::LEVEL_LOW,
        self::LEVEL_HIGH
    ];

    public function __construct(private string $level)
    {
        if ('' === $this->level) {
            FlagInvalid::empty();
        }

        if (!in_array($this->level, self::ALLOWED_LEVEL, true)) {
            FlagInvalid::unknown($this->level, self::ALLOWED_LEVEL);
        }
    }

    public function get(): string
    {
        return $this->level;
    }
}
