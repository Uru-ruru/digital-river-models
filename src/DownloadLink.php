<?php

namespace Uru\DR;

/**
 * Class DownloadLink.
 */
class DownloadLink extends BaseDRModel
{
    private string $file_name = self::FIELD_NOT_SET;

    private string $file_description = self::FIELD_NOT_SET;

    public function setFileName(string $file_name): void
    {
        $this->file_name = $file_name;
    }

    public function setFileDescription(string $file_description): void
    {
        $this->file_description = $file_description;
    }

    public function jsonSerialize(): array
    {
        $data = [
            'file_name' => $this->file_name,
            'file_description' => $this->file_description,
        ];

        return $this->filterUnsetFields($data);
    }
}
