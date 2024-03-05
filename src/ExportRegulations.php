<?php

namespace Uru\DR;

/**
 * Class ExportRegulations.
 */
class ExportRegulations extends BaseDRModel
{
    /**
     * @var ECCNIdEnum
     */
    private $eccn_code = self::FIELD_NOT_SET;

    private string $country_of_origin = self::FIELD_NOT_SET;

    /**
     * @var LicenseExceptionsEnum
     */
    private $license_exception = self::FIELD_NOT_SET;

    private string $ccats = self::FIELD_NOT_SET;

    private string $harmonize_code = self::FIELD_NOT_SET;

    public function setECCN(ECCNIdEnum $eccn_code): void
    {
        $this->eccn_code = $eccn_code;
    }

    /**
     * ISO 3166-1 alpha-2 country code of origin.
     *
     * @param mixed $country_of_origin
     */
    public function setCountryOfOrigin($country_of_origin): void
    {
        $this->country_of_origin = $country_of_origin;
    }

    public function setLicenseException(LicenseExceptionsEnum $license_exception): void
    {
        $this->license_exception = $license_exception;
    }

    /**
     * Optional: Commodity Classification Automated Tracking System Alphanumeric designation indicating the level of control for a product (e.g. G07345).
     *
     * @param mixed $ccats
     */
    public function setCCATS($ccats): void
    {
        $this->ccats = $ccats;
    }

    /**
     * Optional: Numeric designation used for reporting products to customs and other government agencies worldwide (e.g. 060110).
     *
     * @param mixed $harmonize_code
     */
    public function setHarmonizeCode($harmonize_code): void
    {
        $this->harmonize_code = $harmonize_code;
    }

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
