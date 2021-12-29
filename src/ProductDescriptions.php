<?php

namespace Uru\DR;

/**
 * Class ProductDescriptions
 * @package Uru\DR
 */
class ProductDescriptions extends BaseDRModel
{
    /**
     * @var string
     */
    private string $language = self::FIELD_NOT_SET;
    /**
     * @var string
     */
    private string $display_name = self::FIELD_NOT_SET;
    /**
     * @var string
     */
    private string $short_description = self::FIELD_NOT_SET;
    /**
     * @var string
     */
    private string $full_description = self::FIELD_NOT_SET;
    /**
     * @var string
     */
    private string $install_note = self::FIELD_NOT_SET;
    /**
     * @var string
     */
    private string $key_template = self::FIELD_NOT_SET;

    /**
     * @param string $language
     */
    public function setLanguage(string $language): void
    {
        $this->language = $language;
    }

    /**
     * @param string $display_name
     */
    public function setDisplayName(string $display_name): void
    {
        $this->display_name = $display_name;
    }

    /**
     * @param string $full_description
     */
    public function setFullDescription(string $full_description): void
    {
        $this->full_description = $full_description;
    }

    /**
     * @param string $install_note
     */
    public function setInstallNote(string $install_note): void
    {
        $this->install_note = $install_note;
    }

    /**
     * @param string $key_template
     */
    public function setKeyTemplate(string $key_template): void
    {
        $this->key_template = $key_template;
    }

    /**
     * @param $short_description
     */
    public function setShortDescription($short_description): void
    {
        $this->short_description = $short_description;
    }


    /**
     * @return array
     */
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
