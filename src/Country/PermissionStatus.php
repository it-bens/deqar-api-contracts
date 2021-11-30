<?php

declare(strict_types=1);

namespace ITB\DeqarApiContracts\Country;

final class PermissionStatus
{
    public const PERMISSION_YES = 'yes';
    public const PERMISSION_NO = 'no';
    public const PERMISSION_PARTIALLY = 'partially / with conditions';
    public const PERMISSION_KEY_COMMITMENT_ORANGE = 'key commitment orange';
    public const ALLOWED_PERMISSIONS = [
        self::PERMISSION_YES,
        self::PERMISSION_NO,
        self::PERMISSION_PARTIALLY,
        self::PERMISSION_KEY_COMMITMENT_ORANGE
    ];

    public function __construct(private string $status)
    {
        if ('' === $this->status) {
            throw PermissionStatusInvalid::empty();
        }

        if (!in_array($this->status, self::ALLOWED_PERMISSIONS, true)) {
            throw PermissionStatusInvalid::unknown($this->status, self::ALLOWED_PERMISSIONS);
        }
    }

    public function get(): string
    {
        return $this->status;
    }
}
