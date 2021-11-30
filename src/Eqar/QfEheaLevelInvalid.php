<?php

declare(strict_types=1);

namespace ITB\DeqarApiContracts\Eqar;

use InvalidArgumentException;

final class QfEheaLevelInvalid extends InvalidArgumentException
{
    /**
     * @return self
     */
    public static function empty(): self
    {
        return new self('DEQAR QF EHEA level must not be empty.');
    }

    /**
     * @param string $level
     * @param string[] $allowedLevels
     * @return self
     */
    public static function unknown(string $level, array $allowedLevels): self
    {
        return new self(
            sprintf(
                'DEQAR QF EHEA level "%s" is invalid. Valid values are [%s]',
                $level,
                implode(', ', $allowedLevels)
            )
        );
    }
}
