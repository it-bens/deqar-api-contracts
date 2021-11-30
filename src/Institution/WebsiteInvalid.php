<?php

declare(strict_types=1);

namespace ITB\DeqarApiContracts\Institution;

use InvalidArgumentException;

final class WebsiteInvalid extends InvalidArgumentException
{
    /**
     * @return self
     */
    public static function empty(): self
    {
        return new self('DEQAR institution website URL must not be empty.');
    }

    /**
     * @param string $url
     * @return self
     */
    public static function invalidUrl(string $url): self
    {
        return new self(sprintf('DEQAR institution website URL "%s" is not a valid URL.', $url));
    }
}
