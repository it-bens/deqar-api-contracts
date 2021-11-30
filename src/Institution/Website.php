<?php

declare(strict_types=1);

namespace ITB\DeqarApiContracts\Institution;

final class Website
{
    public function __construct(private string $url)
    {
        if ('' === $this->url) {
            WebsiteInvalid::empty();
        }

        if (false === filter_var($this->url, FILTER_VALIDATE_URL)) {
            WebsiteInvalid::invalidUrl($this->url);
        }
    }

    public function get(): string
    {
        return $this->url;
    }
}
