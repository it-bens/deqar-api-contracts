<?php

declare(strict_types=1);

namespace ITB\DeqarApiContracts\Activity;

use InvalidArgumentException;

final class IdInvalid extends InvalidArgumentException
{
    /**
     * @return self
     */
    public static function empty(): self
    {
        return new self('DEQAR activity id must not be empty.');
    }
}
