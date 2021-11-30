<?php

declare(strict_types=1);

namespace ITB\DeqarApiContracts\Agency;

use InvalidArgumentException;

final class NameOfficialInvalid extends InvalidArgumentException
{
    /**
     * @return self
     */
    public static function empty(): self
    {
        return new self('DEQAR agency name official must not be empty.');
    }
}
