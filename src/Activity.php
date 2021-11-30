<?php

declare(strict_types=1);

namespace ITB\DeqarApiContracts;

use DateTimeImmutable;
use ITB\DeqarApiContracts\Activity\Description;
use ITB\DeqarApiContracts\Activity\Id;
use ITB\DeqarApiContracts\Activity\Label;
use ITB\DeqarApiContracts\Activity\ReportsWebsite;
use ITB\DeqarApiContracts\Activity\Type;

interface Activity
{
    public function getDescription(): Description;

    public function getLabel(): Label;

    public function getReportsWebsite(): ?ReportsWebsite;

    public function getType(): Type;

    public function getValidUntil(): ?DateTimeImmutable;

    public function identify(): Id;
}
