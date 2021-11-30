<?php

declare(strict_types=1);

namespace ITB\DeqarApiContracts\Activity;

final class ReportsWebsite
{
    public function __construct(private string $url)
    {
        if ('' === $this->url) {
            ReportsWebsiteInvalid::empty();
        }

        if (false === filter_var($this->url, FILTER_VALIDATE_URL)) {
            ReportsWebsiteInvalid::invalidUrl($this->url);
        }
    }

    public function get(): string
    {
        return $this->url;
    }
}
