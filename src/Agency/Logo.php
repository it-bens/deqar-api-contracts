<?php

declare(strict_types=1);

namespace ITB\DeqarApiContracts\Agency;

final class Logo
{
    public function __construct(private string $url)
    {
        if ('' === $this->url) {
            LogoInvalid::empty();
        }

        if (false === filter_var($this->url, FILTER_VALIDATE_URL)) {
            LogoInvalid::invalidUrl($this->url);
        }
    }

    public function get(): string
    {
        return $this->url;
    }
}
