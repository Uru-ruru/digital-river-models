<?php

namespace Uru\DR;

/**
 * Class ProductDescriptions.
 */
class ProductDescriptions extends BaseDRModel
{
    private string $language = self::FIELD_NOT_SET;

    private string $display_name = self::FIELD_NOT_SET;

    private string $short_description = self::FIELD_NOT_SET;

    private string $full_description = self::FIELD_NOT_SET;

    private string $install_note = self::FIELD_NOT_SET;

    private string $key_template = self::FIELD_NOT_SET;

    public function setLanguage(string $language): void
    {
        $this->language = $language;
    }

    public function setDisplayName(string $display_name): void
    {
        $this->display_name = $display_name;
    }

    public function setFullDescription(string $full_description): void
    {
        $this->full_description = $full_description;
    }

    public function setInstallNote(string $install_note): void
    {
        $this->install_note = $install_note;
    }

    public function setKeyTemplate(string $key_template): void
    {
        $this->key_template = $key_template;
    }

    public function setShortDescription($short_description): void
    {
        $this->short_description = $short_description;
    }

    public function jsonSerialize(): array
    {
        $data = [
            'language' => $this->language,
            'display_name' => $this->display_name,
            'short_description' => $this->short_description,
            'full_description' => $this->full_description,
            'install_note' => $this->install_note,
            'key_template' => $this->key_template,
        ];

        return $this->filterUnsetFields($data);
    }
}
