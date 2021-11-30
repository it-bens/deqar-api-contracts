<?php

declare(strict_types=1);

namespace ITB\DeqarApiContracts\Programme;

use InvalidArgumentException;

final class IdInvalid extends InvalidArgumentException
{
    /**
     * @return self
     */
    public static function empty(): self
    {
        return new self('DEQAR programme id must not be empty.');
    }
}
