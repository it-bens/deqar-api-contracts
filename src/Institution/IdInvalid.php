<?php

declare(strict_types=1);

namespace ITB\DeqarApiContracts\Institution;

final class IdInvalid extends \InvalidArgumentException
{
    /**
     * @return self
     */
    public static function empty(): self
    {
        return new self('DEQAR institution id must not be empty.');
    }
}
