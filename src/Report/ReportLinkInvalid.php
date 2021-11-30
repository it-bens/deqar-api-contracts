<?php

declare(strict_types=1);

namespace ITB\DeqarApiContracts\Report;

use InvalidArgumentException;

final class ReportLinkInvalid extends InvalidArgumentException
{
    /**
     * @return self
     */
    public static function displayNameEmpty(): self
    {
        return new self('DEQAR report report link display name must not be empty.');
    }

    /**
     * @return self
     */
    public static function linkEmpty(): self
    {
        return new self('DEQAR report report link must not be empty.');
    }

    /**
     * @param string $url
     * @return self
     */
    public static function linkInvalidUrl(string $url): self
    {
        return new self(sprintf('DEQAR report report link "%s" is not a valid URL.', $url));
    }
}
