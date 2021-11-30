<?php

declare(strict_types=1);

namespace ITB\DeqarApiContracts;

use DateTimeImmutable;
use ITB\DeqarApiContracts\Report\Decision;
use ITB\DeqarApiContracts\Report\Flag;
use ITB\DeqarApiContracts\Report\Id;
use ITB\DeqarApiContracts\Report\LocalId;
use ITB\DeqarApiContracts\Report\ReportFile;
use ITB\DeqarApiContracts\Report\ReportLink;
use ITB\DeqarApiContracts\Report\Status;

interface Report
{
    public function getActivity(): Activity;

    public function getAgency(): Agency;

    /**
     * @return Country[]
     */
    public function getCountries(): iterable;

    public function getCreated(): DateTimeImmutable;

    public function getDecision(): Decision;

    public function getFlag(): Flag;

    /**
     * @return Institution[]
     */
    public function getInstitutions(): iterable;

    /**
     * @return LocalId[]
     */
    public function getLocalIds(): iterable;

    /**
     * @return Programme[]
     */
    public function getProgrammes(): iterable;

    /**
     * @return ReportFile[]
     */
    public function getReportFiles(): iterable;

    /**
     * @return ReportLink[]
     */
    public function getReportLinks(): iterable;

    public function getStatus(): Status;

    public function getUpdated(): DateTimeImmutable;

    public function getValidFrom(): DateTimeImmutable;

    public function getValidUntil(): ?DateTimeImmutable;

    public function identify(): Id;
}
