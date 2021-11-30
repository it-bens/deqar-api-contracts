<?php

declare(strict_types=1);

namespace ITB\DeqarApiContracts;

use ITB\DeqarApiContracts\Eqar\NqfLevel;
use ITB\DeqarApiContracts\Eqar\QfEheaLevel;
use ITB\DeqarApiContracts\Programme\Id;
use ITB\DeqarApiContracts\Programme\NamePrimary;

interface Programme
{
    public function getNamePrimary(): NamePrimary;

    public function getNqfLevel(): ?NqfLevel;

    public function getQfEheaLevel(): QfEheaLevel;

    public function identify(): Id;
}
