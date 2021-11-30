<?php

declare(strict_types=1);

namespace ITB\DeqarApiContracts\Country;

final class CommitmentStatus
{
    public const COMMITMENT_YES = 'yes';
    public const COMMITMENT_NO = 'no';
    public const COMMITMENT_PARTIALLY = 'partially / with conditions';
    public const COMMITMENT_KEY_COMMITMENT_ORANGE = 'key commitment orange';
    public const ALLOWED_COMMITMENTS = [
        self::COMMITMENT_YES,
        self::COMMITMENT_NO,
        self::COMMITMENT_PARTIALLY,
        self::COMMITMENT_KEY_COMMITMENT_ORANGE
    ];

    public function __construct(private string $status)
    {
        if ('' === $this->status) {
            throw CommitmentStatusInvalid::empty();
        }

        if (!in_array($this->status, self::ALLOWED_COMMITMENTS, true)) {
            throw CommitmentStatusInvalid::unknown($this->status, self::ALLOWED_COMMITMENTS);
        }
    }

    public function get(): string
    {
        return $this->status;
    }
}
