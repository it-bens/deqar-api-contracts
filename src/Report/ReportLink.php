<?php

declare(strict_types=1);

namespace ITB\DeqarApiContracts\Report;

final class ReportLink
{
    public function __construct(private string $link, private string $displayName)
    {
        if ('' === $this->link) {
            throw ReportLinkInvalid::linkEmpty();
        }

        if (false === filter_var($this->link, FILTER_VALIDATE_URL)) {
            throw ReportLinkInvalid::linkInvalidUrl($this->link);
        }

        if ('' === $this->displayName) {
            throw ReportLinkInvalid::displayNameEmpty();
        }
    }

    public function getDisplayName(): string
    {
        return $this->displayName;
    }

    public function getLink(): string
    {
        return $this->link;
    }
}
