<?php

namespace Uru\DR;

/**
 * Class Image
 * Only .jpg, .gif or .png are allowed and the image file size must not exceed 50K.
 * We recommend an image size of 100x120 pixels for a large product image displayed on the product page.
 */
class Image extends BaseDRModel
{
    private string $data = self::FIELD_NOT_SET;

    private string $file_name = self::FIELD_NOT_SET;

    public function setData(string $data): void
    {
        $this->data = $data;
    }

    public function setFileName(string $file_name): void
    {
        $this->file_name = $file_name;
    }

    public function jsonSerialize(): array
    {
        $data = [
            'data' => $this->data,
            'file_name' => $this->file_name,
        ];

        return $this->filterUnsetFields($data);
    }
}
