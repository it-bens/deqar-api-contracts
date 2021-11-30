<?php

declare(strict_types=1);

namespace ITB\DeqarApiContracts\Agency;

use InvalidArgumentException;

final class LogoInvalid extends InvalidArgumentException
{
    /**
     * @return self
     */
    public static function empty(): self
    {
        return new self('DEQAR agency logo URL must not be empty.');
    }

    /**
     * @param string $url
     * @return self
     */
    public static function invalidUrl(string $url): self
    {
        return new self(sprintf('DEQAR agency logo URL "%s" is not a valid URL.', $url));
    }
}
