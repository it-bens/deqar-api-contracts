<?php

declare(strict_types=1);

namespace ITB\DeqarApiContracts;

use DateTimeImmutable;
use ITB\DeqarApiContracts\Country\CommitmentStatus;
use ITB\DeqarApiContracts\Country\CountryCode;
use ITB\DeqarApiContracts\Country\Id;
use ITB\DeqarApiContracts\Country\PermissionStatus;

interface Country
{
    /**
     * @return Agency[]
     */
    public function getAgencies(): iterable;

    public function getCountryCode(): CountryCode;

    public function getEheaKeyCommitment(): CommitmentStatus;

    public function getEqarGovernmentalMemberStart(): ?DateTimeImmutable;

    public function getEuropeanApproachIsPermitted(): PermissionStatus;

    public function getExternalQaaIsPermitted(): PermissionStatus;

    /**
     * @return Institution[]
     */
    public function getInstitutions(): iterable;

    public function identify(): Id;

    public function isHasFullInstitutionList(): bool;
}
