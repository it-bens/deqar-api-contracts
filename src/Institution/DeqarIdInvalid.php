<?php

declare(strict_types=1);

namespace ITB\DeqarApiContracts\Institution;

use InvalidArgumentException;

final class DeqarIdInvalid extends InvalidArgumentException
{
    /**
     * @return self
     */
    public static function empty(): self
    {
        return new self('DEQAR institution DEQAR-ID must not be empty.');
    }

    /**
     * @param string $id
     * @return self
     */
    public static function invalid(string $id): self
    {
        return new self('DEQAR institution DEQAR-ID "%" is not valid. It has to start with "DEQARINST"');
    }
}
