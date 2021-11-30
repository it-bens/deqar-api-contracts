<?php

declare(strict_types=1);

namespace ITB\DeqarApiContracts\Activity;

use InvalidArgumentException;

final class ReportsWebsiteInvalid extends InvalidArgumentException
{
    /**
     * @return self
     */
    public static function empty(): self
    {
        return new self('DEQAR activity reports website URL must not be empty.');
    }

    /**
     * @param string $url
     * @return self
     */
    public static function invalidUrl(string $url): self
    {
        return new self(sprintf('DEQAR activity reports website URL "%s" is not a valid URL.', $url));
    }
}
