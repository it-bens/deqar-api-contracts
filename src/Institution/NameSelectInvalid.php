<?php

declare(strict_types=1);

namespace ITB\DeqarApiContracts\Institution;

use InvalidArgumentException;

final class NameSelectInvalid extends InvalidArgumentException
{
    /**
     * @return self
     */
    public static function empty(): self
    {
        return new self('DEQAR institution name select display must not be empty.');
    }
}
