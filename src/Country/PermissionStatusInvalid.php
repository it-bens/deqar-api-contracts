<?php

declare(strict_types=1);

namespace ITB\DeqarApiContracts\Country;

use InvalidArgumentException;

final class PermissionStatusInvalid extends InvalidArgumentException
{
    /**
     * @return self
     */
    public static function empty(): self
    {
        return new self('DEQAR country permission status must not be empty.');
    }

    /**
     * @param string $status
     * @param string[] $allowedStatus
     * @return self
     */
    public static function unknown(string $status, array $allowedStatus): self
    {
        return new self(
            sprintf(
                'DEQAR country permission status "%s" is invalid. Valid values are [%s]',
                $status,
                implode(', ', $allowedStatus)
            )
        );
    }
}
