<?php

declare(strict_types=1);

namespace ITB\DeqarApiContracts\Country;

use InvalidArgumentException;

final class CountryCodeInvalid extends InvalidArgumentException
{
    /**
     * @return self
     */
    public static function empty(): self
    {
        return new self('DEQAR country country code must not be empty.');
    }

    /**
     * @param string $code
     * @param string[] $allowedCodes
     * @return self
     */
    public static function unknown(string $code, array $allowedCodes): self
    {
        return new self(
            sprintf(
                'DEQAR country country code "%s" is invalid. Valid values are [%s]',
                $code,
                implode(', ', $allowedCodes)
            )
        );
    }
}
