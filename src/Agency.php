<?php

declare(strict_types=1);

namespace ITB\DeqarApiContracts;

use DateTimeImmutable;
use ITB\DeqarApiContracts\Agency\Acronym;
use ITB\DeqarApiContracts\Agency\Id;
use ITB\DeqarApiContracts\Agency\Logo;
use ITB\DeqarApiContracts\Agency\NameOfficial;
use ITB\DeqarApiContracts\Agency\NamePrimary;
use ITB\DeqarApiContracts\Agency\RegistrationNote;

interface Agency
{
    public function getAcronym(): Acronym;

    /**
     * @return Activity[]
     */
    public function getActivities(): iterable;

    public function getCountry(): Country;

    /**
     * DEQAR ID is not used because it's identical to 'id' field
     * public function getDeqarId(): DeqarId;
     */

    public function getLogo(): ?Logo;

    public function getNameOfficialDisplay(): ?NameOfficial;

    public function getNamePrimary(): NamePrimary;

    public function getRegistrationNote(): ?RegistrationNote;

    public function getRegistrationValidFrom(): DateTimeImmutable;

    public function getRegistrationValidUntil(): DateTimeImmutable;

    /**
     * @return Report[]
     */
    public function getReports(): iterable;

    public function identitfy(): Id;
}
