<?php

declare(strict_types=1);

namespace ITB\DeqarApiContracts\Activity;

use InvalidArgumentException;

final class TypeInvalid extends InvalidArgumentException
{
    /**
     * @return self
     */
    public static function empty(): self
    {
        return new self('DEQAR activity type must not be empty.');
    }

    /**
     * @param string $type
     * @param string[] $allowedTypes
     * @return self
     */
    public static function unknown(string $type, array $allowedTypes): self
    {
        return new self(
            sprintf(
                'DEQAR activity type "%s" is invalid. Valid values are [%s]',
                $type,
                implode(', ', $allowedTypes)
            )
        );
    }
}
