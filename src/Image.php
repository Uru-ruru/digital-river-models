<?php

namespace Uru\DR;

/**
 * Class Image
 * Only .jpg, .gif or .png are allowed and the image file size must not exceed 50K.
 * We recommend an image size of 100x120 pixels for a large product image displayed on the product page.
 * @package Uru\DR
 */
class Image extends BaseDRModel
{
    /**
     * @var string
     */
    private string $data = self::FIELD_NOT_SET;
    /**
     * @var string
     */
    private string $file_name = self::FIELD_NOT_SET;

    /**
     * @param string $data
     */
    public function setData(string $data)
    {
        $this->data = $data;
    }

    /**
     * @param string $file_name
     */
    public function setFileName(string $file_name)
    {
        $this->file_name = $file_name;
    }

    /**
     * @return array
     */
    public function jsonSerialize(): array
    {
        $data = [
            'data' => $this->data,
            'file_name' => $this->file_name,
        ];

        return $this->filterUnsetFields($data);
    }
}
