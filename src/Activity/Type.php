<?php

declare(strict_types=1);

namespace ITB\DeqarApiContracts\Activity;

final class Type
{
    public const INSTITUTIONAL = 'institutional';
    public const PROGRAMME = 'programme';
    public const JOINT_PROGRAMME = 'joint programme';
    public const INSTITUTIONAL_PROGRAMME = 'institutional/programme';
    public const ALLOWED_TYPES = [
        self::INSTITUTIONAL,
        self::PROGRAMME,
        self::JOINT_PROGRAMME,
        self::INSTITUTIONAL_PROGRAMME
    ];

    public function __construct(private string $type)
    {
        if ('' === $this->type) {
            TypeInvalid::empty();
        }

        if (!in_array($this->type, self::ALLOWED_TYPES, true)) {
            TypeInvalid::unknown($this->type, self::ALLOWED_TYPES);
        }
    }

    public function get(): string
    {
        return $this->type;
    }
}
