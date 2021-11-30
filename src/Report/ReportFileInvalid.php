<?php

declare(strict_types=1);

namespace ITB\DeqarApiContracts\Report;

use InvalidArgumentException;

final class ReportFileInvalid extends InvalidArgumentException
{
    /**
     * @return self
     */
    public static function displayNameEmpty(): self
    {
        return new self('DEQAR report report file display name must not be empty.');
    }

    /**
     * @return self
     */
    public static function languageEmpty(): self
    {
        return new self('DEQAR report report file language must not be empty.');
    }

    /**
     * @return self
     */
    public static function languageNotString(): self
    {
        return new self('DEQAR report report file language %s is not a string.');
    }

    /**
     * @return self
     */
    public static function linkEmpty(): self
    {
        return new self('DEQAR report report file link must not be empty.');
    }

    /**
     * @param string $url
     * @return self
     */
    public static function linkInvalidUrl(string $url): self
    {
        return new self(sprintf('DEQAR report report file link "%s" is not a valid URL.', $url));
    }
}
