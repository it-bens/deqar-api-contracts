<?php

declare(strict_types=1);

namespace ITB\DeqarApiContracts\Report;

final class ReportFile
{
    /**
     * @param string $link
     * @param string $displayName
     * @param string[] $languages
     */
    public function __construct(private string $link, private string $displayName, private array $languages)
    {
        if ('' === $this->link) {
            throw ReportFileInvalid::linkEmpty();
        }

        if (false === filter_var($this->link, FILTER_VALIDATE_URL)) {
            throw ReportFileInvalid::linkInvalidUrl($this->link);
        }

        if ('' === $this->displayName) {
            throw ReportFileInvalid::displayNameEmpty();
        }

        array_walk($this->languages, static function ($language) {
            if (!is_string($language)) {
                throw ReportFileInvalid::languageNotString();
            }

            if ('' === $language) {
                throw ReportFileInvalid::languageEmpty();
            }
        });
    }

    /**
     * @return string
     */
    public function getDisplayName(): string
    {
        return $this->displayName;
    }

    /**
     * @return string[]
     */
    public function getLanguages(): array
    {
        return $this->languages;
    }

    /**
     * @return string
     */
    public function getLink(): string
    {
        return $this->link;
    }
}
