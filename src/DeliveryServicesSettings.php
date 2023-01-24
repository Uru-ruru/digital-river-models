<?php

namespace Uru\DR;

/**
 * Class DeliveryServicesSettings
 * @package Uru\DR
 */
class DeliveryServicesSettings extends BaseDRModel
{
    /**
     * @var int
     */
    private $download_protection_product_id = self::FIELD_NOT_SET;
    /**
     * @var int
     */
    private $backup_media_product_id = self::FIELD_NOT_SET;

    /**
     * @param int $download_protection_product_id
     */
    public function setDownloadProtectionProductId(int $download_protection_product_id): void
    {
        $this->download_protection_product_id = $download_protection_product_id;
    }

    /**
     * @param int $backup_media_product_id
     */
    public function setBackupMediaProductId(int $backup_media_product_id): void
    {
        $this->backup_media_product_id = $backup_media_product_id;
    }

    /**
     * @return array
     */
    public function jsonSerialize(): array
    {
        $data = [
            'download_protection_product_id' => $this->download_protection_product_id,
            'backup_media_product_id' => $this->backup_media_product_id
        ];

        return $this->filterUnsetFields($data);
    }
}
