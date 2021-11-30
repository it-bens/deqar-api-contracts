<?php

declare(strict_types=1);

namespace ITB\DeqarApiContracts;

use ITB\DeqarApiContracts\Eqar\QfEheaLevel;
use ITB\DeqarApiContracts\Institution\DeqarId;
use ITB\DeqarApiContracts\Institution\EterId;
use ITB\DeqarApiContracts\Institution\Id;
use ITB\DeqarApiContracts\Institution\NameOfficial;
use ITB\DeqarApiContracts\Institution\NamePrimary;
use ITB\DeqarApiContracts\Institution\NameSelect;
use ITB\DeqarApiContracts\Institution\Website;

interface Institution
{
    public function getCountry(): Country;

    public function getDeqarId(): DeqarId;

    public function getEterId(): ?EterId;

    public function getNameOfficialDisplay(): NameOfficial;

    public function getNamePrimary(): NamePrimary;

    public function getNameSelectDisplay(): NameSelect;

    /**
     * @return QfEheaLevel[]
     */
    public function getQfEheaLevels(): iterable;

    public function getWebsite(): ?Website;

    public function identify(): Id;
}
