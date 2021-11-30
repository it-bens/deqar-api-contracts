<?php

declare(strict_types=1);

namespace ITB\DeqarApiContracts\Institution;

use InvalidArgumentException;

final class EterIdInvalid extends InvalidArgumentException
{
    /**
     * @return self
     */
    public static function empty(): self
    {
        return new self('DEQAR institution ETER-ID must not be empty.');
    }
}
