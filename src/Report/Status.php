<?php

declare(strict_types=1);

namespace ITB\DeqarApiContracts\Report;

final class Status
{
    public const OBLIGATORY = 'part of obligatory EQA system';
    public const VOLUNTARY = 'voluntary';
    public const ALLOWED_STATUS = [
        self::OBLIGATORY,
        self::VOLUNTARY
    ];

    public function __construct(private string $status)
    {
        if ('' === $this->status) {
            StatusInvalid::empty();
        }

        if (!in_array($this->status, self::ALLOWED_STATUS, true)) {
            StatusInvalid::unknown($this->status, self::ALLOWED_STATUS);
        }
    }

    public function get(): string
    {
        return $this->status;
    }
}
