<?php


namespace Uru\DR;


/**
 * Class ProductStatusEnum
 * @package Uru\DR
 */
class ProductStatusEnum extends BaseDREnum
{
    /**
     * NSE Normal Selling Product. Active, anyone can buy. can be viewed and distributed through any affiliate in the MyCommerce network
     * HD1 Limited Product. Active, anyone can buy. Viewed and distributed only through your approved affiliates
     * HD2 Restricted Product. Active; only select users can buy (for example, educational version). Viewed and distributed only through your select affiliates
     * DEA Temporarily Deactivated Product
     */
    const NSE = 'NSE';
    /**
     *
     */
    const HD1 = 'HD1';
    /**
     *
     */
    const HD2 = 'HD2';
    /**
     *
     */
    const DEA = 'DEA';

    /**
     * @inheritDoc
     */
    public function getAllowedValues(): array
    {
        return [
            self::NSE,
            self::HD1,
            self::HD2,
            self::DEA
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
