<?php

declare(strict_types=1);

namespace ITB\DeqarApiContracts\Agency;

use InvalidArgumentException;

final class NamePrimaryInvalid extends InvalidArgumentException
{
    /**
     * @return self
     */
    public static function empty(): self
    {
        return new self('DEQAR agency name primary must not be empty.');
    }
}
