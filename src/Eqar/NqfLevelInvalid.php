<?php

declare(strict_types=1);

namespace ITB\DeqarApiContracts\Eqar;

use InvalidArgumentException;

final class NqfLevelInvalid extends InvalidArgumentException
{
    /**
     * @param int $deqarId
     * @return self
     */
    public static function negative(int $deqarId): self
    {
        return new self('DEQAR NQL level must be positive.');
    }
}
