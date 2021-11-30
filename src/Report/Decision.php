<?php

declare(strict_types=1);

namespace ITB\DeqarApiContracts\Report;

final class Decision
{
    public const POSITIVE = 'positive';
    public const POSITIVE_WITH_CONDITIONS = 'positive with conditions or restrictions';
    public const NEGATIVE = 'negative';
    public const NOT_APPLICABLE = 'not applicable';
    public const ALLOWED_DECISIONS = [
        self::POSITIVE,
        self::POSITIVE_WITH_CONDITIONS,
        self::NEGATIVE,
        self::NOT_APPLICABLE
    ];

    public function __construct(private string $decision)
    {
        if ('' === $this->decision) {
            DecisionInvalid::empty();
        }

        if (!in_array($this->decision, self::ALLOWED_DECISIONS, true)) {
            DecisionInvalid::unknown($this->decision, self::ALLOWED_DECISIONS);
        }
    }

    public function get(): string
    {
        return $this->decision;
    }
}
