<?php

declare(strict_types=1);

namespace ITB\DeqarApiContracts\Report;

use InvalidArgumentException;

final class FlagInvalid extends InvalidArgumentException
{
    /**
     * @return self
     */
    public static function empty(): self
    {
        return new self('DEQAR report flag level must not be empty.');
    }

    /**
     * @param string $level
     * @param string[] $allowedLevel
     * @return self
     */
    public static function unknown(string $level, array $allowedLevel): self
    {
        return new self(
            sprintf(
                'DEQAR report flag level "%s" is invalid. Valid values are [%s]',
                $level,
                implode(', ', $allowedLevel)
            )
        );
    }
}
