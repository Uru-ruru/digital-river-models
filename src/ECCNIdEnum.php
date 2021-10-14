<?php

namespace Uru\DR;

/**
 * Class ECCNIdEnum
 * @package Uru\DR
 */
class ECCNIdEnum extends BaseDREnum
{
    /**
     * EAR99    Subject to the Export Administration Regulations, but not controlled elsewhere on the Commerce Control List
     * 5D992    "Information Security" "Software" not controlled by 5D002
     * 5D002    Encrypted "Software". Note: Items classified under this ECCN must also be eligible for license exception "ENC" or cannot be resold by DR MyCommerce, Inc.
     */
    public const EAR99 = 'EAR99';
    /**
     *
     */
    public const D992 = '5D992';
    /**
     *
     */
    public const D002 = '5D002';

    /**
     * @inheritDoc
     */
    public function getAllowedValues(): array
    {
        return [
            self::EAR99,
            self::D992,
            self::D002
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
