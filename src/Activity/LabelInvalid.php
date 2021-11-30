<?php

declare(strict_types=1);

namespace ITB\DeqarApiContracts\Activity;

use InvalidArgumentException;

final class LabelInvalid extends InvalidArgumentException
{
    /**
     * @return self
     */
    public static function empty(): self
    {
        return new self('DEQAR activity label must not be empty.');
    }
}
