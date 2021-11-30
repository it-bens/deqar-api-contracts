<?php

declare(strict_types=1);

namespace ITB\DeqarApiContracts\Report;

use InvalidArgumentException;

final class LocalIdInvalid extends InvalidArgumentException
{
    /**
     * @return self
     */
    public static function empty(): self
    {
        return new self('DEQAR report local id must not be empty.');
    }
}
