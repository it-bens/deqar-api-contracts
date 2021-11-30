<?php

declare(strict_types=1);

namespace ITB\DeqarApiContracts\Report;

use InvalidArgumentException;

final class DecisionInvalid extends InvalidArgumentException
{
    /**
     * @return self
     */
    public static function empty(): self
    {
        return new self('DEQAR report decision must not be empty.');
    }

    /**
     * @param string $decision
     * @param string[] $allowedDecisions
     * @return self
     */
    public static function unknown(string $decision, array $allowedDecisions): self
    {
        return new self(
            sprintf(
                'DEQAR report decision "%s" is invalid. Valid values are [%s]',
                $decision,
                implode(', ', $allowedDecisions)
            )
        );
    }
}
