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

    public function getEheaKeyCommitmentStatus(): CommitmentStatus;

    public function getEqarGovernmentalMemberStart(): ?DateTimeImmutable;

    public function getEuropeanApproachPermissionStatus(): PermissionStatus;

    public function getExternalQaaPermissionStatus(): PermissionStatus;

    /**
     * @return Institution[]
     */
    public function getInstitutions(): iterable;

    public function hasFullInstitutionList(): bool;

    public function identify(): Id;
}
