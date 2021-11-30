<?php

declare(strict_types=1);

namespace ITB\DeqarApiContracts\Agency;

final class RegistrationNoteInvalid extends \InvalidArgumentException
{
    /**
     * @return self
     */
    public static function empty(): self
    {
        return new self('DEQAR agency registration note must not be empty.');
    }
}
