<?php


namespace Uru\DR;


/**
 * Class ProductTypeEnum
 * @package Uru\DR
 */
class ProductTypeEnum extends BaseDREnum
{
    /**
     * NMP Normal Product
     * PBD Product Bundle
     * PFM Product Family
     * AOP Add-On Product for subscription product
     */
    const NMP = 'NMP';
    /**
     *
     */
    const PBD = 'PBD';
    /**
     *
     */
    const PFM = 'PFM';
    /**
     *
     */
    const AOP = 'AOP';


    /**
     * @inheritDoc
     */
    public function getAllowedValues(): array
    {
        return [
            self::NMP,
            self::PBD,
            self::PFM,
            self::AOP
        ];
    }

    /**
     * @return string
     */
    public function jsonSerialize(): string
    {
        return $this->value;
    }

}
