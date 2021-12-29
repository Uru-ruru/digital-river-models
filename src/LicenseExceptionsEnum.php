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
    public const APP = 'APP';
    /**
     *
     */
    public const APR = 'APR';
    /**
     *
     */
    public const AVS = 'AVS';
    /**
     *
     */
    public const CIV = 'CIV';
    /**
     *
     */
    public const ENC = 'ENC';
    /**
     *
     */
    public const GBS = 'GBS';
    /**
     *
     */
    public const GFT = 'GFT';
    /**
     *
     */
    public const GOV = 'GOV';
    /**
     *
     */
    public const KMI = 'KMI';
    /**
     *
     */
    public const LVS = 'LVS';
    /**
     *
     */
    public const NLR = 'NLR';
    /**
     *
     */
    public const RPL = 'RPL';
    /**
     *
     */
    public const TMP = 'TMP';
    /**
     *
     */
    public const TSR = 'TSR';
    /**
     *
     */
    public const TSU = 'TSU';
    /**
     *
     */
    public const VEU = 'VEU';

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
