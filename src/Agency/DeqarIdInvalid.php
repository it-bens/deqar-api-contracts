<?php

declare(strict_types=1);

namespace ITB\DeqarApiContracts\Agency;

use InvalidArgumentException;

final class DeqarIdInvalid extends InvalidArgumentException
{
    /**
     * @param int $deqarId
     * @return self
     */
    public static function negative(int $deqarId): self
    {
        return new self('DEQAR agency DEQAR-ID must be positive.');
    }
}
