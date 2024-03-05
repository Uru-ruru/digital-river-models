<?php

namespace Uru\DR;

/**
 * Class ProductTypeEnum.
 */
class ProductTypeEnum extends BaseDREnum
{
    /**
     * NMP Normal Product
     * PBD Product Bundle
     * PFM Product Family
     * AOP Add-On Product for subscription product.
     */
    public const NMP = 'NMP';

    public const PBD = 'PBD';

    public const PFM = 'PFM';

    public const AOP = 'AOP';

    public function getAllowedValues(): array
    {
        return [
            self::NMP,
            self::PBD,
            self::PFM,
            self::AOP,
        ];
    }

    public function jsonSerialize(): string
    {
        return $this->value;
    }
}
