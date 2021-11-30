<?php

declare(strict_types=1);

namespace ITB\DeqarApiContracts\Agency;

use InvalidArgumentException;

final class AcronymInvalid extends InvalidArgumentException
{
    /**
     * @return self
     */
    public static function empty(): self
    {
        return new self('DEQAR agency acronym must not be empty.');
    }
}
