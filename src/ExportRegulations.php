<?php

namespace Uru\DR;

/**
 * Class ExportRegulations
 * @package Uru\DR
 */
class ExportRegulations extends BaseDRModel
{
    /**
     * @var ECCNIdEnum
     */
    private $eccn_code = self::FIELD_NOT_SET;
    /**
     * @var string
     */
    private string $country_of_origin = self::FIELD_NOT_SET;
    /**
     * @var LicenseExceptionsEnum
     */
    private $license_exception = self::FIELD_NOT_SET;
    /**
     * @var string
     */
    private string $ccats = self::FIELD_NOT_SET;
    /**
     * @var string
     */
    private string $harmonize_code = self::FIELD_NOT_SET;


    /**
     * @param ECCNIdEnum $eccn_code
     */
    public function setECCN(ECCNIdEnum $eccn_code)
    {
        $this->eccn_code = $eccn_code;
    }

    /**
     * ISO 3166-1 alpha-2 country code of origin
     * @param $country_of_origin
     */
    public function setCountryOfOrigin($country_of_origin)
    {
        $this->country_of_origin = $country_of_origin;
    }

    /**
     * @param LicenseExceptionsEnum $license_exception
     */
    public function setLicenseException(LicenseExceptionsEnum $license_exception)
    {
        $this->license_exception = $license_exception;
    }

    /**
     * Optional: Commodity Classification Automated Tracking System Alphanumeric designation indicating the level of control for a product (e.g. G07345).
     * @param $ccats
     */
    public function setCCATS($ccats)
    {
        $this->ccats = $ccats;
    }

    /**
     * Optional: Numeric designation used for reporting products to customs and other government agencies worldwide (e.g. 060110).
     * @param $harmonize_code
     */
    public function setHarmonizeCode($harmonize_code)
    {
        $this->harmonize_code = $harmonize_code;
    }

    /**
     * @return array
     */
    public function jsonSerialize(): array
    {
        $data = [
            'eccn_code' => $this->eccn_code,
            'country_of_origin' => $this->country_of_origin,
            'license_exception' => $this->license_exception,
            'ccats' => $this->ccats,
            'harmonize_code' => $this->harmonize_code,
        ];

        return $this->filterUnsetFields($data);
    }
}
