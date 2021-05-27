<?php


namespace Uru\DR;


/**
 * Class LicenseExceptionsEnum
 * @package Uru\DR
 */
class LicenseExceptionsEnum extends BaseDREnum
{
    /**
     * APP    Computer Adjusted Peak Performance
     * APR    Additional Permissive Re-exports
     * AVS    Aircraft and Vessels
     * CIV    Civil End Users
     * ENC    Encryption
     * GBS    Shipments to Group B Countries
     * GFT    Gift Parcels
     * GOV    Government and International Organizations
     * KMI    Key Management Infrastructure
     * LVS    Limited Value Shipments
     * NLR    No License Required
     * RPL    Servicing and Repair
     * TMP    Temporary Imports, Exports, and Re-exports
     * TSR    Restricted Technology and Software
     * TSU    Technology and Software
     * VEU    Validated End User
     */
    const APP = 'APP';
    /**
     *
     */
    const APR = 'APR';
    /**
     *
     */
    const AVS = 'AVS';
    /**
     *
     */
    const CIV = 'CIV';
    /**
     *
     */
    const ENC = 'ENC';
    /**
     *
     */
    const GBS = 'GBS';
    /**
     *
     */
    const GFT = 'GFT';
    /**
     *
     */
    const GOV = 'GOV';
    /**
     *
     */
    const KMI = 'KMI';
    /**
     *
     */
    const LVS = 'LVS';
    /**
     *
     */
    const NLR = 'NLR';
    /**
     *
     */
    const RPL = 'RPL';
    /**
     *
     */
    const TMP = 'TMP';
    /**
     *
     */
    const TSR = 'TSR';
    /**
     *
     */
    const TSU = 'TSU';
    /**
     *
     */
    const VEU = 'VEU';

    /**
     * @inheritDoc
     */
    public function getAllowedValues(): array
    {
        return [
            self::APP,
            self::APR,
            self::AVS,
            self::CIV,
            self::ENC,
            self::GBS,
            self::GFT,
            self::GOV,
            self::KMI,
            self::LVS,
            self::NLR,
            self::RPL,
            self::TMP,
            self::TSR,
            self::TSU,
            self::VEU
        ];
    }

    /**
     * @inheritDoc
     */
    public function jsonSerialize()
    {
        return $this->value;
    }
}
