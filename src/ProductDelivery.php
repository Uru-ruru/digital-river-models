<?php


namespace Uru\DR;


/**
 * Class ProductDelivery
 * @package Uru\DR
 */
class ProductDelivery extends BaseDRModel
{
    /**
     * @var DeliveryTypeEnum
     */
    private $delivery_type = self::FIELD_NOT_SET;
    /**
     * @var DownloadLink
     */
    private $download_link_definition = self::FIELD_NOT_SET;
    /**
     * @var LicenseKey
     */
    private $license_key_definition = self::FIELD_NOT_SET;


    /**
     * @param DeliveryTypeEnum $delivery_type
     */
    public function setDeliveryType(DeliveryTypeEnum $delivery_type): void
    {
        $this->delivery_type = $delivery_type;
    }

    /**
     * @param DownloadLink $download_link_definition
     */
    public function setDownloadLinkDefinition(DownloadLink $download_link_definition): void
    {
        $this->download_link_definition = $download_link_definition;
    }

    /**
     * @param LicenseKey $license_key_definition
     */
    public function setLicenseKeyDefinition(LicenseKey $license_key_definition): void
    {
        $this->license_key_definition = $license_key_definition;
    }

    /**
     * @return array
     */
    public function jsonSerialize(): array
    {
        $data = [
            'delivery_type' => $this->delivery_type,
            'download_link_definition' => $this->download_link_definition,
            'license_key_definition' => $this->license_key_definition
        ];

        return $this->filterUnsetFields($data);
    }

}
