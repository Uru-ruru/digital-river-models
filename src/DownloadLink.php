<?php


namespace Uru\DR;


/**
 * Class DownloadLink
 * @package Uru\DR
 */
class DownloadLink extends BaseDRModel
{
    /**
     * @var string
     */
    private string $file_name = self::FIELD_NOT_SET;
    /**
     * @var string
     */
    private string $file_description = self::FIELD_NOT_SET;

    /**
     * @param string $file_name
     */
    public function setFileName(string $file_name): void
    {
        $this->file_name = $file_name;
    }

    /**
     * @param string $file_description
     */
    public function setFileDescription(string $file_description): void
    {
        $this->file_description = $file_description;
    }

    /**
     * @return array
     */
    public function jsonSerialize(): array
    {
        $data = [
            'file_name' => $this->file_name,
            'file_description' => $this->file_description
        ];

        return $this->filterUnsetFields($data);
    }
}
